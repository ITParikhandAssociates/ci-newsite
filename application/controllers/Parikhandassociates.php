<?php
ob_start();
defined('BASEPATH') OR exit('No direct script access allowed');
class Parikhandassociates extends CI_Controller {
  public function __construct()
    {
       parent::__construct();
       header("Cache-Control: public, max-age=60, s-maxage=60");
    
    }


public function index()
{
    $this->load->model('Stupid_Story_Model');
    $data['main_menu']=$this->Stupid_Story_Model->get_service_type();
    $data['sub_menu']=$this->Stupid_Story_Model->get_sub_services_type();
    $data2['contact_detail']=$this->Stupid_Story_Model->get_contact_detail();
    $data3['slider']=$this->Stupid_Story_Model->get_slider();
    $data3['about_company']=$this->Stupid_Story_Model->get_about_company();
    $data3['key_point']=$this->Stupid_Story_Model->get_key_point();
    $data3['services']=$this->Stupid_Story_Model->get_service();
    $data3['contact']=$this->Stupid_Story_Model->get_contact_detail();
    $data3['our_team']=$this->Stupid_Story_Model->get_team_detail();
    //print_r($data8);exit;
     $data2['sub_menu_type']=$this->Stupid_Story_Model->get_sub_type_service();
    //  $data2['sub_menu_service']=$this->Stupid_Story_Model->get_sub_services_type();
     //echo "<pre>";
     //print_r($data10);exit;
    $this->load->view('front_include/front_header',$data);
    $this->load->view('index',$data3);
    $this->load->view('front_include/front_footer',$data2);
}
public function about()
{
    $this->load->model('Stupid_Story_Model');
    $data['main_menu']=$this->Stupid_Story_Model->get_service_type();
    $data['sub_menu']=$this->Stupid_Story_Model->get_sub_services_type();
    $data2['contact_detail']=$this->Stupid_Story_Model->get_contact_detail();

    $data3['about_company']=$this->Stupid_Story_Model->get_about_company();
    $data3['about_blog']=$this->Stupid_Story_Model->get_about_blog();
    $data3['why_choose']=$this->Stupid_Story_Model->get_wy_choose();
     $data2['sub_menu_type']=$this->Stupid_Story_Model->get_sub_type_service();
     $this->load->view('front_include/front_header',$data);
    $this->load->view('about',$data3);
    $this->load->view('front_include/front_footer',$data2);


}
public function our_team()
{
     $this->load->model('Stupid_Story_Model');
    $data['main_menu']=$this->Stupid_Story_Model->get_service_type();
    $data['sub_menu']=$this->Stupid_Story_Model->get_sub_services_type();
    $data2['contact_detail']=$this->Stupid_Story_Model->get_contact_detail();
     $data3['our_team_detail']=$this->Stupid_Story_Model->get_all_member_detail();
      $data2['sub_menu_type']=$this->Stupid_Story_Model->get_sub_type_service();
    $this->load->view('front_include/front_header',$data);
    $this->load->view('team',$data3);
    $this->load->view('front_include/front_footer',$data2);

}
public function join()
{
   $this->load->model('Stupid_Story_Model');
    $data['main_menu']=$this->Stupid_Story_Model->get_service_type();
    $data['sub_menu']=$this->Stupid_Story_Model->get_sub_services_type();
    $data2['contact_detail']=$this->Stupid_Story_Model->get_contact_detail();
     $data2['sub_menu_type']=$this->Stupid_Story_Model->get_sub_type_service();
     $this->load->view('front_include/front_header',$data);
    $this->load->view('join');
    $this->load->view('front_include/front_footer',$data2);
}
public function submit_join_detail()
{
      $config['upload_path'] = './pdf/';
      $config['allowed_types'] = 'pdf';
      $nm=$this->input->post('fullname');
       $eml= $this->input->post('email_id');
      $mo=$this->input->post('mobile');
      $msg=$this->input->post('message');
      $exp=$this->input->post('exp');
      $this->load->library('upload', $config);
      if($this->upload->do_upload('image'))
        {
                $img=$_FILES['image']['name'];
                 $data1  = array('fullname'=>$this->input->post('fullname'),
                      'email_id'=>$this->input->post('email_id'),
                      'mobile'=>$this->input->post('mobile'),
                       'add'=>$this->input->post('address'),
                     'grouped'=>$this->input->post('group_by'),
                    'exp'=>$this->input->post('exp'),
                    'msg'=>$this->input->post('message'),
                    'file_data'=>$img
                     );
        $this->load->model('Stupid_Story_Model');
       $data11=$this->Stupid_Story_Model->join_detail($data1);
      
         if($data11)
            {
                 $our_email = $eml;
         $to = "info@parikhandassociates.in";
         $from = $eml;
         $subject = "Join Inquiry";
         $message= 
         "<html><body><table width='500' border='0' align='center' cellpadding='0' cellspacing='0' style='font-family:Arial, Helvetica, sans-serif; font-size:10pt; border:1px solid #ccc;'>".
                    "<tr>".
                    "<td width='16' height='25' bgcolor='#F5F5F5'>&nbsp;</td>".
                    "<td width='96' bgcolor='#F5F5F5'>Name</td>".
                    "<td width='10' height='25' bgcolor='#F5F5F5'><strong>:</strong></td>".
                    "<td height='25' bgcolor='#F5F5F5'>".$nm."</td>".
                    "</tr>\n".
                    "<tr>".
                    "<td height='25' bgcolor='#F5F5F5'>&nbsp;</td>".
                    "<td height='25' bgcolor='#F5F5F5'>Email</td>".
                    "<td height='25' bgcolor='#F5F5F5'><strong>:</strong></td>".
                    "<td height='25' bgcolor='#F5F5F5'>".$mo."</td>".
                    "</tr>\n".
                    "<tr>".
                    "<td height='25' bgcolor='#F5F5F5'>&nbsp;</td>".
                    "<td height='25' bgcolor='#F5F5F5'>Phone</td>".
                    "<td height='25' bgcolor='#F5F5F5'><strong>:</strong></td>".
                    "<td height='25' bgcolor='#F5F5F5'>".$exp."</td>".
                    "</tr>\n".
                   
                   
            
                    "<tr>".
                    "<td height='25' bgcolor='#F5F5F5'>&nbsp;</td>".
                    "<td height='25' bgcolor='#F5F5F5'>Message</td>".
                    "<td height='25' bgcolor='#F5F5F5'><strong>:</strong></td>".
                    "<td height='25' bgcolor='#F5F5F5'>".$msg."</td>".
                    "</tr>\n".
                    "</table></body></html>";

        
        $headers = "From: " . strip_tags($our_email) . "\r\n";
        $headers .= "Reply-To: ". strip_tags($our_email) . "\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1"; 

       $mail= mail($to, $subject, $message, $headers);
             
           if($mail)

                {
                      echo '<script>alert("Inquiry Send..");</script>';
                  redirect('parikhandassociates/inquiry','refresh');
                                      
                    
                }
                else
                {
                     echo '<script>alert("Please Check Details..");</script>';
                  redirect('parikhandassociates/inquiry','refresh'); 
                                      
                    
                } 
            }
            else
            {
                  echo '<script>alert("Please Check Details..");</script>';
                  redirect('parikhandassociates/inquiry','refresh');

            }
            
      
      
        }
        else
        {
            echo '<script>alert("Please Select PDF File...");</script>';
            redirect('parikhandassociates/join','refresh');              
        }
  
       
         
          
}
public function contact()
{
     $this->load->model('Stupid_Story_Model');
    $data['main_menu']=$this->Stupid_Story_Model->get_service_type();
    $data['sub_menu']=$this->Stupid_Story_Model->get_sub_services_type();
    $data2['contact_detail']=$this->Stupid_Story_Model->get_contact_detail();
     $data2['sub_menu_type']=$this->Stupid_Story_Model->get_sub_type_service();
     $this->load->view('front_include/front_header',$data);
    $this->load->view('contact',$data2);
    $this->load->view('front_include/front_footer',$data2);
}
public function inquiry()
{
     $this->load->model('Stupid_Story_Model');
    $data['main_menu']=$this->Stupid_Story_Model->get_service_type();
    $data['sub_menu']=$this->Stupid_Story_Model->get_sub_services_type();
    $data2['contact_detail']=$this->Stupid_Story_Model->get_contact_detail();
     $data2['sub_menu_type']=$this->Stupid_Story_Model->get_sub_type_service();
     $this->load->view('front_include/front_header',$data);
    $this->load->view('inquiry',$data);
    $this->load->view('front_include/front_footer',$data2);
}
public function submit_inquiry()
{
        $this->load->model('Stupid_Story_Model');
            $nm=$this->input->post('fullname');
            $eml=$this->input->post('email');
            $mob=$this->input->post('mobile');
            $org=$this->input->post('organization');
            $msg=$this->input->post('message');
            $ser_type=$this->input->post('service_name');
        $data = array('cust_name'=>$this->input->post('fullname'),
                        'email'=>$this->input->post('email'),
                        'mobile'=>$this->input->post('mobile'),
                        'org_name'=>$this->input->post('organization'),
                        'service_name'=>$this->input->post('service_name'),
                        'msg'=>$this->input->post('message')
                        );

           $data2=$this->Stupid_Story_Model->add_inquiry($data);
            if($data2)
            {
                 $our_email = $eml;
         $to = "info@parikhandassociates.in";
         $from = $eml;
         $subject = "Service Inquiry";
         $message= 
         "<html><body><table width='500' border='0' align='center' cellpadding='0' cellspacing='0' style='font-family:Arial, Helvetica, sans-serif; font-size:10pt; border:1px solid #ccc;'>".
                    "<tr>".
                    "<td width='16' height='25' bgcolor='#F5F5F5'>&nbsp;</td>".
                    "<td width='96' bgcolor='#F5F5F5'>Name</td>".
                    "<td width='10' height='25' bgcolor='#F5F5F5'><strong>:</strong></td>".
                    "<td height='25' bgcolor='#F5F5F5'>".$nm."</td>".
                    "</tr>\n".
                    "<tr>".
                    "<td height='25' bgcolor='#F5F5F5'>&nbsp;</td>".
                    "<td height='25' bgcolor='#F5F5F5'>Email</td>".
                    "<td height='25' bgcolor='#F5F5F5'><strong>:</strong></td>".
                    "<td height='25' bgcolor='#F5F5F5'>".$eml."</td>".
                    "</tr>\n".
                    "<tr>".
                    "<td height='25' bgcolor='#F5F5F5'>&nbsp;</td>".
                    "<td height='25' bgcolor='#F5F5F5'>Phone</td>".
                    "<td height='25' bgcolor='#F5F5F5'><strong>:</strong></td>".
                    "<td height='25' bgcolor='#F5F5F5'>".$mob."</td>".
                    "</tr>\n".
                    "<tr>".
                    "<td height='25' bgcolor='#F5F5F5'>&nbsp;</td>".
                    "<td height='25' bgcolor='#F5F5F5'>Oraganization</td>".
                    "<td height='25' bgcolor='#F5F5F5'><strong>:</strong></td>".
                    "<td height='25' bgcolor='#F5F5F5'>".$org."</td>".
                    "</tr>\n".
                     "<tr>".
                    "<td height='25' bgcolor='#F5F5F5'>&nbsp;</td>".
                    "<td height='25' bgcolor='#F5F5F5'>Inquiry For</td>".
                    "<td height='25' bgcolor='#F5F5F5'><strong>:</strong></td>".
                    "<td height='25' bgcolor='#F5F5F5'>".$ser_type."</td>".
                    "</tr>\n".
                   
            
                    "<tr>".
                    "<td height='25' bgcolor='#F5F5F5'>&nbsp;</td>".
                    "<td height='25' bgcolor='#F5F5F5'>Message</td>".
                    "<td height='25' bgcolor='#F5F5F5'><strong>:</strong></td>".
                    "<td height='25' bgcolor='#F5F5F5'>".$msg."</td>".
                    "</tr>\n".
                    "</table></body></html>";

        
        $headers = "From: " . strip_tags($our_email) . "\r\n";
        $headers .= "Reply-To: ". strip_tags($our_email) . "\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1"; 

       $mail= mail($to, $subject, $message, $headers);
             
           if($mail)

                {
                      echo '<script>alert("Inquiry Send..");</script>';
                  redirect('parikhandassociates/inquiry','refresh');
                                      
                    
                }
                else
                {
                     echo '<script>alert("Please Check Details..");</script>';
                  redirect('parikhandassociates/inquiry','refresh'); 
                                      
                    
                } 
            }
            else
            {
                  echo '<script>alert("Please Check Details..");</script>';
                  redirect('parikhandassociates/inquiry','refresh');

            }

}
public function team_detail($id)
{
  //  print_r($id);exit;
     $this->load->model('Stupid_Story_Model');
    $data['main_menu']=$this->Stupid_Story_Model->get_service_type();
    $data['sub_menu']=$this->Stupid_Story_Model->get_sub_services_type();
    $data2['contact_detail']=$this->Stupid_Story_Model->get_contact_detail();
    $data3['once_profile']=$this->Stupid_Story_Model->get_team_view($id);
   // print_r($data3);exit;
     $data2['sub_menu_type']=$this->Stupid_Story_Model->get_sub_type_service();
     $this->load->view('front_include/front_header',$data);
    $this->load->view('team_profile',$data3);
    $this->load->view('front_include/front_footer',$data2);
}
public function services_detail($serid,$subserid)
{
  
    $this->load->model('Stupid_Story_Model');
   
  


    $data['main_menu']=$this->Stupid_Story_Model->get_service_type();
    $data['sub_menu']=$this->Stupid_Story_Model->get_sub_services_type();
    $data2['contact_detail']=$this->Stupid_Story_Model->get_contact_detail();
     $data3['service_detail']=$this->Stupid_Story_Model->get_once_service($serid,$subserid);
     $data3['sub_type']=$this->Stupid_Story_Model->get_sub_services_type();
      $data2['sub_menu_type']=$this->Stupid_Story_Model->get_sub_type_service();
  //  print_r($data3);exit;
     $this->load->view('front_include/front_header',$data);
    $this->load->view('subservices_blog',$data3);
    $this->load->view('front_include/front_footer',$data2);
}
public function blog()
{
   
     $this->load->model('Stupid_Story_Model');
    $data['main_menu']=$this->Stupid_Story_Model->get_service_type();
    $data['sub_menu']=$this->Stupid_Story_Model->get_sub_services_type();
    $data2['contact_detail']=$this->Stupid_Story_Model->get_contact_detail();
    $data3['blog_detail']=$this->Stupid_Story_Model->get_blog_detail();
    $data3['link_blog']=$this->Stupid_Story_Model->get_link_blog_detail();
    
     $data3['pdf_blog']=$this->Stupid_Story_Model->get_pdf_blog();
     
     $data2['sub_menu_type']=$this->Stupid_Story_Model->get_sub_type_service();
   // print_r($data3);exit;
     $this->load->view('front_include/front_header',$data);
    $this->load->view('blog',$data3);
    $this->load->view('front_include/front_footer',$data2);

}
public function single_blog($blog_id)
{
    //print_r($blog_id);exit;

     $this->load->model('Stupid_Story_Model');
    $data['main_menu']=$this->Stupid_Story_Model->get_service_type();
    $data['sub_menu']=$this->Stupid_Story_Model->get_sub_services_type();
    $data2['contact_detail']=$this->Stupid_Story_Model->get_contact_detail();
    $data3['single_blog_detail']=$this->Stupid_Story_Model->get_single_blog_detail($blog_id);

    $data3['related_blog']=$this->Stupid_Story_Model->get_related_blog_detail($blog_id);
     $data2['sub_menu_type']=$this->Stupid_Story_Model->get_sub_type_service();
   // print_r($data3);exit;
     $this->load->view('front_include/front_header',$data);
    $this->load->view('single_blog',$data3);
    $this->load->view('front_include/front_footer',$data2);
}
public function search_data()
{
  $this->load->model('Stupid_Story_Model');
  $type = $this->input->post('key_word');
 

  
    $data['main_menu']=$this->Stupid_Story_Model->get_service_type();
    $data['sub_menu']=$this->Stupid_Story_Model->get_sub_services_type();
    $data2['contact_detail']=$this->Stupid_Story_Model->get_contact_detail();
     $data3['blog_data']=$this->Stupid_Story_Model->get_fetch_data($type);
      $data3['sub_type']=$this->Stupid_Story_Model->get_sub_services_type();
  $data2['sub_menu_type']=$this->Stupid_Story_Model->get_sub_type_service();
     $this->load->view('front_include/front_header',$data);
    $this->load->view('fetch_single_blog',$data3);
    $this->load->view('front_include/front_footer',$data2);


}


}?>