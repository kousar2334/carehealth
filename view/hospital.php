<?php
require_once'../src/Hospital.php';
$object=new Hospital();

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
        <script src="../js/hospital_page_script.js"></script>
        <link rel="stylesheet" href="../css/page_viewer.css">
        <script>
        
        </script>
        
        
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
                <img src="../images/hospital_header_background.jpg" alt="Doctor" id="content_photo">
                <p id="doctor_title">হাসপাতাল</p>
                 <img src="../images/search-3-xxl.png" id="search_icon">
                 
                 <div id="search_page">
                
                    
                    <div id="search_frame">
                        <div id="search_box">
                            <p id="close_search_page">&times;</p>
                            <p id="search_header">Search Hospital by Name</p> 
                            <input type="text" id="search_txt" placeholder="Enter Hospital's Name">
                        </div>  
                        
                        <div id="search_result">
                           
                        </div>
                    </div>
            </div>
            </div>
            <div id="side_bar">
                <ul>
                    <li id="govt_college_hospital_link">সরকারী মেডিক্যাল কলেজ ও হাসপাতাল </li>
                    <li id="govt_hospital_link">সরকারী হাসপাতাল</li>
                    <li id="private_hospital_link">বেসরকারি হাসপাতাল </li>
                    <li id="eye_hospital_link">চক্ষু হাসপাতাল  </li>
                    <li id="maternal_hospital_link">মাতৃ সেবা কেন্দ্র </li>
                    <li id="clinic_link"> ক্লিনিক ও ডায়াগনস্টিক সেন্টার </li>
                         
                </ul>
        </div>
            <div id="content">
                 <div id="side_bar_link_viewer">
                    
                </div>
                <?php
                $alldata=$object->view_all_information();
                
                foreach ($alldata as $data){?>
                <div id="view_content">
                    <div id="hospital_image_frame"><img src="../images/<?php echo $data['image']?>" alt="image" id="content_image"></div> 
                    <p style="font-size:20px;color:#16a085"><?php echo $data['hospital_name']?></p>
                
                <?php 
                if(isset($data['mobile'])&& !empty($data['mobile'])){
                 echo "Mobile: ".$data['mobile']."<br>";   
                }
                ?>
                
                 <?php 
                 if(isset($data['telephone'])&& !empty($data['telephone'])){
                    echo "Telephone: ".$data['telephone']."<br>"; 
                 }
                 ?>
                 
                <?php
                 if(isset($data['email'])&& !empty($data['email'])){
                      echo "Email: ".$data['email']."<br>";
                 }
                ?>
                 <?php 
                 if(isset($data['address']) && !empty($data['address'])){
                   echo "Address<br>".$data['address']."<br>";  
                 }
                 ?>
                 
                    <p id="content_txt"><a href="<?php echo $data['website']?>" style="color:blue;text-decoration: underline"> <?php 
                 if(isset($data['website']) && !empty($data['website'])){
                     echo "Website: ".$data['website'];
                 }
                 ?></a></p>
                 <?php 
                 if(isset($data['about']) && !empty($data['about'])){
                     echo "About<br>".$data['about']."<br>";
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
