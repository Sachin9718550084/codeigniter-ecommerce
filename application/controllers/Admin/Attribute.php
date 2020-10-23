<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Attribute extends Admin_Controller {
	
	public function __construct(){
		parent::__construct();
			$this->load->model("Welcome_model","WM");
	}

	public function index(){
		$data['data']=$this->Crud->get("attributes");
		$data['categories']=$this->WM->getAttributeGroupArray();
		$this->load->view('admin/attributes/index',$data);
	}

	public function create(){
		$data['categories']=$this->WM->getAttributeGroupArray();
		$this->load->view('admin/attributes/create',$data);
	}

	public function store(){
		if($this->input->post("add-attributes")){
			
				$data=[
					"name"=>$this->input->post("name"),
					"attribute_group_id"=>$this->input->post("attribute_group_id")
				];
				$this->Crud->insert("attributes",$data);
				$this->session->set_flashdata("success","Successfully Created");
				redirect("admin/attributes");
			
			
		}else{
			redirect("admin/attributes/create");
		}
	}

	public function delete($id){
		if($this->Crud->getRecord("attributes",["id"=>$id],"single")):
			$this->Crud->deleteRecord("attributes",["id"=>$id]);
			$this->session->set_flashdata("success","Successfully Deleted");
			redirect("admin/attributes");
		else:
			$this->session->set_flashdata("danger","Data is not found");
			redirect("admin/attributes");
		endif;
	}

	public function edit($id){
		$data['data']=$this->Crud->getRecord("attributes",["id"=>$id],"single");
		if($data['data']):
			$data['categories']=$this->WM->getAttributeGroupArray();
			$this->load->view("admin/attributes/edit",$data);
		else:
			$this->session->set_flashdata("danger","Data is not found");
			redirect("admin/attributes");
		endif;
	}

	public function update($id){
		$data['data']=$this->Crud->getRecord("attributes",["id"=>$id],"single");
		if($data['data']):
			
			if($this->input->post("add-attributes")){
				
				$data1=[
					"name"=>$this->input->post("name"),
					"attribute_group_id"=>$this->input->post("attribute_group_id")
				];
				$this->Crud->updateRecordById("attributes",$data1,$id);
				$this->session->set_flashdata("success","Successfully Updated");
				redirect("admin/attributes");

			}else{
				$this->session->set_flashdata("danger","Invalid Call");
				redirect("admin/attributes");
			}
			
		else:
			$this->session->set_flashdata("danger","Data is not found");
			redirect("admin/attributes");
		endif;
	}


	
}
