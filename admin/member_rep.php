<?php
include('connec.php');
$ID = $_GET['ID'];
$sql = "SELECT * FROM member_trl WHERE m_id=$ID";
$result = mysqli_query($condb, $sql) or die ("Error in query : $sql" . mysqli_error($result));
$row = mysqli_fetch_array($result);
extract($row);

?>
<div align="center"><h1>RESET PASSWORD</h1></div>
<br>
<form action="member_rep_db.php" method="post" class="form-horizontal" enctype="multipart/form-data">
	<div class="form-group">
			<div class="row">
		<div class="col-sm-4 control-label">
			ชื่อผู้ใช้ :
		</div>
		<div class="col-sm-4">
			<input type="text" name="m_user" required class="form-control" autocomplete="off" value="<?php echo $row ['m_user'];?>" disabled>
		</div>
	</div>
			</div>
	<div class="form-group">
			<div class="row">
		<div class="col-sm-4 control-label">
			รหัสผ่าน :
		</div>
		<div class="col-sm-4">
			<input type="Password" name="m_pass" placeholder="รหัสผ่าน" required class="form-control">
		</div>
	</div>
			</div>
	<div class="form-group">
				<div class="row">
					<div class="col-sm-2"></div>
	<div class="col-sm-6 control-label">
		<input type="hidden" name="m_id" value="<?php echo $row ['m_id'];?>">
<button type="submit" class="btn btn-success btn-block">รีเซ็ตรหัสผ่าน</button>
	</div>
				</div>
</form>