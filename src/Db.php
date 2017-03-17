<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Db
 *
 * @author Kousar Rahman
 */
class Db {
    public function __construct() {
        //session_start();
        mysql_connect("localhost","root","") or dir("Server not found");
        mysql_select_db("carehealth") or die("Database not found");
        
    }
    
}
