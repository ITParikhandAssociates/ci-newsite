<?php
ob_start();
defined('BASEPATH') OR exit('No direct script access allowed');
class Join_us extends CI_Controller {
/*public function __construct()
{
    parent::__construct();
    $admin_data = $this->session->userdata('user_name'); 
	if(!isset($admin_data))
      {
          redirect('login','refresh');
      }
 }*/
 public function view_join_detail()
{
	$this->load->model('Join_Model');
	$data['join_list']=$this->Join_Model->get_join_detail();
	$ses_list=$this->Join_Model->get_join_detail();
	$this->session->set_userdata('join_detail',$ses_list);
	//print_r($data);exit;
	$this->load->view('admin_include/admin_header');
    $this->load->view('admin_include/admin_menu_bar');
    $this->load->view('admin_view/view_join_list',$data);
    $this->load->view('admin_include/admin_footer');
}
public function delete_data($id)
{
	$data = $this->session->userdata('join_detail');
	$d1=$data[$id-1];
	$d2=$d1->req_id;
	$this->load->model('Join_Model');
	$this->Join_Model->delete_join_list_data($d2);
	echo '<script>alert("Data Are Deleted...");</script>';
	redirect('join_us/view_join_detail','refresh');

}


}?>