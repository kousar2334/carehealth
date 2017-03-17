
<html>
    <head>
        <meta charset="UTF-8">
       
           <meta name="viewport" content="width=device-width, initial-scale=1.0">
           <script src="../js/jquery-3.1.1.js"></script>
        <title>Carehealth -Sign up</title>
        <style>
            #main_body{
                margin: 0px;
                border: 0px;
                padding: 0px;
                background-color:white;
                
            }
           
            #create_ac_box{
                width: 380px;
                height:auto;
                right:40px;;
                position: absolute;
                margin-top: 80px;
                background-color: whitesmoke;
            }
           
            lebel{
                width: 90%;
                margin-left:8%;
                float: left;
                margin-top: 20px;
            }
            #submit_bt{
                display: block;
                background-color:#4286f4;
                border: 0px;
                border-radius: 2px;
                margin-top: 20px;
                color: white;
                padding: 7px;
                cursor: pointer;
                float: left;
                width: 80%;
            }
             @media all and (max-width: 800px) {

                 #create_ac_box{
                     width: 100%;
                     right: 0px;
                 }
             }
        </style>
    </head>
    <body id="main_body">
        <?php include_once 'header.php';?>
        <div id="create_ac_box">
            <form action="../controll/user/sign_up.php" method="POSt">
                <lebel>নাম </lebel><br>
            
                <input type="text" name="first_name"  placeholder="First" style="width:38%;" required="">
            <input type="text" name="last_name" placeholder="Last" style="width: 38%;margin-left:2%">
            <lebel>ইউজার নেম 
            
            </lebel>
            <input type="email" placeholder="Email" name="email" required="">
            <lebel>পাসওয়ার্ড  
            
            </lebel>
            <?php
           
            if(isset($_SESSION['password_error'])&& !empty($_SESSION['password_error'])){
               ?>
            <p style="color:red">
              <?php
               echo $_SESSION['password_error'];?>
              </p>
               <?php unset($_SESSION['password_error']);
            }
            ?>
            <input type="password" name="password" required="" >
            <lebel>কনফার্ম  পাসওয়ার্ড  </lebel>
            <input type="password" name="con_password" required="">
            <lebel>লিঙ্গ</lebel>
            <select name="gender" style="padding:5px; margin-left: 8%;margin-top: 5px;width: 80%">
               
                <option>Male</option>
                 <option>Female</option>
                 
            </select><br>
            
            <lebel> মোবাইল</lebel>
            <input type="text" name="mobile_phone"  placeholder="+880">
            <lebel> অবস্থান </lebel>
            <select name="location" style="padding:5px; margin-left: 8%;margin-top: 5px;width: 80%">
               
                <option>Bangladesh</option>
                 <option>India</option>
                 <option>Pakistan</option>
                 <option>Dubai</option>
            </select><br>
            <input type="checkbox" required="" style="width:5%;float: left;margin-top: 15px;"><a href="#" style="text-decoration:none;float: left;width: 70%;margin-top:10px; color:#4286f4">I agree with terms & condition</a>
            <input type="submit" value="Submit " id="submit_bt">
            </form>   
            
        </div>
       
    </body>
</html>
