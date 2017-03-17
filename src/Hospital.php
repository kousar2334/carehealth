<?php

include_once 'Db.php';
/**
 * Description of Hospital
 *
 * @author Kousar Rahman
 */
class Hospital {
    
    public $hospital_name='';
    public $id='';
    public $mobile='';
    public $type='';
    public $address='';
    public $telephone='';
    public $email='';
    public $about='';
    public $image_name='';
    public $website='';
    public $data='';
    public function __construct() {
       $object=new Db();
       //session_start(); 
}
    public function data_process($data){
        if(array_key_exists('id', $data)){
            $this->id=$data['id'];
        }
        
        if(array_key_exists('hospital_name', $data)&& !empty($data['hospital_name'])){
            $this->hospital_name=$data['hospital_name'];
        }
        if(array_key_exists('type', $data)&& !empty($data['type'])){
            $this->type=$data['type'];
        }
        if(array_key_exists('address', $data)&& !empty($data['address'])){
            $this->address=$data['address'];
        }
        if(array_key_exists('mobile', $data)&& !empty($data['mobile'])){
            $this->mobile=$data['mobile'];
        }
        if(array_key_exists('telephone', $data)&& !empty($data['telephone'])){
            $this->telephone=$data['telephone'];
        }
        if(array_key_exists('email', $data)&& !empty($data['email'])){
            $this->email=$data['email'];
        }
        if(array_key_exists('website', $data)&& !empty($data['website'])){
            $this->website=$data['website'];
        }
        if(array_key_exists('about', $data)&& !empty($data['about'])){
            $this->about=$data['about'];
        }
        if(array_key_exists('image', $data)&& !empty($data['image'])){
            $this->image_name=$data['image'];
        }
    }
    public function data_store(){
        $query="INSERT INTO `hpsoital` (`id`, `hospital_name`, `type`, `image`, `mobile`, `address`, `telephone`, `email`, `website`,`about`, `unique_id`) VALUES (NULL, '$this->hospital_name', '$this->type', '$this->image_name', '$this->mobile', '$this->address', '$this->telephone', '$this->email', '$this->website','$this->about', '". uniqid()."');";
        if (mysql_query($query)){
             header('location:../../view/admin_page.php');
        }
       
    }
public function view_all_information(){
    $query="SELECT * FROM `hpsoital`";
    $result=mysql_query($query);
        while ($row=mysql_fetch_assoc($result)){
            $this->data[]=$row;
        }
        return $this->data;
}
public function view_hospital(){
    if(!empty($this->type)&& isset($this->type)){
       
        $query="SELECT * FROM `hpsoital` WHERE type='$this->type'";
        $result=mysql_query($query);
        while ($row=mysql_fetch_assoc($result)){
            $this->data[]=$row;
        }
        return $this->data;
    
}
}

public function search_hospital(){
  if(isset($this->hospital_name)&& !empty($this->hospital_name)){
   $query="SELECT * FROM `hpsoital` WHERE hospital_name like '%$this->hospital_name%'";
        $result=mysql_query($query);
        while ($row=mysql_fetch_assoc($result)){
            $this->data[]=$row;
        }
        return $this->data;
}
}
    public function text(){
    
    echo"this is from class";
}
}
