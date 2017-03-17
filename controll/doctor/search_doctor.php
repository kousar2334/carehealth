<?php
include_once '../../src/Doctor.php';
$obj=new Doctor();

 $obj->data_process($_POST);
 ?>
<html>
    <header>
        
    </header>
    <body>
        <?php
        $alldata=$obj->search_doctor();
                if(!empty($alldata)){
                foreach ($alldata as $data){?>
                <div id="view_content">
                    <div id="image_frame"><img src="../images/<?php echo $data['image']?>" alt="image" id="content_image"></div> 
                    <p style="font-size:22px;color: #16a085"><?php echo $data['name']?></p>
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
                }
 else {
     echo "No result found to view";
 }
                ?>
                
                </div>
    </body>
</html>
    
