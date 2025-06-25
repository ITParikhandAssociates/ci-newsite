<?php
ob_start();

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    
 
public function __construct()
{
    parent::__construct();
    $admin_data = $this->session->userdata('user_name'); 
    if(!empty($admin_data))
      {
          redirect('login','refresh');
      }

 }
 
 public function index()
{
        
    $this->load->model('Admin_Model');
	$data['service_counter']=$this->Admin_Model->get_counter_services();
	$data['join_counter']=$this->Admin_Model->get_counter_join();
	$data['inquiry_counter']=$this->Admin_Model->get_counter_inquiry();
	$this->load->view('admin_include/admin_header');
	$this->load->view('admin_include/admin_menu_bar');
	$this->load->view('admin_view/index',$data);
	$this->load->view('admin_include/admin_footer');
}
public function logout()
{	

	$userdata1=$this->session->userdata('user_name');
	$user_data = $this->session->all_userdata();
   	foreach ($user_data as $key => $value) 
   	{
   		if ($key != 'session_id' && $key != 'ip_address' && $key != 'user_agent' && $key != 'last_activity'
            )
   		{
		 $this->session->unset_userdata($key);
        }
	 }
     $this->session->unset_userdata($userdata1);
     $this->session->sess_destroy();
     redirect('login','refresh');
}
public function header_menu()
{
    
     
	$this->load->model('Admin_Model');
	$headre_manu['headre_manu'] = $this->Admin_Model->get_main_header_menu();
	$sess_main_menu = $this->Admin_Model->get_main_header_menu();
	$this->session->set_userdata('main_menu',$sess_main_menu);
	$this->load->view('admin_include/admin_header');
	$this->load->view('admin_include/admin_menu_bar');
	$this->load->view('admin_view/header_view',$headre_manu);
	$this->load->view('admin_include/admin_footer');
      
}
public function new_header_menu()
{
	$this->load->view('admin_include/admin_header');
	$this->load->view('admin_include/admin_menu_bar');
	$this->load->view('admin_view/add_header_menu');
	$this->load->view('admin_include/admin_footer');
}
public function main_header_menu()
{
    $on_screen = $this->input->post('on_screen');
    $header_name = $this->input->post('header_name');
    
    // Debugging the input data
    log_message('debug', 'on_screen value: ' . $on_screen);
    log_message('debug', 'header_name value: ' . $header_name);
    
    $data = array(
        'on_screen' => $on_screen,
        'main_header_name' => $header_name
    );

    $this->load->model('Admin_Model');
    $this->Admin_Model->add_main_header_menu($data);
    
    echo '<script>alert("Data Are Successfully Inserted...");</script>';
    redirect('admin/header_menu', 'refresh');
}

