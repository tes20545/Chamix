<?php

$db_host='localhost';
$db_user='root';
$db_pwd='';
$database='chamix';

$connections=mysqli_connect($db_host,$db_user,$db_pwd,$database) or die("can't Connect to Database");

if(!mysqli_select_db($connections,$database))
die("can't Select Database");

$s1=$_REQUEST["n"];
$select_query="SELECT * from tbl_prd where name like '%".$s1."%'";
$sql=mysqli_query($connections,$select_query) or die (mysqli_error($sql));
$s="";
while($row=mysqli_fetch_array($sql))
{
	$s=$s."
	<a class='link-p-colr' href='product-detail.php?id=".$row['id']."'>
		<div class='live-outer'>
            	<div class='live-im'>
                	<img src='pmi/".$row['images']."'style='width:30%'/>
                </div>
                <div class='live-product-det'>
                	<div class='live-product-name'>
                    	<p>".$row['name']."</p>
                    </div>
                    <div class='live-product-price'>
						<div class='live-product-price-text'><p>Rs.".number_format($row['price'])."</p></div>
                    </div>
                </div>
            </div>
	</a>
	"	;
}
echo $s;
?>