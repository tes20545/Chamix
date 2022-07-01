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
$t_id = $_GET['t_id'];
mysqli_select_db($condb,$database_condb);
$query_prd = "SELECT * FROM tbl_prd WHERE type_id=$t_id ORDER BY p_id ASC";
$prd = mysqli_query($condb,$query_prd) or die(mysqli_error($prd));
$row_prd = mysqli_fetch_assoc($prd);
$totalRows_prd = mysqli_num_rows($prd);

if($totalRows_prd > 0) { ?>

<?php do { ?>
  <div class="col-sm-4" align="center">
    <img src="pmi/<?php echo $row_prd['images'];?>" width="80%" />
    <p align="center">
    <b><font face="Kanit"><h3><?php echo $row_prd['name']; ?></h3></font></b>
      <br />
      <a href="product-detail.php?id=<?php echo $row_prd['p_id'];?>&act=product-detail" class="btn btn-info btn-xs"> <span class="glyphicon glyphicon-search"></span> รายละเอียด </a>
      
     
      
      <br><br>
      </p>
    </div>
  <?php } while ($row_prd = mysqli_fetch_assoc($prd)); ?>

  <?php } else{
      echo "<h4 align='center'>";
      echo "ไม่มีสินค้า";
      echo "</h4>";
   }?>
<?php
mysqli_free_result($prd);
?>