public function edit_main_header_menu($id)
{
	$data =$this->session->userdata('main_menu');
	$d1=$data[$id-1];
	$d2=$d1->main_header_id;
	$this->load->model('Admin_Model');
	$data1['header_list']=$this->Admin_Model->get_header_list($d2);
	$this->load->view('admin_include/admin_header');
	$this->load->view('admin_include/admin_menu_bar');
	$this->load->view('admin_view/update_header_menu',$data1);
	$this->load->view('admin_include/admin_footer');
}
public function update_main_header_menu()
{
	$id=$this->input->post('header_menu_id');
	$data  = array('on_screen'=>$this->input->post('on_screen'),
				   'main_header_name' =>$this->input->post('header_name'));
	$this->load->model('Admin_Model');
	$this->Admin_Model->update_menu_list($id,$data);
	echo '<script>alert("Data Are Updated...");</script>';
	redirect('admin/header_menu','refresh');
}
public function delete_main_header_menu($id)
{
	$data =$this->session->userdata('main_menu');
	$d1=$data[$id-1];
	$d2=$d1->main_header_id;
	$this->load->model('Admin_Model');
	$this->Admin_Model->delete_header_menu($d2);
		$this->Admin_Model->delete_sub_menu_list($d2);
    echo '<script>alert("Data Are Deleted...");</script>';
    redirect('admin/header_menu','refresh');
}
public function header_sub_menu()
{
	$this->load->model('Admin_Model');
	$data['sub_menu'] = $this->Admin_Model->get_sub_menu();
	$sub_menu_sess=$this->Admin_Model->get_sub_menu();
	$this->session->set_userdata('sub_menu_list',$sub_menu_sess);
	$this->load->view('admin_include/admin_header');
	$this->load->view('admin_include/admin_menu_bar');
	$this->load->view('admin_view/header_sub_view',$data);
	$this->load->view('admin_include/admin_footer');
}
public function new_sub_header_menu()
{
	$this->load->model('Admin_Model');
	$data['headre_main_menu']=$this->Admin_Model->get_main_header_menu();
	$this->load->view('admin_include/admin_header');
	$this->load->view('admin_include/admin_menu_bar');
	$this->load->view('admin_view/add_sub_header_menu',$data);
	$this->load->view('admin_include/admin_footer');
}
public function sub_header_menu()
{
	$data  = array('on_screen'=>$this->input->post('on_screen'),
				   'main_menu_id' =>$this->input->post('header_name'),
				   'sub_menu_name'=>$this->input->post('header_sub_name')
				   );
	$this->load->model('Admin_Model');
	$this->Admin_Model->add_sub_header_menu($data);
	echo '<script>alert("Data Are Successfully Inserted...");</script>';
	redirect('admin/header_sub_menu','refresh');
}
public function edit_sub_header_menu($id)
{
	$data= $this->session->userdata('sub_menu_list');

	$d1=$data[$id-1];
	$d2=$d1->sub_menu_id;
	$d3=$d1->main_header_id;

	$this->load->model('Admin_Model');
	$data1['headre_main_menu']=$this->Admin_Model->get_main_header_menu1($d3);
	$data1['sub_menu'] = $this->Admin_Model->get_sub_menu_once($d2);
	$this->load->view('admin_include/admin_header');
	$this->load->view('admin_include/admin_menu_bar');
	$this->load->view('admin_view/update_header_sub_menu',$data1);
	$this->load->view('admin_include/admin_footer');
}
public function update_sub_header_menu()
{
	$id=$this->input->post('header_menu_id');
	$data  = array('on_screen'=>$this->input->post('on_screen'),
				   'main_menu_id' =>$this->input->post('header_name'),
					'sub_menu_name'=>$this->input->post('header_sub_name')
				  );
	$this->load->model('Admin_Model');
	$this->Admin_Model->updaet_sub_menu($id,$data);
	echo '<script>alert("Data Are Updated...");</script>';
   	redirect('admin/header_sub_menu','refresh');
}
public function delete_sub_header_menu($id)
{
	$data= $this->session->userdata('sub_menu_list');
	$d1=$data[$id-1];
	$d2=$d1->sub_menu_id;
	$this->load->model('Admin_Model');
	$this->Admin_Model->delete_sub_menu($d2);
	echo '<script>alert("Data Are Deleted...");</script>';
	redirect('admin/header_sub_menu','refresh');
}
public function header_sub_child_menu()
{
	$this->load->model('Admin_Model');
	$data['child_menu']=$this->Admin_Model->get_child_menu();
	$ses_child_menu = $this->Admin_Model->get_child_menu();
	$this->session->set_userdata('child_menu_list',$ses_child_menu);
	$this->load->view('admin_include/admin_header');
	$this->load->view('admin_include/admin_menu_bar');
	$this->load->view('admin_view/header_child_menu_view',$data);
	$this->load->view('admin_include/admin_footer');
}
public function new_sub_child_header_menu()
{
	$this->load->model('Admin_Model');
	$data1['headre_main_menu']=$this->Admin_Model->get_main_header_menu();
	$this->load->view('admin_include/admin_header');
	$this->load->view('admin_include/admin_menu_bar');
	$this->load->view('admin_view/add_header_sub_child_menu',$data1);
	$this->load->view('admin_include/admin_footer');
}
public function get_sub_menu()
{
	$this->load->model('Admin_Model');
	$main_menu = $this->input->post('header_menu');
	$data = $this->Admin_Model->get_sub_menu_data($main_menu);
	echo json_encode($data);
}
public function sub_child_header_menu()
{
	$data  = array('on_screen' =>$this->input->post('on_screen'),
					'main_menu_fk_id' =>$this->input->post('header_manu_id'),
					'sub_menu_fk_id' =>$this->input->post('header_sub_menu_id'),
					'header_child_menu_name' =>$this->input->post('header_sub_child_name'),
					);
	$this->load->model('Admin_Model');
	$this->Admin_Model->add_sub_child_menu($data);
	echo '<script>alert("Data Are Successfully Inserted...");</script>';
	redirect('admin/header_sub_child_menu','refresh');
}
public function edit_child_header_menu($id)
{
	$data =$this->session->userdata('child_menu_list');
	$d1=$data[$id-1];
	$d2=$d1->child_menu_id;
	$this->load->model('Admin_Model');
	$data2['child_menu_data'] = $this->Admin_Model->sub_child_menu($d2);
	$data2['headre_main_menu']=$this->Admin_Model->get_main_header_menu();
	$data2['headre_sub_menu']=$this->Admin_Model->get_sub_menu_list();
	$this->load->view('admin_include/admin_header');
	$this->load->view('admin_include/admin_menu_bar');
	$this->load->view('admin_view/update_header_sub_child_menu',$data2);
	$this->load->view('admin_include/admin_footer');
}
public function update_sub_child_header_menu()
{
	$id = $this->input->post('child_menu');
	$data  = array('on_screen' =>$this->input->post('on_screen'),
					'main_menu_fk_id' =>$this->input->post('header_manu_id'),
					'sub_menu_fk_id' =>$this->input->post('header_sub_menu_id'),
					'header_child_menu_name' =>$this->input->post('header_sub_child_name'),
					);
	$this->load->model('Admin_Model');
	$this->Admin_Model->update_sub_child_menu($id,$data);
	echo '<script>alert("Data Are Updated...");</script>';
	redirect('admin/header_sub_child_menu','refresh');
}
public function delete_child_header_menu($id)
{
	$data =$this->session->userdata('child_menu_list');
	$d1=$data[$id-1];
	$d2=$d1->child_menu_id;
	$this->load->model('Admin_Model');
	$this->Admin_Model->delete_child_menu($d2);
 	echo '<script>alert("Data Are Deleted...");</script>';
	redirect('admin/header_sub_child_menu','refresh');
}
public function slider_view()
{
		$this->load->model('Admin_Model');
		$data['slider']=$this->Admin_Model->get_all_slider();
		$sess_slider=$this->Admin_Model->get_all_slider();
		$this->session->set_userdata('slider_data',$sess_slider);
		$this->load->view('admin_include/admin_header');
		$this->load->view('admin_include/admin_menu_bar');
		$this->load->view('admin_view/view_slider',$data);
		$this->load->view('admin_include/admin_footer');
}
public function add_new_slider()
{
		$this->load->view('admin_include/admin_header');
		$this->load->view('admin_include/admin_menu_bar');
		$this->load->view('admin_view/add_slider');
		$this->load->view('admin_include/admin_footer');
}
public function new_slider()
{
			$this->load->model('Admin_Model');
			$config['upload_path'] = './slider_image/';
	      	$config['allowed_types'] = 'jpg|png|jpeg';
	      	$this->load->library('upload', $config);
			if($this->upload->do_upload('image'))
            {
            	$image_data =   $this->upload->data();
                $configer =  array(
              	'image_library'   => 'gd2',
             	'source_image'    => 'full_path',
              /* 'width'           =>  1260,
              'height'          =>  600,*/
             	'new_image'    =>  $image_data['full_path'],
             	 'overwrite' => TRUE
    		  	);
                  $img= $image_data['file_name'];
      $data1  = array('on_screen' =>$this->input->post('on_screen'),
					'slider_title' =>$this->input->post('slider_title'),
					'description' =>$this->input->post('description'),
					'slider_img' =>$img
					);
			 $this->load->library('image_lib',$configer);
          //  $this->image_lib->resize();
           	$this->Admin_Model->add_slide($data1);
            echo '<script>alert("Data Are Successfully Inserted...");</script>';
			redirect('admin/slider_view','refresh');
			}
			else
			{
	  			echo '<script>alert("Please Valid Detail...");</script>';
				redirect('admin/add_new_slider','refresh');
			}

}
public function update_slider($id)
{
	$data= $this->session->userdata('slider_data');
	$d1=$data[$id-1];
	$d2=$d1->slider_id;
	$this->load->model('Admin_Model');
	$data2['slider_detail']=$this->Admin_Model->get_once_slider($d2);
	$this->load->view('admin_include/admin_header');
	$this->load->view('admin_include/admin_menu_bar');
	$this->load->view('admin_view/update_slider',$data2);
	$this->load->view('admin_include/admin_footer');


}
public function update_slider_detail()
{
	  $this->load->model('Admin_Model');
	  $id=$this->input->post('slder');
	  $old_img=$this->input->post('old_img');
	  $config['upload_path'] = './slider_image/';
      $config['allowed_types'] = 'jpg|png|jpeg';
      $this->load->library('upload', $config);
      if($this->upload->do_upload('image'))
        {
           $img=$_FILES['image']['name'];
           $data1 = array('on_screen' =>$this->input->post('on_screen'),
					   	  'slider_title' =>$this->input->post('slider_title'),
					      'description' =>$this->input->post('description'),
					      'slider_img' =>$img
					      );
			$image_data =   $this->upload->data();
			$configer =  array('image_library'   => 'gd2',
              				   'source_image'    =>  $image_data['full_path'],
             				   'new_image'    =>  $image_data['full_path'],
              				   'overwrite' => TRUE
      		               	  );
            $this->load->library('image_lib',$configer);
            //$this->image_lib->resize();
            $this->Admin_Model->update_new_slider($id,$data1);
            echo '<script>alert("Data Are Updated");</script>';
            redirect('admin/slider_view','refresh');
 		 }
		else
		{
	$data1 = array('on_screen' =>$this->input->post('on_screen'),
					'slider_title' =>$this->input->post('slider_title'),
					'description' =>$this->input->post('description'),
					'slider_img' =>$old_img
				);
	$image_data =   $this->upload->data();
     $configer =  array(
              'image_library'   => 'gd2',
              'source_image'    =>  $image_data['full_path'],
              'new_image'    =>  $image_data['full_path'],
              'overwrite' => TRUE
      		);
     $this->load->library('image_lib');
     $this->load->library('image_lib',$configer);
   /* $this->image_lib->resize();*/
	 $this->Admin_Model->update_old_slider($id,$data1);
	 echo '<script>alert("Data Are Updated");</script>';
	 redirect('admin/slider_view','refresh');
}

}
public function delete_slider($id)
{
	$data= $this->session->userdata('slider_data');
	$d1=$data[$id-1];
	$d2=$d1->slider_id;
	$this->load->model('Admin_Model');
	$this->Admin_Model->delete_slider_detail($d2);
	echo '<script>alert("Data Are Deleted");</script>';
	redirect('admin/slider_view','refresh');
}
public function our_key_point()
{
	$this->load->model('Admin_Model');
	$data['key_point'] = $this->Admin_Model->get_our_key_point();
	$this->load->view('admin_include/admin_header');
	$this->load->view('admin_include/admin_menu_bar');
	$this->load->view('admin_view/view_key_point',$data);
	$this->load->view('admin_include/admin_footer');
}
public function update_key_point()
{
	$id=$this->input->post('key_id');
	$data = $this->input->post('description');
	$this->load->model('Admin_Model');
	$this->Admin_Model->update_key_point($id,$data);
	echo '<script>alert("Data Are Updated");</script>';
	redirect('admin/our_key_point','refresh');
	
}
public function view_inquiry()
{

	$this->load->model('Admin_Model');
	$data['inquiry']=$this->Admin_Model->get_all_inq();
	$ses_inq=$this->Admin_Model->get_all_inq();
	$this->session->set_userdata('inq',$ses_inq);
	$this->load->view('admin_include/admin_header');
	$this->load->view('admin_include/admin_menu_bar');
	$this->load->view('admin_view/view_inquiry',$data);
	$this->load->view('admin_include/admin_footer');
}
public function delete_inquiry_data($id)
{
	$data=$this->session->userdata('inq');
	$d1=$data[$id-1];
	$d2=$d1->inq_id;
	$this->load->model('Admin_Model');
	$this->Admin_Model->delete_inq($d2);
	echo '<script>alert("Data Are Deleted");</script>';
	redirect('admin/view_inquiry','refresh');

}
// changepassword
public function changepassword()
{
	$this->load->model('Admin_Model');
    $this->load->view('admin_include/admin_header');
	$this->load->view('admin_include/admin_menu_bar');
	$this->load->view('admin_view/changepassword');
	$this->load->view('admin_include/admin_footer');
		
	$oldpwd=$this->input->post('oldpassword');
	$newpwd=$this->input->post('newpass');
	$congpwd=$this->input->post('confpass');
	$userid = 1;

	 $data['password']=$this->Admin_Model->get_updatepass();
	 $val = $data['password'][0]->password;
		if (!empty($oldpwd)) {
			if ($val == $oldpwd && !empty($newpwd) && !empty($congpwd)) {
				$data  = array('password' =>$this->input->post('confpass'));
				$this->load->model('Admin_Model');
				$this->Admin_Model->update_updatepass($userid,$data);
				echo '<script>alert("Password Change Successfully");</script>';
				redirect('admin','refresh');
			}
		}	
}
// Close changepassword




}