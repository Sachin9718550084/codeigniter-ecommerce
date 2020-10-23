<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testimonial extends Admin_Controller {
	
	public function __construct(){
		parent::__construct();

	}

	public function index(){
		$data['data']=$this->Crud->get("testimonials");

		$this->load->view('admin/testimonials/index',$data);
	}

	public function create(){
		$this->load->view('admin/testimonials/create');
	}

	public function store(){
		if($this->input->post("add-testimonials")){
			$image=$this->imageUpload("image");
			if($image['error']==0){
				$data=[
					"image"=>$image['data'],
					"name"=>$this->input->post("name"),
					"email"=>$this->input->post("email"),
					"mobile"=>$this->input->post("mobile"),
					"profile"=>$this->input->post("profile"),
					"country"=>$this->input->post("country"),
					"state"=>$this->input->post("state"),
					"city"=>$this->input->post("city"),
					"message"=>$this->input->post("message")
				];
				$this->Crud->insert("testimonials",$data);
				$this->session->set_flashdata("success","Successfully Created");
				redirect("admin/testimonials");
			}else{
				$this->session->set_flashdata("danger",$image['data']);
				redirect("admin/testimonials/create");
			}
			
		}else{
			redirect("admin/testimonials/create");
		}
	}

	public function delete($id){
		if($this->Crud->getRecord("testimonials",["id"=>$id],"single")):
			$this->Crud->deleteRecord("testimonials",["id"=>$id]);
			$this->session->set_flashdata("success","Successfully Deleted");
			redirect("admin/testimonials");
		else:
			$this->session->set_flashdata("danger","Data is not found");
			redirect("admin/testimonials");
		endif;
	}

	public function edit($id){
		$data['data']=$this->Crud->getRecord("testimonials",["id"=>$id],"single");
		if($data['data']):
			
			$this->load->view("admin/testimonials/edit",$data);
		else:
			$this->session->set_flashdata("danger","Data is not found");
			redirect("admin/testimonials");
		endif;
	}

	public function update($id){
		$data['data']=$this->Crud->getRecord("testimonials",["id"=>$id],"single");
		if($data['data']):
			
			if($this->input->post("add-testimonials")){
				$error=0;
				if($_FILES['image']['name']!=""){
					$image=$this->imageUpload("image");
					if($image['error']==0){
						$data1=[
							"image"=>$image['data']
						];
					}else{
						$this->session->set_flashdata("danger",$image['data']);
						redirect("admin/testimonials/update/".$id);
					}
				}

				$data1["name"]=$this->input->post("name");
				$data1["email"]=$this->input->post("email");
				$data1["mobile"]=$this->input->post("mobile");
				$data1["profile"]=$this->input->post("profile");
				$data1["country"]=$this->input->post("country");
				$data1["state"]=$this->input->post("state");
				$data1["city"]=$this->input->post("city");
				$data1["message"]=$this->input->post("message");
					
				$this->Crud->updateRecordById("testimonials",$data1,$id);
				$this->session->set_flashdata("success","Successfully Updated");
				redirect("admin/testimonials");

			}else{
				$this->session->set_flashdata("danger","Invalid Call");
				redirect("admin/testimonials");
			}
			
		else:
			$this->session->set_flashdata("danger","Data is not found");
			redirect("admin/testimonials");
		endif;
	}


	
}
