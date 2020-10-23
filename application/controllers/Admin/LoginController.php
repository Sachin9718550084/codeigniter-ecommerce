<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends Login_Controller {
	
	public function index(){
		if($this->input->post("login")){
			$data=[
				"email"=>$this->input->post("email"),
				"password"=>md5($this->input->post("password"))
			];
			if($this->LM->check($data)){
				$admin=$this->Crud->getRecord("admin",["email"=>$data['email']]);
			
				$this->session->set_userdata("userAdmin",$data['email']);
				$this->session->set_userdata("userAdminName",$admin->name);
				redirect("admin/dashboard");
			}else{

				$this->session->set_flashdata("danger","Your credential is mis-match");
				redirect("admin");
			}
		}
		$this->load->view('admin/login/index');
	}


	public function forget(){
		if($this->input->post("forget-password")){

			if($this->LM->checkEmail($this->input->post("email"))){
				$data['data']=$this->LM->getDataViaEmail($this->input->post("email"));
				$remember_token=uniqid();
				$data['remember_token']=$remember_token;
				$this->LM->SaveRemember_token($remember_token,$data['data']->id);
				$mailContent = $this->load->view('mail/admin-forget-password', $data, TRUE);
				$subject="Reset Link ";
				$from=$this->config->item('from');
				$to=$data['data']->email;
				$this->sendMail($from,$to,$subject,$mailContent);
				$this->session->set_flashdata("success","Successfully Send Reset Password Link");
				redirect("admin/forget-password");
			}else{
				$this->session->set_flashdata("danger","This is not exist on our system");
				redirect("admin/forget-password");

			}
		}

		$this->load->view('admin/login/forget');
	}


	function reset($remember_token){

		if($this->LM->checkRememberToken($remember_token)){
			if($this->input->post("reset-password")){
				$data['password']=md5($this->input->post("new_password"));
				$data['remember_token']=null;
				$this->LM->updatePasswordViaRememberToken($remember_token,$data);
				$this->session->set_flashdata("success","Successfully Reset Password");
				redirect("admin");
			}
			$this->load->view("admin/login/reset-password");
		}else{
			$this->session->set_flashdata("danger","This token is not valid");
			redirect("admin/forget-password");
		}
	}
	
}
