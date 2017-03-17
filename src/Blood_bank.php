<?php
include_once 'Db.php';
/*
 * @author Kousar Rahman
 */
class Blood_bank {
    
    public $name='';
    public $blood_group='';
    public $image='';
    public $mobile='';
    public $id='';
    public $email='';
    public $address='';
    public $data="";
    public function __construct() {
      $object=new Db();
      //session_start(); 
    }
    public function  data_proccess($data){
        if(array_key_exists('id', $data)){
            $this->id=$data['id'];
        }
        if(array_key_exists('image', $data)){
            $this->image=$data['image'];
        }
        if(array_key_exists('name', $data)&& !empty($data['name'])){
            $this->name=$data['name'];
        }
        else{
           
        }
         if(array_key_exists('blood_group', $data)&& !empty($data['blood_group'])){
            $this->blood_group=$data['blood_group'];
        }
         if(array_key_exists('mobile', $data)&& !empty($data['mobile'])){
            $this->mobile=$data['mobile'];
        }
         if(array_key_exists('email', $data)&& !empty($data['email'])){
            $this->email=$data['email'];
        }
         if(array_key_exists('address', $data)&& !empty($data['address'])){
            $this->address=$data['address'];
        }
    }
  
    public function data_store(){
        if(!empty($this->name)&& !empty($this->address)&& !empty($this->mobile)){
        $query="INSERT INTO `blood_bank` (`id`, `name`, `blood_group`, `email`, `mobile`, `image`, `address`, `unique_id`) VALUES (NULL, '$this->name', '$this->blood_group', '$this->email', '$this->mobile', '$this->image', '$this->address', '".uniqid()."');";
        if(mysql_query($query)){
            $_SESSION["reg_msg"]="Successfully submitted";
            header('location:../../view/blood_bank.php');
        }
        }
        elseif (empty ($this->name)) {
              session_start();
            $_SESSION['empty_name']="Enter ypur name";
             header('location:../../view/blood_bank.php');
        
            }
      }
    public function view_donar_list(){
        $query="SELECT * FROM `blood_bank`";
        $result=mysql_query($query);
        while ($row=mysql_fetch_assoc($result)){
            $this->data[]=$row;
        }
        return $this->data;
    }
   public function search_blood(){
   if(isset($this->address)&& !empty($this->address)){
   $query="SELECT * FROM `blood_bank` WHERE address like '%$this->address%' AND blood_group='$this->blood_group'";
        $result=mysql_query($query);
        while ($row=mysql_fetch_assoc($result)){
            $this->data[]=$row;
        }
        return $this->data;
}
}
    public function test(){
        echo "this is from class";
    }
}
