
<html>
 <head>
  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" />
  <script src="https://www.jqueryscript.net/demo/Dialog-Modal-Dialogify/dist/dialogify.min.js"></script>
 </head>
<?php
include('connec.php');
$ID = $_GET['ID'];
$sql = "SELECT * FROM tbl_column WHERE c_id=$ID";
$result = mysqli_query($condb, $sql) or die ("Error in query : $sql" . mysqli_error($result));
$row = mysqli_fetch_array($result);
extract($row);

?>
<div class="container">
<form action="column_edit_db.php" method="post" class="form-horizontal" enctype="multipart/form-data">
	<div class="form-group">
			<div class="row">
		<div class="col-sm-2 control-label">
		หัวข้อ:
		</div>
		<div class="col-sm-4">
			<input type="text" name="c_name" required class="form-control" autocomplete="off"  value="<?php echo $row['c_name'];?>">
		</div>
	</div>
			</div>
	<div class="form-group">
				<div class="row">
		<div class="col-sm-2 control-label">
			รายละเอียด :
		</div>
		<div class="col-sm-9">
		<textarea name="c_detail" placeholder="ที่อยู่" required class="form-control" require id="editor"><?php echo $row['c_detail'];?></textarea>
		</div>
	</div>
				</div>
	<br>
	<div class="form-group">
				<div class="row">
		<div class="col-sm-2 control-label">
			รูปภาพ :
		</div>
		<div class="col-sm-4">
			รูปภาพเก่า
				<br>
				<img src="images/column/<?php echo $row ['c_img'];?>" width="200px">
				<br>
				<br>
				รูปภาพใหม่
				<br>
			<input type="file" name="c_img" class="form-control" accept="img/*">
		</div>
	</div>
				</div>
	<div class="form-group">
				<div class="row">
	<div class="col-sm-6 control-label">
		<input type="hidden" name="images2" value="<?php echo $row ['c_img'];?>">
		<input type="hidden" name="c_id" value="<?php echo $row ['c_id'];?>">
<div class="container">
	<div class="col-sm-5 control-label">
<button type="submit" class="btn btn-success btn-block">บันทึก</button>
	</div>
		</div>
	</div>
</div>
		</div>
	</div>
		</form>
</div>
</html>
