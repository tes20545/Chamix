
<div class="container">
	<div class="row">
		<div class="col-md-12">
<form action="column_add_db.php" method="post" class="form-horizontal" enctype="multipart/form-data">
	<div class="form-group">
			<div class="row">
			<div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text">หัวข้อ&emsp;&emsp;</span>
  </div>
			<input type="text" name="c_name" required class="form-control" autocomplete="off">
		</div>
	</div>
			</div>
	<div class="form-group">
			<div class="row">
			<div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text">รายละเอียด&emsp;&nbsp;&nbsp;</span>
  </div>
  <textarea class="form-control" aria-label="With textarea" name="c_detail" required id="editor"></textarea>
		</div>
	</div>
            </div>
            <br>
            <h5>ต้องการให้บทความไปแสดงหน้าแรกหรือไม่?</h5>
            <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="c_add" id="c_add" value="yes">
  <label class="form-check-label" for="inlineRadio1">ใช่</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="c_add" id="c_add" value="no">
  <label class="form-check-label" for="inlineRadio2">ไม่</label>
</div>
<br>
	<div class="form-group"><br>
				<div class="row">
				<div class="input-group">
				<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroupFileAddon01">อัพโหลดรูป&emsp;</span>
  </div>
  <div class="custom-file">
    <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="c_img" accept="img/*"> 
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
