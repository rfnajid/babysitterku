<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class babysitter extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$sess=$this->session->userdata('logged_in');
		 if(!$sess){
			 redirect(site_url('/admin/login'));
		 }

		$this->load->model("data/babysitter_model",'babysitter_model');
	}

	public function index(){
		$data['data'] = $this->babysitter_model->get_all();
		$this->load->view('admin/head.php');
		$this->load->view('admin/header.php');
		$this->load->view('admin/data/babysitter/babysitter.php',$data);
		$this->load->view('admin/footer.php');
	}

	public function edit($id){
		$this->load->model("data/kota_model",'kota_model');

		$data['kota']=$this->kota_model->get_all();
		$data['data'] = $this->babysitter_model->get($id);
		//$data['layanan']=$this->babysitter_model->get_layanan($id);
		$data['gallery']=$this->babysitter_model->get_gallery($id);

		$this->load->view('admin/head.php');
		$this->load->view('admin/header.php');
		$this->load->view('admin/data/babysitter/babysitter-edit.php',$data);
		$this->load->view('admin/footer.php');
	}

	public function add_new(){
		$this->load->model("data/kota_model",'kota_model');
		$data['kota']=$this->kota_model->get_all();

		$this->load->view('admin/head.php');
		$this->load->view('admin/header.php');
		$this->load->view('admin/data/babysitter/babysitter-new.php',$data);
		$this->load->view('admin/footer.php');
	}

	public function add_layanan($id){
		$this->load->model('data/layanan_model','layanan_model');
		$data['layanan']=$this->layanan_model->get_not($id);
		$data['id']=$id;

		$this->load->view('admin/head.php');
		$this->load->view('admin/header.php');
		$this->load->view('admin/data/babysitter/babysitter-add-layanan.php',$data);
		$this->load->view('admin/footer.php');
	}

	public function add_gallery($id){
		$data['id']=$id;

		$this->load->view('admin/head.php');
		$this->load->view('admin/header.php');
		$this->load->view('admin/data/babysitter/babysitter-add-gallery.php',$data);
		$this->load->view('admin/footer.php');
	}

	// script function
	public function do_new(){
		$jawa=true;
		$luar_jawa=true;
		if($_POST['penempatan']=="Jawa"){
			$luar_jawa=false;
		}else if($_POST['penempatan']=="Luar Jawa"){
			$jawa=false;
		}

		$data = array(
			'nama' => $_POST['nama'],
			'alamat' => $_POST['alamat'],
			'telpon' => $_POST['telpon'],
			'pendidikan' => $_POST['pendidikan'],
			'agama' => $_POST['agama'],
			'kelamin' => $_POST['kelamin'],
			'tinggi' => $_POST['tinggi'],
			'berat' => $_POST['berat'],
			'kota' => $_POST['kota'],
			'skill_level' => $_POST['skill_level'],
			'jawa' => $jawa,
			'luar_jawa' => $luar_jawa,
			'pengalaman' => $_POST['pengalaman'],
			'keyword' => $_POST['keyword'],
		);

		$error = false;
		if(!empty($_FILES['file']['name'])){
			$config=array();
			$config['upload_path'] = FCPATH.'/assets/img/babysitter';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['overwrite'] = true;
			$hash = substr(md5(time()),0,9);
			$config['file_name'] = $hash;

			$this->load->library('upload',$config);
			if($this->upload->do_upload('file')){
				$up_data=$this->upload->data();
				$data['foto']=$up_data['file_name'];
			}else{
				echo $this->upload->display_errors();
				$error=true;
			}
		}

		if(!$error){
			$this->babysitter_model->add($data);
			redirect(site_url('/admin/babysitter/#sukses'));
		}
	}

	public function do_edit(){
		$jawa=true;
		$luar_jawa=true;
		if($_POST['penempatan']=="Jawa"){
			$luar_jawa=false;
		}else if($_POST['penempatan']=="Luar Jawa"){
			$jawa=false;
		}
		$data = array(
			'id' => $_POST['id'],
			'nama' => $_POST['nama'],
			'alamat' => $_POST['alamat'],
			'telpon' => $_POST['telpon'],
			'pendidikan' => $_POST['pendidikan'],
			'agama' => $_POST['agama'],
			'kelamin' => $_POST['kelamin'],
			'tinggi' => $_POST['tinggi'],
			'berat' => $_POST['berat'],
			'kota' => $_POST['kota'],
			'skill_level' => $_POST['skill_level'],
			'jawa' => $jawa,
			'luar_jawa' => $luar_jawa,
			'pengalaman' => $_POST['pengalaman'],
			'keyword' => $_POST['keyword'],
			'status' => $_POST['status'],
		);

		$error = false;
		if(!empty($_FILES['file']['name'])){

			$config=array();
			$config['upload_path'] = FCPATH.'/assets/img/babysitter';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['overwrite'] = true;
			$hash = substr(md5(time()),0,9);
			$config['file_name'] = $hash;

			$this->load->library('upload',$config);
			if($this->upload->do_upload('file')){
				$up_data=$this->upload->data();
				$data['foto']=$up_data['file_name'];
			}else{
				echo $this->upload->display_errors();
				$error=true;
			}
		}

		if(!$error){
			$this->babysitter_model->update($_POST['id'],$data);
			redirect(site_url('/admin/babysitter/').'#sukses');
		}
	}

	public function delete($id){
		$this->babysitter_model->delete($id);
		redirect(site_url('/admin/babysitter/').'#sukses');
	}

	public function do_add_layanan(){
		$data = array(
			'id_layanan' => $this->input->post('layanan'),
			'id_babysitter' => $this->input->post('id_babysitter')
		);
		$this->babysitter_model->add_layanan($data);
		redirect(site_url('/admin/babysitter/edit/'.$this->input->post('id_babysitter'))."#sukses");
	}

	public function delete_layanan($id_babysitter,$id_layanan){
		$this->babysitter_model->delete_layanan($id_babysitter,$id_layanan);
		redirect(site_url('/admin/babysitter/edit/'.$id_babysitter).'#sukses');
	}

	public function do_add_gallery(){
		$data = array(
			'deskripsi'=> $this->input->post('deskripsi'),
			'id_babysitter' => $this->input->post('id_babysitter')
		);

		$error = false;
		if(!empty($_FILES['file']['name'])){

			$config=array();
			$config['upload_path'] = FCPATH.'/assets/img/gallery_babysitter';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['overwrite'] = true;
			$hash = substr(md5(time()),0,9);
			$config['file_name'] = $hash;

			$this->load->library('upload',$config);
			if($this->upload->do_upload('file')){
				$up_data=$this->upload->data();
				$data['foto']=$up_data['file_name'];
				$this->babysitter_model->add_gallery($data);
				redirect(site_url('/admin/babysitter/edit/'.$this->input->post('id_babysitter'))."#sukses");
			}else{
				echo $this->upload->display_errors();
				$error=true;
			}
		}
	}

	public function do_delete_gallery($id){
		$this->babysitter_model->delete_gallery($id);
		redirect(site_url('/admin/babysitter/').'#sukses');
	}

}
