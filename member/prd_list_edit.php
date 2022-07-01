<meta charset="utf-8"><html>
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
$query = "
 SELECT p.*,m.em_name,t.t_name
 FROM tbl_prd as p
 LEFT JOIN tbl_employee as m ON p.ref_em_id=m.em_id
 LEFT JOIN prd_type_trl as t ON p.type_id=t.t_id

 ORDER BY p.p_id ASC" 
 or die("Error:" . mysqli_error($query));

//echo $query;
//exit;

// get data in query output result
$result = mysqli_query($condb,$query);
// show data query use by table manager data 

echo "<table id='example' class='table table-striped table-bordered'>";        
echo "
<thead>
<tr align='center'>
<th>รหัส</th>
<th>รูป</th>
<th>ประเภทสินค้า</th>
<th>รายละเอียด</th>
<th>ชื่อสินค้า</th>
<th>ราคา</th>
<th>เพิ่มโดย</th>
<th>Edit</th>
</tr>
</thead>
";
//$i=1;
 while ($row = mysqli_fetch_array($result)) {
 	echo "<tbody>";
 	echo "<tr class='danger'>";
 	echo "<td>" .$row["p_id"] . "</td>";
 	echo "<td>" ."<img src='../pmi/".$row['images']."'width='100'>"."</td>";
 	echo "<td>" .$row["t_name"] . "</td>";
 	echo "<td>" .$row["detail"] . "</td>";
 	echo "<td>" .$row["name"] . "</td>";
 	echo "<td>" .$row["price"] . "</td>";
 	echo "<td>" .$row["em_name"] . "</td>";
 	//Edit data
 	echo "<td><a href='prd.php?ID=$row[0]&act=edit2' class='btn btn-success btn-xs' >แก้ไข</a>
</td>";
    echo "</tr>";
    echo "</tbody>";
 $i++;}
 echo "</table>";
 //close Connection
 mysqli_close($condb);
 ?>  
 </html>
<script type="text/javascript"  language="javascript">
 $(document).ready(function() {
    $('#example').DataTable();
} );
</script>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            