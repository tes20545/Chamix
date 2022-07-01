<meta charset="utf-8">
<?php
//connec
include('connec.php');
	//echo '<pre>';
	//print_r($_POST);
	//echo '</pre>';


	$id = $_POST["id"];
	$password = $_POST["password"];


//Update to database
$sql = "UPDATE tbl_employee SET
password='$password'
WHERE id = $id
";

	$result = mysqli_query($condb, $sql) or die ("Error in Query : $sql" . mysqli_error($result));

	//echo '<pre>';
	//echo $sql;
	//echo '</pre>';
	//exit;
	//Disconnection Database
	mysqli_close($condb);

	if($result){
		echo "<script type='text/javascript'>";
		echo "alert('เปลี่ยนพาสเวิร์ดเรียบร้อย!');";
		echo "window.location = 'index.php';";
		echo "</script>";
	}else{
		echo "<script type='text/javascript'>";
		echo "alert('ผิดพลาด!');";
		echo "window.location = 'member.php';";
		echo "</script>";

	}
?>