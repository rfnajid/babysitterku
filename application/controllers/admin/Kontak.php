<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kontak extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$sess=$this->session->userdata('logged_in');
		 if(!$sess){
			 redirect(site_url('/admin/login'));
		 }

		$this->load->model("web/kontak_model",'kontak_model');
	}

	public function index(){
		$data['data'] = $this->kontak_model->get_all();
		$this->load->view('admin/head.php');
		$this->load->view('admin/header.php');
		$this->load->view('admin/web/kontak/kontak.php',$data);
		$this->load->view('admin/footer.php');
	}

	public function edit($id){
		$data['data'] = $this->kontak_model->get_by_id($id);

		$this->load->view('admin/head.php');
		$this->load->view('admin/header.php');
		$this->load->view('admin/web/kontak/kontak-edit.php',$data);
		$this->load->view('admin/footer.php');
	}

	public function add_new(){
		$this->load->model("data/kota_model",'kota_model');
		$data['kota']=$this->kota_model->get_all();

		$this->load->view('admin/head.php');
		$this->load->view('admin/header.php');
		$this->load->view('admin/web/kontak/kontak-new.php',$data);
		$this->load->view('admin/footer.php');
	}

	// script function
	public function do_new(){
		$data = array(
			'jenis' => $_POST['jenis'],
			'isi' => $_POST['isi'],
		);

		$this->kontak_model->add($data);
		redirect(site_url('/admin/kontak/#sukses'));
	}

	public function do_edit(){
		$data = array(
			'jenis' => $_POST['jenis'],
			'isi' => $_POST['isi'],
		);

		$this->kontak_model->update($_POST['id'],$data);
		redirect(site_url('/admin/kontak/').'#sukses');
	}

	public function delete($id){
		$this->kontak_model->delete($id);
		redirect(site_url('/admin/kontak/').'#sukses');
	}

}
