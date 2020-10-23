<?php 

class MY_Controller extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->model("Crud_Model","Crud");
	}
	public function getLayout($viewName){
		$this->load->view("admin/layouts/header");
		$this->load->view($viewName);
 		$this->load->view("admin/layouts/footer");
	}

	public function imageUpload($file){

        $config['upload_path']          = './assets/uploads/';
        $config['allowed_types']        = 'gif|jpg|png';

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload($file))
        {
                $data = array('error' => 1,"data"=>$this->upload->display_errors());
        }
        else
        {
                $data = array('error' => 0,"data"=>$this->upload->data('file_name'));
        }
         return $data;
	}

	function sendMail($from,$to,$subject,$mailContent){
      //  echo !extension_loaded('openssl')?"Not Available":"Available";die;
        $this->load->library('phpmailer_lib');
        
        // PHPMailer object
        $mail = $this->phpmailer_lib->load();
        
        // SMTP configuration
        $mail->isSMTP();
      
        $mail->Host      = 'smtp.gmail.com';        // Specify main and backup SMTP servers
		$mail->SMTPAuth  = true;                    // Enable SMTP authentication
		$mail->CharSet   = "UTF-8";
		// $mail->SMTPDebug = 2;                       // Enable verbose debug output
		$mail->isHTML(true);                        // Set email format to HTML
		$mail->Username = 'ducatgaurav@gmail.com';                    // SMTP username
		$mail->Password = 'recsbdkcrxekmktn';                     // SMTP password
		$mail->SMTPSecure   = 'tls';                // Enable TLS encryption, `ssl` also
		$mail->Port         = 587;    
        $mail->setFrom($from, 'Admin');
        $mail->addReplyTo($from, 'Admin');
       
        // Add a recipient
        $mail->addAddress($to);
        // Add cc or bcc 
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');
        $mail->Subject = $subject;
        // Set email format to HTML
        $mail->isHTML(true);
        // Email body content
       
        $mail->Body = $mailContent;
        
        // Send email
        if(!$mail->send()){
            return false;
            //echo 'Mailer Error: ' . $mail->ErrorInfo;
        }else{
            return true;
        }
    
	}
}


class Admin_Controller extends MY_Controller
{
	public function __construct(){
		parent::__construct();
		if(!$this->session->has_userdata("userAdmin")){
			redirect("admin");
		}
		
	}

	public function getCurrentAdmin(){
		$this->load->database();
		$data=$this->db->get_where("admin",["email"=>$this->session->userdata("userAdmin")]);
		$data=$data->row();
		return $data;
	}
}


class Login_Controller extends MY_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->model("Login_Model","LM");
		if($this->session->has_userdata("userAdmin")){
			redirect("admin/dashboard");
		}
	}
}

