<meta charset="utf-8">
<?php
//connec
include('connec.php');
//echo '<pre>';
	//print_r($_POST);
	//echo '</pre>';

	$name = $_POST["em_name"];
	$address = $_POST["em_address"];
	$password = $_POST["em_password"];
	$designation = $_POST["em_designation"];
	$email = $_POST["em_email"];
	$phone = $_POST["em_phone"];

	$date1 = date("Ymd_His");
	$numrand = (mt_rand());
	$images = (isset($_POST['em_images']) ? $_POST['em_images'] : '');
	$upload = $_FILES['em_images']['name'];
	if($upload !=''){
		//Folder get images
		$path="../mi/";
		$type = strrchr($_FILES['em_images']['name'], ".");
		$newname =$numrand.$date1.$type;
		$path_copy = $path.$newname;
		$path_link="../mi/".$newname;
		//copy images to folder
		move_uploaded_file($_FILES['em_images']['tmp_name'],$path_copy);
	}

//Check doubly data

	$check = "
	SELECT em_name, em_email
	FROM tbl_employee
	WHERE em_name = '$name'
	OR em_email='$email'
	";
	$result = mysqli_query($condb, $check) or die(mysqli_error($result));
	$num = mysqli_num_rows($result);


	if($num > 0)
	{
		echo "<script>";
		echo "alert('ผู้ใช้หรืออีเมล์ซ้ำ ,โปรดลองอีกครั้ง');";
		echo "window.history.back();";
		echo "</script>";
	}else{


//Add to database
$sql = "INSERT INTO tbl_employee
(
	em_name,
	em_address,
	em_password,
	em_designation,
	em_email,
	em_phone,
	em_images
)
VALUES
(
'$name',
'$address',
'$password',
'$designation',
'$email',
'$phone',
'$newname'
)";

	$result = mysqli_query($condb, $sql) or die ("Error in Query : $sql" . $mysqli->error);

	//echo '<pre>';
	//echo $sql;
	//echo '</pre>';
	//exit;
	}//close check doubly
	//Disconnection Database
	mysqli_close($condb);

	if($result){
		echo "<script type='text/javascript'>";
		echo "window.location = 'member2.php';";
		echo "</script>";
	}else{
		echo "<script type='text/javascript'>";
		echo "alert('ผิดพลาด!');";
		echo "window.location = 'member2.php';";
		echo "</script>";

	}
?>