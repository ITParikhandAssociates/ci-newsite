<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About_Model extends CI_Model 
{
	  public function get_about_company()
  	 {
  	   $q=$this->db->query("SELECT * FROM `about_company_tbl`");
       return $q->result();
 	 }
 	 public function get_ab_company($d2)
 	 {
 	   $q=$this->db->query("SELECT * FROM `about_company_tbl` WHERE about_id=$d2");
       return $q->result();
 	 }
 	 public function upload_new_image($id,$data1)
 	 {
 	   $this->db->where('about_id',$id);
       $this->db->update('about_company_tbl',$data1);
       return true;
 	 }
 	 public function upload_old_image($id,$data1)
 	 {
 	 	$this->db->where('about_id',$id);
   	    $this->db->update('about_company_tbl',$data1);
   	   return true;
 	 }
 	 public function add_new_about_blog($data1)
 	 {
 	 	return $this->db->insert('about_blog_tbl', $data1);
 	 }
 	 public function get_ab_blog()
 	 {
 	 	 $q=$this->db->query("SELECT * FROM `about_blog_tbl`");
       return $q->result();
 	 }
 	 public function get_once_blog($d2)
 	 {
 	 	 $q=$this->db->query("SELECT * FROM `about_blog_tbl` WHERE blog_id=$d2");
       return $q->result();
 	 }
 	 public function upload_blog_new_image($id,$data1)
 	 {
 	 	$this->db->where('blog_id',$id);
   	    $this->db->update('about_blog_tbl',$data1);
   	   return true;
 	 }
 	 public function upload_blog_old_image($id,$data1)
 	 {
 	 	$this->db->where('blog_id',$id);
   	    $this->db->update('about_blog_tbl',$data1);
   	   return true;	
 	 }
 	 public function delete_ab_blog($d2)
 	 {
 	 	$this->db->where('blog_id',$d2);
   	    $this->db->delete('about_blog_tbl');
   	    return true;	
 	 }
 	 public function get_why_choose()
 	 {
 	 	$q=$this->db->query("SELECT * FROM `why_choose_us_tbl`");
        return $q->result();
 	 }
   public function get_choose_data($d2)
   {
      $q=$this->db->query("SELECT * FROM `why_choose_us_tbl` WHERE choose_id=$d2");
        return $q->result();
   }
   public function upload_choose_new_image($id,$data1)
   {
        $this->db->where('choose_id',$id);
        $this->db->update('why_choose_us_tbl',$data1);
       return true;
   }
   public function upload_choose_old_image($id,$data1)
   {
     $this->db->where('choose_id',$id);
        $this->db->update('why_choose_us_tbl',$data1);
       return true;
   }


 	 	

 }?>