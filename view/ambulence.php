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
        <link rel="stylesheet" href="../css/page_viewer.css">
        <script>
        $(document).ready(function(){
           $("#menu_icon_d").click(function(){
               $("#side_bar").slideToggle("slow");
           }) ;
        });
        
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
                <img src="../images/ambulance_header_background.jpg" alt="Doctor" id="content_photo">
                <p id="doctor_title">এম্বুলেন্স </p>
                 <img src="../images/search-3-xxl.png" id="search_icon">
            </div>
            <div id="side_bar">
                <ul>
                    <li>সরকারি </li>
                      <li>বেসরকারি  </li>
                       <li> লাশবাহি গাড়ি </li>
                        
                </ul>
        </div>
        </div>
        
    </body>
</html>

