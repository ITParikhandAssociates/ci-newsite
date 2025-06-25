<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_Model extends CI_Model 
{
	public function get_contact_view()
  {
  	 $q=$this->db->query("SELECT * FROM `contact_tbl`");
     return $q->result();
  }
  public function get_contact_detail($d2)
  {
  	 $q=$this->db->query("SELECT * FROM `contact_tbl` WHERE contact_id=$d2");
     return $q->result();
  }
  public function update_contatc_data($id,$data)
  {
  	$this->db->where('contact_id',$id);
  	$this->db->update('contact_tbl',$data);
  	return true;
  }

 }
 ?>