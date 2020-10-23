<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sales extends Admin_Controller {
	
	public function __construct(){
		parent::__construct();

	}

	public function index(){
		$data['data']=$this->Crud->get("sales");

		$this->load->view('admin/sales/index',$data);
	}

	public function create(){
		$this->load->view('admin/sales/create');
	}

	public function store(){
		if($this->input->post("add-sales")){
			
				$data=[
					"start_date"=>$this->input->post("start_date"),
					"end_date"=>$this->input->post("end_date"),
					"value"=>implode(",",$this->input->post("values"))
				];
				$this->Crud->insert("sales",$data);
				$this->session->set_flashdata("success","Successfully Created");
				redirect("admin/sales");
			
			
		}else{
			redirect("admin/sales/create");
		}
	}

	public function delete($id){
		if($this->Crud->getRecord("sales",["id"=>$id],"single")):
			$this->Crud->deleteRecord("sales",["id"=>$id]);
			$this->session->set_flashdata("success","Successfully Deleted");
			redirect("admin/sales");
		else:
			$this->session->set_flashdata("danger","Data is not found");
			redirect("admin/sales");
		endif;
	}

	public function edit($id){
		$data['data']=$this->Crud->getRecord("sales",["id"=>$id],"single");
		if($data['data']):
			
			$this->load->view("admin/sales/edit",$data);
		else:
			$this->session->set_flashdata("danger","Data is not found");
			redirect("admin/sales");
		endif;
	}

	public function update($id){
		$data['data']=$this->Crud->getRecord("sales",["id"=>$id],"single");
		if($data['data']):
			
			if($this->input->post("add-sales")){
				
					$data1=[
					"start_date"=>$this->input->post("start_date"),
					"end_date"=>$this->input->post("end_date"),
					"value"=>implode(",",$this->input->post("values"))
				];
				$this->Crud->updateRecordById("sales",$data1,$id);
				$this->session->set_flashdata("success","Successfully Updated");
				redirect("admin/sales");

			}else{
				$this->session->set_flashdata("danger","Invalid Call");
				redirect("admin/sales");
			}
			
		else:
			$this->session->set_flashdata("danger","Data is not found");
			redirect("admin/sales");
		endif;
	}


	
}
