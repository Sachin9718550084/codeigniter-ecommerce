<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StaticPage extends CI_Controller {
	
	public function index()
	{
		// echo "<pre>";
		// print_R($_SERVER);die;
		$this->load->view('front/index');
	}
	public function about()
	{
		$this->load->view('front/about');
	}
	function contactUsPost(){
		if($this->input->post("contact")){
			$ar=[
				"name"=>$this->input->post("name"),
				"email"=>$this->input->post("email"),
				"mobile"=>$this->input->post("mobile"),
				"message"=>$this->input->post("message")

			];
			$this->db->insert("feedbacks",$ar);
			redirect('contact-us');
		}else{
			redirect("no-found");
		}

	}
	function dynamicPage($seo_url){
		$data=$this->db->get_where("cms",["seo_url"=>$seo_url])->row();
		if($data){
			$ar['data']=$data;
			//echo "hello";
			$this->load->view('front/static/'.$data->templete,$ar);
		}else{
		
			redirect("no-found");
		}
	}
	public function noFound(){
		$this->load->view("front/noFound");
	}
	function shippingAndReturns(){
		$this->load->view("front/shippingAndReturns");
	}
	function privacyNotice(){
		$this->load->view("front/privacyNotice");
	}
	function conditionsOfUse(){
		$this->load->view("front/conditionsOfUse");
	}
	function onlineSupport(){
		$this->load->view("front/onlineSupport");
	}
	function helpAndFaq(){
		$this->load->view("front/helpAndFaq");
	}
	function callCenter(){
		$this->load->view("front/callCenter");
	}
	function contact(){
		$this->load->view("front/contact");
	}

	function softwareCustomization(){
		$this->load->view("front/softwareCustomization");
	}
	function iosAndMacOS(){
		$this->load->view("front/iosAndMacOS");
	}
	function hardwareCustomization(){
		$this->load->view("front/hardwareCustomization");
	}
	function bespokeEngravingOnAllApple(){
		$this->load->view("front/bespokeEngravingOnAllApple");
	}
	function appleGiveBack(){
		$this->load->view("front/appleGiveBack");
	}
	function applecareProtection(){
		$this->load->view("front/applecareProtection");
	}
	function bespokeConfigured(){
		$this->load->view("front/bespokeConfigured");
	}
	function repairAndWarranty(){
		$this->load->view("front/repairAndWarranty");
	}
	function blukAndSingleSales(){
		$this->load->view("front/blukAndSingleSales");
	}
	
}
