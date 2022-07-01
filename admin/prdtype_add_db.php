<meta charset="utf-8">
<?php
include('connec.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
	//สร้างตัวแปรเก็บค่าที่รับมาจากฟอร์ม
	$t_name = $_POST["t_name"];

	//Check doubly data

	$check = "
	SELECT t_name
	FROM prd_type_trl
	WHERE t_name = '$t_name'
	";
	$result1 = mysqli_query($condb, $check) or die(mysqli_error());
	$num = mysqli_num_rows($result1);


	if($num > 0)
	{
		echo "<script>";
		echo "alert('ไม่สามารถเพิ่มประเภทสินค้าได้ , โปรดลองอีกครั้ง');";
		echo "window.history.back();";
		echo "</script>";
	}else{

	//เพิ่มเข้าไปในฐานข้อมูล
	$sql = "INSERT INTO prd_type_trl
	(t_name)
			 VALUES
			 ('$t_name')";

	$result = mysqli_query($condb, $sql) or die ("Error in query: $sql " . mysqli_error());
	
	}
	//ปิดการเชื่อมต่อ database
	mysqli_close($condb);
	//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('เพิ่มประเภทสินค้าสำเร็จ!');";
	echo "window.location = 'prdtype.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('ผิดพลาด!');";
	echo "window.location = 'prdtype.php'; ";
	echo "</script>";
}
?>