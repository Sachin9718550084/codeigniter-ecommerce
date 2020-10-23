<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OurClient extends Admin_Controller {
	
	public function __construct(){
		parent::__construct();

	}

	public function index(){
		$data['data']=$this->Crud->get("our-clients");

		$this->load->view('admin/our-clients/index',$data);
	}

	public function create(){
		$this->load->view('admin/our-clients/create');
	}

	public function store(){
		if($this->input->post("add-our-clients")){
			$image=$this->imageUpload("image");
			if($image['error']==0){
				$data=[
					"image"=>$image['data'],
					"title"=>$this->input->post("title")
				];
				$this->Crud->insert("our-clients",$data);
				$this->session->set_flashdata("success","Successfully Created");
				redirect("admin/our-clients");
			}else{
				$this->session->set_flashdata("danger",$image['data']);
				redirect("admin/our-clients/create");
			}
			
		}else{
			redirect("admin/our-clients/create");
		}
	}

	public function delete($id){
		if($this->Crud->getRecord("our-clients",["id"=>$id],"single")):
			$this->Crud->deleteRecord("our-clients",["id"=>$id]);
			$this->session->set_flashdata("success","Successfully Deleted");
			redirect("admin/our-clients");
		else:
			$this->session->set_flashdata("danger","Data is not found");
			redirect("admin/our-clients");
		endif;
	}

	public function edit($id){
		$data['data']=$this->Crud->getRecord("our-clients",["id"=>$id],"single");
		if($data['data']):
			
			$this->load->view("admin/our-clients/edit",$data);
		else:
			$this->session->set_flashdata("danger","Data is not found");
			redirect("admin/our-clients");
		endif;
	}

	public function update($id){
		$data['data']=$this->Crud->getRecord("our-clients",["id"=>$id],"single");
		if($data['data']):
			
			if($this->input->post("add-our-clients")){
				$error=0;
				if($_FILES['image']['name']!=""){
					$image=$this->imageUpload("image");
					if($image['error']==0){
						$data1=[
							"image"=>$image['data']
						];
					}else{
						$this->session->set_flashdata("danger",$image['data']);
						redirect("admin/our-clients/update/".$id);
					}
				}

				$data1["title"]=$this->input->post("title");
					
				$this->Crud->updateRecordById("our-clients",$data1,$id);
				$this->session->set_flashdata("success","Successfully Updated");
				redirect("admin/our-clients");

			}else{
				$this->session->set_flashdata("danger","Invalid Call");
				redirect("admin/our-clients");
			}
			
		else:
			$this->session->set_flashdata("danger","Data is not found");
			redirect("admin/our-clients");
		endif;
	}


	
}
