<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends Admin_Controller {
	
	public function __construct(){
		parent::__construct();

	}

	public function index(){
		$data['data']=$this->Crud->get("settings");

		$this->load->view('admin/settings/index',$data);
	}

	public function create(){
		$this->load->view('admin/settings/create');
	}

	public function store(){
		if($this->input->post("add-settings")){
			
				$data=[
					"name"=>$this->input->post("name"),
					"value"=>$this->input->post("value")
				];
				$this->Crud->insert("settings",$data);
				$this->session->set_flashdata("success","Successfully Created");
				redirect("admin/settings");
			
			
		}else{
			redirect("admin/settings/create");
		}
	}

	public function delete($id){
		if($this->Crud->getRecord("settings",["id"=>$id],"single")):
			$this->Crud->deleteRecord("settings",["id"=>$id]);
			$this->session->set_flashdata("success","Successfully Deleted");
			redirect("admin/settings");
		else:
			$this->session->set_flashdata("danger","Data is not found");
			redirect("admin/settings");
		endif;
	}

	public function edit($id){
		$data['data']=$this->Crud->getRecord("settings",["id"=>$id],"single");
		if($data['data']):
			
			$this->load->view("admin/settings/edit",$data);
		else:
			$this->session->set_flashdata("danger","Data is not found");
			redirect("admin/settings");
		endif;
	}

	public function update($id){
		$data['data']=$this->Crud->getRecord("settings",["id"=>$id],"single");
		if($data['data']):
			
			if($this->input->post("add-settings")){
				
				$data1=[
					"name"=>$this->input->post("name"),
					"value"=>$this->input->post("value")
				];
				$this->Crud->updateRecordById("settings",$data1,$id);
				$this->session->set_flashdata("success","Successfully Updated");
				redirect("admin/settings");

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
