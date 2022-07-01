<div class="container">
	<div class="row">
		<div class="col-md-12">
<form action="member_add_db.php" method="post" class="form-horizontal" enctype="multipart/form-data">
	<div class="form-group">
			<div class="row">
			<div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text">ชือ นามสกุล&emsp;&emsp;</span>
  </div>
			<input type="text" name="em_name" required class="form-control" autocomplete="off">
		</div>
	</div>
			</div>
	<div class="form-group">
			<div class="row">
			<div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text">รหัสผ่าน&emsp;&nbsp;&nbsp;</span>
  </div>
			<input type="Password" name="em_password" required class="form-control">
		</div>
	</div>
			</div>
	<div class="form-group">
				<div class="row">
				<div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">สถานะ&emsp;&emsp;&nbsp;</label>
  </div>
			<select name="em_designation" class="form-control" id="inputGroupSelect01" required>
				<option value="">Choose</option>
				<option value="Admin">Admin</option>
				<option value="Organize">Organize</option>
				<option value="User">User</option>
			</select>
		</div>
	</div>
				</div>
	<div class="form-group">
				<div class="row">
				<div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text">เบอร์โทรศัพท์</span>
  </div>
			<input type="number" name="em_phone" required class="form-control">
		</div>
	</div>
				</div>
	<div class="form-group">
				<div class="row">
				<div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text">อีเมลล์&emsp;&emsp;&nbsp;&nbsp;</span>
  </div>
			<input type="email" name="em_email"  required class="form-control" autocomplete="off">
		</div>
	</div>
	<br>
	<div class="form-group">
				<div class="row">
				<div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text">สาขา&emsp;&emsp;&nbsp;&nbsp;</span>
  </div>
			<input type="text" name="em_branch"  required class="form-control" autocomplete="off">
		</div>
	</div>
	<br>
	<div class="form-group">
				<div class="row">
				<div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text">ที่อยู่</span>
  </div>
  <textarea class="form-control" aria-label="With textarea" name="em_address" required id="editor"></textarea>
		</div>
	</div>
				</div>
	<div class="form-group">
				<div class="row">
				<div class="input-group">
				<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroupFileAddon01">อัพโหลดรูป&emsp;</span>
  </div>
  <div class="custom-file">
    <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="em_images" accept="img/*"> 
    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
  </div>
</div>
		</div>
	</div>
				</div>
			</div>
		
	</div>
</div>
<div class="container">
	<div class="col-sm-12 control-label">
<button type="submit" class="btn btn-success btn-block">เพิ่ม</button>
	</div>
</div></form>