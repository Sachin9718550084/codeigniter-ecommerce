<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Crud_Model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
		
	function insert($table_name,$data)
	{
		$this->db->insert($table_name,$data);
		return true;
	}

	function get($table_name)
	{
		$query=$this->db->get($table_name);
		return $query->result();
	}

	function deleteRecord($table_name,$data)
	{
		$this->db->delete($table_name,$data); 
	}
		
	function getRecord($table_name,$conditions,$type="single")
	{
		$query=$this->db->get_where($table_name,$conditions);
		// $this->db->last_query();

		if($type=="single"){
			$data= $query->row();
		}else{
			$data=$query->result();
		}	
		return $data;	 
	}
	function updateRecordById($table_name,$data,$id)
	{
		$this->db->where('id', $id);
		$this->db->update($table_name, $data);
	}
}
?>