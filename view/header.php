<?php
//header('location:index.php');
require_once '../src/User.php';
$obj=new User();
session_start();


?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="../images/favicon.jpg">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Care Health -Home Page</title>
        <link rel="stylesheet" href="../css/header.css">
        <link rel="stylesheet" href="../css/mobile_view_max_width_800.css">
        <script src="../js/header.js"></script>
        <script src="../js/jquery-3.1.1.js"></script>
       
    </head>
    <body>
    <div id="header">
        <img src="../images/logo.jpg" id="logo" alt="logo"> 
        
     
        <div id="menu_bar"> 
            <ul>
                <li id="doctor_bt"> <a href="index.php">হোম</a></li>
                <li id="doctor_bt"> <a href="doctor.php">ডাক্তার</a></li>
                <li><a href="hospital.php">হাসপাতাল</a></li>
                <li><a href="ambulence.php">এম্বুলেন্স </a></li>
                <li><a href="pharmachy.php">ফার্মেসি</a></li>
                  <li><a href="blood_bank.php">ব্লাড ব্যাংক</a></li>
                 
                   
            </ul>   
        
        </div>
        <div id="follow_link">
            <img src="../images/facebook-4-64.ico" alt="f" class="follow_icon" id="facebook">
            
            <img src="../images/twitter-4-64.ico" alt="f"class="follow_icon">
            <img src="../images/google-plus-2-64.ico" alt="f"class="follow_icon">
            <img src="../images/Circle-Solid-Phone-512.png" alt="f"class="follow_icon"style="width:35px;height: 35px;">
        </div>
        <div id="menu_icon">
        <div class="menu"></div>
        <div class="menu"></div>
        <div class="menu"></div>
        </div>
        
          <div id="login">
           <?php
        if(isset($_SESSION['user'])&&!empty($_SESSION['user'])){
            
            if(!empty($_SESSION['user']['image'])){ ?>
                <img src="../images/<?php echo $_SESSION['user']['image'] ?>" id="user_icon" alt="user">
            <?php }
            else{ ?>
              <img src="../images/user-icon.jpg" id="user_icon" alt="user">  
           <?php 
//unset($_SESSION['user']);
            }
            ?>
              
        <?php }
      else {?>
           <p id="login_bt">লগ ইন</p> 
      <?php }
    ?>

        </div>
      
                
    </div>
    <div id="login_box">
        <p id="close_login"style="color:white;float: right;font-size: 40px;margin-top: 0px;margin-right: 5px;cursor: pointer">&times;</p>
        <h1 style="margin-left:100px;color: white">লগ ইন</h1>
        <form action="../controll/user/sign_in.php" method="POST"> 
            <p style="color:white;margin-left: 10%;">    <?php
                if(isset($_SESSION['empty_email_error'])&& !empty($_SESSION['empty_email_error'])){
                    echo $_SESSION['empty_email_error'];
                    unset($_SESSION['empty_email_error']);
                }
                 if(isset($_SESSION['empty_password_error'])&& !empty($_SESSION['empty_password_error'])){
                    echo $_SESSION['empty_password_error'];
                    unset($_SESSION['empty_password_error']);
                }
                 if(isset($_SESSION['both_empty_error'])&& !empty($_SESSION['both_empty_error'])){
                    echo $_SESSION['both_empty_error'];
                    unset($_SESSION['both_empty_error']);
                }
                 if(isset($_SESSION['login_error'])&& !empty($_SESSION['login_error'])){
                    echo $_SESSION['login_error'];
                    unset($_SESSION['login_error']);
                }
                ?></p>
            <input type="text" name="email" placeholder="User name or Email" id="email">
            <input type="password" name="password" placeholder="password" id="password">
        <input type="submit" name="login" value="লগ ইন" id="login_sbt">
        </form><br><br>
        <p style="color:white;margin-left: 130px">OR</p>
        <a href="create_ac.php" id="c_ac_bt">Create Account</a>
    </div>
       <div id="user_box">
           <?php
           if(isset($_SESSION['user'])&& !empty($_SESSION['user'])){
              ?> 
           <p style="font-size: 20px;color: white;top:10px;margin-left:13px;"><?php echo $_SESSION['user']['first_name']." ".$_SESSION['user']['last_name'];?></p>
           <?php
           }?>
           <br>
           <a href="../controll/user/logout.php">Log out</a>
    </div> 
    </body>
</html>

