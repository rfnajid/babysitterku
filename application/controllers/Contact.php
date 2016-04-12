<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	function index()
	{
		$title="Kontak | Insan Medika | Home Health Care Provider";
		$desc = "Babysitterku merupakan agen penyalur babysitter untuk datang kerumah yang berbasis website dengan proses mudah dan praktis";

		$this->load->model('web/kontak_model','kontak');
		$kontak['email']= $this->kontak->get('Email')->isi;
		$kontak['hotline1']= $this->kontak->get('Hotline 1')->isi;
		$kontak['hotline2']= $this->kontak->get('Hotline 2')->isi;

		$this->load->view('front/template/home-head',array('title' => $title,'description'=>$desc));
		$this->load->view('front/template/home-header');
		$this->load->view('front/konten/kontak');
		$this->load->view('front/template/home-footer',$kontak);
	}

	function post(){
		if(!isset($_POST['nama']) && !isset($_POST['email']) && !isset($_POST['pesan']) && !isset($_POST['telpon'])){
			redirect(site_url());
		}

	    $config = Array(
			  'protocol' => 'smtp',
			  'smtp_host' => 'ssl://iix17.rumahweb.com',
			  'smtp_port' => 465,
			  'smtp_user' => 'no-reply@insanmedika.com', // change it to yours
			  'smtp_pass' => 'No-Reply', // change it to yours
			  'mailtype' => 'html',
			  'charset' => 'iso-8859-1',
			  'wordwrap' => TRUE
			);

      $message = '
				Nama   : '.$_POST['nama'].'<br>
				Email  : '.$_POST['email'].'<br>
				Telpon : '.$_POST['telpon'].'<br>
				Pesan  :<br>
				'.$_POST['pesan']
			;

      $this->load->library('email', $config);
      $this->email->set_newline("\r\n");
      $this->email->from('no-reply@insanmedika.com'); // change it to yours
      $this->email->to('admin@insanmedika.com');// change it to yours
      $this->email->subject('Pesan baru via Kontak Kami !!!');
      $this->email->message($message);
      if($this->email->send())
     {
      redirect(site_url('thanks'));
     }
     else
    {
     show_error($this->email->print_debugger());
    }

}
}
