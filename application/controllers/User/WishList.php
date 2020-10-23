<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WishList extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
 		if(!$this->session->has_userdata("user_email")){
 			redirect('sign-in');
 		}
    } 

    function index(){
    	$email=$this->session->userdata("user_email");
    	$data['data']=$this->db->get_where("wishlists",["email"=>$email])->result();
    	$this->load->view('front/user/wishlist/index',$data);
    }

    function add($id){
    	$email=$this->session->userdata("user_email");
    	$data=$this->db->get_where("wishlists",["email"=>$email,"product_id"=>$id])->result_array();
    	if(count($data)>0){
    		echo json_encode(["status"=>404,"message"=>"Already Added on wishlist"]);
    	}else{
    		$this->db->insert("wishlists",["email"=>$email,"product_id"=>$id]);
    		echo json_encode(["status"=>200,"message"=>"Successfully Added wishlist"]);
    	}
    }
    function delete($id){
    	$email=$this->session->userdata("user_email");
    	$data=$this->db->get_where("wishlists",["id"=>$id])->result_array();
    	if(count($data)>0){
    		$this->db->delete("wishlists",["id"=>$id]);
    		redirect("wishlist");
    	}else{
    		redirect("wishlist");
    	}
    }

}