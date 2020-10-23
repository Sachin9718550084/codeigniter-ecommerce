<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slider extends Admin_Controller {
	
	public function __construct(){
		parent::__construct();

	}

	public function index(){
		$data['data']=$this->Crud->get("sliders");

		$this->load->view('admin/slider/index',$data);
	}

	public function create(){
		$this->load->view('admin/slider/create');
	}

	public function store(){
		if($this->input->post("add-slider")){
			$image=$this->imageUpload("image");
			if($image['error']==0){
				$data=[
					"image"=>$image['data'],
					"name"=>$this->input->post("name"),
					"link"=>$this->input->post("link"),
					"description"=>$this->input->post("description")
				];
				$this->Crud->insert("sliders",$data);
				$this->session->set_flashdata("success","Successfully Created");
				redirect("admin/sliders");
			}else{
				$this->session->set_flashdata("danger",$image['data']);
				redirect("admin/sliders/create");
			}
			
		}else{
			redirect("admin/sliders/create");
		}
	}

	public function delete($id){
		if($this->Crud->getRecord("sliders",["id"=>$id],"single")):
			$this->Crud->deleteRecord("sliders",["id"=>$id]);
			$this->session->set_flashdata("success","Successfully Deleted");
			redirect("admin/sliders");
		else:
			$this->session->set_flashdata("danger","Data is not found");
			redirect("admin/sliders");
		endif;
	}

	public function edit($id){
		$data['data']=$this->Crud->getRecord("sliders",["id"=>$id],"single");
		if($data['data']):
			
			$this->load->view("admin/slider/edit",$data);
		else:
			$this->session->set_flashdata("danger","Data is not found");
			redirect("admin/sliders");
		endif;
	}

	public function update($id){
		$data['data']=$this->Crud->getRecord("sliders",["id"=>$id],"single");
		if($data['data']):
			
			if($this->input->post("add-slider")){
				$error=0;
				if($_FILES['image']['name']!=""){
					$image=$this->imageUpload("image");
					if($image['error']==0){
						$data1=[
							"image"=>$image['data']
						];
					}else{
						$this->session->set_flashdata("danger",$image['data']);
						redirect("admin/sliders/update/".$id);
					}
				}

				$data1["name"]=$this->input->post("name");
				$data1["link"]=$this->input->post("link");
				$data1["description"]=$this->input->post("description");
					
				$this->Crud->updateRecordById("sliders",$data1,$id);
				$this->session->set_flashdata("success","Successfully Updated");
				redirect("admin/sliders");

			}else{
				$this->session->set_flashdata("danger","Invalid Call");
				redirect("admin/sliders");
			}
			
		else:
			$this->session->set_flashdata("danger","Data is not found");
			redirect("admin/sliders");
		endif;
	}


	
}
