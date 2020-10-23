<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
 		if(!$this->session->has_userdata("user_email")){
 			redirect('sign-in');
 		}
    } 

    function index(){
    	$this->load->view('front/user/user/index');
    }
    function logout(){
        $this->session->unset_userdata("user_id");
        $this->session->unset_userdata("user_email");
        redirect("shop");
    }

    function changePassword(){
    	if($this->input->post("change-password")){
    		$old_password=md5($this->input->post("old_password"));
    		$new_password=$this->input->post("new_password");
    		$confirm_password=$this->input->post("confirm_password");
    		if($new_password==$confirm_password){
    			$email=$this->session->userdata("user_email");
    			$data=$this->db->get_where("users",["email"=>$email,"password"=>$old_password])->result_array();
    			if(count($data)>0){
    				$this->db->update("users",["password"=>md5($new_password)],["email"=>$email]);
    				$this->session->set_flashdata("success","successfully password changed");
    				redirect("change-password");
    			}else{
    				$this->session->set_flashdata("danger","Old Password is incorrect");
    				redirect("change-password");
    			}
    		}else{
    			$this->session->set_flashdata("danger","Password Mis-matched");
    			redirect("change-password");
    		}
    	}
    	$this->load->view('front/user/user/change-password');
    }

   function  changeProfile(){
   		$email=$this->session->userdata("user_email");
   		if($this->input->post("change-profile")){
    		$name=$this->input->post("name");
    		$mobile=$this->input->post("mobile");
    		$this->db->update("users",["name"=>$name,"mobile"=>$mobile],["email"=>$email]);
    		$this->session->set_flashdata("success","successfully profile changed");
    		redirect("change-profile");	
    	}
   		$data1=$this->db->get_where("users",["email"=>$email])->result_array();
   		$data=[];
   		$data['data']=$data1[0];
    	$this->load->view('front/user/user/change-profile',$data);
    }

    function myRating(){
    	$this->load->view('front/user/user/my-rating');
    }

    function myOrders(){
    	$this->load->view('front/user/user/my-order');
    }

    function orderDetail($id){

        if($this->session->has_userdata("user_id")){
            $user_id=$this->session->userdata("user_id");
            $data=$this->db->get_where("orders",["id"=>$id,"user_id"=>$user_id])->result();

            if($data){
                $ar['data']=$data[0];
               $this->load->view('front/user/user/my-order-detail',$ar);
            }else{
                redirect('shop');    
            }

        }else{
            redirect('sign-in');
        }
    }


    function userCheckout(){

        if($this->input->post("checkout")){
            $session=$this->session->userdata("session_id");
        
        $data=$this->db->get_where("carts",["user_session"=>$session])->result();
      
        $invoice_id="INV".uniqid();
        $orders=[
            "name"=>$this->input->post("name"),
            "email"=>$this->input->post("email"),
            "mobile"=>$this->input->post("mobile"),
            "city"=>$this->input->post("city"),
            "state"=>$this->input->post("state"),
            "country"=>$this->input->post("country"),
            "zipcode"=>$this->input->post("zipcode"),
            "address"=>$this->input->post("address"),
            "payment"=>$this->input->post("payment"),
            "invoice_id"=>$invoice_id
        ];
        $tax=$this->common->getTax();
        $total_amount=$this->common->getTotalAmount();
        $discount=$this->common->getDiscount($total_amount);
        if($this->common->getCoupanData()){
            $coupon=$this->common->getCoupanData();
            $orders["coupon"]=$coupon->name;
            $orders["coupon_code"]=$coupon->code;
            $orders["coupon_amount"]=$discount;
        }

        $orders["total_amount"]=$total_amount;
        $orders["grand_total"]=$total_amount+$tax-$discount;
        $orders["user_id"]=$this->session->userdata("user_id");

        $this->db->insert("orders",$orders);
        foreach($data as $d){
            $product=$this->common->getProductViaID($d->product_id);
            if($product){
                $productOrder=[
                    "invoice_id"=>$invoice_id,
                    "quantity"=>$d->quantity,
                    "product_name"=>$product->title,
                    "product_seo_url"=>$product->seo_url,
                    "product_shortDescription"=>$product->shortDescription,
                    "product_price"=>$product->price,
                    "product_saleing_price"=>$product->saleing_price,
                    "product_featureImage"=>$product->featureImage,
                ];

                $this->db->insert("order_products",$productOrder);
            }
        }

            if($this->session->has_userdata("coupon")){
                $this->session->unset_userdata("coupon");
            }
            $this->common->deleteCartAfterCheckout();
            if($this->input->post("payment")=="voguepay"){
                redirect('payment-gateway?invoive='.$invoice_id);
            }else{
                redirect('thank-you?invoive='.$invoice_id);
            }
        }

        redirect("checkout");
    }

    function paymentGateway(){
        if(isset($_GET['invoive'])):
            $data=$this->db->get_where("orders",["invoice_id"=>$_GET['invoive']])->row();
            if($data):
                $ar=[];
                $ar['data']=$data;
                $this->load->view("front/user/payment/voguepay",$ar);
            else:
                redirect('404');
            endif;
        else:
            redirect('404');
        endif;
    }

    function DataSaveAfterPayment(){
        if(isset($_GET['invoice'])):
            $data=$this->db->get_where("orders",["invoice_id"=>$_GET['invoice']])->row();
            if($data):
               $transaction_id=$this->input->post("transaction_id");
               $status=$this->input->post("status");
               $this->db->where('invoice_id', $_GET['invoice']);
                $this->db->update('orders', ["transaction_id"=>$transaction_id,"payment_status"=>$status]);
           
            endif;
        
        endif;
    }

    function paymentGatewayfailed(){
        
    }
    function paymentGatewaynotification(){
        
    }
    function paymentGatewaythank(){
        
    }

}