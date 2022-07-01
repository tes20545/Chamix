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
	$ref_em_id = $_POST["ref_em_id"];

	$date1 = date("Ymd_His");
	$numrand = (mt_rand());
	$images = (isset($_POST['images']) ? $_POST['images'] : '');
	$upload = $_FILES['images']['name'];
	if($upload !=''){
		//Folder get images
		$path="../pmi/";
		$type = strrchr($_FILES['images']['name'], ".");
		$newname =$numrand.$date1.$type;
		$path_copy = $path.$newname;
		$path_link="../pmi/".$newname;

		$result = move_uploaded_file($_FILES['images']['tmp_name'],$path_copy);
$orig_image = imagecreatefromjpeg($path_copy);
$image_info = getimagesize($path_copy); 
$width_orig  = $image_info[0]; // current width as found in image file
$height_orig = $image_info[1]; // current height as found in image file
$width = 1108; // new image width
$height = 1477; // new image height
$destination_image = imagecreatetruecolor($width, $height);
imagecopyresampled($destination_image, $orig_image, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);
// This will just copy the new image over the original at the same filePath.
imagejpeg($destination_image, $path_copy, 100);
		//copy images to folder
	}
//Add to database
$sql = "INSERT INTO tbl_prd
(
type_id,
name,
detail,
price,
images,
ref_em_id
)
VALUES
(
'$type_id',
'$name',
'$detail',
'$price',
'$newname',
'$ref_em_id'
)";

	$result = mysqli_query($condb, $sql) or die ("Error in Query : $sql" . mysqli_error($result));

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