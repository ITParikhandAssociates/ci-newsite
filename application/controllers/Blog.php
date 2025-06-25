<?php
ob_start();
defined('BASEPATH') OR exit('No direct script access allowed');
class Blog extends CI_Controller {
/*public function __construct()
{
    parent::__construct();
    $admin_data = $this->session->userdata('user_name'); 
	if(!isset($admin_data))
      {
          redirect('login','refresh');
      }
 }*/
 public function blog_view()
{
	$this->load->model('Blog_Model');
	$data['blog_detail']=$this->Blog_Model->get_all_blog_detail();
	$ses_blog=$this->Blog_Model->get_all_blog_detail();
	$this->session->set_userdata('blog_data',$ses_blog);
	$this->load->view('admin_include/admin_header');
	$this->load->view('admin_include/admin_menu_bar');
	$this->load->view('admin_view/view_blog_list',$data);
	$this->load->view('admin_include/admin_footer');
}
public function add_new_blog()
{	
	$this->load->view('admin_include/admin_header');
	$this->load->view('admin_include/admin_menu_bar');
	$this->load->view('admin_view/add_blog_detail');
	$this->load->view('admin_include/admin_footer');
}
public function add_new_blog_detail()
{
	if(isset($_FILES['image']['name']))  
    {
        $config['upload_path'] = './blog_image/';
	    $config['allowed_types'] = 'jpg|png|jpeg';
		$this->load->library('upload', $config); 
     }
      if(!$this->upload->do_upload('image'))  
		{  
			echo '<script>alert("Please Select Valid Image...");</script>';
		    redirect('blog/add_new_blog','refresh'); 
         }
         else
          {
           $data =   $this->upload->data();
                	 $config['image_library'] = 'gd2';  
                     $config['source_image'] = './blog_image/'.$data["file_name"];  
                     $config['create_thumb'] = FALSE;  
                     $config['maintain_ratio'] = FALSE;  
                     $config['quality'] = '60%';  
                     $config['width'] = 1200;  
                     $config['height'] = 630;  
                     $config['new_image'] = './blog_image/'.$data["file_name"];  
                     $this->load->library('image_lib', $config);  
                     $this->image_lib->resize();
     $data1 = array('on_screen'=>$this->input->post('on_screen'),
					'title'=>$this->input->post('title'),
					'now_date'=>$this->input->post('now_date'),
					'description1'=>$this->input->post('short_description'),
					'description2'=>$this->input->post('description'),
					'blog_img'=>$data["file_name"]
					);
					
		$this->load->model('Blog_Model');
       	$this->Blog_Model->add_new_blog($data1);
        echo '<script>alert("Data Are Successfully Inserted...");</script>';
		redirect('blog/blog_view','refresh');
          }
}
public function update_blog_detail($id)
{
	$data=$this->session->userdata('blog_data');
	$d1=$data[$id-1];
	$d2=$d1->blog_id;
	$this->load->model('Blog_Model');
	$data1['blog_once_detail']=$this->Blog_Model->get_blog($d2);
	$this->load->view('admin_include/admin_header');
	$this->load->view('admin_include/admin_menu_bar');
	$this->load->view('admin_view/update_blog_detail',$data1);
	$this->load->view('admin_include/admin_footer');

}
public function update_blog_data()
{
	$this->load->model('Blog_Model');
		$id=$this->input->post('blog_id');
		$old_img=$this->input->post('old_img');
		$config['upload_path'] = './blog_image/';
	    $config['allowed_types'] = 'jpg|png|jpeg';
		$this->load->library('upload', $config); 
		if($this->input->post('upload') != NULL )
		{ 
			if(!empty($_FILES['image']['name']))
			{ 
			 	 $config['upload_path'] = './blog_image/'; 
   				 $config['allowed_types'] = 'jpg|jpeg|png'; 
   				 $config['file_name'] = $_FILES['image']['name']; 
   				 $this->load->library('upload',$config); 
    		  if($this->upload->do_upload('image'))
    			{ 
    			 	$data =   $this->upload->data();
   					 $config['image_library'] = 'gd2';  
					$config['source_image'] = './blog_image/'.$data["file_name"];  
                     $config['create_thumb'] = FALSE;  
                     $config['maintain_ratio'] = FALSE;  
                     $config['quality'] = '60%';  
                     $config['width'] = 1200;  
                     $config['height'] = 630;  
                     $config['new_image'] = './blog_image/'.$data["file_name"];  
                     $this->load->library('image_lib', $config);  
                     $this->image_lib->resize();
                      $data1 = array('on_screen'=>$this->input->post('on_screen'),
					'title'=>$this->input->post('title'),
					'now_date'=>$this->input->post('now_date'),
					'description1'=>$this->input->post('short_description'),
					'description2'=>$this->input->post('description'),
					'blog_img'=>$data["file_name"]
						);
   				$this->Blog_Model->upload_new_image($id,$data1);
			 	echo "<script>alert('Data Are Updated');</script>";
			 	redirect('blog/blog_view','refresh');
			 	}
			 else
			 {
			 	echo "<script>alert('Please Select Valid Image');</script>";
			 	redirect('blog/blog_view','refresh');
			 }
		}
			else
			{
   		 $data1 = array('on_screen'=>$this->input->post('on_screen'),
					'title'=>$this->input->post('title'),
					'now_date'=>$this->input->post('now_date'),
					'description1'=>$this->input->post('short_description'),
					'description2'=>$this->input->post('description'),
					'blog_img'=>$old_img
						);
					  $this->Blog_Model->upload_old_image($id,$data1);
					  echo "<script>alert('Data Are Updated With Old Image');</script>";
			 		  redirect('blog/blog_view','refresh');
			}
		}
		else
		{
			echo "<script>alert('please fill valid detail');</script>";
			redirect('blog/blog_view','refresh');
		}
}
public function delete_blog_detail($id)
{
	$data=$this->session->userdata('blog_data');
	$d1=$data[$id-1];
	$d2=$d1->blog_id;
	$this->load->model('Blog_Model');
	$this->Blog_Model->delete_blog_data($d2);
	echo "<script>alert('Data Are Deleted');</script>";
	redirect('blog/blog_view','refresh');

}
public function tranding_view()
{
	$this->load->model('Blog_Model');
	$data1['tranding']=$this->Blog_Model->get_tranding_detail();
	$sess_tranding=$this->Blog_Model->get_tranding_detail();
	$this->session->set_userdata('tranding_data',$sess_tranding);
	$this->load->view('admin_include/admin_header');
	$this->load->view('admin_include/admin_menu_bar');
	$this->load->view('admin_view/view_tranding_data',$data1);
	$this->load->view('admin_include/admin_footer');
}
public function pdf_view()
{
    	$this->load->model('Blog_Model');
	$data1['pdf_file']=$this->Blog_Model->get_pdf_detail();

	$this->load->view('admin_include/admin_header');
	$this->load->view('admin_include/admin_menu_bar');
	$this->load->view('admin_view/view_pdf',$data1);
	$this->load->view('admin_include/admin_footer');
}
public function add_new_tranding()
{
	$this->load->view('admin_include/admin_header');
	$this->load->view('admin_include/admin_menu_bar');
	$this->load->view('admin_view/add_tranding_data');
	$this->load->view('admin_include/admin_footer');
}
public function add_new_pdf()
{
    $this->load->model('Blog_Model');
	$data1['trad_typ']=$this->Blog_Model->get_tranding_detail();
	/*print_r($data1);exit;*/
    	$this->load->view('admin_include/admin_header');
	$this->load->view('admin_include/admin_menu_bar');
	$this->load->view('admin_view/add_pdf_data',$data1);
	$this->load->view('admin_include/admin_footer');
}
public function new_tranding()
{
	if(isset($_FILES['image']['name']))  
    {
        $config['upload_path'] = './tranding_img/';
	    $config['allowed_types'] = 'jpg|png|jpeg';
		$this->load->library('upload', $config); 
     }
        if(!$this->upload->do_upload('image'))  
		 {  
			echo '<script>alert("Please Select Valid Image...");</script>';
		    redirect('blog/add_new_tranding','refresh'); 
          }
         else
          {
                	$data =   $this->upload->data();
                	 $config['image_library'] = 'gd2';  
                     $config['source_image'] = './tranding_img/'.$data["file_name"];  
                     $config['create_thumb'] = FALSE;  
                     $config['maintain_ratio'] = FALSE;  
                     $config['quality'] = '60%';  
                     $config['width'] = 374;  
                     $config['height'] = 177;  
                     $config['new_image'] = './tranding_img/'.$data["file_name"];  
                     $this->load->library('image_lib', $config);  
                     $this->image_lib->resize();
                     
                     
    
                     
         
     

      
        $data1 = array('on_screen'=>$this->input->post('on_screen'),
						'title'=>$this->input->post('title'),
						'tra_url'=>$this->input->post('tra_url'),
						'tra_img'=>$data["file_name"]
					
						);
						
       
       	$this->load->model('Blog_Model');
       	$this->Blog_Model->add_tranding($data1);
         echo '<script>alert("Data Are Successfully Inserted...");</script>';
		redirect('blog/tranding_view','refresh');
     }
          
}
public function new_pdf()
{
  if(isset($_FILES['image']['name']))  
    {
        $config['upload_path'] = './tranding_img/';
	    $config['allowed_types'] = 'pdf';
		$this->load->library('upload', $config); 
     }
        if(!$this->upload->do_upload('image'))  
		 {  
			echo '<script>alert("Please Select Valid Image...");</script>';
		    redirect('blog/add_new_pdf','refresh'); 
          }
         else
          {
                	$data =   $this->upload->data();
                	 $config['image_library'] = 'gd2';  
                     $config['source_image'] = './tranding_img/'.$data["file_name"];  
                      
                     $config['new_image'] = './tranding_img/'.$data["file_name"];  
                     $this->load->library('image_lib', $config);  
                   
                     
                     
    
         $data1 = array('tr_typ'=>$this->input->post('on_screen'),
					
						'tra_pdf'=>$data["file_name"]
					
						);
						
       
       	$this->load->model('Blog_Model');
       	$this->Blog_Model->add_pdf($data1);
         echo '<script>alert("Data Are Successfully Inserted...");</script>';
		redirect('blog/pdf_view','refresh');
     }  
}
public function update_tranding($id)
{
	$data=$this->session->userdata('tranding_data');
	$d1=$data[$id-1];
	$d2=$d1->trand_id;
	$this->load->model('Blog_Model');
    $data2['once_trand']=$this->Blog_Model->get_once_tranding($d2);

    $this->load->view('admin_include/admin_header');
	$this->load->view('admin_include/admin_menu_bar');
	$this->load->view('admin_view/update_tranding_data',$data2);
	$this->load->view('admin_include/admin_footer');

}
public function update_tranding_detail()
{
	$this->load->model('Blog_Model');
		$id=$this->input->post('trand_id');
		$old_img=$this->input->post('old_img');
		$config['upload_path'] = './tranding_img/';
	    $config['allowed_types'] = 'jpg|png|jpeg';
		$this->load->library('upload', $config); 
		if($this->input->post('upload') != NULL )
		{ 
			if(!empty($_FILES['image']['name']))
			{ 
			 	 $config['upload_path'] = './tranding_img/'; 
   				 $config['allowed_types'] = 'jpg|jpeg|png'; 
   				 $config['file_name'] = $_FILES['image']['name']; 
   				 $this->load->library('upload',$config); 
    		  if($this->upload->do_upload('image'))
    			{ 
    			 	$data =   $this->upload->data();
   					 $config['image_library'] = 'gd2';  
					$config['source_image'] = './tranding_img/'.$data["file_name"];  
                     $config['create_thumb'] = FALSE;  
                     $config['maintain_ratio'] = FALSE;  
                     $config['quality'] = '60%';  
                     $config['width'] = 374;  
                     $config['height'] = 177;  
                     $config['new_image'] = './tranding_img/'.$data["file_name"];  
                     $this->load->library('image_lib', $config);  
                     $this->image_lib->resize();
                      $data1 = array('on_screen'=>$this->input->post('on_screen'),
						'title'=>$this->input->post('title'),
						'tra_url'=>$this->input->post('tra_url'),
						'tra_img'=>$data["file_name"]
						);
   				$this->Blog_Model->upload_new_image1($id,$data1);
			 	echo "<script>alert('Data Are Updated');</script>";
			 	redirect('blog/tranding_view','refresh');
			 	}
			 else
			 {
			 	echo "<script>alert('Please Select Valid Image');</script>";
			 	redirect('blog/tranding_view','refresh');
			 }
		}
			else
			{
   		 $data1 = array('on_screen'=>$this->input->post('on_screen'),
						'title'=>$this->input->post('title'),
						'tra_url'=>$this->input->post('tra_url'),
						'tra_img'=>$old_img
						);
					  $this->Blog_Model->upload_old_image1($id,$data1);
					  echo "<script>alert('Data Are Updated With Old Image');</script>";
			 		  redirect('blog/tranding_view','refresh');
			}
		}
		else
		{
			echo "<script>alert('please fill valid detail');</script>";
			redirect('blog/tranding_view','refresh');
		}
}
public function delete_tranding($id)
{
	$data=$this->session->userdata('tranding_data');
	$d1=$data[$id-1];
	$d2=$d1->trand_id;
	$this->load->model('Blog_Model');
	$this->Blog_Model->delete_trandding($d2);
	echo "<script>alert('Data Are Deleted');</script>";
			redirect('blog/tranding_view','refresh');
}
public function delete_pdf($id)
{
    	$this->load->model('Blog_Model');
	$this->Blog_Model->delete_pdf_file($id);

			redirect('blog/pdf_view','refresh');
}

}?>











