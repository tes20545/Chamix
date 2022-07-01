<?php session_start();?>
<?php 

if (!$_SESSION["em_id"]){  //check session

	  Header("Location: ../index.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form 

}else{?>
<!DOCTYPE html>
<html lang="en">
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Chamix Admin</title>
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicon.png">

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style4.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
</head>

<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>CHAMIX ADMIN</h3>
                <strong>CH</strong>
            </div>

            <ul class="list-unstyled components">
                <li>
                    <a href="index.php">
                        <i class="fas fa-home"></i>
                        หน้าแรก
                    </a>
                </li>
                <li>
                <a href="tranfer/index.php">
                        <i class="fas fa-exchange-alt"></i>
                        บันทึกรายได้
                    </a>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-copy"></i>
                        จัดการ
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li class="active">
                            <a href="member2.php">สมาชิก</a>
                        </li>
                        <li>
                            <a href="prd.php">สินค้า</a>
                        </li>
                        <li>
                            <a href="prdtype.php">รายการ</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="maintenance.php">
                        <i class="fas fa-cog"></i>
                        แจ้งซ่อม
                    </a>
                </li>
                <li>
                    <a href="column.php">
                        <i class="fas fa-columns"></i>
                        เพิ่มบทความ
                    </a>
                </li>
                <li>
                    <a href="logout.php">
                        <i class="fas fa-sign-out-alt"></i>
                        ออกจากระบบ
                    </a>
                </li>
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>เปิด/ปิด</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="prdtype.php">ข้อมูล</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="prdtype.php?act=edit">แก้ไข</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="prdtype.php?act=rep">ลบ</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="index.php">กลับหน้าแรก</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="container-fluid">
                <div class="row">
                <div class="col">
                        <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal"><div class="card-body">
                              <h1 class="card-title"><i class="fa fa-plus"></i></h1>
                              <p class="card-text"><font color="white">เพิ่มประเภทสินค้า</font></p>
                            </div>
                          </div>
                       </button>
                    </div>
                    <div class="col">
                        <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                            <a href="prdtype.php?act=edit" type="button" class="btn btn-primary"><div class="card-body">
                              <h1 class="card-title"><i class="fa fa-wrench"></i></h1>
                              <p class="card-text"><font color="white">แก้ไข</font></p>
                            </div></a>
                          </div> 
                    </div>
                    <div class="col">
                        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                            <a href="prdtype.php?act=del" type="button" class="btn btn-danger"><div class="card-body">
                              <h1 class="card-title"><i class="fa fa-trash"></i></h1>
                              <p class="card-text"><font color="white">ลบ</font></p>
                            </div></a>
                          </div>
                       </button>
                    </div>
                </div>
            </div>

            <div class="line"></div>
            <?php
$act = (isset($_GET['act']) ? $_GET['act'] : '');
if ($act=='add') {
    include('prdtype_add.php');
}elseif ($act=='del') {
    include('prdtype_list_del.php');
}elseif ($act=='edit') {
    include('prdtype_list_edit.php');
}elseif ($act=='edit2') {
    include('prdtype_edit.php');    
}else{
    include('prd_type_list.php');
}
?> 
    </div>
<!--modal memberadd -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i class="glyphicon glyphicon-plus"></i> เพิ่มสมาชิก</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php
        include('prdtype_add.php');
        ?>
      </div>
    </div>
  </div>
</div>



    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
        CKEDITOR.replace( 'editor' );
    </script>
</body>

</html>
    <?php }?>