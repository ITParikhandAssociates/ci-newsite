<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services_Model extends CI_Model 
{
	public function add_new_services_detail($data1)
  {
  	 return $this->db->insert('services_detail_tbl', $data1);
  }
  public function get_services()
  {
  	$q=$this->db->query("SELECT c.main_header_name,b.sub_menu_name,a.servise_id,a.on_screen,a.header_manu_fk_id,a.header_sub_menu_fk_id,a.short_description,a.description,a.small_image,a.long_image FROM main_header_menu_tbl c INNER JOIN services_detail_tbl a ON c.main_header_id= a.header_manu_fk_id INNER JOIN sub_header_menu_tbl b ON b.sub_menu_id = a.header_sub_menu_fk_id");
    	return $q->result();
  }
  public function get_service($d2)
  {
  		$q=$this->db->query("SELECT * FROM `services_detail_tbl` WHERE servise_id=$d2");
    return $q->result();
  }
  public function get_sub_header_menu()
  {
  	$q=$this->db->query("SELECT * FROM `sub_header_menu_tbl`");
    return $q->result();
  }
  public function updates_service_deatil($data1,$id)
  {
  	$this->db->where('servise_id',$id);
  	$this->db->update('services_detail_tbl',$data1);
  	return true;
  }
  public function delete_service($d2)
  {
  	$this->db->where('servise_id',$d2);
  	$this->db->delete('services_detail_tbl');
  	return true;
  }


}?>