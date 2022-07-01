<!doctype html>
<html lang="en">
	<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Chamix Coffee </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="assets/css/flaticon.css">
            <link rel="stylesheet" href="assets/css/slicknav.css">
            <link rel="stylesheet" href="assets/css/animate.min.css">
            <link rel="stylesheet" href="assets/css/magnific-popup.css">
            <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="assets/css/themify-icons.css">
            <link rel="stylesheet" href="assets/css/slick.css">
            <link rel="stylesheet" href="assets/css/nice-select.css">
			<link rel="stylesheet" href="assets/css/style.css">
			<link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;0,500;1,900&display=swap" rel="stylesheet">
            <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
            <link href="assets/css/livesearch.css">
			<style>
				body {
					font-family: 'Kanit', sans-serif;
				}
				.header-area .header-top .header-info-left .contact-now li{
					color: black;
				}
				.header-area .nice-select{
					color:black;
				}
				.header-area .nice-select .list{
					background-color:yellow;
                }
                .textbox{
	    border-radius: 8px 0px 0px 8px;
	    background-color:#fff;
	    float:left;
	    border:none;
	    height:40px;
	    padding:1px 12px;
	    font-size:15px;
	    line-height: 1.42857;
	    color:#000;
	    width:420px;
	    margin-top:13px;
        }
        #livesearch{
	z-index:9999; 
	background:#fff;
	max-height:260px;
	overflow:auto; 
	width:92%;
	box-shadow:0px 2px 4px #444; 
	margin-left:1.2%;
    }
    .header-bottom .header-right .form-box .search-icon{
        top:20px;
    }
    .slicknav_btn{
        margin-bottom:-19px;
    }
    .slicknav_menu .slicknav_icon-bar{
        background-color: #fffb00;
    }
    * {
  scrollbar-width: thin;
  scrollbar-color: blue orange;
}
*::-webkit-scrollbar {
  width: 12px;
}
*::-webkit-scrollbar-track {
  background: white;
}
*::-webkit-scrollbar-thumb {
  background-color: yellow;
  border-radius: 10px;
  border: 3px solid yellow;
}
    
                </style>
                <script>
function lightbg_clr() {
	$('#qu').val("");
	$('#textbox-clr').text("");
 	$('#search-layer').css({"width":"auto","height":"auto"});
	$('#livesearch').css({"display":"none"});	
	$("#qu").focus();
 };
 
function fx(str)
{
var s1=document.getElementById("qu").value;
var xmlhttp;
if (str.length==0) {
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
	document.getElementById("search-layer").style.width="auto";
	document.getElementById("search-layer").style.height="auto";
	document.getElementById("livesearch").style.display="block";
	$('#textbox-clr').text("");
    return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("livesearch").innerHTML=xmlhttp.responseText;
	document.getElementById("search-layer").style.width="100%";
	document.getElementById("search-layer").style.height="100%";
	document.getElementById("livesearch").style.display="block";
	$('#textbox-clr').text("X");
    }
  }
xmlhttp.open("GET","live_serch.php?n="+s1,true);
xmlhttp.send();	
}
</script>    
  </head>
  <body>
  <?php
$db_host='localhost';
$db_user='root';
$db_pwd='';
$database='chamix';

$connections=mysqli_connect($db_host,$db_user,$db_pwd,$database) or die("can't Connect to Database");

