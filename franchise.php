<!doctype html>
<html lang="en">
	<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Chamix Coffee </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
<!-- CSS here -->
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
        <link href="assets/css/livesearch.css">
        <link href="assets/css/scroll.css">
</head>
<style>
      .section-padding{
        padding-top: 20px;
    }
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
    .modal{
      top:50px;
      z-index: 10050;
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
       </div>
        <!-- Header End -->
    </header>
    
    <!-- slider Area Start-->
    <div class="slider-area ">
        <!-- Mobile Menu -->
        <div class="single-slider slider-height2 d-flex align-items-center" data-background="assets/img/hero/category1.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h3><font face="Kanit">Franchise</font></h3>
                            <h4><font face="Kanit"><hr>เฟรนไชส์</font></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->

    <!--================Blog Area =================-->
    <section class="blog_area section-padding">
        <div class="container-fluid">
            <div class="row">
              <!-- Single -->
              <div class="col">
                <br>
                <br>
          <div class="card text-center" style="width: 21.5rem;">
            <div class="card-body">
              <h5 class="card-title text-center"><font face="Kanit">SINGLE</font></h5><br>
              <img src="assets/img/product/single_product.png" class="img-fluid" alt="Responsive image" width="80%">
              <br><br><!-- <h6 class="card-subtitle mb-2 text-muted text-center"><h4><s><font face="Kanit">26,900฿ </font></s> &nbsp;<span class="badge badge-warning"><font face="Kanit">-7.43%</font></span></h4> -->
          <h1><b><font face="Kanit">26,900฿</font></b></h1>
          ตลอดชีพ!</h6>
              <p class="card-text"><br><div class="container"><button type="button" class="btn btn-warning btn-lg btn-block" data-toggle="modal" data-target="#single">สั่งซื้อ</button><br><hr>*ส่วนหนึ่งของของแถม*<div align="left"><br>คอร์สเรียนรู้วิธีทำ 2 วัน<br>อุปกรณ์<br>
                ป้ายลิขสิทธิ์<br>
          ป้ายเมนูลิขสิทธิ์<br>
          ไวนิลธงญี่ปุ่น<br>
          ใบสูตรทุกเมนู<br>
          ใบสะสมแต้ม<br>
          ตรายางลิขสิทธิ์<br>
          </div></p><b><font color="red">และอื่นๆอีกเพียบ!กดสั่งได้เลย</b></font></div>
            </div>
          </div>
          </div>
          <!-- Single -->
          <!-- Standard -->
          <div class="col">
            <br>
            <br>
      <div class="card text-center" style="width: 21.5rem;">
        <div class="card-body">
          <h5 class="card-title text-center"><font face="Kanit">STANDARD</font></h5><br>
          <img src="assets/img/product/standard_product.png" class="img-fluid" alt="Responsive image" width="80%">
          <br><br><!-- <h6 class="card-subtitle mb-2 text-muted text-center"><h4><s><font face="Kanit">46,900฿ </font></s> &nbsp;<span class="badge badge-warning"><font face="Kanit">-17.54%</font></span></h4> -->
      <h1><b><font face="Kanit">46,900฿</font></b></h1>
      ตลอดชีพ!</h6>
          <p class="card-text"><br><div class="container"><button type="button" class="btn btn-warning btn-lg btn-block"  data-toggle="modal" data-target="#single">สั่งซื้อ</button><br><hr>*ส่วนหนึ่งของของแถม*<div align="left">
      <br>คอร์สเรียนรู้วิธีทำ 2 วัน<br>
      ได้ทุกอย่างในเคมเปญแรก<br>
      อุปกรณ์<br>
      วัตถุดิบ<br>
      เครื่องตีฟอง<br>
      ใบสะสมแต้ม<br>
      ใบสูตรทุกเมนู<br>
      ตรายางลิขสิทธิ์<br>
      </div></p><b><font color="red">และอื่นๆอีกเพียบ!กดสั่งได้เลย</b></font></div>
        </div>
      </div>
      </div>
      <!-- Standard -->
          
          <!-- Premium -->
          <div class="col">
            <br>
            <br>
      <div class="card text-center" style="width: 21.5rem;">
        <div class="card-body">
          <h5 class="card-title text-center"><font face="Kanit">PREMIUM</font></h5><br>
          <img src="assets/img/product/premium_product.png" class="img-fluid" alt="Responsive image" width="80%">
          <br><br><!-- <h6 class="card-subtitle mb-2 text-muted text-center"><h4><s><font face="Kanit">79,900฿ </font></s> &nbsp;<span class="badge badge-warning"><font face="Kanit">-14.31%</font></span></h4> -->
      <h1><b><font face="Kanit">79,900฿</font></b></h1>
      ตลอดชีพ!</h6>
          <p class="card-text"><br><div class="container"><button type="button" class="btn btn-warning btn-lg btn-block" data-toggle="modal" data-target="#single">สั่งซื้อ</button><br><hr>*ส่วนหนึ่งของของแถม*<br><div align="left">
            <br>คอร์สเรียนรู้วิธีทำ 2 วัน<br>
            ได้ทุกอย่างในเคมเปญที่สอง<br>
            อุปกรณ์<br>
            วัตถุดิบ<br>
            เครื่องตีฟอง<br>
            มินิเคาท์เตอร์ 200x90x230<br>
            ถังชาสแตนเลส<br>
            หม้อน้ำชา<br>
            </div></p><b><font color="red">และอื่นๆอีกเพียบ!กดสั่งได้เลย</b></font></div>
        </div>
      </div>
      </div>

          <!-- Premium -->
          
          <!-- Business -->
          <div class="col">
            <br>
            <br>
      <div class="card text-center" style="width: 21.5rem;">
        <div class="card-body">
          <h5 class="card-title text-center"><font face="Kanit">BUSINESS</font></h5><br>
          <img src="assets/img/product/business_product.png" class="img-fluid" alt="Responsive image" width="80%">
          <br><br><!-- <h6 class="card-subtitle mb-2 text-muted text-center"><h4><s><font face="Kanit">129,000฿ </font></s> &nbsp;<span class="badge badge-warning"><font face="Kanit">-23.09%</font></span></h4> -->
      <h1><b><font face="Kanit">129,000฿</font></b></h1>
      ตลอดชีพ!</h6>
          <p class="card-text"><br><div class="container"><button type="button" class="btn btn-warning btn-lg btn-block" data-toggle="modal" data-target="#single">สั่งซื้อ</button><br><hr>*ส่วนหนึ่งของของแถม*<div align="left">
            <br>คอร์สเรียนรู้วิธีทำ 3 วัน<br>
            ได้ทุกอย่างในเคมเปญทั้งหมด<br>
            อุปกรณ์<br>
            วัตถุดิบ<br>
            เครื่องตีฟอง<br>
            ซุ้มขนาด 300x240x260<br>
            ขาตั้งกลม<br>
            เตาแก๊ส<br>
            </div></p><b><font color="red">และอื่นๆอีกเพียบ!กดสั่งได้เลย</b></font></div>
        </div>
      </div>
      </div>
          <!-- Business -->
          </p>
          </div>
          </div>
    </section>
    <!--================Blog Area =================-->
    <!-- Modal Detail Franchise -->
<!-- single purches-->
<div class="modal fade" id="single" tabindex="-1" role="dialog" aria-labelledby="single" aria-hidden="true" style="padding-right:0px;">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="single"><font face="Kanit">สั่งซื้อเฟรนไชร์!</font></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form name="line-notify" action="line-notify-api-single.php" method="post" class="needs-validation" novalidate>
  <div class="form-group">
    <label for="name"><font face="Kanit">LineID</font></label>
    <input type="text" class="form-control" name="name" id="name" placeholder="ไอดีไลน์" required>
    <div class="invalid-feedback">
          โปรดกรอกไอดีไลน์.
        </div>
  </div>
  <div class="form-group">
    <label for="phone"><font face="Kanit">Phone</font></label>
    <input type="number" class="form-control" name="phone" id="phone" placeholder="เบอร์โทรศัพท์มือถือ" required>
    <div class="invalid-feedback">
          โปรดกรอกเบอร์โทรศัพท์.
        </div>
  </div>
  <div class="form-group">
    <label for="email"><font face="Kanit">Email</font></label>
    <input type="email" class="form-control" name="email" id="email" placeholder="อีเมลล์" required>
    <div class="invalid-feedback">
          โปรดกรอกอีเมลล์ให้ครบ.
        </div>
  </div>  
  <label for="package"><font face="Kanit">แพ็คเกจ</font></label><br>
  <select class="shipping_select" name="package" required>
                      <option value="แพ็คเกจเริ่มต้น">แพ็คเกจเริ่มต้น</option>
                      <option value="แพ็คเกจพื้นฐาน">แพ็คเกจพื้นฐาน</option>
                      <option value="แพ็คเกจพรีเมี่ยม">แพ็คเกจพรีเมี่ยม</option>
                      <option value="แพ็คเกจธุรกิจ">แพ็คเกจธุรกิจ</option>
                    </select>
                    <div class="invalid-feedback">
        โปรดเลือกแพ็คเกจที่ต้องการ.
      </div>
  <br>
  <br>
  <button type="submit" class="btn btn-primary btn-block"><font face="Kanit">สั่งซื้อ</font></button>
</form>
    </div>
  </div>
</div>
<!-- single purches ends -->
    <!-- Modal Detail Franchise -->
    

<!-- JS here -->
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
		
		<!-- Scrollup, nice-select, sticky -->
        <script src="assets/js/jquery.scrollUp.min.js"></script>
        <script src="assets/js/jquery.nice-select.min.js"></script>
		<script src="assets/js/jquery.sticky.js"></script>
        <script src="assets/js/jquery.magnific-popup.js"></script>

        <!-- contact js -->
        <script src="assets/js/contact.js"></script>
        <script src="assets/js/jquery.form.js"></script>
        <script src="assets/js/jquery.validate.min.js"></script>
        <script src="assets/js/mail-script.js"></script>
        <script src="assets/js/jquery.ajaxchimp.min.js"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>
        <script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
</body>
</html>