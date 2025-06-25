<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Our_Team_Model extends CI_Model 
{
	public function add_new_member($data1)
  {
  	return $this->db->insert('our_team_tbl',$data1);
  }
  public function get_team_data()
  {
  	$q=$this->db->query("SELECT * FROM `our_team_tbl`");
    return $q->result();
  }
  public function get_profile($d2)
  {
  	$q=$this->db->query("SELECT * FROM `our_team_tbl` WHERE profile_id=$d2");
    return $q->result();
  }
  public function upload_new_image($id,$data1)
  {
    $this->db->where('profile_id',$id);
    $this->db->update('our_team_tbl',$data1);
    return true;
  }
  public function upload_old_image($id,$data1)
  {
    $this->db->where('profile_id',$id);
    $this->db->update('our_team_tbl',$data1);
    return true;
  }
  public function delete_profile($d2)
  {
    $this->db->where('profile_id',$d2);
    $this->db->delete('our_team_tbl');
    return true;
  }
  

}