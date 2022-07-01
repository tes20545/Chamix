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
$t_id = $_GET['ID'];
$sql = "SELECT * FROM prd_type_trl WHERE t_id=$t_id";
$result = mysqli_query($condb, $sql) or die ("Error in query : $sql" . mysqli_error($result));
$row = mysqli_fetch_array($result);
extract($row);

?>
   <br>
    <div class="container">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-5">
            <div align="left"><h3><font color="white">EDIT TYPE PRODUCT</h3></fon></div>
<br>
<form action="prdtype_edit_db.php" method="post" class="form-horizontal" enctype="multipart/form-data">
    <div class="form-group">
            <div class="row">
        <div class="col-sm-4 control-label">
            ประเภทสินค้า :
        </div>
        <div class="col-sm-5 control-label">
            <input type="text" name="t_name" placeholder="ประเภทสินค้า" required class="form-control" autocomplete="off" value="<?php echo $row['t_name'];?>">
        </div>
    </div>
            </div>
    <div class="form-group">
                <div class="row">
    <div class="col-sm-9 control-label">
        <input type="hidden" name="t_id" value="<?php echo $row['t_id'];?>">
<button type="submit" class="btn btn-success btn-block" style="width: 100%">Add</button>
    </div>
                </div>
</form>
        </div>
    </form>
</div>
    </div>
</div>
      