<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Model extends CI_Model 
{
	public function add_main_header_menu($data)
  {
  	 return $this->db->insert('main_header_menu_tbl', $data);
  }
  public function get_main_header_menu()
  {
  	 $q=$this->db->query("SELECT * FROM `main_header_menu_tbl`");
     return $q->result();
  }
  public function get_main_header_menu1($d3)
  {
  	 $q=$this->db->query("SELECT * FROM `main_header_menu_tbl` WHERE main_header_id=$d3");
     return $q->result();
  }
  public function get_header_list($d2)
  {
  	$q=$this->db->query("SELECT * FROM `main_header_menu_tbl` WHERE main_header_id=$d2");
     return $q->result();
  }
  public function update_menu_list($id,$data)
  {
  	$this->db->where('main_header_id',$id);
  	$this->db->update('main_header_menu_tbl',$data);
  	return true;
  }
  public function delete_header_menu($d2)
  {
  	$this->db->where('main_header_id',$d2);
  	$this->db->delete('main_header_menu_tbl');
  	return true;	
  }
  public function add_sub_header_menu($data)
  {
  	return $this->db->insert('sub_header_menu_tbl', $data);
  }
  public function get_sub_menu()
  {
  	$q=$this->db->query("SELECT a.main_header_id,a.main_header_name,b.sub_menu_id,b.main_menu_id,b.on_screen,b.sub_menu_name FROM main_header_menu_tbl a INNER JOIN sub_header_menu_tbl b ON a.main_header_id = b.main_menu_id");
    return $q->result();
  }
  public function get_sub_menu_once($d2)
  {
  	$q=$this->db->query("SELECT * FROM `sub_header_menu_tbl` WHERE sub_menu_id=$d2");
     return $q->result();
  }
  public function updaet_sub_menu($id,$data)
  {
  	$this->db->where('sub_menu_id',$id);
  	$this->db->update('sub_header_menu_tbl',$data);
  	return true;
  }
  public function delete_sub_menu($d2)
  {
  	$this->db->where('sub_menu_id',$d2);
  	$this->db->delete('sub_header_menu_tbl');
  	return true;
  }
  public function get_sub_menu_data($main_menu)
  {
  	$q=$this->db->query("SELECT * FROM `sub_header_menu_tbl` WHERE main_menu_id=$main_menu");
     return $q->result();
  }
  public function add_sub_child_menu($data)
  {
  	return $this->db->insert('sub_child_menu_tbl', $data);
  }
  public function get_child_menu()
  {
    $q=$this->db->query("SELECT a.main_header_id,a.main_header_name,b.sub_menu_id,b.main_menu_id,b.sub_menu_name,c.child_menu_id,c.on_screen,c.header_child_menu_name FROM main_header_menu_tbl a INNER JOIN sub_child_menu_tbl c ON c.main_menu_fk_id =a.main_header_id INNER JOIN sub_header_menu_tbl b ON b.sub_menu_id = c.sub_menu_fk_id");
     return $q->result();
  }
  public function sub_child_menu($d2)
  {
  		$q=$this->db->query("SELECT * FROM `sub_child_menu_tbl` WHERE child_menu_id=$d2");
     return $q->result();
  }
  public function get_sub_menu_list()
  {
  	$q=$this->db->query("SELECT * FROM `sub_header_menu_tbl`");
     return $q->result();
  }
  public function update_sub_child_menu($id,$data)
  {
  	$this->db->where('child_menu_id',$id);
  	$this->db->update('sub_child_menu_tbl',$data);
  	return true;
  }
  public function delete_child_menu($d2)
  {
  	$this->db->where('child_menu_id',$d2);
  	$this->db->delete('sub_child_menu_tbl');
  	return true;
  }
  public function add_slide($data1)
  {
    return $this->db->insert('slider_tbl', $data1);
  }
  public function get_all_slider()
  {
      $q=$this->db->query("SELECT * FROM `slider_tbl`");
     return $q->result();
  }
  public function get_once_slider($d2)
  {
    $q=$this->db->query("SELECT * FROM `slider_tbl` WHERE slider_id=$d2");
     return $q->result();
  }
  public function update_new_slider($id,$data1)
  {
    $this->db->where('slider_id',$id);
    $this->db->update('slider_tbl',$data1);
    return true;
  }
public function update_old_slider($id,$data1)
  {
    $this->db->where('slider_id',$id);
    $this->db->update('slider_tbl',$data1);
    return true;
 }
 public function delete_slider_detail($d2)
 {
  $this->db->where('slider_id',$d2);
  $this->db->delete('slider_tbl');
  return true;
 }
public function get_our_key_point()
{
  $q=$this->db->query("SELECT * FROM `our_key_point_tbl`");
  return $q->result();
}
public function update_key_point($id,$data)
{
  $this->db->set('description',$data);
  $this->db->where('key_id',$id);
  $this->db->update('our_key_point_tbl');
  return true;
}
public function get_all_inq()
{
  $q=$this->db->query("SELECT * FROM `inquiry_detail_tbl`");
  return $q->result();
}
public function delete_inq($d2)
{
  $this->db->where('inq_id',$d2);
  $this->db->delete('inquiry_detail_tbl');
  return true;
}
public function get_counter_services()
{
   $q=$this->db->query("SELECT COUNT(*)  as cnt1  FROM `sub_header_menu_tbl`");
  return $q->result(); 
}
public function get_counter_join()
{
 $q=$this->db->query("SELECT COUNT(*)  as cnt2  FROM `joinind_at_tbl`");
  return $q->result(); 
}
public function get_counter_inquiry()
{
  $q=$this->db->query("SELECT COUNT(*)  as cnt3  FROM `inquiry_detail_tbl`");
  return $q->result();
}
public function delete_sub_menu_list($d2)
{
   $this->db->where('main_menu_id',$d2);
  $this->db->delete('sub_header_menu_tbl');
  return true;
}

 // Update Password
  public function update_updatepass($userid,$data){
      $this->db->where('login_id',$userid);
      $this->db->update('login_tbl',$data);
      return true;
        
    }
     public function get_updatepass()
    {
       $q=$this->db->query("SELECT * FROM `login_tbl`");
       return $q->result();
    }
  // Close Update Password



}
