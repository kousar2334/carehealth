<?php
include_once '../../src/Blood_bank.php';
$obj=new Blood_bank();


if($_SERVER['REQUEST_METHOD']=="POST"){
 $image_name=$_FILES['image']['name'];
$image_type=$_FILES['image']['type'];
$image_location=$_FILES['image']['tmp_name'];
$image_size=$_FILES['image']['size'];
    move_uploaded_file($image_location, "../../images/$image_name");
    $_POST['image']=$image_name;
    $obj->data_proccess($_POST);
    $obj->data_store();
}