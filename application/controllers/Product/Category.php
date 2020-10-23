<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
 		// Load pagination library 
        $this->load->library('ajax_pagination'); 
         
        // Load post model 
        
         
        // Per page limit 
        $this->perPage = 9; 
    } 


	function index($seo_url){
		 $data = array(); 
         $cat=$this->db->get_where("categories",["seo_url"=>$seo_url])->result_array();
         if(count($cat)<=0){
            redirect('404');
         }
         $cat=$cat[0];
        // Get record count 
        $count=$this->db->get_where("products",["category_id"=>$cat['id']])->num_rows();
        $totalRec = $count; 
       //  echo $count;die;
        // Pagination configuration 
        $config['target']      = '#dataList'; 
        $config['base_url']    = base_url('category/ajaxPaginationData/'.$cat['seo_url']);
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
        $data['products'] = $this->db->limit($this->perPage)->get_where("products",["category_id"=>$cat['id']])->result(); 
        $data['category']=$cat;
     //    echo "<pre>";print_R($data);die;
        // Load the list page view 
		$this->load->view('front/product/category',$data);
	}

	function ajaxPaginationData($seo_url,$page){ 
        // Define offset 
        $page = $page; 
        if(!$page){ 
            $offset = 0; 
        }else{ 
            $offset = $page; 
        } 
         
        $cat=$this->db->get_where("categories",["seo_url"=>$seo_url])->result_array();
         if(count($cat)<=0){
            redirect('404');
         }
         $cat=$cat[0];
        // Get record count 
        $count=$this->db->get_where("products",["category_id"=>$cat['id']])->num_rows();
        $totalRec = $count; 
       //  echo $count;die;
        // Pagination configuration 
        $config['target']      = '#dataList'; 
        $config['base_url']    = base_url('category/ajaxPaginationData/'.$cat['seo_url']);
        $config['total_rows']  = $totalRec; 
        $config['per_page']    = $this->perPage; 
        $config['uri_segment']    = 4;  
         
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
       $data['products'] = $this->db->limit($this->perPage,$offset)->get_where("products",["category_id"=>$cat['id']])->result();
         
        // Load the data list view 
        $this->load->view('front/product/ajax-data', $data, false); 
    } 
}