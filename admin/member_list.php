<meta charset="utf-8">
<?php
//Connection to database
include('connec.php');
include('hder1.php');
//Query data form table member_trl
$query = "SELECT * FROM member_trl ORDER BY m_id ASC" or die("Error:" . mysqli_error($query));

//echo $query;
//exit;

// get data in query output result
$result = mysqli_query($condb,$query);
// show data query use by table manager data 
echo "<div class='table-responsive-xl'>";
echo "<table class='table table-hover'>";        
echo "<thead>
<tr>
<th scope='col'>รหัส</th>
<th scope='col'>ชื่อผู้ใช้</th>
<th scope='col'>อีเมลล์</th>
<th scope='col'>รหัสผ่าน</th>
<th scope='col'>สถานะ</th>
<th scope='col'>ชื่อ</th>
<th scope='col'>นามสกุล</th>
<th scope='col'>เบอร์โทรศํพท์</th>
<th scope='col'>รูปภาพ</th>
<th scope='col'>ว/ด/ป</th>
</tr>
</thead>
";
//$i=1;
 while ($row = mysqli_fetch_array($result)) {
 	echo "<tr class='info'>";
	 echo "<td>".$row["m_id"].	"</td>";
 	echo "<td>" .$row["m_user"] . "</td>";
 	echo "<td>" .$row["m_email"] . "</td>";
 	echo "<td>" .$row["m_pass"] . "</td>";
 	echo "<td>" .$row["m_status"] . "</td>";
 	echo "<td>" .$row["m_name"] . "</td>";
 	echo "<td>" .$row["m_lname"] . "</td>";
 	echo "<td>" .$row["m_phone"] . "</td>";
 	echo "<td>" ."<img src='../mi/".$row["m_img"]."'width='100'>". "</td>";
	 echo "<td>" .date('d/m/Y',strtotime($row["m_date"])) . "</td>";
	 echo "<td><input type='button' name='view' value='view' id=".$row['m_id']. "class='btn btn-info btn-xs view_data' /></td>";
    echo "</tr>";
 $i++;}
 echo "</table>";
 echo "</div>";
 //close Connection
 mysqli_close($condb);
 ?>              
 <div id="dataModal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">Employee Details</h4>  
                </div>  
                <div class="modal-body" id="employee_detail">  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>  
 <script>  
 $(document).ready(function(){  
      $('.view_data').click(function(){  
           var employee_id = $(this).attr("id");  
           $.ajax({  
                url:"select.php",  
                method:"post",  
                data:{employee_id:employee_id},  
                success:function(data){  
                     $('#employee_detail').html(data);  
                     $('#dataModal').modal("show");  
                }  
           });  
      });  
 });  
 </script>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             