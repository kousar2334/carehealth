<?php
require_once'../src/Doctor.php';

$obj1=new Doctor();

                   
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
        <script src="../js/doctor_page_script.js"></script>
        <link rel="stylesheet" href="../css/page_viewer.css">
        
        
        <style>
            
        </style>
        
    </head>
    <body style="margin: 0px;">
        <?php require_once 'header.php';?>
        <div id="doctor">
            <div id="doctor_header">
                <div id="menu_icon_d">
                <div class="menu_d"></div>
                 <div class="menu_d"></div>
                 <div class="menu_d"></div>
                </div>
                <img src="../images/doctor_header_background.jpg" alt="Doctor" id="content_photo">
                <p id="doctor_title">ডাক্তার</p>
                <img src="../images/search-3-xxl.png" id="search_icon">
                <div id="search_page">
                
                    
                    <div id="search_frame">
                        <div id="search_box">
                            <p id="close_search_page">&times;</p>
                            <p id="search_header">Search Doctor by Name</p> 
                            <input type="text" id="search_txt" placeholder="Enter Doctor's Name">
                        </div>  
                        
                        <div id="search_result">
                           
                        </div>
                    </div>
            </div>
            </div>
            
            <div id="side_bar">
                <ul>
                    <li id="cardiac_link">হৃদরোগ বিশেষজ্ঞ</li>
                    <li id="cancer_link">ক্যান্সার বিশেষজ্ঞ</li>
                    <li id="medicine_link">মেডিসিন বিশেষজ্ঞ</li>
                    <li id="nurology_link">স্নায়ুরোগ বিশেষজ্ঞ</li>
                    <li id="skin_link">চর্ম ও যৌন রোগ  বিশেষজ্ঞ</li>
                    <li id="neck_link">নাক কান গলা বিশেষজ্ঞ </li>
                    <li id="eye_link">চোখ  বিশেষজ্ঞ </li>
                    <li id="child_link"> শিশু রোগ বিশেষজ্ঞ</li>
                    <li id="dentist_link">ডেন্টিস্ট</li>
                
                </ul>
        </div>
            <div id="content">
                <div id="side_bar_link_viewer">
                    
                </div>
                <?php
                $alldata=$obj1->view_all_information();
                
                foreach ($alldata as $data){?>
                <div id="view_content">
                    
                    <?php
                    if(!empty($data['image'])){
                        ?>
                     <div id="image_frame"><img src="../images/<?php echo $data['image']?>" alt="image" id="content_image"></div> 
                    <?php
                    }
                     else {?>
                     <div id="image_frame"><img src="../images/user-icon.jpg" alt="image" id="content_image"></div> 
                     <?php }
                    ?>
                   
                    <p style="font-size:22px;color: #0a59d8"><?php echo $data['name']?></p>
                <?php 
                if(isset($data['doctor_degree'])&& !empty($data['doctor_degree'])){
                 echo $data['doctor_degree']."<br>";   
                }?>
                <?php if(isset($data['specialist'])&& !empty($data['specialist'])){
                    echo $data['specialist']."<br><br>";
                    
                }?>
                
                <?php 
                if(isset($data['chamber'])&& !empty($data['chamber'])){
                 echo $data['chamber']."<br>";   
                }
                ?>
                
                 <?php 
                 if(isset($data['chamber_location'])&& !empty($data['chamber_location'])){
                    echo $data['chamber_location']."<br>"; 
                 }
                 ?>
                 <?php 
                 if(isset($data['time']) && !empty($data['time'])){
                  echo $data['time']."<br>";   
                 }
                 ?>
                 <?php 
                 if(isset($data['mobile']) && !empty($data['time'])){
                     echo $data['mobile']."<br>"; 
                 }
                ?>
                 <?php 
                 if(isset($data['telephone']) && !empty($data['telephone'])){
                   echo $data['telephone']."<br>";  
                 }
                 ?>
                 <?php
                 if(isset($data['email'])&& !empty($data['email'])){
                      echo $data['email']."<br>";
                 }
                ?>
                 <p id="content_txt"><a href="<?php echo $data['website']?>"> <?php 
                 if(isset($data['website']) && !empty($data['website'])){
                     echo $data['website'];
                 }
                 ?></a></p>
                 <?php 
                 if(isset($data['about']) && !empty($data['about'])){
                     echo $data['about']."<br>";
                 }
                 ?>
                 
               <?php 
                }
                ?>
                </div>
            </div>
        </div>
        
    </body>
</html>
