<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class artikel extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$sess=$this->session->userdata('logged_in');
		 if(!$sess){
			 redirect(site_url('/admin/login'));
		 }

		$this->load->model("web/artikel_model",'artikel_model');
		$this->load->helper('string');
	}

	function tes(){
		echo date('Y_m_d_H_i_s');
	}

	public function index(){
		$data['data'] = $this->artikel_model->get_all();
		$this->load->view('admin/head.php');
		$this->load->view('admin/header.php');
		$this->load->view('admin/web/artikel/artikel.php',$data);
		$this->load->view('admin/footer.php');
	}

	public function edit($id){
		$data['data'] = $this->artikel_model->get($id);

		$this->load->view('admin/head.php');
		$this->load->view('admin/header.php');
		$this->load->view('admin/web/artikel/artikel-edit.php',$data);
		$this->load->view('admin/footer.php');
	}

	public function add_new(){
		$this->load->view('admin/head.php');
		$this->load->view('admin/header.php');
		$this->load->view('admin/web/artikel/artikel-new.php');
		$this->load->view('admin/footer.php');
	}

	// script function
	public function do_new(){
		$url = preg_replace("![^a-z0-9]+!i", "-", trim_text($_POST['judul'],32,false,false));
		$data = array(
			'judul' => $_POST['judul'],
			'headline' => trim_text($_POST['isi'],1000,false,true),
			'isi' => $_POST['isi'],
			'link' =>$url,
			'tanggal'=>date('Y-m-d H:i:s')
		);

		if(!empty($_FILES['gambar']['name'])){
			$config=array();
			$config['upload_path'] = FCPATH.'/assets/img/artikel';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['overwrite'] = true;
			$config['file_name'] = $url;

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
			$this->artikel_model->add($data);
			redirect(site_url('/admin/artikel/#sukses'));
		}
	}

	public function do_edit(){
		$url = preg_replace("![^a-z0-9]+!i", "-", trim_text($_POST['judul'],32,false,false));
		$data = array(
			'judul' => $_POST['judul'],
			'headline' => trim_text($_POST['isi'],200,false,true),
			'isi' => $_POST['isi'],
			'link' => $url
		);

		if(!empty($_FILES['gambar']['name'])){
			$config=array();
			$config['upload_path'] = FCPATH.'/assets/img/artikel';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['overwrite'] = true;
			$config['file_name'] = $url;

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
			$this->artikel_model->update($_POST['id'],$data);
			redirect(site_url('/admin/artikel/#sukses'));
		}
	}

	public function delete($id){
		$this->artikel_model->delete($id);
		redirect(site_url('/admin/artikel/').'#sukses');
	}

}
