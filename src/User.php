<?php
include_once 'Db.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author Kousar Rahman
 */
class User {
    public $id='';
    public $first_name='';
    public $last_name='';
    public $email='';
    public $password='';
    public $gender='';
    public $mobile_phone='';
    public $location='';
    public $image='';


    public function __construct() {
        new Db();
        
    }
    public function data_process($data){
        
        if(array_key_exists('id', $data)){
            $this->id=$data['id'];
        }
        if(array_key_exists('first_name', $data)&& !empty($data['first_name'])){
            $this->first_name=$data['first_name'];
        }
       else {
           $_SESSION['name_error']="";
           
       }
       
       if(array_key_exists('last_name', $data)&& !empty($data['last_name'])){
            $this->last_name=$data['last_name'];
        }
       else {
           $_SESSION['name_error']="";
           
       }
    if(array_key_exists('email', $data)&& !empty($data['email'])){
            $this->email=$data['email'];
        }
       else {
           $_SESSION['name_error']="";
           
       }
    if(array_key_exists('password', $data)&& !empty($data['password'])){
            $this->password=$data['password'];
        }
       else {
           $_SESSION['name_error']="";
           
       }
    if(array_key_exists('gender', $data)&& !empty($data['gender'])){
            $this->gender=$data['gender'];
        }
       else {
           $_SESSION['name_error']="";
           
       }
    if(array_key_exists('mobile_phone', $data)&& !empty($data['mobile_phone'])){
            $this->mobile_phone=$data['mobile_phone'];
        }
       else {
           $_SESSION['name_error']="";
           
       }
    if(array_key_exists('location', $data)&& !empty($data['location'])){
            $this->location=$data['location'];
        }
       else {
           $_SESSION['name_error']="";
           
       }
    
    }
    public function registration(){
        session_start();
       $query="INSERT INTO `user` (`id`, `first_name`, `last_name`, `email`, `password`, `gender`, `mobile_phone`, `location`, `image`, `unique_id`) VALUES (NULL, '$this->first_name', '$this->last_name', '$this->email', '$this->password', '$this->gender', '$this->mobile_phone', '$this->location', '$this->image', '".uniqid()."');" ;
       if(mysql_query($query)){
           $_SESSION['registration_msg']="Registration successfull";
           header('location:../../view/index.php');
       }
       else{
           $_SESSION['sign_up_error']="";
       }
    }
    public function login(){
        session_start();
        if(!empty($this->email)&& !empty($this->password)){
            $query="SELECT * FROM `user` WHERE email='$this->email' && password='$this->password'";
            $result=mysql_query($query);
            $row=mysql_fetch_assoc($result);
            
            if(!empty($row)){
                $_SESSION['user']=$row;
                header('location:../../view/index.php');
            }
       else {
            $_SESSION['login_error']="Invalid email or password";
            header('location:../../view/index.php');
       }
        }
        elseif (empty ($this->email)) {
        $_SESSION['empty_email_error']="Email is empty";
        header('location:../../view/index.php');
    }
    elseif (empty ($this->password)) {
        $_SESSION['empty_password_error']="Password is empty";
        header('location:../../view/index.php');
    }
  else {
        $_SESSION['both_empty_error']="Email and password are empty";    
        } 
    }
}
