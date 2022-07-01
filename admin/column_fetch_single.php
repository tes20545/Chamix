
<?php

//fetch_single.php

include('database_connection.php');

if(isset($_GET["id"]))
{
 $query = "SELECT * FROM tbl_column WHERE c_id = '".$_GET["id"]."'";

 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 $output = '<div class="row">';
 foreach($result as $row)
 {
  $images = '';
  if($row["c_img"] != '')
  {
   $images = '<img src="images/column/'.$row["c_img"].'" class="img-responsive img-thumbnail" />';
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
   <p><label><b><font color="black">Name :&nbsp;</label>'.$row["c_name"].'</font></b></p>
   <p><label><b><font color="black">Address :&nbsp;</label>'.$row["c_detail"].'</font></b></p>
   <p><label><b><font color="black">Date :&nbsp;</label>'.date('d/m/Y',strtotime($row["c_date"])).'</font></b></p>
  </div>
  </div><br />
  ';
 }
 echo $output;
}

?>
