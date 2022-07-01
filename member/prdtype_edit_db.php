<meta charset="utf-8">
<?php
include('connec.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
	//สร้างตัวแปรเก็บค่าที่รับมาจากฟอร์ม
	$t_name = $_POST["t_name"];
	$t_id = $_POST["t_id"];

	//เพิ่มเข้าไปในฐานข้อมูล
	$sql = "
	UPDATE prd_type_trl SET
	t_name='$t_name'
	WHERE t_id=$t_id
	";

	$result = mysqli_query($condb, $sql) or die ("Error in query: $sql " . mysqli_error());
	
	//ปิดการเชื่อมต่อ database
	mysqli_close($condb);
	//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('แก้ไขสำเร็จ');";
	echo "window.location = 'prdtype.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('ผิดพลาด');";
	echo "window.location = 'prdtype.php'; ";
	echo "</script>";
}
?>