<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class diliput extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$sess=$this->session->userdata('logged_in');
		 if(!$sess){
			 redirect(site_url('/admin/login'));
		 }

		$this->load->model("web/diliput_model",'diliput_model');
	}

	public function index(){
		$data['data'] = $this->diliput_model->get_all();
		$this->load->view('admin/head.php');
		$this->load->view('admin/header.php');
		$this->load->view('admin/web/diliput/diliput.php',$data);
		$this->load->view('admin/footer.php');
	}

	public function edit($id){
		$data['data'] = $this->diliput_model->get($id);

		$this->load->view('admin/head.php');
		$this->load->view('admin/header.php');
		$this->load->view('admin/web/diliput/diliput-edit.php',$data);
		$this->load->view('admin/footer.php');
	}

	public function add_new(){

		$this->load->view('admin/head.php');
		$this->load->view('admin/header.php');
		$this->load->view('admin/web/diliput/diliput-new.php');
		$this->load->view('admin/footer.php');
	}

	// script function
	public function do_new(){
		$data = array(
			'nama' => $_POST['nama'],
			'link' => $_POST['link'],
		);

		$error=false;
		if(!empty($_FILES['gambar']['name'])){
			$config=array();
			$config['upload_path'] = FCPATH.'/assets/img/diliput';
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
			$this->diliput_model->add($data);
			redirect(site_url('/admin/diliput/#sukses'));
		}
	}

	public function do_edit(){

		$data = array(
			'nama' => $_POST['nama'],
			'link' => $_POST['link'],
		);

		$error=false;

		if(!empty($_FILES['gambar']['name'])){
			$config=array();
			$config['upload_path'] = FCPATH.'/assets/img/diliput';
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
			$this->diliput_model->update($_POST['id'],$data);
			redirect(site_url('/admin/diliput/#sukses'));
		}
	}

	public function delete($id){
		$this->diliput_model->delete($id);
		redirect(site_url('/admin/diliput/').'#sukses');
	}

}
