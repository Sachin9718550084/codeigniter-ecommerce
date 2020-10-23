<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blogs extends Admin_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model("Welcome_model","WM");

	}

	public function index(){
		$data['data']=$this->Crud->get("blogs");
		$data['categories']=$this->WM->getBlogCategoryArray();
		//print_r($data['categories']);die;
		$this->load->view('admin/blogs/index',$data);
	}

	public function create(){
		$data['categories']=$this->WM->getBlogCategoryArray();
		$this->load->view('admin/blogs/create',$data);
	}

	public function store(){

		if($this->input->post("add-blogs")){
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
					"longDescription"=>$this->input->post("longDescription"),
					"shortDescription"=>$this->input->post("shortDescription"),
					"blog_category_id"=>$this->input->post("blog_category_id")
				];
				if($_FILES['featureImage']['name']!=""){
					$image=$this->imageUpload("featureImage");
					$data['featureImage']=$image['data'];
				}
				$this->Crud->insert("blogs",$data);
				$this->session->set_flashdata("success","Successfully Created");
				redirect("admin/blogs");
			}else{
				$this->session->set_flashdata("danger",$image['data']);
				redirect("admin/blogs/create");
			}
			
		}else{
			redirect("admin/blogs/create");
		}
	}

	public function delete($id){
		if($this->Crud->getRecord("blogs",["id"=>$id],"single")):
			$this->Crud->deleteRecord("blogs",["id"=>$id]);
			$this->session->set_flashdata("success","Successfully Deleted");
			redirect("admin/blogs");
		else:
			$this->session->set_flashdata("danger","Data is not found");
			redirect("admin/blogs");
		endif;
	}

	public function edit($id){
		$data['data']=$this->Crud->getRecord("blogs",["id"=>$id],"single");
		if($data['data']):
			$data['categories']=$this->WM->getBlogCategoryArray();
			$this->load->view("admin/blogs/edit",$data);
		else:
			$this->session->set_flashdata("danger","Data is not found");
			redirect("admin/blogs");
		endif;
	}

	public function update($id){
	
		$data['data']=$this->Crud->getRecord("blogs",["id"=>$id],"single");
		if($data['data']):
			
			if($this->input->post("add-blogs")){
				$error=0;
				if($_FILES['image']['name']!=""){
					$image=$this->imageUpload("image");
					if($image['error']==0){
						$data1=[
							"image"=>$image['data']
						];
					}else{
						$this->session->set_flashdata("danger",$image['data']);
						redirect("admin/blogs/update/".$id);
					}
				}
				if($_FILES['featureImage']['name']!=""){
					$image=$this->imageUpload("featureImage");
					$data1['featureImage']=$image['data'];
				}

				
					$data1["title"]=$this->input->post("title");
					$data1["seo_url"]=$this->input->post("seo_url");
					$data1["meta_title"]=$this->input->post("meta_title");
					$data1["meta_keywords"]=$this->input->post("meta_keywords");
					$data1["meta_description"]=$this->input->post("meta_description");
					$data1["publish"]=$this->input->post("publish");
					$data1["longDescription"]=$this->input->post("longDescription");
					$data1["shortDescription"]=$this->input->post("shortDescription");
					$data1["blog_category_id"]=$this->input->post("blog_category_id");
					
				$this->Crud->updateRecordById("blogs",$data1,$id);
				$this->session->set_flashdata("success","Successfully Updated");
				redirect("admin/blogs");

			}else{
				$this->session->set_flashdata("danger","Invalid Call");
				redirect("admin/blogs");
			}
			
		else:
			$this->session->set_flashdata("danger","Data is not found");
			redirect("admin/blogs");
		endif;
	}


	
}
