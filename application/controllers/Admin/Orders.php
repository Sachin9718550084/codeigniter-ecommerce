<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orders extends Admin_Controller {
	
	public function __construct(){
		parent::__construct();

	}

	public function index(){
		$this->db->order_by("id","desc");
		$data['data']=$this->Crud->get("orders");

		$this->load->view('admin/orders/index',$data);
	}



	public function edit($id){
		$data['data']=$this->Crud->getRecord("orders",["id"=>$id],"single");
		if($data['data']):
			
			$this->load->view("admin/orders/edit",$data);
		else:
			$this->session->set_flashdata("danger","Data is not found");
			redirect("admin/orders");
		endif;
	}

	public function update($id){
		$data['data']=$this->Crud->getRecord("orders",["id"=>$id],"single");
		if($data['data']):
			
			if($this->input->post("add-orders")){
				
				$data1=[
					"status"=>$this->input->post("status"),
					"payment_status"=>$this->input->post("payment_status"),
					"payment"=>$this->input->post("payment"),
					"transaction_id"=>$this->input->post("transaction_id")
				];
				$this->Crud->updateRecordById("orders",$data1,$id);
				$this->session->set_flashdata("success","Successfully Updated");
				redirect("admin/orders");

			}else{
				$this->session->set_flashdata("danger","Invalid Call");
				redirect("admin/orders");
			}
			
		else:
			$this->session->set_flashdata("danger","Data is not found");
			redirect("admin/settings");
		endif;
	}


	
}
