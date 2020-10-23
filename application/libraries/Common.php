<?php 
class Common{
	private $CI;

   function __construct() {
       $this->CI =& get_instance();
      
   }

   function statusget(){
   		return [
   			"pending"=>"Pending",
   			"Approved"=>"Approved",
   			"Cancel"=>"Cancel"
   		];
   }
   function getPaymentData(){
   		return [
   			"cod"=>"Cash On Delivery",
   			"voguepay"=>"Voguepay"
   		];
   }
   function getSalesData(){
   		$data=$this->CI->db->get("sales")->result();
   		$ar=[];
   		foreach($data as $d){
   			if(date('Y-m-d')>=$d->start_date && date('Y-m-d')<=$d->end_date){
   				$ar=$d;
   			}
   		}

   		return $ar;
   }
   function getSingleProductData($id){
   		return $this->CI->db->get_where("products",["id"=>$id])->row();
   }


   function getTemplete(){
   	return [
   		"common"=>"common",
   		"contact"=>"contact",
   		'faq'=>"faq",
   		'services'=>"services",
   		'about'=>"about",
   	];
   }
   function getOwnOrders(){
   		$id=$this->CI->session->userdata("user_id");
   		//print_r( $this->CI->db->get_where("orders",["user_id"=>$id])->result());die;
   		$this->CI->db->order_by("id","desc");
   		return $this->CI->db->get_where("orders",["user_id"=>$id])->result();

   }
   function getProducts(){
   	return $this->CI->db->get("products")->result();
   }
   function getProductListAcToOrder($invoice){
   		return $this->CI->db->get_where("order_products",["invoice_id"=>$invoice])->result();
   }

   function getLoginUserDetails(){
   		$email=$this->CI->session->userdata("user_email");
   	//	die($email);
   		return $this->CI->db->get_where("users",["email"=>$email])->row();
   }

   function getUserDetail($id){
   	$data= $this->CI->db->get_where("users",["id"=>$id])->row();
   	if($data){
   		return $data->name." ( ".$data->email ." )";
   	}
   	else{
   		return $id;
   	}
   }
   function getTax(){
   	return 0;
   }
   function deleteCartAfterCheckout(){
	   	$session=$this->CI->session->userdata("session_id"); 
	    $this->CI->db->delete("carts",["user_session"=>$session]);
   }
   function getCoupanData(){
   	if($this->CI->session->has_userdata("coupon")){
   		$code=$this->CI->session->userdata("coupon");
            $data=$this->CI->db->get_where("coupans",["code"=>$code])->row();
            return $data;
   	}
   	return null;
   }
   function getTotalAmount(){
   		$session=$this->CI->session->userdata("session_id");
        
    	$data=$this->CI->db->get_where("carts",["user_session"=>$session])->result();
    	$i=1; $total=0;
		$tax=$this->getTax();
		 foreach($data as $d):
		 	$product=$this->getProductViaID($d->product_id);
			if($product):
				 if($product->saleing_price!=""):
				$total+=$product->saleing_price*$d->quantity;
				else:
				$total+=$product->price*$d->quantity;
				endif;
			endif;
		endforeach;
		return $total;
   }
   function getDiscount($total){
   	 if($this->CI->session->has_userdata("coupon")){
            $code=$this->CI->session->userdata("coupon");
            $data=$this->CI->db->get_where("coupans",["code"=>$code])->row();
            if($data){
            	if($data->type=="percentage"){
            		return ($total*$data->amount)/100;
            	}else{
            		return $data->amount;
            	}
            }
        }else{
   			return 0;
   		}
   }
   function getProductRecent(){
	   	if($this->CI->session->has_userdata("session_id")){
	   		$session=$this->CI->session->userdata("session_id");
	   		$data=$this->CI->db->get_where("recent_views",["user_session"=>$session]);
	   		return $data->result();
	   	}

	   	return [];
   }
   function getProductAttributes($id){
   		$data=$this->CI->db->get_where("attribute-products",["product_id"=>$id]);
   		return $data->result();
   }
   function getProductViaID($id){
   		$data=$this->CI->db->get_where("products",["id"=>$id]);
   		return $data->row();
   }
   function getAttributeDataProduct($id){
   		//$id=$this->input->post("id");
		$d=$this->common->getAttributeViaGourpID($id);
		$data='';
		foreach($d as $key=>$d1){
			$data.="<option value='".$key."'>".$d1."</option>";
		}

		return  $data;

   }
   function getGalleriesImageProduct($id){
   		$data=$this->CI->db->get_where("product_images",["product_id"=>$id]);
   		return $data->result();
   }


	function getMenuDataById($id){
		
		$data=$this->CI->db->get_where("blogs",["blog_category_id"=>$id]);
		return $data->result();
	}

	function getFaqList(){
		$data=$this->CI->db->get("faqs");
		return $data->result();
	}
	function getSliderList(){
		$data=$this->CI->db->get("sliders");
		return $data->result();
	}
	function getOurClientList(){
		$data=$this->CI->db->get("our-clients");
		return $data->result();
	}
	function getCategoryFrontList(){
		$data=$this->CI->db->get("categories");
		return $data->result();
	}

	function getSettingData($name){
		$data='';
		$ar=$this->CI->db->get_where("settings",["name"=>$name]);
		if($ar->num_rows()>0){
			$data=$ar->row()->value;
		}
		return $data;
	}

	function getCategoryListProduct(){
		$data=[];
		$data[]="Choose Category";
		$ar=$this->CI->db->get("categories");
		foreach($ar->result() as $a1){
			$data[$a1->id]=$a1->title;
		}
		return $data;
	}
	function getBrandListProduct(){
		$data=[];
		$data[]="Choose Brand";
		$ar=$this->CI->db->get("brands");
		foreach($ar->result() as $a1){
			$data[$a1->id]=$a1->title;
		}
		return $data;
	}
	function getManufactureListProduct(){
		$data=[];
		$data[]="Choose Manufacture";
		$ar=$this->CI->db->get("manufactures");
		foreach($ar->result() as $a1){
			$data[$a1->id]=$a1->title;
		}
		return $data;
	}

	function getAllAttributeGroups(){
		$data=[];
		$data[]="Choose Attribute Group";
		$ar=$this->CI->db->get("attribute-groups");
		foreach($ar->result() as $a1){
			$data[$a1->id]=$a1->name;
		}

		return $data;
	}

	function getAttributeViaGourpID($attribute_group_id){
		$data=[];
		$data[]="Choose Attribute";
		$ar=$this->CI->db->get_where("attributes",["attribute_group_id"=>$attribute_group_id]);
		foreach($ar->result() as $a1){
			$data[$a1->id]=$a1->name;
		}

		return $data;
	}

	function imageGet($image){
		if($image!=""){
			return $image;
		}
		else{
			return 'no-image.png';
		}
	}
}

?>