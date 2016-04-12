<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class paket extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$sess=$this->session->userdata('logged_in');
		 if(!$sess){
			 redirect(site_url('/admin/login'));
		 }

		$this->load->model("data/paket_model",'paket_model');
	}

	public function index(){
		$data['data'] = $this->paket_model->get_all();
		$this->load->view('admin/head.php');
		$this->load->view('admin/header.php');
		$this->load->view('admin/data/paket/paket.php',$data);
		$this->load->view('admin/footer.php');
	}

	public function edit($id){
		$data['data'] = $this->paket_model->get($id);

		$this->load->view('admin/head.php');
		$this->load->view('admin/header.php');
		$this->load->view('admin/data/paket/paket-edit.php',$data);
		$this->load->view('admin/footer.php');
	}

	public function add_new(){
		$this->load->view('admin/head.php');
		$this->load->view('admin/header.php');
		$this->load->view('admin/data/paket/paket-new.php');
		$this->load->view('admin/footer.php');
	}

	public function do_edit(){
		$data = array(
			'paket' => $_POST['paket'],
			'deskripsi' => $_POST['deskripsi']
		);

		$this->paket_model->update($_POST['id'],$data);
		redirect(site_url('/admin/paket/').'#sukses');
	}

	public function do_new(){
		$data = array(
			'paket' => $_POST['paket'],
			'deskripsi' => $_POST['deskripsi']
		);

		$this->paket_model->add($_POST['id'],$data);
		redirect(site_url('/admin/paket/').'#sukses');
	}

	public function delete($id){
		$this->paket_model->delete($id);
		redirect(site_url('/admin/paket/').'#sukses');
	}

}
