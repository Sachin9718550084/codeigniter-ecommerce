<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends Admin_Controller {
	
	public function __construct(){
		parent::__construct();

	}

	public function index(){
		$data['data']=$this->Crud->get("galleries");

		$this->load->view('admin/galleries/index',$data);
	}

	public function create(){
		$this->load->view('admin/galleries/create');
	}

	public function store(){
		if($this->input->post("add-galleries")){
			$image=$this->imageUpload("image");
			if($image['error']==0){
				$data=[
					"image"=>$image['data'],
					"title"=>$this->input->post("title"),
					"description"=>$this->input->post("description")
				];
				$this->Crud->insert("galleries",$data);
				$this->session->set_flashdata("success","Successfully Created");
				redirect("admin/galleries");
			}else{
				$this->session->set_flashdata("danger",$image['data']);
				redirect("admin/galleries/create");
			}
			
		}else{
			redirect("admin/galleries/create");
		}
	}

	public function delete($id){
		if($this->Crud->getRecord("galleries",["id"=>$id],"single")):
			$this->Crud->deleteRecord("galleries",["id"=>$id]);
			$this->session->set_flashdata("success","Successfully Deleted");
			redirect("admin/galleries");
		else:
			$this->session->set_flashdata("danger","Data is not found");
			redirect("admin/galleries");
		endif;
	}

	public function edit($id){
		$data['data']=$this->Crud->getRecord("galleries",["id"=>$id],"single");
		if($data['data']):
			
			$this->load->view("admin/galleries/edit",$data);
		else:
			$this->session->set_flashdata("danger","Data is not found");
			redirect("admin/galleries");
		endif;
	}

	public function update($id){
		$data['data']=$this->Crud->getRecord("galleries",["id"=>$id],"single");
		if($data['data']):
			
			if($this->input->post("add-galleries")){
				$error=0;
				if($_FILES['image']['name']!=""){
					$image=$this->imageUpload("image");
					if($image['error']==0){
						$data1=[
							"image"=>$image['data']
						];
					}else{
						$this->session->set_flashdata("danger",$image['data']);
						redirect("admin/galleries/update/".$id);
					}
				}

				$data1["title"]=$this->input->post("title");
				$data1["description"]=$this->input->post("description");
				
					
				$this->Crud->updateRecordById("galleries",$data1,$id);
				$this->session->set_flashdata("success","Successfully Updated");
				redirect("admin/galleries");

			}else{
				$this->session->set_flashdata("danger","Invalid Call");
				redirect("admin/galleries");
			}
			
		else:
			$this->session->set_flashdata("danger","Data is not found");
			redirect("admin/galleries");
		endif;
	}


	
}
