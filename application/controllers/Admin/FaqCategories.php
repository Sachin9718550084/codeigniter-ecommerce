<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FaqCategories extends Admin_Controller {
	
	public function __construct(){
		parent::__construct();

	}

	public function index(){
		$data['data']=$this->Crud->get("faq-categories");

		$this->load->view('admin/faq-categories/index',$data);
	}

	public function create(){
		$this->load->view('admin/faq-categories/create');
	}

	public function store(){
		if($this->input->post("add-faq-categories")){
			$image=$this->imageUpload("image");
			if($image['error']==0){
				$data=[
					"image"=>$image['data'],
					"title"=>$this->input->post("title"),
					"description"=>$this->input->post("description")
				];
				$this->Crud->insert("faq-categories",$data);
				$this->session->set_flashdata("success","Successfully Created");
				redirect("admin/faq-categories");
			}else{
				$this->session->set_flashdata("danger",$image['data']);
				redirect("admin/faq-categories/create");
			}
			
		}else{
			redirect("admin/faq-categories/create");
		}
	}

	public function delete($id){
		if($this->Crud->getRecord("faq-categories",["id"=>$id],"single")):
			$this->Crud->deleteRecord("faq-categories",["id"=>$id]);
			$this->session->set_flashdata("success","Successfully Deleted");
			redirect("admin/faq-categories");
		else:
			$this->session->set_flashdata("danger","Data is not found");
			redirect("admin/faq-categories");
		endif;
	}

	public function edit($id){
		$data['data']=$this->Crud->getRecord("faq-categories",["id"=>$id],"single");
		if($data['data']):
			
			$this->load->view("admin/faq-categories/edit",$data);
		else:
			$this->session->set_flashdata("danger","Data is not found");
			redirect("admin/faq-categories");
		endif;
	}

	public function update($id){
		$data['data']=$this->Crud->getRecord("faq-categories",["id"=>$id],"single");
		if($data['data']):
			
			if($this->input->post("add-faq-categories")){
				$error=0;
				if($_FILES['image']['name']!=""){
					$image=$this->imageUpload("image");
					if($image['error']==0){
						$data1=[
							"image"=>$image['data']
						];
					}else{
						$this->session->set_flashdata("danger",$image['data']);
						redirect("admin/faq-categories/update/".$id);
					}
				}

				$data1["title"]=$this->input->post("title");
				$data1["description"]=$this->input->post("description");
				
					
				$this->Crud->updateRecordById("faq-categories",$data1,$id);
				$this->session->set_flashdata("success","Successfully Updated");
				redirect("admin/faq-categories");

			}else{
				$this->session->set_flashdata("danger","Invalid Call");
				redirect("admin/faq-categories");
			}
			
		else:
			$this->session->set_flashdata("danger","Data is not found");
			redirect("admin/faq-categories");
		endif;
	}


	
}
