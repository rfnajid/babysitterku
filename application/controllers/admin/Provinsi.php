<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class provinsi extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$sess=$this->session->userdata('logged_in');
		 if(!$sess){
			 redirect(site_url('/admin/login'));
		 }

		$this->load->model("data/provinsi_model",'provinsi_model');
	}

	public function index(){
		$data['data'] = $this->provinsi_model->get_all();
		$this->load->view('admin/head.php');
		$this->load->view('admin/header.php');
		$this->load->view('admin/data/provinsi/provinsi.php',$data);
		$this->load->view('admin/footer.php');
	}

	public function edit($id){
		$data['data'] = $this->provinsi_model->get($id);

		$this->load->view('admin/head.php');
		$this->load->view('admin/header.php');
		$this->load->view('admin/data/provinsi/provinsi-edit.php',$data);
		$this->load->view('admin/footer.php');
	}

	public function add_new(){
		$this->load->model("data/provinsi_model",'provinsi_model');
		$data['provinsi']=$this->provinsi_model->get_all();

		$this->load->view('admin/head.php');
		$this->load->view('admin/header.php');
		$this->load->view('admin/data/provinsi/provinsi-new.php',$data);
		$this->load->view('admin/footer.php');
	}

	// script function
	public function do_new(){
		$data = array(
			'provinsi' => $_POST['provinsi'],
		);

		$this->provinsi_model->add($data);
		redirect(site_url('/admin/provinsi/#sukses'));
	}

	public function do_edit(){
		$data = array(
			'provinsi' => $_POST['provinsi'],
		);

		$this->provinsi_model->update($_POST['id'],$data);
		redirect(site_url('/admin/provinsi/').'#sukses');
	}

	public function delete($id){
		$this->provinsi_model->delete($id);
		redirect(site_url('/admin/provinsi/').'#sukses');
	}

}
