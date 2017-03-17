<?php
session_start();
include_once '../../src/User.php';
$obj=new User();
unset($_SESSION['user']);
header('location:../../view/index.php');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

