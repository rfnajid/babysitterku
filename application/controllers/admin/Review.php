<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class review extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$sess=$this->session->userdata('logged_in');
		 if(!$sess){
			 redirect(site_url('/admin/login'));
		 }

		$this->load->model("data/suster_model",'review_model');
	}

	public function index(){
		$data['data'] = $this->review_model->get_review_all();
		$this->load->view('admin/head.php');
		$this->load->view('admin/header.php');
		$this->load->view('admin/data/review/review.php',$data);
		$this->load->view('admin/footer.php');
	}

	public function edit($id){
		$data['data'] = $this->review_model->get_review($id);

		$this->load->view('admin/head.php');
		$this->load->view('admin/header.php');
		$this->load->view('admin/data/review/review-edit.php',$data);
		$this->load->view('admin/footer.php');
	}

	public function do_edit(){
		$data = array(
			'status' => $_POST['status'],
		);
			$this->review_model->update_review($_POST['id'],$data);
			redirect(site_url('/admin/review/').'#sukses');
		}


	public function delete($id){
		$this->review_model->delete_review($id);
		redirect(site_url('/admin/review/').'#sukses');
	}
}
