<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tim extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$sess=$this->session->userdata('logged_in');
		 if(!$sess){
			 redirect(site_url('/admin/login'));
		 }

		$this->load->model("web/tim_model",'tim_model');
	}

	public function index(){
		$data['data'] = $this->tim_model->get_all();
		$this->load->view('admin/head.php');
		$this->load->view('admin/header.php');
		$this->load->view('admin/web/tim/tim.php',$data);
		$this->load->view('admin/footer.php');
	}

	public function edit($id){
		$data['data'] = $this->tim_model->get($id);

		$this->load->view('admin/head.php');
		$this->load->view('admin/header.php');
		$this->load->view('admin/web/tim/tim-edit.php',$data);
		$this->load->view('admin/footer.php');
	}

	public function add_new(){
		$this->load->model("data/kota_model",'kota_model');
		$data['kota']=$this->kota_model->get_all();

		$this->load->view('admin/head.php');
		$this->load->view('admin/header.php');
		$this->load->view('admin/web/tim/tim-new.php',$data);
		$this->load->view('admin/footer.php');
	}

	// script function
	public function do_new(){
		$data = array(
			'nama' => $_POST['nama'],
			'job' => $_POST['job'],
			'keterangan' => $_POST['keterangan'],
		);

		$error=false;

		if(!empty($_FILES['foto']['name'])){
			$config=array();
			$config['upload_path'] = FCPATH.'/assets/img/tim';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['overwrite'] = true;
			$hash = substr(md5(time()),0,9);
			$config['file_name'] = $hash;

			$this->load->library('upload',$config);
			if($this->upload->do_upload('foto')){
				$up_data=$this->upload->data();
				$data['foto']=$up_data['file_name'];
			}else{
				echo $this->upload->display_errors();
				$error=true;
			}
		}

		if(!$error){
			$this->tim_model->add($data);
			redirect(site_url('/admin/tim/#sukses'));
		}
	}

	public function do_edit(){

		$data = array(
			'nama' => $_POST['nama'],
			'job' => $_POST['job'],
			'keterangan' => $_POST['keterangan'],
		);

		$error=false;

		if(!empty($_FILES['foto']['name'])){
			$config=array();
			$config['upload_path'] = FCPATH.'/assets/img/tim';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['overwrite'] = true;
			$config['file_name'] = $this->input->post('id');

			$this->load->library('upload',$config);
			if($this->upload->do_upload('foto')){
				$up_data=$this->upload->data();
				$data['foto']=$up_data['file_name'];
			}else{
				echo $this->upload->display_errors();
				$error=true;
			}
		}

		if(!$error){
			$this->tim_model->update($_POST['id'],$data);
			redirect(site_url('/admin/tim/#sukses'));
		}
	}

	public function delete($id){
		$this->tim_model->delete($id);
		redirect(site_url('/admin/tim/').'#sukses');
	}

}
