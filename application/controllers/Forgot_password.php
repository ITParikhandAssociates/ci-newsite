<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forgot_password extends CI_Controller {
	 public function index()
	{
    $this->load->view('forgot_password');
  }
  public function email_authenication()
  {
    $email_data = array('email_id' =>$this->input->post('eml'));
    $this->load->model('Forgot_Password_Model');
    $email_info=$this->Forgot_Password_Model->get_email($email_data);
    if($email_info == null || $email_info == "")
    {
      echo "<script>alert('E-Mail ID Not Found');</script>"; 
      redirect('forgot_password','refresh');
    }
    else
    {
      $eml=$email_info[0]->email_id;
      $new_val=rand ( 11111 , 99999 );
      $this->email->from('parmarvip93@gmail.comm');
      $this->email->to($eml);
      $this->email->message('Password Is'.'='.$new_val);
      if ($this->email->send())
      {
          $this->load->model('Forgot_Password_Model');
          $this->Forgot_Password_Model->pass_update($new_val,$eml);
          echo "<script>alert('Plese Check E-Mail');</script>"; 
          redirect('login','refresh');
      }
    else
    {
        echo "<script>alert('There is error in sending mail!');</script>";
        redirect('forgot_password','refresh');
    }
    }

  }
}
