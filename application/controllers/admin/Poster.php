<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class poster extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$sess=$this->session->userdata('logged_in');
		 if(!$sess){
			 redirect(site_url('/admin/login'));
		 }

		$this->load->model("web/poster_model",'poster_model');
	}

	public function index(){
		$data['data'] = $this->poster_model->get_all();
		$this->load->view('admin/head.php');
		$this->load->view('admin/header.php');
		$this->load->view('admin/web/poster/poster.php',$data);
		$this->load->view('admin/footer.php');
	}

	public function edit($id){
		$data['data'] = $this->poster_model->get($id);

		$this->load->view('admin/head.php');
		$this->load->view('admin/header.php');
		$this->load->view('admin/web/poster/poster-edit.php',$data);
		$this->load->view('admin/footer.php');
	}

	public function add_new(){
		$this->load->model("data/kota_model",'kota_model');
		$data['kota']=$this->kota_model->get_all();

		$this->load->view('admin/head.php');
		$this->load->view('admin/header.php');
		$this->load->view('admin/web/poster/poster-new.php',$data);
		$this->load->view('admin/footer.php');
	}

	// script function
	public function do_new(){
		$error=false;
		$data = array(
			'nama' => $_POST['nama'],
		);

		if(!empty($_FILES['gambar']['name'])){
			$config=array();
			$config['upload_path'] = FCPATH.'/assets/img/poster';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['overwrite'] = true;
			$hash = substr(md5(time()),0,9);
			$config['file_name'] = $hash;

			$this->load->library('upload',$config);
			if($this->upload->do_upload('gambar')){
				$up_data=$this->upload->data();
				$data['gambar']=$up_data['file_name'];
			}else{
				echo $this->upload->display_errors();
				$error=true;
			}
		}

		if(!$error){
			$this->poster_model->add($data);
			redirect(site_url('/admin/poster/#sukses'));
		}
	}

	public function do_edit(){
		$error=false;
		$data = array(
			'nama' => $_POST['nama'],
		);

		if(!empty($_FILES['gambar']['name'])){
			$config=array();
			$config['upload_path'] = FCPATH.'/assets/img/poster';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['overwrite'] = true;
			$config['file_name'] = $this->input->post('id');

			$this->load->library('upload',$config);
			if($this->upload->do_upload('gambar')){
				$up_data=$this->upload->data();
				$data['gambar']=$up_data['file_name'];
			}else{
				echo $this->upload->display_errors();
				$error=true;
			}
		}

		if(!$error){
			$this->poster_model->update($_POST['id'],$data);
			redirect(site_url('/admin/poster/#sukses'));
		}
	}

	public function delete($id){
		$this->poster_model->delete($id);
		redirect(site_url('/admin/poster/').'#sukses');
	}

}
