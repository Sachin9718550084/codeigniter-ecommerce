<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CMS extends Admin_Controller {
	
	public function __construct(){
		parent::__construct();

	}

	public function index(){
		$data['data']=$this->Crud->get("cms");

		$this->load->view('admin/cms/index',$data);
	}

	public function create(){
		$this->load->view('admin/cms/create');
	}

	public function store(){

		if($this->input->post("add-cms")){
			$image=$this->imageUpload("bannerImage");
			if($image['error']==0){
				$data=[
					"bannerImage"=>$image['data'],
					"name"=>$this->input->post("name"),
					"seo_url"=>$this->input->post("seo_url"),
					"meta_title"=>$this->input->post("meta_title"),
					"meta_keywords"=>$this->input->post("meta_keywords"),
					"meta_description"=>$this->input->post("meta_description"),
					"publish"=>$this->input->post("publish"),
					"mediumDescription"=>$this->input->post("mediumDescription"),
					"longDescription"=>$this->input->post("longDescription"),
					"shortDescription"=>$this->input->post("shortDescription"),
					"templete"=>$this->input->post("templete"),
				];
				if($_FILES['image']['name']!=""){
					$image=$this->imageUpload("image");
					$data['image']=$image['data'];
				}
				$this->Crud->insert("cms",$data);
				$this->session->set_flashdata("success","Successfully Created");
				redirect("admin/cms");
			}else{
				$this->session->set_flashdata("danger",$image['data']);
				redirect("admin/cms/create");
			}
			
		}else{
			redirect("admin/cms/create");
		}
	}

	public function delete($id){
		if($this->Crud->getRecord("cms",["id"=>$id],"single")):
			$this->Crud->deleteRecord("cms",["id"=>$id]);
			$this->session->set_flashdata("success","Successfully Deleted");
			redirect("admin/cms");
		else:
			$this->session->set_flashdata("danger","Data is not found");
			redirect("admin/cms");
		endif;
	}

	public function edit($id){
		$data['data']=$this->Crud->getRecord("cms",["id"=>$id],"single");
		if($data['data']):
			
			$this->load->view("admin/cms/edit",$data);
		else:
			$this->session->set_flashdata("danger","Data is not found");
			redirect("admin/cms");
		endif;
	}

	public function update($id){
	
		$data['data']=$this->Crud->getRecord("cms",["id"=>$id],"single");
		if($data['data']):
			
			if($this->input->post("add-cms")){
				$error=0;
				if($_FILES['image']['name']!=""){
					$image=$this->imageUpload("image");
					if($image['error']==0){
						$data1=[
							"image"=>$image['data']
						];
					}else{
						$this->session->set_flashdata("danger",$image['data']);
						redirect("admin/cms/update/".$id);
					}
				}

				
					$data1["name"]=$this->input->post("name");
					$data1["seo_url"]=$this->input->post("seo_url");
					$data1["meta_title"]=$this->input->post("meta_title");
					$data1["meta_keywords"]=$this->input->post("meta_keywords");
					$data1["meta_description"]=$this->input->post("meta_description");
					$data1["publish"]=$this->input->post("publish");
					$data1["longDescription"]=$this->input->post("longDescription");
					$data1["shortDescription"]=$this->input->post("shortDescription");
					$data1["mediumDescription"]=$this->input->post("mediumDescription");
$data1["templete"]=$this->input->post("templete");


					if($_FILES['bannerImage']['name']!=""){
						$image=$this->imageUpload("bannerImage");
						$data1['bannerImage']=$image['data'];
					}
				$this->Crud->updateRecordById("cms",$data1,$id);
				$this->session->set_flashdata("success","Successfully Updated");
				redirect("admin/cms");

			}else{
				$this->session->set_flashdata("danger","Invalid Call");
				redirect("admin/cms");
			}
			
		else:
			$this->session->set_flashdata("danger","Data is not found");
			redirect("admin/cms");
		endif;
	}


	
}
