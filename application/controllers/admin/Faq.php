<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class faq extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$sess=$this->session->userdata('logged_in');
		 if(!$sess){
			 redirect(site_url('/admin/login'));
		 }

		$this->load->model("web/faq_model",'faq_model');
	}

	public function index(){
		$data['data'] = $this->faq_model->get_all();
		$this->load->view('admin/head.php');
		$this->load->view('admin/header.php');
		$this->load->view('admin/web/faq/faq.php',$data);
		$this->load->view('admin/footer.php');
	}

	public function edit($id){
		$data['data'] = $this->faq_model->get($id);

		$this->load->view('admin/head.php');
		$this->load->view('admin/header.php');
		$this->load->view('admin/web/faq/faq-edit.php',$data);
		$this->load->view('admin/footer.php');
	}

	public function add_new(){
		$this->load->model("data/kota_model",'kota_model');
		$data['kota']=$this->kota_model->get_all();

		$this->load->view('admin/head.php');
		$this->load->view('admin/header.php');
		$this->load->view('admin/web/faq/faq-new.php',$data);
		$this->load->view('admin/footer.php');
	}

	// script function
	public function do_new(){
		$data = array(
			'pertanyaan' => $_POST['pertanyaan'],
			'jawaban' => $_POST['jawaban'],
		);

		$this->faq_model->add($data);
		redirect(site_url('/admin/faq/#sukses'));
	}

	public function do_edit(){

		$data = array(
			'pertanyaan' => $_POST['pertanyaan'],
			'jawaban' => $_POST['jawaban'],
		);

		$this->faq_model->update($_POST['id'],$data);
		redirect(site_url('/admin/faq/').'#sukses');
	}

	public function delete($id){
		$this->faq_model->delete($id);
		redirect(site_url('/admin/faq/').'#sukses');
	}

}
