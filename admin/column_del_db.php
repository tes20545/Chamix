<meta charset="utf-8">
<?php
//connec
include('connec.php');
	//echo '<pre>';
	//print_r($_GET);
	//echo '</pre>';

	
	
	$ID = $_GET["ID"];

//Update to database
$sql = "DELETE FROM tbl_column WHERE c_id = $ID";

	$result = mysqli_query($condb, $sql) or die ("Error in Query : $sql" . mysqli_error($result));

	//echo '<pre>';
	//echo $sql;
	//echo '</pre>';
	//exit;
	//Disconnection Database
	mysqli_close($condb);

	if($result){
		echo "<script type='text/javascript'>";
		//echo "alert('Update Success!');";
		echo "window.location = 'column.php';";
		echo "</script>";
	}else{
		echo "<script type='text/javascript'>";
		echo "alert('ผิดพลาด!');";
		echo "window.location = 'column.php';";
		echo "</script>";

	}
?>