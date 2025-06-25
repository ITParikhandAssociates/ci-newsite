<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_Model extends CI_Model 
{
	  public function authentication($auth)
  {

           $nm=$auth['user_name'];
        $pwd=$auth['password'];
    $q=$this->db->query("SELECT * FROM `login_tbl` WHERE `user_name`='$nm' AND `password`='$pwd'");
     $data=$q->result();
     return $data;
  }


 }