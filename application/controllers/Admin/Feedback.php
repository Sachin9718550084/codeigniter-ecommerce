<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Feedback extends Admin_Controller {
	
	public function __construct(){
		parent::__construct();

	}

	public function index(){
		$data['data']=$this->Crud->get("feedbacks");

		$this->load->view('admin/feedbacks/index',$data);
	}

	public function create(){
		$this->load->view('admin/feedbacks/create');
	}

	public function store(){
		if($this->input->post("add-feedbacks")){
			
				$data=[
					"name"=>$this->input->post("name"),
					"email"=>$this->input->post("email"),
					"mobile"=>$this->input->post("mobile"),
					"message"=>$this->input->post("message")
				];
				$this->Crud->insert("feedbacks",$data);
				$this->session->set_flashdata("success","Successfully Created");
				redirect("admin/feedbacks");
			
			
		}else{
			redirect("admin/feedbacks/create");
		}
	}

	public function delete($id){
		if($this->Crud->getRecord("feedbacks",["id"=>$id],"single")):
			$this->Crud->deleteRecord("feedbacks",["id"=>$id]);
			$this->session->set_flashdata("success","Successfully Deleted");
			redirect("admin/feedbacks");
		else:
			$this->session->set_flashdata("danger","Data is not found");
			redirect("admin/feedbacks");
		endif;
	}

	public function edit($id){
		$data['data']=$this->Crud->getRecord("feedbacks",["id"=>$id],"single");
		if($data['data']):
			
			$this->load->view("admin/feedbacks/edit",$data);
		else:
			$this->session->set_flashdata("danger","Data is not found");
			redirect("admin/feedbacks");
		endif;
	}

	public function update($id){
		$data['data']=$this->Crud->getRecord("feedbacks",["id"=>$id],"single");
		if($data['data']):
			
			if($this->input->post("add-slider")){
				
				$data1=[
					"name"=>$this->input->post("name"),
					"email"=>$this->input->post("email"),
					"mobile"=>$this->input->post("mobile"),
					"message"=>$this->input->post("message")
				];
				$this->Crud->updateRecordById("feedbacks",$data1,$id);
				$this->session->set_flashdata("success","Successfully Updated");
				redirect("admin/feedbacks");

			}else{
				$this->session->set_flashdata("danger","Invalid Call");
				redirect("admin/settings");
			}
			
		else:
			$this->session->set_flashdata("danger","Data is not found");
			redirect("admin/settings");
		endif;
	}


	
}
