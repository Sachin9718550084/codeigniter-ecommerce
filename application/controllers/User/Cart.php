<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		if(!$this->session->has_userdata("session_id")){
			$this->session->set_userdata("session_id",$this->session->session_id);
		}
    } 

    function index(){
    	$session=$this->session->userdata("session_id");
        $data['checkout']=true;
    	$data['data']=$this->db->get_where("carts",["user_session"=>$session])->result();
    	$this->load->view('front/user/cart/index',$data);
    }

   function add($id){

    	$session=$this->session->userdata("session_id");
    	$data=$this->db->get_where("carts",["user_session"=>$session,"product_id"=>$id])->result_array();
    	if(count($data)>0){
    		$data=$data[0];
    		$qty=($data['quantity']+1);
    		//print_r($data);die;
    		$this->db->update("carts",["quantity"=>$qty],["user_session"=>$session,"product_id"=>$id]);
    		echo json_encode(["status"=>200,"message"=>"Successfully update on cart"]);
    	}else{
    		$this->db->insert("carts",["user_session"=>$session,"product_id"=>$id,"quantity"=>1]);
    		echo json_encode(["status"=>200,"message"=>"Successfully Added cart"]);
    	}
    }
    function delete($id){
    	$session=$this->session->userdata("session_id"); 
    	$data=$this->db->get_where("carts",["id"=>$id])->result_array();
    	if(count($data)>0){
    		$this->db->delete("carts",["id"=>$id]);
    		redirect("cart");
    	}else{
    		redirect("cart");
    	}
    }

    function couponApply(){
        if($this->input->post("coupon")){
            $this->session->set_userdata("coupon",$this->input->post("coupon"));
        }

        $session=$this->session->userdata("session_id");
        $data['data']=$this->db->get_where("carts",["user_session"=>$session])->result();
        $this->load->view('front/user/cart/ajax-index',$data);
    }
    function couponRemove(){
        if($this->session->has_userdata("coupon")){
            $this->session->unset_userdata("coupon");
        }

        $session=$this->session->userdata("session_id");
        $data['data']=$this->db->get_where("carts",["user_session"=>$session])->result();
        $this->load->view('front/user/cart/ajax-index',$data);
    }


    function checkout(){
        $session=$this->session->userdata("session_id");
        $data['data']=$this->db->get_where("carts",["user_session"=>$session])->result();
        $data['checkout']=false;
        $this->load->view('front/user/cart/checkout',$data);
    }


}