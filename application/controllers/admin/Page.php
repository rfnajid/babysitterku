<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class page extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$sess=$this->session->userdata('logged_in');
		 if(!$sess){
			 redirect(site_url('/admin/login'));
		 }

		$this->load->model("web/page_model",'page_model');
		$this->load->helper('string');
	}

	public function index(){
		$data['data'] = $this->page_model->get_all();
		$this->load->view('admin/head.php');
		$this->load->view('admin/header.php');
		$this->load->view('admin/web/page/page.php',$data);
		$this->load->view('admin/footer.php');
	}
	
	public function edit($id){
		$data['data'] = $this->page_model->get($id);

		$this->load->view('admin/head.php');
		$this->load->view('admin/header.php');
		$this->load->view('admin/web/page/page-edit.php',$data);
		$this->load->view('admin/footer.php');
	}

	public function do_edit(){
		$data = array(
			'isi' => $_POST['isi'],
		);

		$this->page_model->update($_POST['id'],$data);
		redirect(site_url('/admin/page/#sukses'));
	}

	public function delete($id){
		$this->page_model->delete($id);
		redirect(site_url('/admin/page/').'#sukses');
	}

}
