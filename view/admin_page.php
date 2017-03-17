<?php
include_once '../src/Doctor.php';
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
        <title>Care Health -Admin  Page</title>
        <script src="../js/jquery-3.1.1.js"></script>
        <script src="../js/my_style.js"></script>
        <link rel="stylesheet" href="../css/admin_page_style.css">
        
    </head>
    <body style="margin: 0px;">
        <?php include_once 'header.php';?>
        <div id="doctor">
            <div id="doctor_header">
                <div id="menu_icon_d">
                <div class="menu_d"></div>
                 <div class="menu_d"></div>
                 <div class="menu_d"></div>
                </div>
                <p id="doctor_title">Dash Board</p>
            </div>
            <div id="side_bar">
                <ul>
                    <li id="doctor_dash">Doctor</li>
                    <li class="doctor_operation"id="doctor_insert">Insert</li>
                    <li class="doctor_operation">View</li>
                    
                     <li id="hospital_dash">Hospital</li>
                     <li class="hospital_operation"id="hospital_insert">Insert</li>
                          <li class="hospital_operation">View</li>
                      <li id="pharmacy_dash">Pharmacy</li>
                          <li class="pharmacy_operation">Insert</li>
                          <li class="pharmacy_operation">View</li>
                      <li id="ambulance_dash">Ambulance</li>
                         <li class="ambulance_operation">Insert</li>
                         <li class="ambulance_operation">View</li>
                      <li id="blood_dash">Blood Bank</li>
                         <li class="blood_operation">Insert</li>
                          <li class="blood_operation">View</li>
                      <li>User Information </li>
                         
                </ul>
        </div>
            <div id="insert_doctor_information" class="insert_table">
            <h2>Insert Doctor information</h2>
            <h3 id="close">&times;</h3>
            <?php
            if(isset($_SESSION['success_msg']) && !empty($_SESSION['success_msg'])){
                echo $_SESSION['success_msg'];
                unset($_SESSION['success_msg']);
            }
            
            ?>
            <form action="../controll/doctor/doctor_insert_data.php" method="POST" enctype="multipart/form-data" role="form">
            <input type="file" name="profile_pic"><br>
            <label id="admin_label">Doctor name:</label>
            <input type="text" name="docotor_name" id="admin_input"><br>
            <label id="admin_label">Doctor Degree</label>
            <input type="text" name="doctor_degree"id="admin_input"><br>
            
            <label id="admin_label">Specialist </label><br>
            <select name="specialist" style="float:left">
                <option value="হৃদরোগ বিশেষজ্ঞ">হৃদরোগ বিশেষজ্ঞ </option>
                 <option value="ক্যান্সার বিশেষজ্ঞ">ক্যান্সার বিশেষজ্ঞ</option>
                <option value="মেডিসিন বিশেষজ্ঞ">মেডিসিন বিশেষজ্ঞ</option>
                <option value="স্নায়ুরোগ বিশেষজ্ঞ">স্নায়ুরোগ বিশেষজ্ঞ</option>
                <option value="চর্ম ও যৌন রোগ  বিশেষজ্ঞ">চর্ম ও যৌন রোগ  বিশেষজ্ঞ</option>
                <option value="নাক কান গলা বিশেষজ্ঞ">নাক কান গলা বিশেষজ্ঞ </option>
                <option value="চোখ  বিশেষজ্ঞ" >চোখ  বিশেষজ্ঞ</option>
                <option value="শিশু রোগ বিশেষজ্ঞ" >শিশু রোগ বিশেষজ্ঞ</option>
                <option value="ডেন্টিস্ট">ডেন্টিস্ট</option>
            </select><br>
            <label id="admin_label">Chamber</label>
            <input type="text" name="chamber"id="admin_input"><br>
            <label id="admin_label">Chamber Location</label>
            <textarea name="chamber_location" style="margin-left:10%;width: 70%;height: 10%;"></textarea><br>
            <label id="admin_label">Time</label>
            <input type="time" name="time"id="admin_input"><br>
            <label id="admin_label">Mobile</label>
            <input type="text" name="mobile"id="admin_input"><br>
            <label id="admin_label">Telephone</label>
            <input type="text" name="telephone"id="admin_input"><br>
            <label id="admin_label">Email</label>
            <input type="email" name="email"id="admin_input"><br>
            <label id="admin_label">Web site</label>
            <input type="text" name="website"id="admin_input"><br>
            <label id="admin_label">About</label><br><br>
            <textarea name="about" style="margin-left:10%;width: 70%;height: 10%;"></textarea><br>
            <input type="submit" name="submit" value="Submit">
        </form>
            
        </div>
            //hospital form start.
         <div id="insert_hospital_information" class="insert_table">
            <h2>Insert Hospital information</h2>
            <h3 id="close_hospital">&times;</h3>
           
            <form action="../controll/hospital/insert_hospital_information.php" method="POST" enctype="multipart/form-data" role="form">
            <input type="file" name="image"><br>
            <label id="admin_label">Hospital name:</label>
            <input type="text" name="hospital_name" id="admin_input"><br>
            
            
            <label id="admin_label">Type </label><br>
            <select name="type" style="float:left">
                <option value="সরকারী মেডিক্যাল কলেজ ও হাসপাতাল">সরকারী মেডিক্যাল কলেজ ও হাসপাতাল</option>
                 <option value="সরকারী হাসপাতাল">সরকারী হাসপাতাল</option>
                <option value="বেসরকারি হাসপাতাল">বেসরকারি হাসপাতাল</option>
                <option value="চক্ষু হাসপাতাল">চক্ষু হাসপাতাল</option>
                <option value="মাতৃ সেবা কেন্দ্র">মাতৃ সেবা কেন্দ্র</option>
                 <option value="ক্লিনিক ও ডায়াগনস্টিক সেন্টার">ক্লিনিক ও ডায়াগনস্টিক সেন্টার</option>
              
            </select><br>
            
            <label id="admin_label">Address</label>
            <textarea name="address" style="margin-left:10%;width: 70%;height: 10%;"></textarea><br>
            
            <label id="admin_label">Mobile</label>
            <input type="text" name="mobile"id="admin_input"><br>
            <label id="admin_label">Telephone</label>
            <input type="text" name="telephone"id="admin_input"><br>
            <label id="admin_label">Email</label>
            <input type="email" name="email"id="admin_input"><br>
            <label id="admin_label">Web site</label>
            <input type="text" name="website"id="admin_input"><br>
            <label id="admin_label">About</label><br><br>
            <textarea name="about" style="margin-left:10%;width: 70%;height: 10%;"></textarea><br>
            <input type="submit" name="submit" value="Submit">
        </form>
            
        </div>   //hospital form end.
            <p id="page_upper">&triangle;</p>
        </div>
        
    </body>
</html>
