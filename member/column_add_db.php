
<meta charset="utf-8">
<?php
//connec
include('connec.php');
// echo '<pre>';
// 	print_r($_POST);
// 	echo '</pre>';


	$name = $_POST["c_name"];
    $detail = $_POST["c_detail"];
    $add = $_POST["c_add"];


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

		$result = move_uploaded_file($_FILES['c_img']['tmp_name'],$path_copy);
		//copy images to folder
	}
//Add to database
$sql = "INSERT INTO tbl_column
(
c_name,
c_detail,
c_img,
c_add
)
VALUES
(
'$name',
'$detail',
'$newname',
'$add'
)";

	$result = mysqli_query($condb, $sql) or die ("Error in Query : $sql" . mysqli_error($result));

//close check doubly
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