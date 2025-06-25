<?php
ob_start();
defined('BASEPATH') OR exit('No direct script access allowed');
class Services extends CI_Controller {
/*public function __construct()
{
    parent::__construct();
    $admin_data = $this->session->userdata('user_name'); 
    if(!isset($admin_data))
      {
          redirect('login','refresh');
      }
}*/
public function view_services()
{
	$this->load->model('Services_Model');
	$data['services_detail']=$this->Services_Model->get_services();
	$services=$this->Services_Model->get_services();
	$this->session->set_userdata('services',$services);
	//print_r($data);exit;
	$this->load->view('admin_include/admin_header');
	$this->load->view('admin_include/admin_menu_bar');
	$this->load->view('admin_view/view_services_list',$data);
	$this->load->view('admin_include/admin_footer');

}
public function add_new_service()
{
	$this->load->model('Admin_Model');
	$data1['headre_main_menu']=$this->Admin_Model->get_main_header_menu();
	
	$this->load->view('admin_include/admin_header');
	$this->load->view('admin_include/admin_menu_bar');
	$this->load->view('admin_view/add_services_detail',$data1);
	$this->load->view('admin_include/admin_footer');
}
public function add_new_services()
{
			$config['upload_path'] = './services_img/';
	      	$config['allowed_types'] = 'jpg|png|jpeg';
			$this->load->library('upload', $config);
			if($this->upload->do_upload('image1'))
            {
            	$image_data1 =   $this->upload->data();
                $configer1 =  array(
              	'image_library'   => 'gd2',
              	'source_image'    =>  $image_data1['full_path'],
             	'width'           =>  360,
              	'height'          =>  250,
             	'new_image'    =>  $image_data1['full_path'],
              	'overwrite' => TRUE,
              	'maintain_ratio' => TRUE,
      			);
                 $this->load->library('image_lib',$configer1);
            	 $this->image_lib->resize();
            if($this->upload->do_upload('image2'))
            {
            	$image_data2 =   $this->upload->data();
                  $configer2 =  array(
              	'image_library'   => 'gd2',
              	'source_image'    =>  $image_data2['full_path'],
             	'width'           =>  890,
              	'height'          =>  445,
             	'new_image'    =>  $image_data2['full_path'],
              	'overwrite' => TRUE,
              	'maintain_ratio' => TRUE,
      			);
                  $this->load->library('image_lib',$configer2);
            	  $this->image_lib->resize();
                  $data1 = array('on_screen'=>$this->input->post('on_screen'),
         				'header_manu_fk_id'=>$this->input->post('header_manu_id'),
						'header_sub_menu_fk_id'=>$this->input->post('header_sub_menu_id'),
						'short_description'=>$this->input->post('short_description'),
						'description'=>$this->input->post('description'),
						'small_image'=>$image_data1['file_name'],
						'long_image'=>$image_data2['file_name']
						);
				$this->load->model('Services_Model');
				$this->Services_Model->add_new_services_detail($data1);
        		echo '<script>alert("Data Are Successfully Inserted...");</script>';
				redirect('services/view_services','refresh');
            }
        }
		else
         {
            echo '<script>alert("Please Select Valid Image ..");</script>';
			redirect('services/add_new_service','refresh');
         }
   }
   public function update_services_detail($id)
   {
   	$data=$this->session->userdata('services');
   	$d1=$data[$id-1];
   	$d2=$d1->servise_id;
   	$this->load->model('Services_Model');
   
   $this->load->model('Admin_Model');
	$data1['headre_main_menu']=$this->Admin_Model->get_main_header_menu();
	$data1['headre_sub_menu']=$this->Services_Model->get_sub_header_menu();
	$data1['services_data']=$this->Services_Model->get_service($d2);
   	$this->load->view('admin_include/admin_header');
	$this->load->view('admin_include/admin_menu_bar');
	$this->load->view('admin_view/update_services_detail',$data1);
	$this->load->view('admin_include/admin_footer');
 }
public function update_services()
 {
   	$this->load->model('Services_Model');
	$id=$this->input->post('service_id');
	$old_img1=$this->input->post('old_img1');
	$old_img2=$this->input->post('old_img2');
	$config['upload_path'] = './services_img/';
    $config['allowed_types'] = 'jpg|png|jpeg';
    $this->load->library('upload', $config);
     if($this->upload->do_upload('image1'))
      {
		$img1=$_FILES['image1']['name'];
      }
      else
      {
        $img1=$old_img1;
      }
	 	if($this->upload->do_upload('image2'))
         {
            $img2=$_FILES['image2']['name'];
         }
       	else
		{
           	$img2=$old_img2;
        }
   $data1 = array('on_screen'=>$this->input->post('on_screen'),
         				'header_manu_fk_id'=>$this->input->post('header_manu_id'),
						'header_sub_menu_fk_id'=>$this->input->post('header_sub_menu_id'),
						'short_description'=>$this->input->post('short_description'),
						'description'=>$this->input->post('description'),
						'small_image'=>$img1,
						'long_image'=>$img2
						);
				
				if($this->upload->do_upload('image1'))
            	{
            	 $image_data1 =   $this->upload->data();
                $configer1 =  array(
              	'image_library'   => 'gd2',
              	'source_image'    =>  $image_data1['full_path'],
             	'width'           =>  360,
              	'height'          =>  250,
             	'new_image'    =>  $image_data1['full_path'],
              	'overwrite' => TRUE,
              	'maintain_ratio' => TRUE,
      			);
                  $this->load->library('image_lib');
                   $this->load->library('image_lib',$configer1);
                   $this->image_lib->resize();
                  
			}
			if($this->upload->do_upload('image2'))
            {
            	
            	$image_data2 =   $this->upload->data();
                  $configer2 =  array(
              	'image_library'   => 'gd2',
              	'source_image'    =>  $image_data2['full_path'],
             	'width'           =>  890,
              	'height'          =>  445,
             	'new_image'    =>  $image_data2['full_path'],
              	'overwrite' => TRUE,
              	'maintain_ratio' => TRUE,
      			);
                  $this->load->library('image_lib');
                   $this->load->library('image_lib',$configer2);
                   $this->image_lib->resize();
           
		 }

		    $this->Services_Model->updates_service_deatil($data1,$id);
		     echo '<script>alert("Data Are Updated");</script>';
		          redirect('services/view_services','refresh');
 }
 public function delete_services_detail($id)
  {
   	$data=$this->session->userdata('services');
   	$d1=$data[$id-1];
   	$d2=$d1->servise_id;
   	$this->load->model('Services_Model');
   	$this->Services_Model->delete_service($d2);
   	echo '<script>alert("Data Are Updated");</script>';
    redirect('services/view_services','refresh');
   }
				
}?>