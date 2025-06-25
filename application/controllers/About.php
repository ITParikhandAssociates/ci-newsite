<?php
ob_start();

defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
 /* public function __construct()
  {
      parent::__construct();
      $admin_data = $this->session->userdata('user_name'); 
      if(!isset($admin_data))
      {
          redirect('login','refresh');
      }
  }*/

public function about_company()
{
    $this->load->model('About_Model');
    $data['about_company']=$this->About_Model->get_about_company();
    $ab_company=$this->About_Model->get_about_company();
    $this->session->set_userdata('ab_company',$ab_company);
    $this->load->view('admin_include/admin_header');
    $this->load->view('admin_include/admin_menu_bar');
    $this->load->view('admin_view/view_about_company',$data);
    $this->load->view('admin_include/admin_footer');
}
public function update_about_company($id)
{
    $data=$this->session->userdata('ab_company');
    $d1=$data[$id-1];
    $d2=$d1->about_id;
    $this->load->model('About_Model');
    $data1['ab_profile_company']= $this->About_Model->get_ab_company($d2);
    $this->load->view('admin_include/admin_header');
    $this->load->view('admin_include/admin_menu_bar');
    $this->load->view('admin_view/update_about_company',$data1);
    $this->load->view('admin_include/admin_footer');
}
public function update_ab_company_profile()
{
    $this->load->model('About_Model');
    $id=$this->input->post('about_id');
    $old_img=$this->input->post('old_img');
    $config['upload_path'] = './company_about_img/';
    $config['allowed_types'] = 'jpg|png|jpeg';
    $this->load->library('upload', $config); 
    if($this->input->post('upload') != NULL )
    { 
      if(!empty($_FILES['image']['name']))
      { 
        $config['upload_path'] = './company_about_img/'; 
        $config['allowed_types'] = 'jpg|jpeg|png'; 
        $config['file_name'] = $_FILES['image']['name']; 
        $this->load->library('upload',$config); 
        if($this->upload->do_upload('image'))
        { 
          $data =   $this->upload->data();
          $config['image_library'] = 'gd2';  
          $config['source_image'] = './company_about_img/'.$data["file_name"];  
          $config['create_thumb'] = FALSE;  
          $config['maintain_ratio'] = FALSE;  
          $config['quality'] = '60%';  
          $config['width'] = 486;  
          $config['height'] = 501;  
          $config['new_image'] = './company_about_img/'.$data["file_name"];  
          $this->load->library('image_lib', $config);  
          $this->image_lib->resize();
          
          $data1 = array('on_screen'=>$this->input->post('on_screen'),
                         'description'=>$this->input->post('description'),
                         'abou_img'=>$data["file_name"]
                        );
          $this->About_Model->upload_new_image($id,$data1);
          echo "<script>alert('Data Are Updated');</script>";
          redirect('about/about_company','refresh');
        }
       else
       {
         echo "<script>alert('Please Select Valid Image');</script>";
         redirect('about/about_company','refresh');
       }
      }
    else
    {
          $data1 = array('on_screen'=>$this->input->post('on_screen'),
                        'description'=>$this->input->post('description'),
                        'abou_img'=>$old_img
                        );
          $this->About_Model->upload_old_image($id,$data1);
          echo "<script>alert('Data Are Updated With Old Image');</script>";
          redirect('about/about_company','refresh');
    }
  }
  else
    {
      echo "<script>alert('please fill valid detail');</script>";
      redirect('about/about_company','refresh');
    }
  }
