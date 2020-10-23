<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
 		if($this->session->has_userdata("user_email")){
 			redirect('my-account');
 		}
    } 

    function index(){
    	$this->load->view('front/user/auth/login');
    }
    function loginPost(){
    	$email=$this->input->post("email");
    	$password=md5($this->input->post("password"));
    	$user=$this->db->get_where("users",["email"=>$email])->num_rows();
    	if($user>0){
    		$data=$this->db->get_where("users",["email"=>$email,"password"=>$password])->result_array();
    		if(count($data)>0){
    			$data=$data[0];
    			if($data['status']=="active"){
                    //print_r($data);die;
    				$this->session->set_userdata("user_email",$data['email']);
    				$this->session->set_userdata("user_id",$data['id']);
                    $html="";
                    if($this->input->post("checkout")=="1"){
                        $html=$this->load->view("front/user/cart/form-checkout",null,true);
                    }
    				echo json_encode(["status"=>200,"message"=>"login Successfully","html"=>$html]);
    			}else{
    				echo json_encode(["status"=>404,"message"=>"Your account is deactive please consult our customer care"]);
    			}
    		}else{
    			echo json_encode(["status"=>404,"message"=>"Password Error "]);
    		}
    	}else{
    		echo json_encode(["status"=>404,"message"=>"User Not Exist "]);
    	}
    	
    }
    function loginPostGuest(){
        $email=$this->input->post("email");
        
        $user=$this->db->get_where("users",["email"=>$email])->num_rows();
        if($user>0){
            
            
        }else{
            $this->db->insert("users",["email"=>$email,"password"=>md5('12345'),"status"=>'active']);
        }
        $data=$this->db->get_where("users",["email"=>$email])->result_array();
           // print_r($data);die;
                $data=$data[0];
                if($data['status']=="active"){
                    //print_r($data);die;
                    $this->session->set_userdata("user_email",$data['email']);
                    $this->session->set_userdata("user_id",$data['id']);
                    $html="";
                    if($this->input->post("checkout")=="1"){
                        $html=$this->load->view("front/user/cart/form-checkout",null,true);
                    }
                    echo json_encode(["status"=>200,"message"=>"login as guest Successfully","html"=>$html]);
                }else{
                    echo json_encode(["status"=>404,"message"=>"Your account is deactive please consult our customer care"]);
                }
    }

    function registerPost(){
    	$name=$this->input->post("name");
    	$email=$this->input->post("email");
    	$mobile=$this->input->post("mobile");
    	$password=md5($this->input->post("password"));
    	$user=$this->db->get_where("users",["email"=>$email])->num_rows();
    	if($user>0){
    		echo json_encode(["status"=>404,"message"=>"Email ALready Exist"]);die;
    	}else{
    		$this->db->insert("users",["email"=>$email,"password"=>$password,"mobile"=>$mobile,"name"=>$name,"status"=>'active']);
    		echo json_encode(["status"=>200,"message"=>"Register Success "]);
    	}
    }

    function register(){
    	$this->load->view('front/user/auth/register');
    }
    function forgetPassword(){
    	$this->load->view('front/user/auth/forget');
    }
}