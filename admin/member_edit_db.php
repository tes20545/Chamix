<meta charset="utf-8">
<?php
//connec
include('connec.php');
	//echo '<pre>';
	//print_r($_POST);
	//echo '</pre>';

	$em_name = $_POST["em_name"];
	$em_designation = $_POST["em_designation"];
	$em_address = $_POST["em_address"];
	$em_phone = $_POST["em_phone"];
	$em_email = $_POST["em_email"];
	$images2 = $_POST["images2"];
	$em_id = $_POST["em_id"];


	$date1 = date("Ymd_His");
	$numrand = (mt_rand());
	$images2 = (isset($_POST['em_images']) ? $_POST['em_images'] : '');
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
	}else{
		$newname = $images2;
	}



//Update to database
$sql = "UPDATE tbl_employee SET

em_name='$em_name',
em_designation='$em_designation',
em_address='$em_address',
em_phone='$em_phone',
em_email='$em_email',
em_images='$newname'
WHERE em_id = $em_id
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
		echo "window.location = 'member2.php';";
		echo "</script>";
	}else{
		echo "<script type='text/javascript'>";
		echo "alert('ผิดพลาด!');";
		echo "window.location = 'member2.php';";
		echo "</script>";

	}
?>