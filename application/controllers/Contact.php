<?php
ob_start();
defined('BASEPATH') OR exit('No direct script access allowed');
class Contact extends CI_Controller {
/*public function __construct()
{
    parent::__construct();
    $admin_data = $this->session->userdata('user_name'); 
	if(!isset($admin_data))
      {
          redirect('login','refresh');
      }
 }*/
 public function view_contact()
{
	$this->load->model('Contact_Model');
	$data['contact_detail']=$this->Contact_Model->get_contact_view();
	$data11=$this->Contact_Model->get_contact_view();
	$this->session->set_userdata('contact_data',$data11);
	$this->load->view('admin_include/admin_header');
    $this->load->view('admin_include/admin_menu_bar');
    $this->load->view('admin_view/contact_view',$data);
    $this->load->view('admin_include/admin_footer');
}
public function update_contact($id)
{
	$data=$this->session->userdata('contact_data');
	$d1=$data[$id-1];
	$d2=$d1->contact_id;
	$this->load->model('Contact_Model');
	$data1['contact_detail']=$this->Contact_Model->get_contact_detail($d2);
	$this->load->view('admin_include/admin_header');
    $this->load->view('admin_include/admin_menu_bar');
    $this->load->view('admin_view/update_contact',$data1);
    $this->load->view('admin_include/admin_footer');
}
public function update_contact_detail()
{
	$id = $this->input->post('contact_id');
	$data = array('mobile'=>$this->input->post('mobile'),
					'email_id'=>$this->input->post('email'),
					'address'=>$this->input->post('address'),
					'about_comany'=>$this->input->post('company_desc'),
					'contact_map'=>$this->input->post('map_desc')
				);
	$this->load->model('Contact_Model');
	$this->Contact_Model->update_contatc_data($id,$data);
	echo '<script>alert("Data Are Updated..");</script>';
		    redirect('contact/view_contact','refresh'); 		
			
}
	
	
	


}
?>