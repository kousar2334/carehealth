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
        <script src="../js/jquery-3.1.1.js"></script>
        <link rel="stylesheet" href="../css/mobile_view_max_width_800.css">
        <title>Care Health -Home Page</title>
        <style>
            #slider{
                width: 100%;
                height: 400px;
                
                overflow: scroll;
            }
            #slider_up{
                width: 100%;
                height: 400px;
                position: absolute;
               background-color: black;
                margin-top: -400px;
                opacity: .6;
            }
            #middle_content_body{
                position:relative;
                width: 100%;
               height: auto;
              
            }
            #tag_line{
                position:absolute;
                margin-top: -260px;
                margin-left: 100px;
                color: red;
                font-size:30px;
            }
            #line{
                width: 100%;
                height: 3px;
                background-color:buttonface;
                margin-top: -20px;
            }
            #health_tips{
                font-size: 25px;
                margin-left: 10%;
            }
            .tips_box{
                position: relative;
                width: 20%;
                height: 350px;
                border:1px solid gray;
                margin-top: 30px;
                margin-left: 10%;
                float: left;
            }
            .tips_box:hover{
                box-shadow: 0px 3px 3px 3px activeborder;
                border-color:activeborder;
            }
            .image_circle_frame{
                width: 70%;
                height: 50%;
                margin-top: 5%;
                float: left;
                margin-left:10%;
                border:10px solid whitesmoke;
                border-radius: 50%;
            }
            .image_circle_frame:hover{
                border-color: orange;
            }
            .tips_image{
                width: 100%;
                height: 100%;
                border-radius: 50%;
            }
            .tips_header{
                font-size: 20px;
                text-align: center;
                cursor: pointer;
            }
            #footer{
                width: 100%;
                position: relative;
                margin-top: 800px;
                height: 1px;
                background-color:whitesmoke;
            }
            @media all and (max-width: 800px) {
               
            }
        </style>
        
    </head>
    <body style="margin: 0px;">
        <?php 
        
        include_once 'header.php';?>
        <img src="../images/Mental_Health_Feature.jpg" id="slider">
        <div id="slider_up">
            
        </div>
        <p id="tag_line">আপনার স্বাস্থ্য সেবায়..... </p>
        <div id="middle_content_body">
            <p id="health_tips">স্বাস্থ্য বিষয়ক পরামর্শ</p> 
            <div id="line"></div>
            <div class="tips_box">
                <div class="image_circle_frame">
                    <img src="../images/mom&child.jpg"  class="tips_image"> 
                    <p class="tips_header">মা ও শিশুর স্বাস্থ্য </p>
                </div>  
            </div>
            <div class="tips_box">
              <div class="image_circle_frame">
                  <img src="../images/food&nutration.png"  class="tips_image"> 
                    <p class="tips_header">খাদ্য ও পুষ্টি  </p>
                </div>   
            </div>
            <div class="tips_box">
                <div class="image_circle_frame">
                    <img src="../images/Body_bodybuilding_charge_energy_fitness_power-512.png"  class="tips_image"> 
                    <p class="tips_header">বডি ফিটনেস</p>  
                </div> 
            </div>
            <div class="tips_box">
                <div class="image_circle_frame">
                    <img src="../images/beauty.jpg"  class="tips_image"> 
                    <p class="tips_header">রূপচর্চা</p> 
                </div> 
            </div>
            
        </div>
        
        <div id="footer"></div>
    </body>
</html>

<?php include_once 'footer.php';?>