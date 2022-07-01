<meta charset="utf-8">
<?php
//connec
include('connec.php');
// echo '<pre>';
// 	print_r($_POST);
// 	echo '</pre>';

	$type_id = $_POST["type_id"];
	$name = $_POST["name"];
	$detail = $_POST["detail"];
	$price = $_POST["price"];
	$images2 = $_POST["images2"];
	$p_id = $_POST["p_id"];

	$date1 = date("Ymd_His");
	$numrand = (mt_rand());
	$img = (isset($_POST['images']) ? $_POST['images'] : '');
	$upload = $_FILES['images']['name'];
	if($upload !=''){
		//Folder get images
		$path="../pmi/";
		$type = strrchr($_FILES['images']['name'], ".");
		$newname =$numrand.$date1.$type;
		$path_copy = $path.$newname;
		$path_link="../pmi/".$newname;
		//copy images to folder
		move_uploaded_file($_FILES['images']['tmname'],$path_copy);
	}else{
		$newname = $images2;
	}
//Add to database
$sql = "UPDATE tbl_prd SET

type_id='$type_id',
name='$name',
detail='$detail',
price='$price',
images='$newname'
WHERE p_id = $p_id
";

	$result = mysqli_query($condb, $sql) or die ("Error in Query : $sql" . mysqli_error($result));

	// echo '<pre>';
	// echo $sql;
	// echo '</pre>';
	// exit;
//close check doubly
	//Disconnection Database
	mysqli_close($condb);

	if($result){
		echo "<script type='text/javascript'>";
		echo "window.location = 'prd.php';";
		echo "</script>";
	}else{
		echo "<script type='text/javascript'>";
		echo "alert('ผิดพลาด!');";
		echo "window.location = 'prd.php';";
		echo "</script>";

	}
?>