<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class lamaran extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$sess=$this->session->userdata('logged_in');
		 if(!$sess){
			 redirect(site_url('/admin/login'));
		 }

		$this->load->model("web/lamaran_model",'lamaran_model');
	}

	public function index(){
		$data['data'] = $this->lamaran_model->get_all();
		$this->load->view('admin/head.php');
		$this->load->view('admin/header.php');
		$this->load->view('admin/web/lamaran/lamaran.php',$data);
		$this->load->view('admin/footer.php');
	}

	public function edit($id){
		$data['data'] = $this->lamaran_model->get($id);

		$this->load->view('admin/head.php');
		$this->load->view('admin/header.php');
		$this->load->view('admin/web/lamaran/lamaran-edit.php',$data);
		$this->load->view('admin/footer.php');
	}

	public function do_edit(){

		$data = array(
			'status' => $_POST['status'],
		);

		$this->lamaran_model->update($_POST['id'],$data);
		redirect(site_url('/admin/lamaran/').'#sukses');
	}

	public function delete($id){
		$this->lamaran_model->delete($id);
		redirect(site_url('/admin/lamaran/').'#sukses');
	}

}
