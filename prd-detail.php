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
?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 7) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }



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

$colname_prdt = "-1";
if (isset($_GET['id'])) {
  $colname_prdt = $_GET['id'];
}
mysqli_select_db($condb,$database_condb);
$query_prdt = sprintf("SELECT * FROM tbl_prd WHERE p_id = %s", GetSQLValueString($colname_prdt, "int"));
$prdt = mysqli_query( $condb,$query_prdt) or die(mysqli_error($prdt));
$row_prdt = mysqli_fetch_assoc($prdt);
$totalRows_prdt = mysqli_num_rows($prdt);


//update product view
$p_id = $row_prdt['id'];

$sql= "UPDATE tbl_prd WHERE p_id = $p_id";
	mysqli_query($condb,$sql);
//
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>

<body>
    <div class="row">
	<div class="col-sm-5">
    	<img src="pmi/<?php echo $row_prdt['images'];?>" class="img img-responsive">
    </div>
    <div class="col-md-7">
        <br>
   <h2>  ชื่อสินค้า :  <font face="Kanit"><?php echo $row_prdt['name']; ?></font> </h2><hr>
    <h3>รายละเอียด : <font face="Kanit"><?php echo $row_prdt['detail']; ?></font></h3><hr>
    <h2> ราคา: <font face="Kanit"> <?php echo $row_prdt['price']; ?>  บาท  </h2> </font> <br />
   
    <br /><br />
    <a href="https://www.youtube.com/watch?v=PsxN5lSEXfo&list=PLEA4F1w-xYVZX-h5l0xYldQCvZJR4kvft&index=1" class="btn btn-success" target="_blank"> <span class="glyphicon glyphicon-shopping-cart"> เพิ่มลงตะกร้า </span> </a>
    
    
    </div>
</div>
<br>
<br>
</body>
</html>
<?php
mysqli_free_result($prdt);
?>
