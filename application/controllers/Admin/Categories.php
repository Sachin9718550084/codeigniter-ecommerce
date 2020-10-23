<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends Admin_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model("Welcome_model","WM");
	}

	public function index(){
		$data['data']=$this->Crud->get("categories");
		$data['categories']=$this->WM->getCategoryArray();
		$this->load->view('admin/categories/index',$data);
	}

	public function create(){
		$data['categories']=$this->WM->getCategoryArray();
		$this->load->view('admin/categories/create',$data);
	}

	public function store(){

		if($this->input->post("add-categories")){
			$image=$this->imageUpload("image");
			if($image['error']==0){
				$data=[
					"image"=>$image['data'],
					"title"=>$this->input->post("title"),
					"seo_url"=>$this->input->post("seo_url"),
					"meta_title"=>$this->input->post("meta_title"),
					"meta_keywords"=>$this->input->post("meta_keywords"),
					"meta_description"=>$this->input->post("meta_description"),
					"publish"=>$this->input->post("publish"),
					"isParent"=>$this->input->post("isParent"),
					"description"=>$this->input->post("description")
				];
				$this->Crud->insert("categories",$data);
				$this->session->set_flashdata("success","Successfully Created");
				redirect("admin/categories");
			}else{
				$this->session->set_flashdata("danger",$image['data']);
				redirect("admin/categories/create");
			}
			
		}else{
			redirect("admin/categories/create");
		}
	}

	public function delete($id){
		if($this->Crud->getRecord("categories",["id"=>$id],"single")):
			$this->Crud->deleteRecord("categories",["id"=>$id]);
			$this->session->set_flashdata("success","Successfully Deleted");
			redirect("admin/categories");
		else:
			$this->session->set_flashdata("danger","Data is not found");
			redirect("admin/categories");
		endif;
	}

	public function edit($id){
		$data['data']=$this->Crud->getRecord("categories",["id"=>$id],"single");
		if($data['data']):
			$data['categories']=$this->WM->getCategoryArray();
			$this->load->view("admin/categories/edit",$data);
		else:
			$this->session->set_flashdata("danger","Data is not found");
			redirect("admin/categories");
		endif;
	}

	public function update($id){
	
		$data['data']=$this->Crud->getRecord("categories",["id"=>$id],"single");
		if($data['data']):
			
			if($this->input->post("add-categories")){
				$error=0;
				if($_FILES['image']['name']!=""){
					$image=$this->imageUpload("image");
					if($image['error']==0){
						$data1=[
							"image"=>$image['data']
						];
					}else{
						$this->session->set_flashdata("danger",$image['data']);
						redirect("admin/categories/update/".$id);
					}
				}

				
					$data1["title"]=$this->input->post("title");
					$data1["seo_url"]=$this->input->post("seo_url");
					$data1["meta_title"]=$this->input->post("meta_title");
					$data1["meta_keywords"]=$this->input->post("meta_keywords");
					$data1["meta_description"]=$this->input->post("meta_description");
					$data1["publish"]=$this->input->post("publish");
					$data1["isParent"]=$this->input->post("isParent");
					
					$data1["description"]=$this->input->post("description");
					
				$this->Crud->updateRecordById("categories",$data1,$id);
				$this->session->set_flashdata("success","Successfully Updated");
				redirect("admin/categories");

			}else{
				$this->session->set_flashdata("danger","Invalid Call");
				redirect("admin/categories");
			}
			
		else:
			$this->session->set_flashdata("danger","Data is not found");
			redirect("admin/categories");
		endif;
	}


	
}
