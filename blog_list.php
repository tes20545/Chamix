<?php

# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_condb = "localhost";
$database_condb = "chamix";
$username_condb = "root";
$password_condb = "";
$condb = mysqli_connect($hostname_condb, $username_condb, $password_condb) or trigger_error(mysqli_error($condb),E_USER_ERROR); 
mysqli_query($condb,"SET NAMES UTF8");
error_reporting( error_reporting() & ~E_NOTICE );
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "")
{
if (PHP_VERSION < 6) {
$theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
}
$theValue = function_exists("mysql_real_escape_string") ? mysqli_real_escape_string($theValue) : mysqli_escape_string($theValue);
switch ($theType) {
case "text":
$theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
break;
case "long":
case "int":
$theValue = ($theValue != "") ? intval($theValue) : "NULL";
break;
case "double":
$theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
break;
case "date":
$theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
break;
case "defined":
$theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
break;
}
return $theValue;
}
}
mysqli_select_db($condb,$database_condb);
$query_prd = "SELECT * FROM tbl_column ORDER BY c_id DESC";
$prd = mysqli_query( $condb,$query_prd) or die(mysqli_error($prd));
$row_prd = mysqli_fetch_assoc($prd);
$totalRows_prd = mysqli_num_rows($prd);
?>
<?php do { ?>
<div class="col-sm-4" align="center">
<a href="blog_detail.php?id=<?php echo $row_prd['c_id'];?>&act=product-detail"><div class="card mb-3">
  <img src="admin/images/column/<?php echo $row_prd['c_img'];?>" width="70%" class="card-img-top"/>
  <p align="center">
  <div class="card-body">
    <b><h1 class="card-title"><font face="Kanit"><?php echo $row_prd['c_name']; ?> </font></h1>
    <?php $str =$row_prd['c_detail'];?>
    <p class="card-text"><?php echo '<font face="Kanit" size="4">'.strtolower(substr("$str",0,200)) . '</font>'; ?> </p> </b>   
    <a href="blog_detail.php?id=<?php echo $row_prd['c_id'];?>&act=product-detail" class="btn btn-info btn-xs"> <span class="glyphicon glyphicon-search"></span> อ่านต่อ </a>
    
    
    <br><br>
  </div>
  </p>
</div>
</div>
</a>
<?php } while ($row_prd = mysqli_fetch_assoc($prd)); ?>
<?php
mysqli_free_result($prd);
?>