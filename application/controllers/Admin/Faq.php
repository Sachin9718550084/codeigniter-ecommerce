<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faq extends Admin_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model("Welcome_model","WM");

	}

	public function index(){
		$data['data']=$this->Crud->get("faqs");
		$data['categories']=$this->WM->getFaqCategoryArray();
		$this->load->view('admin/faqs/index',$data);
	}

	public function create(){
		$data['categories']=$this->WM->getFaqCategoryArray();
		$this->load->view('admin/faqs/create',$data);
	}

	public function store(){
		if($this->input->post("add-faqs")){
			
				$data=[
					"question"=>$this->input->post("question"),
					"answer"=>$this->input->post("answer"),
					"faq_category_id"=>$this->input->post("faq_category_id")
					
				];
				$this->Crud->insert("faqs",$data);
				$this->session->set_flashdata("success","Successfully Created");
				redirect("admin/faqs");
			
			
		}else{
			redirect("admin/faqs/create");
		}
	}

	public function delete($id){
		if($this->Crud->getRecord("faqs",["id"=>$id],"single")):
			$this->Crud->deleteRecord("faqs",["id"=>$id]);
			$this->session->set_flashdata("success","Successfully Deleted");
			redirect("admin/faqs");
		else:
			$this->session->set_flashdata("danger","Data is not found");
			redirect("admin/faqs");
		endif;
	}

	public function edit($id){
		$data['data']=$this->Crud->getRecord("faqs",["id"=>$id],"single");
		if($data['data']):
			$data['categories']=$this->WM->getFaqCategoryArray();
			$this->load->view("admin/faqs/edit",$data);
		else:
			$this->session->set_flashdata("danger","Data is not found");
			redirect("admin/faqs");
		endif;
	}

	public function update($id){
		$data['data']=$this->Crud->getRecord("faqs",["id"=>$id],"single");
		if($data['data']):
			
			if($this->input->post("add-faqs")){
				
				$data1=[
					"question"=>$this->input->post("question"),
					"answer"=>$this->input->post("answer"),
					"faq_category_id"=>$this->input->post("faq_category_id")
				];
				$this->Crud->updateRecordById("faqs",$data1,$id);
				$this->session->set_flashdata("success","Successfully Updated");
				redirect("admin/faqs");

			}else{
				$this->session->set_flashdata("danger","Invalid Call");
				redirect("admin/faqs");
			}
			
		else:
			$this->session->set_flashdata("danger","Data is not found");
			redirect("admin/faqs");
		endif;
	}


	
}
