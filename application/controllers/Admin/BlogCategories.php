<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BlogCategories extends Admin_Controller {
	
	public function __construct(){
		parent::__construct();

	}

	public function index(){
		$data['data']=$this->Crud->get("blog-categories");

		$this->load->view('admin/blog-categories/index',$data);
	}

	public function create(){
		$this->load->view('admin/blog-categories/create');
	}

	public function store(){

		if($this->input->post("add-blog-categories")){
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
					"description"=>$this->input->post("description")
				];
				$this->Crud->insert("blog-categories",$data);
				$this->session->set_flashdata("success","Successfully Created");
				redirect("admin/blog-categories");
			}else{
				$this->session->set_flashdata("danger",$image['data']);
				redirect("admin/blog-categories/create");
			}
			
		}else{
			redirect("admin/blog-categories/create");
		}
	}

	public function delete($id){
		if($this->Crud->getRecord("blog-categories",["id"=>$id],"single")):
			$this->Crud->deleteRecord("blog-categories",["id"=>$id]);
			$this->session->set_flashdata("success","Successfully Deleted");
			redirect("admin/blog-categories");
		else:
			$this->session->set_flashdata("danger","Data is not found");
			redirect("admin/blog-categories");
		endif;
	}

	public function edit($id){
		$data['data']=$this->Crud->getRecord("blog-categories",["id"=>$id],"single");
		if($data['data']):
			
			$this->load->view("admin/blog-categories/edit",$data);
		else:
			$this->session->set_flashdata("danger","Data is not found");
			redirect("admin/blog-categories");
		endif;
	}

	public function update($id){
	
		$data['data']=$this->Crud->getRecord("blog-categories",["id"=>$id],"single");
		if($data['data']):
			
			if($this->input->post("add-blog-categories")){
				$error=0;
				if($_FILES['image']['name']!=""){
					$image=$this->imageUpload("image");
					if($image['error']==0){
						$data1=[
							"image"=>$image['data']
						];
					}else{
						$this->session->set_flashdata("danger",$image['data']);
						redirect("admin/blog-categories/update/".$id);
					}
				}

				
					$data1["title"]=$this->input->post("title");
					$data1["seo_url"]=$this->input->post("seo_url");
					$data1["meta_title"]=$this->input->post("meta_title");
					$data1["meta_keywords"]=$this->input->post("meta_keywords");
					$data1["meta_description"]=$this->input->post("meta_description");
					$data1["publish"]=$this->input->post("publish");
					$data1["description"]=$this->input->post("description");
					
				$this->Crud->updateRecordById("blog-categories",$data1,$id);
				$this->session->set_flashdata("success","Successfully Updated");
				redirect("admin/blog-categories");

			}else{
				$this->session->set_flashdata("danger","Invalid Call");
				redirect("admin/blog-categories");
			}
			
		else:
			$this->session->set_flashdata("danger","Data is not found");
			redirect("admin/blog-categories");
		endif;
	}


	
}
