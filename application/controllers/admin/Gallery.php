<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class gallery extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$sess=$this->session->userdata('logged_in');
		 if(!$sess){
			 redirect(site_url('/admin/login'));
		 }

		$this->load->model("web/gallery_model",'gallery_model');
	}

	public function index(){
		$data['foto'] = $this->gallery_model->get_all('foto');
		$data['youtube'] = $this->gallery_model->get_all('youtube');
		$this->load->view('admin/head.php');
		$this->load->view('admin/header.php');
		$this->load->view('admin/web/gallery/gallery.php',$data);
		$this->load->view('admin/footer.php');
	}

	public function foto_edit($id){
		$data['foto'] = $this->gallery_model->get('foto',$id);

		$this->load->view('admin/head.php');
		$this->load->view('admin/header.php');
		$this->load->view('admin/web/gallery/foto-edit.php',$data);
		$this->load->view('admin/footer.php');
	}

	public function youtube_edit($id){
		$data['youtube'] = $this->gallery_model->get('youtube',$id);

		$this->load->view('admin/head.php');
		$this->load->view('admin/header.php');
		$this->load->view('admin/web/gallery/youtube-edit.php',$data);
		$this->load->view('admin/footer.php');
	}

	public function foto_add_new(){
		$this->load->view('admin/head.php');
		$this->load->view('admin/header.php');
		$this->load->view('admin/web/gallery/foto-new.php');
		$this->load->view('admin/footer.php');
	}

	public function youtube_add_new(){
		$this->load->view('admin/head.php');
		$this->load->view('admin/header.php');
		$this->load->view('admin/web/gallery/youtube-new.php');
		$this->load->view('admin/footer.php');
	}

	// script function
	public function foto_do_new(){
		$data = array(
			'judul' => $_POST['judul'],
			'keterangan' => $_POST['keterangan'],
		);

		$error=true;

		echo("not set foto");

		if(!empty($_FILES['foto']['name'])){
			$config=array();
			$config['upload_path'] = FCPATH.'/assets/img/foto';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['overwrite'] = true;
			$hash = substr(md5(time()),0,9);
			$config['file_name'] = $hash;

			$this->load->library('upload',$config);
			if($this->upload->do_upload('foto')){
				$up_data=$this->upload->data();
				$data['foto']=$up_data['file_name'];
				$error=false;
			}else{
				echo $this->upload->display_errors();
				$error=true;
			}
		}

		if(!$error){
			$this->gallery_model->add('foto',$data);
			redirect(site_url('/admin/gallery/#sukses'));
		}
	}

	// script function
	public function youtube_do_new(){
		$data = array(
			'judul' => $_POST['judul'],
			'link' => $_POST['link'],
		);

		$error=true;

		echo("not set foto");

		if(!empty($_FILES['thumbnail']['name'])){
			$config=array();
			$config['upload_path'] = FCPATH.'/assets/img/youtube';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['overwrite'] = true;
			$hash = substr(md5(time()),0,9);
			$config['file_name'] = $hash;

			$this->load->library('upload',$config);
			if($this->upload->do_upload('thumbnail')){
				$up_data=$this->upload->data();
				$data['thumbnail']=$up_data['file_name'];
				$error=false;
			}else{
				echo $this->upload->display_errors();
				$error=true;
			}
		}

		if(!$error){
			$this->gallery_model->add('youtube',$data);
			redirect(site_url('/admin/gallery/#sukses'));
		}
	}

	public function foto_do_edit(){

		$error =false;

		$data = array(
			'judul' => $_POST['judul'],
			'keterangan' => $_POST['keterangan'],
		);

		echo("not set foto");

		if(!empty($_FILES['foto']['name'])){
			$config=array();
			$config['upload_path'] = FCPATH.'/assets/img/foto';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['overwrite'] = true;
			$config['file_name'] =$_POST['id'];

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
			$this->gallery_model->update('foto',$_POST['id'],$data);
			redirect(site_url('/admin/gallery/#sukses'));
		}
	}

	// script function
	public function youtube_do_edit(){
		$data = array(
			'judul' => $_POST['judul'],
			'link' => $_POST['link'],
		);

		echo("not set foto");

		if(!empty($_FILES['thumbnail']['name'])){
			$config=array();
			$config['upload_path'] = FCPATH.'/assets/img/youtube';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['overwrite'] = true;
			$config['file_name'] =$_POST['id'];

			$this->load->library('upload',$config);
			if($this->upload->do_upload('thumbnail')){
				$up_data=$this->upload->data();
				$data['thumbnail']=$up_data['file_name'];
			}else{
				echo $this->upload->display_errors();
				$error=true;
			}
		}

		if(!$error){
			$this->gallery_model->update('youtube',$_POST['id'],$data);
			redirect(site_url('/admin/gallery/#sukses'));
		}
	}

	public function foto_delete($id){
		$this->gallery_model->delete('foto',$id);
		redirect(site_url('/admin/gallery/').'#sukses');
	}

	public function youtube_delete($id){
		$this->gallery_model->delete('youtube',$id);
		redirect(site_url('/admin/gallery/').'#sukses');
	}
}
