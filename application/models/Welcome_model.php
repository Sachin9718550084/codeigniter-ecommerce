<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Welcome_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();

	}
		
	public function getBlogCategoryArray(){
		$query=$this->db->get("blog-categories");
		$data=[];
		$result=$query->result();
		foreach($result as $s){
			$data[$s->id]=$s->title;
		}
		return $data;
	}
	
	public function getFaqCategoryArray(){
		$query=$this->db->get("faq-categories");
		$data=[];
		$result=$query->result();
		foreach($result as $s){
			$data[$s->id]=$s->title;
		}
		return $data;
	}

	public function getCategoryArray(){
		$query=$this->db->get("categories");
		$data=[];
		$data[null]="Choose  Category";
		$result=$query->result();
		foreach($result as $s){
			$data[$s->id]=$s->title;
		}
		return $data;
	}
	
	
	public function getAttributeGroupArray(){
		$query=$this->db->get("attribute-groups");
		$data=[];
		$result=$query->result();
		foreach($result as $s){
			$data[$s->id]=$s->name;
		}
		return $data;
	}
	

}
?>