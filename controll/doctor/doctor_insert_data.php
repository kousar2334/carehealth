<?php

include_once '../../src/Doctor.php';
$obj=new Doctor();





if($_SERVER['REQUEST_METHOD']=='POST'){
$image_name=$_FILES['profile_pic']['name'];
$image_type=$_FILES['profile_pic']['type'];
$image_location=$_FILES['profile_pic']['tmp_name'];
$image_size=$_FILES['profile_pic']['size'];
move_uploaded_file($image_location, "../../images/$image_name");
$_POST['profile_pic']=$image_name;
$obj->data_process($_POST);
$obj->data_insert();
}
 else {
echo "Opps some thing wrong";    
}