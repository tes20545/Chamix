<?php 
session_start();
        if(isset($_POST['em_email'])){
				//connection

                $con= mysqli_connect("localhost","root","","chamix") or die("Error: " . mysqli_error($con));
                mysqli_query($con, "SET NAMES 'utf8' "); 

        //รับค่า user & password

                  $Username = $_POST['em_email'];
                  $Password = $_POST['em_password'];
				//query 
                  $sql="SELECT * FROM tbl_employee Where em_email='".$Username."' and em_password='".$Password."' ";

                  $result = mysqli_query($con,$sql);
				
                  if(mysqli_num_rows($result)==1){

                      $row = mysqli_fetch_array($result);

                      $_SESSION["em_id"] = $row["em_id"];
                      $_SESSION["em_designation"] = $row["em_designation"];

                      if($_SESSION["em_designation"]=="Admin"){ //ถ้าเป็น admin ให้กระโดดไปหน้า admin_page.php

                        Header("Location: admin/index.php");

                      }

                      if ($_SESSION["em_designation"]=="Organize"){  //ถ้าเป็น member ให้กระโดดไปหน้า user_page.php

                        Header("Location: member/index.php");

                      }

                  }else{
                    echo "<script>";
                        echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
                        echo "window.history.back()";
                    echo "</script>";

                  }

        }else{


             Header("Location: login.php"); //user & password incorrect back to login again

        }
?>