<?php
ob_start();

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
public function index()
{
	$this->load->view('login');
}
public function authenticate_admin()
{
	$this->load->helper('cookie'); 
	if(isset($_POST["submit"]))   
	{  
		if(!empty($_POST["username"]) && !empty($_POST["pass"]))
			{
				$auth = array('user_name' =>$this->input->post('username') , 
							  'password' =>$this->input->post('pass'));
				$this->load->model('Login_Model');
				$val=$this->Login_Model->authentication($auth);
				if($val)
				{
			      $pwd=$val[0]->password;
				  $nm=$val[0]->user_name;
				if(!empty($_POST["remember_me"]))
				{  
				set_cookie ("member_login_nm",$nm,time()+ (10 * 365 * 24 * 60 * 60));  
    			set_cookie ("member_password_pwd",$pwd,time()+ (10 * 365 * 24 * 60 * 60));
				} 
   			else
   			{
   					if(isset($_COOKIE["member_login_nm"]))   
    				{  
     					set_cookie("member_login_nm","");  
    				}  
    				if(isset($_COOKIE["member_password_pwd"]))   
    				{  
     					set_cookie("member_password_pwd","");  
    				}  
   				}
   	
   		
 $this->session->set_userdata($auth);
 
 redirect('admin');
   }
   else if($val == null || $val  == "")
      {
        echo '<script>alert("Invalide Username And Password!");</script>';
       redirect('login','refresh');
        }
      }
      else
        {
        	echo '<script>alert("Invalide Username And Password!");</script>';
        	redirect('login','refresh');
        }
	}
 }
}?>