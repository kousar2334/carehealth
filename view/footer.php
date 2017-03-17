<?php
?>
<html>
    <header>
        <style>
            #container{
                margin-top: 1600px;
                width: 100%;
                height:230px;
                background-color:#ecf0f1;
                margin-top: auto;
            }
            .content_box{
                width: 20%;
                height: auto;
                float: left;
                margin-left: 13%;
               }
            .content_header{
                text-align:left;
                font-size: 25px;
            }
            li{
                font-size: 18px;
                cursor: pointer;
            }
            @media all and (max-width: 800px) {
                .content_box{
                    width: 100%;
                    margin-left: 0px;
                }
                .content_header{
                    text-align: center;
                }
                li{
                    text-align: center;
                    list-style-type: none;
                }
                #container{
                    height: 500px;
                }
            }
        </style>
    </header>
    <body style="margin:0px">
        <div id="container">
            <div class="content_box">
                <p class="content_header">About</p>
                <li>About us </li>
                <li>Contact Us  </li>
                <li>Privacy Policy </li>
            </div> 
            <div class="content_box">
                <p class="content_header">For Sponsor's</p> 
                <li> Advertise With Us </li>
                <li> Advertising Policy  </li>
                <li>Sponsor Policy </li>
            </div> 
            <div class="content_box">
                 <p class="content_header">Follow Us</p>
                  <img src="../images/facebook-4-64.ico" class="follow_icon">
                  <img src="../images/twitter-4-64.ico" class="follow_icon">
                  <img src="../images/google-plus-2-64.ico" class="follow_icon">
                
            </div> 
            <br><br>
           
        </div>
        
    </body>
    
</html>
