<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AttributeGroup extends Admin_Controller {
	
	public function __construct(){
		parent::__construct();

	}

	public function index(){
		$data['data']=$this->Crud->get("attribute-groups");

		$this->load->view('admin/attribute-groups/index',$data);
	}

	public function create(){
		$this->load->view('admin/attribute-groups/create');
	}

	public function store(){
		if($this->input->post("add-attribute-groups")){
			
				$data=[
					"name"=>$this->input->post("name"),
					
				];
				$this->Crud->insert("attribute-groups",$data);
				$this->session->set_flashdata("success","Successfully Created");
				redirect("admin/attribute-groups");
			
			
		}else{
			redirect("admin/attribute-groups/create");
		}
	}

	public function delete($id){
		if($this->Crud->getRecord("attribute-groups",["id"=>$id],"single")):
			$this->Crud->deleteRecord("attribute-groups",["id"=>$id]);
			$this->session->set_flashdata("success","Successfully Deleted");
			redirect("admin/attribute-groups");
		else:
			$this->session->set_flashdata("danger","Data is not found");
			redirect("admin/attribute-groups");
		endif;
	}

	public function edit($id){
		$data['data']=$this->Crud->getRecord("attribute-groups",["id"=>$id],"single");
		if($data['data']):
			
			$this->load->view("admin/attribute-groups/edit",$data);
		else:
			$this->session->set_flashdata("danger","Data is not found");
			redirect("admin/attribute-groups");
		endif;
	}

	public function update($id){
		$data['data']=$this->Crud->getRecord("attribute-groups",["id"=>$id],"single");
		if($data['data']):
			
			if($this->input->post("add-attribute-groups")){
				
				$data1=[
					"name"=>$this->input->post("name"),
					
				];
				$this->Crud->updateRecordById("attribute-groups",$data1,$id);
				$this->session->set_flashdata("success","Successfully Updated");
				redirect("admin/attribute-groups");

			}else{
				$this->session->set_flashdata("danger","Invalid Call");
				redirect("admin/attribute-groups");
			}
			
		else:
			$this->session->set_flashdata("danger","Data is not found");
			redirect("admin/attribute-groups");
		endif;
	}


	
}
