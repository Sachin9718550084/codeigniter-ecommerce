<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OurTeam extends Admin_Controller {
	
	public function __construct(){
		parent::__construct();

	}

	public function index(){
		$data['data']=$this->Crud->get("our-teams");

		$this->load->view('admin/our-teams/index',$data);
	}

	public function create(){
		$this->load->view('admin/our-teams/create');
	}

	public function store(){
		if($this->input->post("add-our-teams")){
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
					"experiance"=>$this->input->post("experiance"),
					"message"=>$this->input->post("message")
				];
				$this->Crud->insert("our-teams",$data);
				$this->session->set_flashdata("success","Successfully Created");
				redirect("admin/our-teams");
			}else{
				$this->session->set_flashdata("danger",$image['data']);
				redirect("admin/our-teams/create");
			}
			
		}else{
			redirect("admin/our-teams/create");
		}
	}

	public function delete($id){
		if($this->Crud->getRecord("our-teams",["id"=>$id],"single")):
			$this->Crud->deleteRecord("our-teams",["id"=>$id]);
			$this->session->set_flashdata("success","Successfully Deleted");
			redirect("admin/our-teams");
		else:
			$this->session->set_flashdata("danger","Data is not found");
			redirect("admin/our-teams");
		endif;
	}

	public function edit($id){
		$data['data']=$this->Crud->getRecord("our-teams",["id"=>$id],"single");
		if($data['data']):
			
			$this->load->view("admin/our-teams/edit",$data);
		else:
			$this->session->set_flashdata("danger","Data is not found");
			redirect("admin/our-teams");
		endif;
	}

	public function update($id){
		$data['data']=$this->Crud->getRecord("our-teams",["id"=>$id],"single");
		if($data['data']):
			
			if($this->input->post("add-our-teams")){
				$error=0;
				if($_FILES['image']['name']!=""){
					$image=$this->imageUpload("image");
					if($image['error']==0){
						$data1=[
							"image"=>$image['data']
						];
					}else{
						$this->session->set_flashdata("danger",$image['data']);
						redirect("admin/our-teams/update/".$id);
					}
				}

				$data1["name"]=$this->input->post("name");
				$data1["email"]=$this->input->post("email");
				$data1["mobile"]=$this->input->post("mobile");
				$data1["profile"]=$this->input->post("profile");
				$data1["country"]=$this->input->post("country");
				$data1["state"]=$this->input->post("state");
				$data1["city"]=$this->input->post("city");
				$data1["experiance"]=$this->input->post("experiance");
				
				$data1["message"]=$this->input->post("message");
					
				$this->Crud->updateRecordById("our-teams",$data1,$id);
				$this->session->set_flashdata("success","Successfully Updated");
				redirect("admin/our-teams");

			}else{
				$this->session->set_flashdata("danger","Invalid Call");
				redirect("admin/our-teams");
			}
			
		else:
			$this->session->set_flashdata("danger","Data is not found");
			redirect("admin/our-teams");
		endif;
	}


	
}
