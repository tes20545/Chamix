<?php

//fetch_single.php

include('database_connection.php');

if(isset($_GET["id"]))
{
 $query = "SELECT * FROM tbl_prd WHERE p_id = '".$_GET["id"]."'";

 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 $output = '<div class="row">';
 foreach($result as $row)
 {
  $images = '';
  if($row["images"] != '')
  {
   $images = '<img src="../pmi/'.$row["images"].'" class="img-responsive img-thumbnail" />';
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
   <p><label><b><font color="black">Name :&nbsp;</label>'.$row["name"].'</font></b></p>
   <p><label><b><font color="black">Detail :&nbsp;</label>'.$row["detail"].'</font></b></p>
   <p><label><b><font color="black">Price :&nbsp;</label>'.$row["price"].'</font></b></p>
   <p><label><b><font color="black">Add by :&nbsp;</label>'.$row["ref_em_id"].'</font></b></p>
   <p><label><b><font color="black">Type :&nbsp;</label>'.$row["type_id"].'</font></b></p>
   <p><label><b><font color="black">Date :&nbsp;</label>'.date('d/m/Y',strtotime($row["datesave"])).'</font></b></p>
  </div>
  </div><br />
  ';
 }
 echo $output;
}

?>
