<?php

include '../../src/User.php';
$obj=new User();

if($_SERVER['REQUEST_METHOD']=='POST'){
    
    $password=$_POST['password'];
    $con_password=$_POST['con_password'];
    if($con_password==$password){
     $obj->data_process($_POST);
    $obj->registration();
    }
 else {
        session_start();
        $_SESSION['password_error']="Password does not match";
        header('location:../../view/create_ac.php');
    }
    
}
 else {
$_SESSION['sign_up_error']="";    
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

