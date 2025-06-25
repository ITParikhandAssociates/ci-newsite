<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Join_Model extends CI_Model 
{
	  public function get_join_detail()
  	 {
  	   $q=$this->db->query("SELECT * FROM `joinind_at_tbl`");
       return $q->result();
 	 }
 	 public function delete_join_list_data($d2)
 	 {
 	 $this->db->where('req_id',$d2);
    $this->db->delete('joinind_at_tbl');
    return true;
 	 }
}