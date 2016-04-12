<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kota extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$sess=$this->session->userdata('logged_in');
		 if(!$sess){
			 redirect(site_url('/admin/login'));
		 }

		$this->load->model("data/kota_model",'kota_model');
	}

	public function index(){
		$data['data'] = $this->kota_model->get_all();

		$this->load->view('admin/head.php');
		$this->load->view('admin/header.php');
		$this->load->view('admin/data/kota/kota.php',$data);
		$this->load->view('admin/footer.php');
	}

	public function edit($id){
		$data['data'] = $this->kota_model->get($id);
		$this->load->model('data/provinsi_model','provinsi_model');
		$data['provinsi'] = $this->provinsi_model->get_all();

		$this->load->view('admin/head.php');
		$this->load->view('admin/header.php');
		$this->load->view('admin/data/kota/kota-edit.php',$data);
		$this->load->view('admin/footer.php');
	}

	public function add_new(){
		$this->load->model('data/provinsi_model');
		$data['provinsi'] = $this->provinsi_model->get_all();

		$this->load->view('admin/head.php');
		$this->load->view('admin/header.php');
		$this->load->view('admin/data/kota/kota-new.php',$data);
		$this->load->view('admin/footer.php');
	}

	// script function
	public function do_new(){
		$data = array(
			'kota' => $_POST['kota'],
			'provinsi' => $_POST['provinsi']
		);

		$this->kota_model->add($data);
		redirect(site_url('/admin/kota/#sukses'));
	}

	public function do_edit(){
		$data = array(
			'kota' => $_POST['kota'],
			'provinsi' => $_POST['provinsi']
		);

		$this->kota_model->update($_POST['id'],$data);
		redirect(site_url('/admin/kota/').'#sukses');
	}

	public function delete($id){
		$this->kota_model->delete($id);
		redirect(site_url('/admin/kota/').'#sukses');
	}

}
