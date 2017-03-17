<?php
require_once  '../src/Blood_bank.php';

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
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Care Health -Home Page</title>
        <script src="../js/jquery-3.1.1.js"></script>
        <script src="../js/blood_bank_script.js"></script>
        <link rel="stylesheet" href="../css/page_viewer.css">
        <link rel="stylesheet" href="../css/mobile_view_max_width_800.css">
        <script>
        
        </script>
        <style>
            #blood_donation_form{
                width: 100%;
                height: 700px;
                background-color:beige;
                display: none;
                border: 1px solid whitesmoke;
            }
            .close{
                position: absolute;
                cursor: pointer;
                font-size:25px;
                color:red;
                margin-left: 5px;
            }
            label{
                width: 22%;
                font-size: 20px;
                float: left;
                margin-top: 15px;
                margin-left:8%;
            }
            .blood_group{
                width: 82%;
                padding: 9px;
                float: left;
                margin-left:8%;
            }
            h2{
                margin-left: 40%;
            }
            #search_txt{
                width: 20%;
                position:absolute;
                left: 400px;
                top:30px;
            }
            #blood_group{
                width: 20%;
                font-size: 16px;
                padding: 7px;
                position: absolute;
                left: 100px;
                top:50px;
            }
             @media all and (max-width: 800px) {
                
             }
             
        </style>  
        
    </head>
    <body style="margin: 0px;">
        <?php require_once  'header.php';?>
        <div id="doctor">
            <div id="doctor_header">
                <div id="menu_icon_d">
                <div class="menu_d"></div>
                 <div class="menu_d"></div>
                 <div class="menu_d"></div>
                </div>
                <img src="../images/blood_header_background.jpg" alt="Doctor" id="content_photo">
                <p id="doctor_title">ব্লাড ব্যাংক</p>
                 <img src="../images/search-3-xxl.png" id="search_icon">
                 <div id="search_page">
                
                    
                    <div id="search_frame">
                        <div id="search_box">
                        <p id="close_search_page">&times;</p>
                        <label>Select Blood Group</label>
                        <select name="blood_group" id="blood_group">
                        <option>A+</option>
                        <option>A-</option>
                        <option>O+</option>
                        <option>O-</option>
                        <option>AB+</option>
                        <option>AB-</option>
                    </select>
                         <label>Enter location</label>
                         <input type="text" id="search_txt" placeholder="Enter your location" >
                        </div>  
                        
                        <div id="search_result" style="margin-top:100px">
                           
                        </div>
                    </div>
            </div>
                 
                 
            </div>
            <div id="side_bar">
                <ul>
                    <li id="blood_donation_link">রক্ত দিতে চান </li>
                      
                       <li>জরুরি রক্ত প্রয়োজন  </li>
   
                </ul>
        </div>
            <div id="content">
                <div id="blood_donar_list">
                 <?php
              $object=new Blood_bank();
                $alldata=$object->view_donar_list();
                if(isset($alldata)&& !empty($alldata)){
                    
              
                foreach ($alldata as $data){?>
                
                    <div id="image_frame"><img src="../images/<?php echo $data['image']?>" alt="image" id="content_image"></div> 
                    <p style="font-size:20px;color: #16a085"><?php echo $data['name']?></p>
                
                
                <?php 
                if(isset($data['blood_group'])&& !empty($data['blood_group'])){
                 echo "Blood Group: ".$data['blood_group']."<br>";   
                }
                ?>
                
                 <?php 
                 if(isset($data['mobile']) && !empty($data['mobile'])){
                     echo "Mobile: ".$data['mobile']."<br>"; 
                 }
                ?>
                 
                 <?php
                 if(isset($data['email'])&& !empty($data['email'])){
                      echo "Email: ".$data['email']."<br>";
                 }
                ?>
                 
                 <?php 
                 if(isset($data['address']) && !empty($data['address'])){
                     echo "Address: ".$data['address']."<br><br>";
                 }
                 ?>
                 
               <?php 
                }
                
                 }
            else {
                echo "No donner no view";
            }
                ?>
                
                </div> 
                <div id="blood_donation_form">
                    <p class="close">&times;</p>
                    <h2>রক্ত দাতার নিবন্ধন ফর্ম </h2>
                    <form action="../controll/blood_bank/registration.php" method="POST" enctype="multipart/form-data" role="form"> 
                     <label>ছবি</label>
                     <input type="file" name="image">   
                    <label>নাম </label>
                   
                    <input type="text" name="name" required="">
                    <label>রক্তের গ্রুপ </label>
                    <select name="blood_group" class="blood_group">
                        <option>A+</option>
                        <option>A-</option>
                        <option>O+</option>
                        <option>O-</option>
                        <option>AB+</option>
                        <option>AB-</option>
                    </select>
                    <label>মোবাইল</label>
                    <input type="text" name="mobile" required="">
                    <label>ইমেইল </label>
                    <input type="email" name="email">
                    <label>ঠিকানা </label>
                    <input type="text" name="address" required="">
                    <input type="submit" name="submit" value="Submit" id="submit_bt">
                    </form>
                </div>
            </div>
        </div>
        
    </body>
</html>
