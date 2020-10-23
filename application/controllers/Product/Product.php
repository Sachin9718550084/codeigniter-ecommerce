<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
 		// Load pagination library 
        $this->load->library('ajax_pagination'); 
         
        // Load post model 
        
         
        // Per page limit 
        $this->perPage = 9; 
    } 


	function index(){
		 $data = array(); 
         
        // Get record count 
        $count=$this->db->get("products")->num_rows();
        $totalRec = $count; 
       //  echo $count;die;
        // Pagination configuration 
        $config['target']      = '#dataList'; 
        $config['base_url']    = base_url('shop/ajaxPaginationData'); 
        $config['total_rows']  = $totalRec; 
        $config['per_page']    = $this->perPage; 
         
        // Initialize pagination library 
        $this->ajax_pagination->initialize($config); 
         
        if($this->input->get("order")){
        	$order=$this->input->get("order");
        	if($order=="low"){
        		$this->db->order_by("price","asc");
        	}elseif($order=="high"){
        		$this->db->order_by("price","desc");
        	}elseif($order=="new"){
        		$this->db->order_by("id","desc");
        	}
        }else{
        	$this->db->order_by("id","desc");
        }
     
        $data['products'] = $this->db->limit($this->perPage)->get("products")->result(); 
     //    echo "<pre>";print_R($data);die;
        // Load the list page view 
		$this->load->view('front/product/index',$data);
	}

	function ajaxPaginationData($page){ 
        // Define offset 
        $page = $page; 
        if(!$page){ 
            $offset = 0; 
        }else{ 
            $offset = $page; 
        } 
         
        // Get record count 
       $count=$this->db->get("products")->num_rows();
        $totalRec = $count; 
      
         
        // Pagination configuration 
        $config['target']      = '#dataList'; 
        $config['base_url']    = base_url('shop/ajaxPaginationData'); 
        $config['total_rows']  = $totalRec; 
        $config['per_page']    = $this->perPage; 
         
        // Initialize pagination library 
        $this->ajax_pagination->initialize($config); 
         
        // Get records 
         if($this->input->get("order")){
        	$order=$this->input->get("order");
        	if($order=="low"){
        		$this->db->order_by("price","asc");
        	}elseif($order=="high"){
        		$this->db->order_by("price","desc");
        	}elseif($order=="new"){
        		$this->db->order_by("id","desc");
        	}
        }else{
        	$this->db->order_by("id","desc");
        }
       $data['products'] = $this->db->limit($this->perPage,$offset)->get("products")->result();
         
        // Load the data list view 
        $this->load->view('front/product/ajax-data', $data, false); 
    } 

    function single($seo_url){
        $product=$this->db->get_where("products",["seo_url"=>$seo_url])->row();
       // print_r($product);die;
        if($product){

                     if(!$this->session->has_userdata("session_id")){
                    $this->session->set_userdata("session_id",$this->session->session_id);
                }
                $session=$this->session->userdata("session_id");
                $data=$this->db->get_where("recent_views",["user_session"=>$session,"product_id"=>$product->id])->result_array();
                if(count($data)>0){
                    
                }else{
                    $this->db->insert("recent_views",["user_session"=>$session,"product_id"=>$product->id,]);
                    //echo json_encode(["status"=>200,"message"=>"Successfully Added cart"]);
                }
            



            $data['product']=$product;
        	$this->load->view("front/product/single-product",$data);
        }else{
            redirect('404');
        }
    }
}