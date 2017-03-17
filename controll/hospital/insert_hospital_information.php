<?php
require_once '../../src/Hospital.php';
$object=new Hospital();
if($_SERVER['REQUEST_METHOD']=='POST'){
$image_name=$_FILES['image']['name'];
$image_type=$_FILES['image']['type'];
$image_location=$_FILES['image']['tmp_name'];
$image_size=$_FILES['image']['size'];
move_uploaded_file($image_location, "../../images/$image_name");


$_POST['image']=$image_name;
$object->data_process($_POST);
$object->data_store();
}
 else {
echo "Opps some thing wrong";    
}