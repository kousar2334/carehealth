<?php
include_once 'Db.php';

class Doctor {
    public $id='';
    public $doctor_name='';
    public $doctor_degree='';
    public $email='';
    public $specialist='';
    public $chamber='';
    public $chamber_location='';
    public $time='';
    public $mobile='';
    public $telephone='';
    public $website='';
     public $about='';
      public $image_name='';
      public $data='';
    public function __construct() {
       $object=new Db();
       //session_start(); 
}
public function data_process($data){
    if(array_key_exists('id', $data)){
        $this->id=$data['id'];
    }
    if(array_key_exists('docotor_name', $data)&& !empty($data['docotor_name'])){
        $this->doctor_name=$data['docotor_name'];  
    } 
    if(array_key_exists('doctor_name', $data)&& !empty($data['doctor_name'])){
        $this->doctor_name=$data['doctor_name'];  
    } 
    if(array_key_exists('doctor_degree', $data)&& !empty($data['doctor_degree'])){
        $this->doctor_degree=$data['doctor_degree'];  
    }  
    if(array_key_exists('specialist', $data)&& !empty($data['specialist'])){
        $this->specialist=$data['specialist'];  
    }  
    if(array_key_exists('chamber', $data)&& !empty($data['chamber'])){
        $this->chamber=$data['chamber'];  
    }  
    if(array_key_exists('chamber_location', $data)&& !empty($data['chamber_location'])){
        $this->chamber_location=$data['chamber_location'];  
    }  
    if(array_key_exists('time', $data)&& !empty($data['time'])){
        $this->time=$data['time'];  
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
    if(array_key_exists('profile_pic', $data)&& !empty($data['profile_pic'])){
        $this->image_name=$data['profile_pic'];  
    }
    
}

public function data_insert(){
    session_start();
    $query="INSERT INTO `doctor` (`id`, `name`, `chamber`, `chamber_location`, `mobile`, `telephone`, `email`, `website`, `about`, `image`, `specialist`, `doctor_degree`, `time`, `unique_id`) VALUES (NULL, '$this->doctor_name', '$this->chamber', '$this->chamber_location', '$this->mobile', '$this->telephone', '$this->email', '$this->website', '$this->about', '$this->image_name', '$this->specialist', '$this->doctor_degree', '$this->time', '".uniqid()."');";
    if(mysql_query($query)){
        $_SESSION['success_msg']="Data Added successfully";
        header('location:../../view/admin_page.php');
    }
}
public function view_all_information(){
    $query="SELECT * FROM `doctor`";
    $result=mysql_query($query);
        while ($row=mysql_fetch_assoc($result)){
            $this->data[]=$row;
        }
        return $this->data;
}

public function view_doctor(){
    if(!empty($this->specialist)&& isset($this->specialist)){
       
        $query="SELECT * FROM `doctor` WHERE specialist='$this->specialist'";
        $result=mysql_query($query);
        while ($row=mysql_fetch_assoc($result)){
            $this->data[]=$row;
        }
        return $this->data;
    
}
}

public function search_doctor(){
  if(isset($this->doctor_name)&& !empty($this->doctor_name)){
   $query="SELECT * FROM `doctor` WHERE name like '%$this->doctor_name%'";
        $result=mysql_query($query);
        while ($row=mysql_fetch_assoc($result)){
            $this->data[]=$row;
        }
        return $this->data;
}
}
public function test(){
    //WHERE specialist='$this->specialist'
    echo $this->specialist;
}
}
