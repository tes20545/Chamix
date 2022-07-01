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
   <p><label><b><font color="black">ชื่อ :&nbsp;</label>'.$row["em_name"].'</font></b></p>
   <p><label><b><font color="black">ที่อยู่ :&nbsp;</label>'.$row["em_address"].'</font></b></p>
   <p><label><b><font color="black">รหัสผ่าน :&nbsp;</label>'.$row["em_password"].'</font></b></p>
   <p><label><b><font color="black">อีเมลล์ :&nbsp;</label>'.$row["em_email"].'</font></b></p>
   <p><label><b><font color="black">เบอร์โทรศัพท์ :&nbsp;</label>'.$row["em_phone"].'</font></b></p>
   <p><label><b><font color="black">สาขาที่สังกัด :&nbsp;</label>'.$row["em_branch"].'</font></b></p>
   <p><label><b><font color="black">สถานะ :&nbsp;</label>'.$row["em_designation"].'</font></b></p>
   <p><label><b><font color="black">วันที่สร้าง :&nbsp;</label>'.date('d/m/Y',strtotime($row["em_date"])).'</font></b></p>
  </div>
  </div><br />
  ';
 }
 echo $output;
}

?>