public function about_blog()
{
    $this->load->model('About_Model');
    $data['ab_blog']=$this->About_Model->get_ab_blog();
    $data10 = $this->About_Model->get_ab_blog();
    $this->session->set_userdata('ab_blog_detail',$data10);
    $this->load->view('admin_include/admin_header');
    $this->load->view('admin_include/admin_menu_bar');
    $this->load->view('admin_view/view_about_blog',$data);
    $this->load->view('admin_include/admin_footer');
}
public function add_new_blog()
{
    $this->load->view('admin_include/admin_header');
    $this->load->view('admin_include/admin_menu_bar');
    $this->load->view('admin_view/add_about_blog');
    $this->load->view('admin_include/admin_footer');
}
public function new_ab_blog()
{
  if(isset($_FILES['image']['name']))  
  {
      $config['upload_path'] = './company_about_img/';
      $config['allowed_types'] = 'jpg|png|jpeg';
      $this->load->library('upload', $config); 
  }
    if(!$this->upload->do_upload('image'))  
      {  
        echo '<script>alert("Please Select Valid Image...");</script>';
        redirect('about/add_new_blog','refresh'); 
      }
    else
     {
        $data =   $this->upload->data();
        $config['image_library'] = 'gd2';  
        $config['source_image'] = './company_about_img/'.$data["file_name"];  
        $config['create_thumb'] = FALSE;  
        $config['maintain_ratio'] = FALSE;  
        $config['quality'] = '60%';  
        $config['width'] = 350;  
        $config['height'] = 200;  
        $config['new_image'] = './company_about_img/'.$data["file_name"];  
        $this->load->library('image_lib', $config);  
        $this->image_lib->resize();

       $data1 =array('on_screen'=>$this->input->post('on_screen'),
                    'blog_title'=>$this->input->post('blog_title'),
                    'description'=>$this->input->post('description'),
                    'blog_img'=>$data["file_name"]
                     );
        $this->load->model('About_Model');
        $this->About_Model->add_new_about_blog($data1);
        echo '<script>alert("Data Are Successfully Inserted...");</script>';
        redirect('about/about_blog','refresh');
      }
}
public function update_about_blog($id)
{
    $data=$this->session->userdata('ab_blog_detail');
    $d1=$data[$id-1];
    $d2=$d1->blog_id;
    $this->load->model('About_Model');
    $data1['blog_data']=$this->About_Model->get_once_blog($d2);
    $this->load->view('admin_include/admin_header');
    $this->load->view('admin_include/admin_menu_bar');
    $this->load->view('admin_view/update_about_blog',$data1);
    $this->load->view('admin_include/admin_footer');
 // print_r($id);exit;
}
public function update_ab_blog()
{
    $this->load->model('About_Model');
   $id=$this->input->post('ab_blog_id');
   $old_img=$this->input->post('old_img');
   $config['upload_path'] = './company_about_img/';
    $config['allowed_types'] = 'jpg|png|jpeg';
    $this->load->library('upload', $config); 
    if($this->input->post('upload') != NULL )
    { 
      if(!empty($_FILES['image']['name']))
      { 
        $config['upload_path'] = './company_about_img/'; 
        $config['allowed_types'] = 'jpg|jpeg|png'; 
        $config['file_name'] = $_FILES['image']['name']; 
        $this->load->library('upload',$config); 
        if($this->upload->do_upload('image'))
        { 
          $data =   $this->upload->data();
          $config['image_library'] = 'gd2';  
          $config['source_image'] = './company_about_img/'.$data["file_name"];  
          $config['create_thumb'] = FALSE;  
          $config['maintain_ratio'] = FALSE;  
          $config['quality'] = '60%';  
          $config['width'] = 350;  
          $config['height'] = 200;  
          $config['new_image'] = './company_about_img/'.$data["file_name"];  
          $this->load->library('image_lib', $config);  
          $this->image_lib->resize();
          
          $data1 =array('on_screen'=>$this->input->post('on_screen'),
                    'blog_title'=>$this->input->post('blog_title'),
                    'description'=>$this->input->post('description'),
                    'blog_img'=>$data["file_name"]
                     );
          $this->About_Model->upload_blog_new_image($id,$data1);
          echo "<script>alert('Data Are Updated');</script>";
          redirect('about/about_blog','refresh');
        }
       else
       {
         echo "<script>alert('Please Select Valid Image');</script>";
         redirect('about/about_blog','refresh');
       }
      }
    else
    {
          $data1 =array('on_screen'=>$this->input->post('on_screen'),
                    'blog_title'=>$this->input->post('blog_title'),
                    'description'=>$this->input->post('description'),
                    'blog_img'=>$old_img
                     );
          $this->About_Model->upload_blog_old_image($id,$data1);
          echo "<script>alert('Data Are Updated With Old Image');</script>";
          redirect('about/about_blog','refresh');
    }
  }
  else
    {
      echo "<script>alert('please fill valid detail');</script>";
      redirect('about/about_blog','refresh');
    }
}
public function delete_about_blog($id)
{
   $data=$this->session->userdata('ab_blog_detail');
    $d1=$data[$id-1];
    $d2=$d1->blog_id;
    $this->load->model('About_Model');
    $this->About_Model->delete_ab_blog($d2);
    echo "<script>alert('Data Are Deleted');</script>";
    redirect('about/about_blog','refresh');
}
public function why_choose_us()
{
    $this->load->model('About_Model');
    $data['choose_us']=$this->About_Model->get_why_choose();
    $sess_choose=$this->About_Model->get_why_choose();
    $this->session->set_userdata('choose_us_why',$sess_choose);
    $this->load->view('admin_include/admin_header');
    $this->load->view('admin_include/admin_menu_bar');
    $this->load->view('admin_view/view_why_choose_us',$data);
    $this->load->view('admin_include/admin_footer');
}
public function update_choose($id)
{
  $data=$this->session->userdata('choose_us_why');
  $d1=$data[$id-1];
  $d2=$d1->choose_id;
  $this->load->model('About_Model');
  $data1['choose_us_data']=$this->About_Model->get_choose_data($d2);
 $this->load->view('admin_include/admin_header');
    $this->load->view('admin_include/admin_menu_bar');
    $this->load->view('admin_view/update_why_choose_us',$data1);
    $this->load->view('admin_include/admin_footer');
}
public function update_choose_us()
{

  $this->load->model('About_Model');
   $id=$this->input->post('choose_id');
   $old_img=$this->input->post('old_img');
   $config['upload_path'] = './company_about_img/';
    $config['allowed_types'] = 'jpg|png|jpeg';
    $this->load->library('upload', $config); 
    if($this->input->post('upload') != NULL )
    { 
      if(!empty($_FILES['image']['name']))
      { 
        $config['upload_path'] = './company_about_img/'; 
        $config['allowed_types'] = 'jpg|jpeg|png'; 
        $config['file_name'] = $_FILES['image']['name']; 
        $this->load->library('upload',$config); 
        if($this->upload->do_upload('image'))
        { 
          $data =   $this->upload->data();
          $config['image_library'] = 'gd2';  
          $config['source_image'] = './company_about_img/'.$data["file_name"];  
          $config['create_thumb'] = FALSE;  
          $config['maintain_ratio'] = FALSE;  
          $config['quality'] = '60%';  
          $config['width'] = 350;  
          $config['height'] = 275;  
          $config['new_image'] = './company_about_img/'.$data["file_name"];  
          $this->load->library('image_lib', $config);  
          $this->image_lib->resize();
          
          $data1 =array('on_screen'=>$this->input->post('on_screen'),
                    'description'=>$this->input->post('description'),
                    'choose_img'=>$data["file_name"]
                    
                     );
          $this->About_Model->upload_choose_new_image($id,$data1);
          echo "<script>alert('Data Are Updated');</script>";
          redirect('about/why_choose_us','refresh');
        }
       else
       {
         echo "<script>alert('Please Select Valid Image');</script>";
         redirect('about/why_choose_us','refresh');
       }
      }
    else
    {
          $data1 =array('on_screen'=>$this->input->post('on_screen'),
                    'description'=>$this->input->post('description'),
                    'choose_img'=>$old_img
                    
                     );
          $this->About_Model->upload_choose_old_image($id,$data1);
          echo "<script>alert('Data Are Updated With Old Image');</script>";
          redirect('about/why_choose_us','refresh');
    }
  }
  else
    {
      echo "<script>alert('please fill valid detail');</script>";
      redirect('about/why_choose_us','refresh');
    }

}

























































}