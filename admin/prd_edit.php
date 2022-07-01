 <meta charset="utf-8">
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
$sql = "SELECT * 
FROM tbl_prd as p
INNER JOIN prd_type_trl as t ON p.type_id=t.t_id
WHERE p.p_id=$ID";
$result = mysqli_query($condb, $sql) or die ("Error in query : $sql" . mysqli_error($result));
$row = mysqli_fetch_array($result);
extract($row);
$type_id = $row ['t_id'];

// echo $sql;

$query = "SELECT * FROM prd_type_trl WHERE t_id!=$type_id" or die ("Error:" .mysqli_error($query));
$result2 = mysqli_query($condb,$query);
?>
<div class="container">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-7">
            <div align="left"><h1>EDIT PRODUCT</h1></div>
<br>
<form action="prd_edit_db.php" method="post" class="form-horizontal" enctype="multipart/form-data">
    <div class="form-group">
                <div class="row">
        <div class="col-sm-3 control-label">
            ประเภทสินค้า :
        </div>
        <div class="col-sm-4">
            <select name="type_id" class="form-control">
                <option value="<?php echo $row["type_id"];?>"><?php echo $row["t_name"];?></option>
                <option value="">Choose</option>
                <?php foreach ($result2 as $results) {?>
                <option value="<?php echo $row["t_id"];?>"><?php echo $row["t_name"];?></option>
            <?php } ?>
            </select>
        </div>
    </div>
                </div>
    <div class="form-group">
                <div class="row">
        <div class="col-sm-3 control-label">
            ชื่อ :
        </div>
        <div class="col-sm-4">
            <input type="text" name="name" placeholder="ชื่อสินค้า"  class="form-control" value="<?php echo $row['name'];?>">
        </div>
    </div>
                </div>
    <div class="form-group">
                <div class="row">
        <div class="col-sm-3 control-label">
            รายละเอียด :
        </div>
        <div class="col-sm-4">
            <textarea name="detail" placeholder="รายละเอียดสินค้า" value="<?php echo $row['detail'];?>" class="form-control" ><?php echo $row['detail'];?></textarea>
        </div>
    </div>
                </div>           
    <div class="form-group">
                <div class="row">
        <div class="col-sm-3 control-label">
            ราคา :
        </div>
        <div class="col-sm-4">
            <input type="number" name="price" placeholder="ราคา" value="<?php echo $row['price'];?>" class="form-control">
        </div>
    </div>
                </div>      
    <div class="form-group">
                <div class="row">
        <div class="col-sm-3 control-label">
            รูป
        </div>
        <div class="col-sm-4">
            รูปเก่า
                <br>
                <img src="../pmi/<?php echo $row ['images'];?>" width="200px">
                <br>
                <br>
                รูปใหม่
                <br>
            <input type="file" name="images" class="form-control" accept="img/*">
        </div>
    </div>
</div>

    <div class="form-group">
    <div class="col-sm-6"></div>
    <div class="col-sm-9">
        <input type="hidden" name="images2" value="<?php echo $row ['images'];?>">
        <input type="hidden" name="p_id" value="<?php echo $row ['p_id'];?>">
<button type="submit" class="btn btn-success" style="width: 100%">บันทึก</button>
    </div>
                </div>
</form>
        </div>
    </form>
</div>
    </div>
</div>
 </html>