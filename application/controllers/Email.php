<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller {

	function index()
	{
		redirect(site_url());
	}

  function subscribe(){
    $data = array(
      'success' => true,
      'message' => "Terimakasih telah subscribe Insan Medika, cek email untuk mengklaim voucher ProSehat",
    );

    if(!isset($_POST['email'])){
      $data['success']=false;
      $data['message']="Terjadi Kesalahan";
    }else{
      $post = array(
        'email' => $_POST['email'],
        'jenis' => 'Subscribe'
      );
      $this->load->model("data/mail_model",'mail');

			$x=$this->mail->addjax($post);
			$data['success']=$x['success'];

      if(!$data['success']){
        $data['message']="Email Telah Terdaftar";
      }else{
        if(!$this->send_subscribe($_POST['email'])){
          $data['success']=false;
          $data['message']="Terjadi Kesalahan, Pada Mail Server.  ";
        }
      }
    }
    echo json_encode($data);

  }

	function send_subscribe($to){


	    $config = array(
			  'protocol' => 'smtp',
			  'smtp_host' => 'ssl://iix17.rumahweb.com',
        //'smtp_host' => 'mail.insanmedika.com',
			  'smtp_port' => 465,
			  //'smtp_port' => 25,
			  'smtp_user' => 'no-reply@insanmedika.com', // change it to yours
			  'smtp_pass' => 'No-Reply', // change it to yours
			  'mailtype' => 'html',
			  'charset' => 'iso-8859-1',
			  'wordwrap' => TRUE
			);

      $message = file_get_contents(asset_url().'data/email_campaign.html');
      //$message="tes";

      $this->load->library('email', $config);
      $this->email->set_newline("\r\n");
      $this->email->from('no-reply@insanmedika.com'); // change it to yours
      $this->email->to($to);// change it to yours
      $this->email->subject('Subscribe Insan Medika + Voucher ProSehat 100.000');
      $this->email->message($message);
      if($this->email->send())
     {
      return true;
     }
     else
    {
     return false;
    }
  }
}
