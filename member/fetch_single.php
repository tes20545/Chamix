<?php

//fetch_single.php

include('database_connection.php');

if(isset($_GET["id"]))
{
 $query = "SELECT * FROM tbl_employee WHERE em_id = '".$_GET["id"]."'";

 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 $output = '<div class="row">';
 foreach($result as $row)
 {
  $images = '';
  if($row["em_images"] != '')
  {
   $images = '<img src="../mi/'.$row["em_images"].'" class="img-responsive img-thumbnail" />';
  }
  else
  {
   $images = '<img src="https://www.gravatar.com/avatar/38ed5967302ec60ff4417826c24feef6?s=80&d=mm&r=g" class="img-responsive img-thumbnail" />';
  }
  $output .= '
  <div class="col-md-3">
   <br />
   '.$images.'
  </div>
  <div class="col-md-9">
   <br />
   <p><label><b><font color="black">Name :&nbsp;</label>'.$row["em_name"].'</font></b></p>
   <p><label><b><font color="black">Address :&nbsp;</label>'.$row["em_address"].'</font></b></p>
   <p><label><b><font color="black">Password :&nbsp;</label>'.$row["em_password"].'</font></b></p>
   <p><label><b><font color="black">Email :&nbsp;</label>'.$row["em_email"].'</font></b></p>
   <p><label><b><font color="black">Phone :&nbsp;</label>'.$row["em_phone"].'</font></b></p>
   <p><label><b><font color="black">Designation :&nbsp;</label>'.$row["em_designation"].'</font></b></p>
   <p><label><b><font color="black">Date :&nbsp;</label>'.date('d/m/Y',strtotime($row["em_date"])).'</font></b></p>
  </div>
  </div><br />
  ';
 }
 echo $output;
}

?>
