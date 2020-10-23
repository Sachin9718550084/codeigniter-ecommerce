<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends Admin_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model("Welcome_model","WM");

	}

	public function index(){
		$data['data']=$this->Crud->get("products");


		$this->load->view('admin/products/index',$data);
	}

	public function create(){

	
		$this->load->view('admin/products/create');
	}

	public function store(){
		// echo "<pre>";
		// print_r($_FILES);
		// die;
		if($this->input->post("add-products")){
            // $this->imageUploading($_FILES['images']['name'],$product_id);
            // die;
				$d=$this->db->get_where("products",["seo_url"=>$this->input->post("seo_url")])->row();
				if($d){
					$this->session->set_flashdata("danger","SEO URL already contains");
					redirect('admin/products/create');
				}
				$data=[
				
					"title" => $this->input->post("title"), 
				    "seo_url" => $this->input->post("seo_url"), 
				    "publish" => $this->input->post("publish"), 
				    "manufacture_id" => $this->input->post("manufacture_id"), 
				    "brand_id" => $this->input->post("brnad_id"), 
				    "category_id" => $this->input->post("category"), 
				    "price" => $this->input->post("price"), 
				    "saleing_price" => $this->input->post("saleing_price"), 
				    "meta_title" => $this->input->post("meta_title"), 
				    "meta_keywords" => $this->input->post("meta_keywords"), 
				    "meta_description" => $this->input->post("meta_description"), 
				   
				  //  "quantity" => $this->input->post("quantity"), 
				    
				    "shortDescription" => $this->input->post("shortDescription"), 
				    "longDescription" => $this->input->post("longDescription"), 
				];
				if($_FILES['featureImage']['name']!=""){
					$image=$this->imageUpload("featureImage");
					$data['featureImage']=$image['data'];
				}
			//echo "<pre>";print_r($data); exit;
				$this->Crud->insert("products",$data);
				 $lastID = $this->db->insert_id();
				 $arr = [
				 	'id'=>$lastID
				 ];

				$dataget=$this->Crud->getRecord("products",$arr);

				$product_id=$dataget->id;
				//Image Uploading
				$filesCount = count($_FILES['images']['name']);
	            
	            for($i = 0; $i < $filesCount; $i++){
	                $_FILES['image']['name']     = time().$_FILES['images']['name'][$i];
	                $_FILES['image']['type']     = $_FILES['images']['type'][$i];
	                $_FILES['image']['tmp_name'] = $_FILES['images']['tmp_name'][$i];
	                $_FILES['image']['error']     = $_FILES['images']['error'][$i];
	                $_FILES['image']['size']     = $_FILES['images']['size'][$i];
	                
	                // File upload configuration
	                $uploadPath = './assets/products/';
	                $config['upload_path'] = $uploadPath;
	                $config['allowed_types'] = 'jpg|jpeg|png|gif';
	                
	                // Load and initialize upload library
	                $this->load->library('upload', $config);
	                $this->upload->initialize($config);
	                
	                // Upload file to server
	                if($this->upload->do_upload('image')){
	                    // Uploaded file data
	                    $fileData = $this->upload->data();
	                    $dataimg[$i]['image'] = $fileData['file_name'];
	                    $dataimg[$i]['product_id'] = $product_id;
	                }
	            }

	            foreach ($dataimg as $img) 
	            {
	            	$this->Crud->insert("product_images",$img);
	            }

				//Attributes insert
				$this->attributesAdding($this->input->post("attribute_group_id"),$this->input->post("attribute_id"),$this->input->post("value"),$product_id);
				
				$this->session->set_flashdata("success","Successfully Created");
				redirect("admin/products");
			
			
		}else{
		
			redirect("admin/products/create");
		}
	}

	// public function imageUploading($files,$product_id){

                   

	// }

	public function attributesAdding($attribute_group_ids,$attribute_id,$values,$product_id){
			foreach($attribute_group_ids as $key=>$group){
				if($group!=""){
					if($attribute_id[$key]!=""){
						if($values[$key]!=""){
							$data=[
								"attribute_id"=>$attribute_id[$key],
								"attribute_group_id"=>$group,
								"value"=>$values[$key],
								"product_id"=>$product_id
							];
							$this->Crud->insert("attribute-products",$data);
						}
					}
				}
			}
	}

	public function delete($id){
		if($this->Crud->getRecord("products",["id"=>$id],"single")):
			$this->Crud->deleteRecord("products",["id"=>$id]);
			$this->session->set_flashdata("success","Successfully Deleted");
			redirect("admin/products");
		else:
			$this->session->set_flashdata("danger","Data is not found");
			redirect("admin/products");
		endif;
	}

	public function edit($id){
		$data['data'] = $this->Crud->getRecord("products",["id"=>$id],"single");
		
		// echo "<pre>";
		// print_r($data['data']);
		// die;
		if($data['data']):
			$data['categories']=$this->WM->getBlogCategoryArray();
			$this->load->view("admin/products/edit",$data);
		else:
			$this->session->set_flashdata("danger","Data is not found");
			redirect("admin/products");
		endif;
	}

	public function update($id){
	
		$data['data']=$this->Crud->getRecord("products",["id"=>$id],"single");
		//echo "<pre>";print_r($data);print_r($_POST);die;
		if($data['data']):
			
			if($this->input->post("add-products")){
				$d=$this->db->get_where("products",["seo_url"=>$this->input->post("seo_url")])->row();
				if($d){
					if($d->id!=$id){
						$this->session->set_flashdata("danger","SEO URL already contains");
						redirect('admin/products/edit/'.$id);
					}
				}
				$error=0;

				$data1=[
					"title" => $this->input->post("title"), 
				    "seo_url" => $this->input->post("seo_url"), 
				    "publish" => $this->input->post("publish"), 
				    "manufacture_id" => $this->input->post("manufacture_id"), 
				    "brand_id" => $this->input->post("brnad_id"), 
				    "category_id" => $this->input->post("category"), 
				    "price" => $this->input->post("price"), 
				    "saleing_price" => $this->input->post("saleing_price"), 
				    "meta_title" => $this->input->post("meta_title"), 
				    "meta_keywords" => $this->input->post("meta_keywords"), 
				    "meta_description" => $this->input->post("meta_description"), 
				   
				  //  "quantity" => $this->input->post("quantity"), 
				    
				    "shortDescription" => $this->input->post("shortDescription"), 
				    "longDescription" => $this->input->post("longDescription"), 
				];
				if($_FILES['featureImage']['name']!=""){
					$image=$this->imageUpload("featureImage");
					if($image['error']==0){
						$data1=[
							"featureImage"=>$image['data']
						];
					}else{
						$this->session->set_flashdata("danger",$image['data']);
						redirect("admin/products/edit/".$id);
					}
				}
			

				
	
					
				$this->Crud->updateRecordById("products",$data1,$id);


				$product_id=$id;
				//Image Uploading
				$filesCount = count($_FILES['images']['name']);
	            
	            for($i = 0; $i < $filesCount; $i++){
	                $_FILES['image']['name']     = time().$_FILES['images']['name'][$i];
	                $_FILES['image']['type']     = $_FILES['images']['type'][$i];
	                $_FILES['image']['tmp_name'] = $_FILES['images']['tmp_name'][$i];
	                $_FILES['image']['error']     = $_FILES['images']['error'][$i];
	                $_FILES['image']['size']     = $_FILES['images']['size'][$i];
	                
	                // File upload configuration
	                $uploadPath = './assets/products/';
	                $config['upload_path'] = $uploadPath;
	                $config['allowed_types'] = 'jpg|jpeg|png|gif';
	                
	                // Load and initialize upload library
	                $this->load->library('upload', $config);
	                $this->upload->initialize($config);
	                
	                // Upload file to server
	                if($this->upload->do_upload('image')){
	                    // Uploaded file data
	                    $fileData = $this->upload->data();
	                    $dataimg[$i]['image'] = $fileData['file_name'];
	                    $dataimg[$i]['product_id'] = $product_id;
	                }
	            }

	            foreach ($dataimg as $img) 
	            {
	            	$this->Crud->insert("product_images",$img);
	            }

				//Attributes insert

	            $this->db->delete("attribute-products",["product_id"=>$product_id]);

				$this->attributesAdding($this->input->post("attribute_group_id"),$this->input->post("attribute_id"),$this->input->post("value"),$product_id);


				$this->session->set_flashdata("success","Successfully Updated");
				redirect("admin/products");

			}else{
			//	echo "<pre>";print_r($data);print_r($_POST);die;
				$this->session->set_flashdata("danger","Invalid Call");
				redirect("admin/products");
			}
			
		else:
			$this->session->set_flashdata("danger","Data is not found");
			redirect("admin/products");
		endif;
	}

}
