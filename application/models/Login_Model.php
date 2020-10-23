<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_Model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	function check($data){
		$query=$this->db->get_where("admin",$data);
		if($query->num_rows()>0){
			return true;
		}else{
			return false;
		}
	}

	function checkEmail($email){
		$query=$this->db->get_where("admin",["email"=>$email]);
		if($query->num_rows()>0){
			return true;
		}else{
			return false;
		}
	}

	
	function getDataViaEmail($email){
		$query=$this->db->get_where("admin",["email"=>$email]);
		if($query->num_rows()>0){
			return $query->row();
		}else{
			return false;
		}
	}

	function SaveRemember_token($rem,$id){
		$this->db->update("admin",["remember_token"=>$rem],["id"=>$id]);
	}

	function checkRememberToken($rem){
		$query=$this->db->get_where("admin",["remember_token"=>$rem]);
		if($query->num_rows()>0){
			return $query->row();
		}else{
			return false;
		}
	}

	function updatePasswordViaRememberToken($remember_token,$data)
	{
		$this->db->update("admin",$data,["remember_token"=>$remember_token]);
	}


}