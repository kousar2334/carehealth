<?php
include_once '../../src/Hospital.php';
$obj=new Hospital();

    $obj->data_process($_POST);
    
  
 ?>
<html>
    <header>
        
    </header>
    <body>
        
        <?php
                $alldata=$obj->view_hospital();
                if(!empty($alldata)){
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
                }
 else {
     echo"No Information to view";
 }
                ?>
                </div>
    </body>
</html>
