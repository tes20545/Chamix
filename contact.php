<?php include('header.php');?>

    <!-- slider Area Start-->
    <div class="slider-area ">
        <!-- Mobile Menu -->
        <div class="single-slider slider-height2 d-flex align-items-center" data-background="assets/img/hero/category1.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h3><font face="Kanit">ช่องทางการติดต่อ | Contact</font></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->
<br>
    <!--================Blog Area =================-->
    <div class="container">
        <div class="row">
            <div class="col">
    <div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
    <a href="https://www.facebook.com/ilovechamix"> <img src="assets/img/about/facebook.jpg" class="card-img" alt="..."></a>
    </div>
    <div class="col-md-8">
     <a href="https://www.facebook.com/ilovechamix"> <div class="card-body">
        <h5 class="card-title"><font face="Kanit">Facebook | Fanpage</font></h5>
        <p class="card-text"><font face="Kanit">เข้าไปที่ facebook ค้นหาคำว่า Chamix Coffee หรือ คลิกตรงนี้</font></p>
      </div>
    </div></a>
  </div>
</div>
</div>
<div class="col">
<div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
    <a href="http://line.me/ti/p/%40975hjaup"><img src="assets/img/about/line.jpg" class="card-img" alt="..."></a>
    </div>
    <div class="col-md-8">
    <a href="http://line.me/ti/p/%40975hjaup"><div class="card-body">
        <h5 class="card-title"><font face="Kanit">Line</font></h5>
        <p class="card-text"><font face="Kanit">เพิ่มเพื่อน Chamix Coffee <br>
@975hjaup | มี@ข้างหน้า หรือ คลิกตรงนี้ </font></p>
      </div>
    </div></a>
  </div>
</div>
</div>
</div>
<div class="row">
<div class="col">
    <div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
    <a href="#" data-toggle="modal" data-target="#exampleModalCenter"> <img src="assets/img/about/maintenance.jpg" class="card-img" alt="..."></a>
    </div>
    <div class="col-md-8">
     <a href="#" data-toggle="modal" data-target="#exampleModalCenter"> <div class="card-body">
        <h5 class="card-title"><font face="Kanit">แจ้งปัญหา</font></h5>
        <p class="card-text"><font face="Kanit">คลิกตรงนี้ได้เลย</font></p>
      </div>
    </div></a>
  </div>
</div>
</div>
            <div class="col">
    <div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
    <a href="tel:0986370993"> <img src="assets/img/about/tel.jpg" class="card-img" alt="..."></a>
    </div>
    <div class="col-md-8">
     <a href="tel:0986370993"> <div class="card-body">
        <h5 class="card-title"><font face="Kanit">โทรศัพท์</font></h5>
        <p class="card-text"><font face="Kanit">คลิกตรงนี้ได้เลย</font></p>
      </div>
    </div></a>
  </div>
</div>
</div>
</div>
    <!--================Blog Area =================-->
<br>
    <?php include('footer.html');?>
<!-- Line Notify -->
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">แจ้งปัญหา</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form name="line-notify" action="line-notify-api.php" method="post">
  <div class="form-group">
    <label for="name"><font face="Kanit">LineID</font></label>
    <input type="text" class="form-control" name="name" id="name" require>
    <small id="emailHelp" class="form-text text-muted"><font face="Kanit">ใช้เพื่อการติดต่อกลับ</font></small>
  </div>
  <div class="form-group">
    <label for="detail"><font face="Kanit">เบอร์โทรศัพท์</font></label>
    <textarea class="form-control" name="detail" id="detail" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-primary btn-block"><font face="Kanit">แจ้งปัญหา</font></button>
</form>
      </div>
    </div>
  </div>
</div>
<!-- JS here -->
		<!-- All JS Custom Plugins Link Here here -->
        <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
		
		<!-- Jquery, Popper, Bootstrap -->
		<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="./assets/js/popper.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="./assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="./assets/js/owl.carousel.min.js"></script>
        <script src="./assets/js/slick.min.js"></script>

		<!-- One Page, Animated-HeadLin -->
        <script src="./assets/js/wow.min.js"></script>
		<script src="./assets/js/animated.headline.js"></script>
		
		<!-- Scrollup, nice-select, sticky -->
        <script src="./assets/js/jquery.scrollUp.min.js"></script>
        <script src="./assets/js/jquery.nice-select.min.js"></script>
		<script src="./assets/js/jquery.sticky.js"></script>
        <script src="./assets/js/jquery.magnific-popup.js"></script>

        <!-- contact js -->
        <script src="./assets/js/contact.js"></script>
        <script src="./assets/js/jquery.form.js"></script>
        <script src="./assets/js/jquery.validate.min.js"></script>
        <script src="./assets/js/mail-script.js"></script>
        <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="./assets/js/plugins.js"></script>
        <script src="./assets/js/main.js"></script>

</body>
</html>