<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends Admin_Controller {
	
	public function index(){
		$this->load->view('admin/dashboard/index');
	}

	public function change(){
		if($this->input->post("change_password")){
			$admin=$this->getCurrentAdmin();
			$this->load->model("Login_Model","LM");
			$data=[
				"email"=>$admin->email,
				"password"=>md5($this->input->post("old_password"))
			];
			if($this->LM->check($data)){
				$data=[
					"password"=>md5($this->input->post("new_password"))
				];
				$this->Crud->updateRecordById("admin",$data,$admin->id);
				$this->session->set_flashdata("success","Your Password Is Changed.");
				redirect("admin/change-password");
			}else{
				$this->session->set_flashdata("danger","Your Old Password is incorrect.");
				redirect("admin/change-password");
			}
		}
		$this->load->view('admin/dashboard/change-password');
	}

	public function profile(){
		$data['data']=	$this->getCurrentAdmin();

		if($this->input->post("change-profile")){

			$data1=[
				"name"=>$this->input->post("name"),
				"mobile"=>$this->input->post("mobile")
			];

			$this->Crud->updateRecordById("admin",$data1,$data['data']->id);
			$this->session->set_flashdata("success","Successfully Profile Updated");
			redirect("admin/change-profile");
		}
		$this->load->view('admin/dashboard/change-profile',$data);
	}

	public function logout(){
		$this->session->unset_userdata("userAdmin");
		$this->session->sess_destroy();
		redirect("admin");
	}


	
}
