
<meta charset="utf-8">
<?php
//connec
include('connec.php');
	//echo '<pre>';
	//print_r($_POST);
	//echo '</pre>';

	$c_name = $_POST["c_name"];
	$c_detail = $_POST["c_detail"];
	$images2 = $_POST["images2"];
	$c_id = $_POST["c_id"];


	$date1 = date("Ymd_His");
	$numrand = (mt_rand());
	$images = (isset($_POST['c_img']) ? $_POST['c_img'] : '');
	$upload = $_FILES['c_img']['name'];
	if($upload !=''){
		//Folder get images
		$path="images/column/";
		$type = strrchr($_FILES['c_img']['name'], ".");
		$newname =$numrand.$date1.$type;
		$path_copy = $path.$newname;
		$path_link="images/column/".$newname;
		//copy images to folder
		move_uploaded_file($_FILES['c_img']['tmp_name'],$path_copy);
	}else{
		$newname = $images2;
	}



//Update to database
$sql = "UPDATE tbl_column SET

c_name='$c_name',
c_detail='$c_detail',
c_img='$newname'
WHERE c_id = $c_id
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
		echo "window.location = 'column.php';";
		echo "</script>";
	}else{
		echo "<script type='text/javascript'>";
		echo "alert('ผิดพลาด!');";
		echo "window.location = 'column.php';";
		echo "</script>";

	}
?>
