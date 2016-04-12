<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kenapa extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$sess=$this->session->userdata('logged_in');
		 if(!$sess){
			 redirect(site_url('/admin/login'));
		 }

		$this->load->model("web/kenapa_model",'kenapa_model');
	}

	public function index(){
		$web['data'] = $this->kenapa_model->get_all();
		$this->load->view('admin/head.php');
		$this->load->view('admin/header.php');
		$this->load->view('admin/web/kenapa/kenapa.php',$web);
		$this->load->view('admin/footer.php');
	}

	public function edit($id){
		$web['data'] = $this->kenapa_model->get($id);
		$this->load->view('admin/head.php');
		$this->load->view('admin/header.php');
		$this->load->view('admin/web/kenapa/kenapa-edit.php',$web);
		$this->load->view('admin/footer.php');
	}

	public function add_new(){
		$this->load->view('admin/head.php');
		$this->load->view('admin/header.php');
		$this->load->view('admin/web/kenapa/kenapa-new.php');
		$this->load->view('admin/footer.php');
	}

	// script function
	public function do_new(){
		$web = array(
			'kenapa' => $_POST['kenapa'],
			'deskripsi' => $_POST['deskripsi'],
		);

		$error=false;
		if(!empty($_FILES['gambar']['name'])){
			$config=array();
			$config['upload_path'] = FCPATH.'/assets/img/kenapa';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['overwrite'] = true;
			$hash = substr(md5(time()),0,9);
			$config['file_name'] = $hash;

			$this->load->library('upload',$config);
			if($this->upload->do_upload('gambar')){
				$up_data=$this->upload->data();
				$web['gambar']=$up_data['file_name'];
			}else{
				echo $this->upload->display_errors();
				$error=true;
			}
		}

		if(!$error){
			$this->kenapa_model->add($web);
			redirect(site_url('/admin/kenapa/#sukses'));
		}
	}

	public function do_edit(){
		$web = array(
			'id' => $_POST['id'],
			'kenapa' => $_POST['kenapa'],
			'deskripsi' => $_POST['deskripsi'],
		);

		$error=false;

		if(!empty($_FILES['gambar']['name'])){
			$config=array();
			$config['upload_path'] = FCPATH.'/assets/img/kenapa';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['overwrite'] = true;
			$config['file_name'] = $this->input->post('id');

			$this->load->library('upload',$config);
			if($this->upload->do_upload('gambar')){
				$up_data=$this->upload->data();
				$web['gambar']=$up_data['file_name'];
			}else{
				echo $this->upload->display_errors();
				$error=true;
			}
		}

		if(!$error){
			$this->kenapa_model->update($_POST['id'],$web);
			redirect(site_url('/admin/kenapa/#sukses'));
		}
	}

	public function delete($id){
		$this->kenapa_model->delete($id);
		redirect(site_url('/admin/kenapa/').'#sukses');
	}
}
