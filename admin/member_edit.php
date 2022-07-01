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
$sql = "SELECT * FROM tbl_employee WHERE em_id=$ID";
$result = mysqli_query($condb, $sql) or die ("Error in query : $sql" . mysqli_error($result));
$row = mysqli_fetch_array($result);
extract($row);

?>
<div class="container">
<form action="member_edit_db.php" method="post" class="form-horizontal" enctype="multipart/form-data">
	<div class="form-group">
			<div class="row">
		<div class="col-sm-2 control-label">
		ชือ นามสกุล :
		</div>
		<div class="col-sm-4">
			<input type="text" name="em_name" required class="form-control" autocomplete="off"  value="<?php echo $row['em_name'];?>">
		</div>
	</div>
			</div>
	<div class="form-group">
				<div class="row">
		<div class="col-sm-2 control-label">
			สถานะ :
		</div>
		<div class="col-sm-2">
			<select name="em_designation" class="form-control" required >
				<option value="<?php echo $row['em_designation'];?>"><?php echo $row['em_designation'];?></option>
				<option value="Admin">Admin</option>
				<option value="Engineering">Engineering</option>
				<option value="User">User</option>
			</select>
		</div>
	</div>
				</div>
	<div class="form-group">
				<div class="row">
		<div class="col-sm-2 control-label">
			ที่อยู่ :
		</div>
		<div class="col-sm-4">
		<textarea name="em_address" placeholder="ที่อยู่" required class="form-control" require id="editor"><?php echo $row['em_address'];?></textarea>
		</div>
	</div>
				</div>
	<div class="form-group">
				<div class="row">
		<div class="col-sm-2 control-label">
			เบอร์โทรศัพท์ :
		</div>
		<div class="col-sm-4">
			<input type="number" name="em_phone" placeholder="เบอร์โทรศัพท์" required class="form-control" value="<?php echo $row['em_phone'];?>">
		</div>
	</div>
				</div>
	<div class="form-group">
				<div class="row">
		<div class="col-sm-2 control-label">
			อีเมลล์ :
		</div>
		<div class="col-sm-4">
			<input type="email" name="em_email" placeholder="ที่อยู่อีเมล" required class="form-control" autocomplete="off" value="<?php echo $row['em_email'];?>">
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
				<img src="../mi/<?php echo $row ['em_images'];?>" width="200px">
				<br>
				<br>
				รูปภาพใหม่
				<br>
			<input type="file" name="em_images" class="form-control" accept="img/*">
		</div>
	</div>
				</div>
	<div class="form-group">
				<div class="row">
	<div class="col-sm-6 control-label">
		<input type="hidden" name="images2" value="<?php echo $row ['em_images'];?>">
		<input type="hidden" name="em_id" value="<?php echo $row ['em_id'];?>">
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