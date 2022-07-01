<?php
include('connec.php');
?>
<!doctype html>
<html lang="en">
<head>
    <title>ADMIN</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Mobland - Mobile App Landing Page Template">
    <meta name="keywords" content="HTML5, bootstrap, mobile, app, landing, ios, android, responsive">

    <!-- Font -->
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <!-- <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Themify Icons -->
    <link rel="stylesheet" href="../css/themify-icons.css">
    <!-- Owl carousel -->
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <!-- Main css -->
    <link href="css/styles.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../dt/jquery.dataTables.min.css">
<script type="text/javascript" language="javascript" src="../dt/jquery-1.12.0.min.js"></script>
<script type="text/javascript" language="javascript" src="../dt/jquery.dataTables.min.js"></script>
<script>        
$(document).ready(function() {

    $('#example').DataTable( {

      "aaSorting" :[[1,'desc']],

      //"lengthMenu":[[20,50, 100, -1], [20,50, 100,"All"]]

    });

} );
</script>
<!-- <script type="text/javascript" charset="utf-8">
    $(document).ready(function(){
    $('#example').dataTables( {
        "aaSorting" : [[1,'desc']],
        "oLanguage": {
        "sLengthMenu": "แสดง _MENU_ เร็คคอร์ด ต่อหน้า",
        "sZeroRecords": "ไม่เจอข้อมูลที่ค้นหา",
        "sInfo": "แสดง _START_ ถึง _END_ ของ _TOTAL_ เร็คคอร์ด",
        "sInfoEmpty": "แสดง 0 ถึง 0 ของ 0 เร็คคอร์ด",
        "sInfoFiltered": "(จากเร็คคอร์ดทั้งหมด _MAX_ เร็คคอร์ด)",
        "sSearch": "ค้นหา",
        "aaSorting": [[1,'desc']],
        "oPaginate": {
        "sFirst": "หน้าแรก",
        "sPrevious": "ก่อนหน้า",
        "sNext": "ถัดไป",
        "sLast": "หน้าสุดท้าย"
        },
        }
    } );
    } );
</script> -->
<?php
include('connec.php');
?>