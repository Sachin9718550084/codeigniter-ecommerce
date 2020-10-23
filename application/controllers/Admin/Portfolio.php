<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio extends Admin_Controller {
	
	public function __construct(){
		parent::__construct();

	}

	public function index(){
		$data['data']=$this->Crud->get("portfolios");

		$this->load->view('admin/portfolios/index',$data);
	}

	public function create(){
		$this->load->view('admin/portfolios/create');
	}

	public function store(){
		if($this->input->post("add-portfolios")){
			$image=$this->imageUpload("image");
			if($image['error']==0){
				$data=[
					"image"=>$image['data'],
					"title"=>$this->input->post("title"),
					"description"=>$this->input->post("description"),
					"link"=>$this->input->post("link"),
					"author"=>$this->input->post("author"),

				];
				$this->Crud->insert("portfolios",$data);
				$this->session->set_flashdata("success","Successfully Created");
				redirect("admin/portfolios");
			}else{
				$this->session->set_flashdata("danger",$image['data']);
				redirect("admin/portfolios/create");
			}
			
		}else{
			redirect("admin/portfolios/create");
		}
	}

	public function delete($id){
		if($this->Crud->getRecord("portfolios",["id"=>$id],"single")):
			$this->Crud->deleteRecord("portfolios",["id"=>$id]);
			$this->session->set_flashdata("success","Successfully Deleted");
			redirect("admin/portfolios");
		else:
			$this->session->set_flashdata("danger","Data is not found");
			redirect("admin/portfolios");
		endif;
	}

	public function edit($id){
		$data['data']=$this->Crud->getRecord("portfolios",["id"=>$id],"single");
		if($data['data']):
			
			$this->load->view("admin/portfolios/edit",$data);
		else:
			$this->session->set_flashdata("danger","Data is not found");
			redirect("admin/portfolios");
		endif;
	}

	public function update($id){
		$data['data']=$this->Crud->getRecord("portfolios",["id"=>$id],"single");
		if($data['data']):
			
			if($this->input->post("add-portfolios")){
				$error=0;
				if($_FILES['image']['name']!=""){
					$image=$this->imageUpload("image");
					if($image['error']==0){
						$data1=[
							"image"=>$image['data']
						];
					}else{
						$this->session->set_flashdata("danger",$image['data']);
						redirect("admin/portfolios/update/".$id);
					}
				}

				$data1["title"]=$this->input->post("title");
				$data1["description"]=$this->input->post("description");
				$data1["link"]=$this->input->post("link");
				$data1["author"]=$this->input->post("author");
					
				$this->Crud->updateRecordById("portfolios",$data1,$id);
				$this->session->set_flashdata("success","Successfully Updated");
				redirect("admin/portfolios");

			}else{
				$this->session->set_flashdata("danger","Invalid Call");
				redirect("admin/portfolios");
			}
			
		else:
			$this->session->set_flashdata("danger","Data is not found");
			redirect("admin/portfolios");
		endif;
	}


	
}
