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
//Connection to database
include('connec.php');
//Query data form table member_trl
$query = "SELECT*FROM tbl_prd

 ORDER BY p_id ASC" 
 or die("Error:" . mysqli_error($query));

//echo $query;
//exit;

// get data in query output result
$result = mysqli_query($condb,$query);
// show data query use by table manager data 

echo "<table id='example' class='table table-hover' class='display'>";        
echo "
<thead>
<tr align='center'>
<th>รหัส</th>
<th>รูป</th>
<th>รายละเอียด</th>
<th>ชื่อสินค้า</th>
<th>ราคา</th>
<th>Delete</th>
</tr>
</thead>
";
//$i=1;
 while ($row = mysqli_fetch_array($result)) {
 	echo "<tbody>";
 	echo "<tr class='danger'>";
 	echo "<td>" .$row["p_id"] . "</td>";
 	echo "<td>" ."<img src='../pmi/".$row['images']."'width='100'>"."</td>";
 	echo "<td>" .$row["detail"] . "</td>";
 	echo "<td>" .$row["name"] . "</td>";
 	echo "<td>" .$row["price"] . "</td>";
 	echo "<td><button type='button' class='btn btn-danger btn-xs' data-toggle='modal' data-target='#modaldeleteone'>ลบ</a></td>";

 echo"<div class='modal fade' id='modaldeleteone' tabindex='-1' role='dialog' aria-labelledby='modaldeleteone' aria-hidden='true'>";
 echo"<div class='modal-dialog modal-dialog-centered' role='document'>";
 echo"<div class='modal-content'>";
 echo"<div class='modal-header'>";
 echo" <h5 class='modal-title' id='modaldeleteone'>ยืนยันการลบ</h5>";
 echo" <button type='button' class='close' data-dismiss='modal' aria-label='Close'>";
 echo"<span aria-hidden='true'>&times;</span>";
 echo" </button>";
 echo" </div>";
 echo"<div class='modal-body'>";
 echo"  <center>หากลบข้อมูลนี้แล้วจะหายไปถาวร<br>ยินยอมหรือไม่?</center>";
 echo" </div>";
 echo" <div class='modal-footer'>";
 echo"   <button type='button' class='btn btn-secondary' data-dismiss='modal'>ปิด</button>";
 echo"<a href='prd_del_db.php?ID=$row[0]' type='button' class='btn btn-danger'>ลบ</a>";
 echo"   </div>";
 echo"</div>";
 echo"</div>";
 echo"</div> ";
 echo "</tr>";
 $i++;}
 echo "</table>";
 echo "</div";
 //close Connection
 mysqli_close($condb);                   
 ?>
</html>
 <script type="text/javascript"  language="javascript">
 $(document).ready(function() {
    $('#example').DataTable();
} );
</script>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   