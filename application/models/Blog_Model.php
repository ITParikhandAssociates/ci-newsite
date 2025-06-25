<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_Model extends CI_Model 
{
	public function add_new_blog($data1)
	{
	return $this->db->insert('blog_detail_tbl', $data1);
	}
	public function add_pdf($data1)
	{
	   	return $this->db->insert('pdf_file_tbl',$data1); 
	}
	public function get_all_blog_detail()
	{
	 $q=$this->db->query("SELECT * FROM `blog_detail_tbl`");
     return $q->result();
	}
	public function get_blog($d2)
	{
	 $q=$this->db->query("SELECT * FROM `blog_detail_tbl` WHERE blog_id=$d2");
     return $q->result();
	}
	public function upload_new_image($id,$data1)
	{
	$this->db->where('blog_id',$id);
  	$this->db->update('blog_detail_tbl',$data1);
  	return true;
	}
	public function upload_old_image($id,$data1)
	{
	$this->db->where('blog_id',$id);
  	$this->db->update('blog_detail_tbl',$data1);
  	return true;
	}
	public function delete_blog_data($d2)
	{
	$this->db->where('blog_id',$d2);
  	$this->db->delete('blog_detail_tbl');
  	return true;	
	}
	public function add_tranding($data1)
	{
	return $this->db->insert('tranding_tbl', $data1);	
	}
	public function get_tranding_detail()
	{
	$q=$this->db->query("SELECT * FROM `tranding_tbl`");
     return $q->result();
	}
	public function get_once_tranding($d2)
	{
		$q=$this->db->query("SELECT * FROM `tranding_tbl` WHERE trand_id=$d2");
     return $q->result();	
	}
	public function upload_new_image1($id,$data1)
	{
	$this->db->where('trand_id',$id);
  	$this->db->update('tranding_tbl',$data1);
  	return true;
	}
	public function upload_old_image1($id,$data1)
	{
	$this->db->where('trand_id',$id);
  	$this->db->update('tranding_tbl',$data1);
  	return true;
	}
	public function delete_trandding($d2)
	{
	$this->db->where('trand_id',$d2);
  	$this->db->delete('tranding_tbl');
  	return true;	
	}
	public function get_pdf_detail()
	{
	   // SELECT a.title,a.trand_id,a.tra_url,b.pdf_id,b.tr_typ,b.tra_pdf FROM `tranding_tbl` a INNER JOIN pdf_file_tbl b ON b.tr_typ = a.trand_id
	  	$q=$this->db->query("SELECT * FROM pdf_file_tbl order by pdf_id desc");
     return $q->result();  
	}
	public function delete_pdf_file($id)
	{
	  	$this->db->where('pdf_id',$id);
  	$this->db->delete('pdf_file_tbl');
  	return true;  
	}


}
?>