if(!mysqli_select_db($connections,$database))
die("can't Select Database");
?>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
       <div class="header-area">
            <div class="main-header ">
                <div class="header-top top-bg d-none d-lg-block" id="head1">
                   <div class="container-fluid">
                       <div class="col-xl-12">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="header-info-left d-flex">
                                    <div class="flag">
                                        <img src="assets/img/icon/header_icon.png" alt="">
                                    </div>
                                    <div class="select-this">
                                        <form action="#">
                                            <div class="select-itms">
                                                <select name="select" id="select1">
                                                    <option value="">THA</option>
                                                    <option value="">SPN</option>
                                                    <option value="">CDA</option>
                                                    <option value="">USD</option>
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                    <ul class="contact-now">     
                                        <li>โทร  098 637 0993</li>
                                    </ul>
                                </div>
                                <div class="header-info-right">
                                   <ul>                                          
                                       <li><a href="login.html"><font color="black">แอคเคาท์ </font></a></li>
                                       <li><a href="product_list.html"><font color="black">สิ่งที่ชอบ  </font></a></li>
                                       <li><a href="cart.html"><font color="black">ตระกร้าสินค้า</font></a></li>
                                       <li><a href="checkout.html"><font color="black">จ่ายเงิน</font></a></li>
                                   </ul>
                                </div>
                            </div>
                       </div>
                   </div>
                </div>
               <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-1 col-lg-1 col-md-1 col-sm-3">
                                <div class="logo">
                                  <a href="index.php"><img src="assets/img/logo/logo1.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-8 col-md-7 col-sm-5">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav>                                                
                                        <ul id="navigation">                                                                                                                                     
                                            <li><a href="index.php">Home<br>หน้าแรก</a></li>
                                            <li><a href="product.php">Product<br>สินค้า</a>
                                            <ul class="submenu">
                                                    <li><a href="product.php?t_id=5&type-name=ชา">ชา</a></li>
                                                    <li><a href="product.php?t_id=6&type-name=อิตาเลียนโซดา">อิตาเลี่ยนโซดา</a></li>
                                                    <li><a href="product.php?t_id=7&type-name=กาแฟ">กาแฟ</a></li>
                                                    <li><a href="product.php?t_id=8&type-name=นม">นม</a></li>
                                                </ul>
                                            </li>
                                            <li class="hot"><a href="franchise.php">Franchise<br>เฟรนไชส์</a>
                                            </li>
                                            <li><a href="blog.php">Blog<br>บทความ</a>
                                            </li>
                                            <li><a href="blog_detail.php?id=5&act=product-detail">About<br>เกี่ยวกับชามิกซ์</a>
                                            </li>
                                            <li><a href="contact.php">Contact<br>ติดต่อ</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div> 
                            <div class="col-xl-5 col-lg-3 col-md-3 col-sm-3 fix-card">
                                <ul class="header-right f-right d-none d-lg-block d-flex justify-content-between">
                                    <li class="d-none d-xl-block">
                                        <div class="form-box f-right ">
                                    <form action="search.php" method="get">
                                            <input type="text" onKeyUp="fx(this.value)" autocomplete="off" name="qu" id="qu" class="textbox" tabindex="1" placeholder="ค้นหาสินค้า">
                                        <div class="search-icon">
                                            <i class="fas fa-search special-tag"></i>
                                                <br><br><div id="livesearch"></div>
                                            </div>
                                        </form>
                                        </div>
                                     </li>
                                   <li class="d-none d-lg-block"> <a href="login.php" class="btn header-btn">ลงชื่อเข้าใช้</a></li>
                                </ul>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
            </div>
       </div>
        <!-- Header End -->
    </header>
    <!--Card Ends-->
   <!-- All JS Custom Plugins Link Here here -->
   <script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
   <!-- Jquery, Popper, Bootstrap -->
   <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
   <script src="assets/js/popper.min.js"></script>
   <script src="assets/js/bootstrap.min.js"></script>
   <!-- Jquery Mobile Menu -->
   <script src="assets/js/jquery.slicknav.min.js"></script>

   <!-- Jquery Slick , Owl-Carousel Plugins -->
   <script src="assets/js/owl.carousel.min.js"></script>
   <script src="assets/js/slick.min.js"></script>

   <!-- One Page, Animated-HeadLin -->
   <script src="assets/js/wow.min.js"></script>
   <script src="assets/js/animated.headline.js"></script>
   <script src="assets/js/jquery.magnific-popup.js"></script>

   <!-- Scrollup, nice-select, sticky -->
   <script src="assets/js/jquery.scrollUp.min.js"></script>
   <script src="assets/js/jquery.nice-select.min.js"></script>
   <script src="assets/js/jquery.sticky.js"></script>
   
   <!-- contact js -->
   <script src="assets/js/contact.js"></script>
   <script src="assets/js/jquery.form.js"></script>
   <script src="assets/js/jquery.validate.min.js"></script>
   <script src="assets/js/mail-script.js"></script>
   <script src="assets/js/jquery.ajaxchimp.min.js"></script>
   
   <!-- Jquery Plugins, main Jquery -->	
   <script src="assets/js/plugins.js"></script>
   <script src="assets/js/main.js"></script>

   <!--Animate AOS-->
   <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
   <script>
	AOS.init();
  </script>

 