<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stupid_Story_Model extends CI_Model 
{
	public function get_service_type()
	{
	$q=$this->db->query("SELECT * FROM `main_header_menu_tbl` WHERE on_screen='Y'");
    return $q->result();
	}
	public function get_sub_services_type()
	{
		$q=$this->db->query("SELECT * FROM `sub_header_menu_tbl` WHERE on_screen='Y'");
    return $q->result();
	}
	public function get_contact_detail()
	{
		$q=$this->db->query("SELECT * FROM `contact_tbl`");
    return $q->result();
	}
	public function get_slider()
	{
		$q=$this->db->query("SELECT * FROM `slider_tbl` WHERE on_screen='Y'");
    return $q->result();
	}
	public function get_about_company()
	{
		$q=$this->db->query("SELECT * FROM `about_company_tbl` WHERE on_screen='Y'");
    return $q->result();
	}
	public function get_key_point()
	{
		$q=$this->db->query("SELECT * FROM `our_key_point_tbl`");
    return $q->result();
	}
	public function get_service()
	{
		$q=$this->db->query("SELECT c.main_header_id,c.main_header_name,b.sub_menu_name,a.servise_id,a.on_screen,a.header_manu_fk_id,a.header_sub_menu_fk_id,a.short_description,a.description,a.small_image,a.long_image FROM main_header_menu_tbl c INNER JOIN services_detail_tbl a ON c.main_header_id= a.header_manu_fk_id INNER JOIN sub_header_menu_tbl b ON b.sub_menu_id = a.header_sub_menu_fk_id WHERE a.on_screen='Y' AND b.on_screen='Y' AND a.on_screen='Y' GROUP BY a.header_manu_fk_id HAVING(a.header_manu_fk_id) ORDER BY a.header_manu_fk_id ASC");
    	return $q->result();
	}
	public function get_team_detail()
	{
		$q=$this->db->query("SELECT * FROM `our_team_tbl` WHERE on_screen='Y'");
    return $q->result();
	}
	public function get_about_blog()
	{
		$q=$this->db->query("SELECT * FROM `about_blog_tbl` WHERE on_screen='Y'");
    return $q->result();
	}
	public function get_wy_choose()
	{
		$q=$this->db->query("SELECT * FROM `why_choose_us_tbl` WHERE on_screen='Y'");
    return $q->result();
	}
	public function get_all_member_detail()
	{
		$q=$this->db->query("SELECT * FROM `our_team_tbl` WHERE on_screen='Y'");
    return $q->result();
	}
	public function join_detail($data1)
	{
		 return $this->db->insert('joinind_at_tbl', $data1);
	}
	public function add_inquiry($data)
	{
		return $this->db->insert('inquiry_detail_tbl', $data);
	}
	public function get_team_view($id)
	{
		$q=$this->db->query("SELECT * FROM `our_team_tbl` WHERE profile_id=$id AND on_screen='Y'");
    return $q->result();
	}
	public function get_once_service($serid,$subserid)
	{
		$q=$this->db->query("SELECT c.main_header_name,b.sub_menu_name,a.servise_id,a.on_screen,a.header_manu_fk_id,a.header_sub_menu_fk_id,a.short_description,a.description,a.small_image,a.long_image FROM main_header_menu_tbl c INNER JOIN services_detail_tbl a ON c.main_header_id= a.header_manu_fk_id INNER JOIN sub_header_menu_tbl b ON b.sub_menu_id = a.header_sub_menu_fk_id WHERE a.header_manu_fk_id=$serid AND a.header_sub_menu_fk_id=$subserid AND a.on_screen='Y'");
		 return $q->result();
	}
	public function get_blog_detail()
	{
		$q=$this->db->query("SELECT * FROM `blog_detail_tbl` WHERE on_screen='Y' ORDER BY blog_id DESC");
    return $q->result();
	}
	public function get_single_blog_detail($blog_id)
	{
	$q=$this->db->query("SELECT * FROM `blog_detail_tbl` WHERE blog_id=$blog_id AND on_screen='Y'");
    return $q->result();
	}
	public function get_link_blog_detail()
	{
	$q=$this->db->query("SELECT * FROM `tranding_tbl` WHERE on_screen='Y' ORDER BY trand_id DESC");
    return $q->result();	
	}
	public function get_related_blog_detail($blog_id)
	{
		$q=$this->db->query("SELECT * FROM `blog_detail_tbl` WHERE on_screen='Y' AND  `blog_id` NOT IN($blog_id) ORDER BY blog_id DESC");
    return $q->result();
	}
	public function get_fetch_data($type)
	{
		$q=$this->db->query("SELECT c.main_header_name,b.sub_menu_name,a.servise_id,a.on_screen,a.header_manu_fk_id,a.header_sub_menu_fk_id,a.short_description,a.description,a.small_image,a.long_image FROM main_header_menu_tbl c INNER JOIN services_detail_tbl a ON c.main_header_id= a.header_manu_fk_id INNER JOIN sub_header_menu_tbl b ON b.sub_menu_id = a.header_sub_menu_fk_id WHERE c.on_screen='Y' AND b.on_screen='Y' AND a.on_screen='Y' AND b.sub_menu_name LIKE '%$type%' LIMIT 1");
		 	$data = $q->result();
		 	if($data)
		 	{
		 		return $data;
		 	}
		 	else
		 	{
		 		 echo '<script>alert("Data are Not available..");</script>';
                  redirect('parikhandassociates','refresh');
		 	}
	}

	public  function get_sub_type_service()
	{
		$q=$this->db->query("SELECT a.main_header_id,a.main_header_name,b.sub_menu_id,b.main_menu_id,b.sub_menu_name FROM main_header_menu_tbl a INNER JOIN sub_header_menu_tbl b ON b.main_menu_id=a.main_header_id WHERE a.on_screen='Y' AND b.on_screen='Y' GROUP BY main_menu_id");
    return $q->result();	

	}
	public function get_pdf_blog()
	{
	  $q=$this->db->query("SELECT * FROM `pdf_file_tbl`");
    return $q->result();  
	}





		



    	

}?>