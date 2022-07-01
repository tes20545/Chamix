<meta charset="utf-8">
<?php
//Connection to database
include('connec.php');
//Query data form table member_trl
$query = "
 SELECT p.*,m.m_name,t.t_name
 FROM prd_trl as p
 LEFT JOIN member_trl as m ON p.ref_m_id=m.m_id
 LEFT JOIN prd_type_trl as t ON p.ref_t_id=t.t_id

 ORDER BY p.p_id ASC" 
 or die("Error:" . mysqli_error($query));

//echo $query;
//exit;

// get data in query output result
$result = mysqli_query($condb,$query);
// show data query use by table manager data 

echo "<table id='table_id' class='table table-hover' class='display'>";        
echo "
<thead>
<tr align='center'>
<th>รหัส</th>
<th>รูป</th>
<th>ประเภทสินค้า</th>
<th>รายละเอียด</th>
<th>ชื่อสินค้า</th>
<th>หน่วย</th>
<th>ราคา</th>
<th>เพิ่มโดย</th>
</tr>
</thead>
";
//$i=1;
 while ($row = mysqli_fetch_array($result)) {
	 $id=$row["p_id"];
 	echo "<tbody>";
 	echo "<tr class='danger'>";
 	echo "<td>" .$id . "</td>";
 	echo "<td>" ."<img src='../pmi/".$row['images']."'width='100'>"."</td>";
 	echo "<td>" .$row["t_name"] . "</td>";
 	echo "<td>" .$row["p_detail"] . "</td>";
 	echo "<td>" .$row["p_name"] . "</td>";
 	echo "<td>" .$row["p_unit"] . "</td>";
 	echo "<td>" .$row["p_price"] . "</td>";
	 echo "<td>" .$row["m_name"] . "</td>";
    echo "</tr>";
    echo "</tbody>";
 $i++;}
 echo "</table>";
 //close Connection
 mysqli_close($condb);
 ?>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           