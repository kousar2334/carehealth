<?php

include_once '../../src/Blood_bank.php';
$obj=new Blood_bank();
$obj->data_proccess($_POST);

                $alldata=$obj->search_blood();
                if(isset($alldata)&& !empty($alldata)){
                    
              echo"<br>";
                echo"<br>";
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
                echo"<br>";
                echo"<br>";
                echo "No donner no view";
            }
                ?>