<meta charset="utf-8">
<?php
include('connec.php');
?>
<?php
$query = "SELECT * FROM prd_type_trl" or die ("Error:" . mysqli_error($query));
$result = mysqli_query($condb,$query);

?>
<div class="container">
<form action="prd_add_db.php" method="post" class="form-horizontal" enctype="multipart/form-data">
    <div class="form-group">
                <div class="row">
        <div class="col-sm control-label">
            ประเภทสินค้า :
        </div>
        <div class="col-sm-6">
            <select name="type_id" class="form-control" required>
                <option value="">Choose</option>
                <?php foreach ($result as $results) {?>
                <option value="<?php echo $results["t_id"];?>"><?php echo $results["t_name"];?></option>
            <?php } ?>
            </select>
        </div>
    </div>
                </div>
    <div class="form-group">
                <div class="row">
        <div class="col-sm control-label">
            ชื่อ :
        </div>
        <div class="col-sm-6">
            <input type="text" name="name" placeholder="ชื่อสินค้า" required class="form-control">
        </div>
    </div>
                </div>
    <div class="form-group">
                <div class="row">
        <div class="col-sm control-label">
            รายละเอียด :
        </div>
        <div class="col-sm-6">
            <textarea name="detail" placeholder="รายละเอียดสินค้า"  class="form-control" ></textarea>
        </div>
    </div>
                </div>       
    <div class="form-group">
                <div class="row">
        <div class="col-sm control-label">
            ราคา :
        </div>
        <div class="col-sm-6">
            <input type="number" name="price" placeholder="ราคา" required class="form-control">
        </div>
    </div>
                </div>
    <div class="form-group">
                <div class="row">
        <div class="col control-label">
            รูปภาพ
        </div>
        <div class="col-sm-6">
            <input type="file" name="images" class="form-control" accept="images/*">
        </div>
    </div>
                </div>
    <div class="form-group">
    <div class="col-sm"></div>
    <div class="col-md-6">
        <input type="hidden" name="ref_em_id" value="<?php echo $em_id;?>">
<button type="submit" class="btn btn-success" style="width: 100%">Add</button>
    </div>
                </div>
</form>
        </div>
    </form>
</div>
    </div>
</div>