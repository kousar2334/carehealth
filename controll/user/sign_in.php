<?php
include '../../src/User.php';
$obj=new User();

if($_SERVER['REQUEST_METHOD']=='POST'){
    $obj->data_process($_POST);
    $obj->login();
   // header('location:../../view/header.php');
    //echo"<pre>";
    //print_r($_SESSION['user']);
}
 else {
$_SESSION['login_error']="";    
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

