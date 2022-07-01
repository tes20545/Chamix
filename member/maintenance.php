<?php session_start();?>
<?php 

if (!$_SESSION["em_id"]){  //check session

	  Header("Location: ../index.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form 

}else{?>
<?php
include('connec.php');
?>
<?php
$sql = "SELECT * FROM tbl_employee WHERE em_id";
$result = mysqli_query($condb, $sql) or die ("Error in query : $sql" . mysqli_error($result));
$row = mysqli_fetch_array($result);
extract($row);

?>
<!DOCTYPE html>
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
                                <a class="nav-link" href="maintenance.php">แจ้งซ่อม</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">กลับหน้าแรก</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="container-fluid">
            <form action="line-notify-api.php" method="POST">
  <div class="form-group">
    <label for="detail"><font face="Kanit">รายละเอียดของปัญหา</font></label>
    <textarea class="form-control" name="detail" rows="3" required></textarea>
  </div>
  <input type="hidden" name="em_name" value="<?php echo $row ['em_name'];?>">
  <input type="hidden" name="em_branch" value="<?php echo $row ['em_branch'];?>">
  <input type="hidden" name="em_phone" value="<?php echo $row ['em_phone'];?>">
  <div class="form-group">
    <label for="type"><font face="Kanit">ประเภทการแจ้ง</font></label>
    <select class="form-control" name="type" id="type" required>
      <option value="ทั่วไป">ทั่วไป</option>
      <option value="สิ่งของชำรุด">สิ่งของชำรุด</option>
      <option value="เว็บไซต์ผิดพลาด">เว็บไซต์ผิดพลาด</option>
      <option value="ฉุกเฉิน">ฉุกเฉิน</option>
    </select>
  </div>
  <button type="submit" class="btn btn-success btn-block btn-lg">แจ้งปัญหา</button>
</form>
            </div>

            <div class="line"></div>
            
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
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
    </script>
</body>

</html>
<?php }?>