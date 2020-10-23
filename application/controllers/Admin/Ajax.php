<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends Admin_Controller {
	
	public function __construct(){
		parent::__construct();

	}

	public function getSeoUrl(){
		$seo=$this->input->post("seo");
		$data=["seo_url"=>$seo];
		if($this->input->post("id")){
			
		}
		//$this->Crud->getRecord("categories",)
	}

	function productAttribute(){
		$id=$this->input->post("id");
		$d=$this->common->getAttributeViaGourpID($id);
		$data='';
		foreach($d as $key=>$d1){
			$data.="<option value='".$key."'>".$d1."</option>";
		}

		echo $data;
	}

}