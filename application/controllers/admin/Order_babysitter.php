<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class order_babysitter extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$sess=$this->session->userdata('logged_in');
		 if(!$sess){
			 redirect(site_url('/admin/login'));
		 }

		$this->load->model("order/order_babysitter_model",'order_babysitter_model');
	}

	public function index(){
		$data['data'] = $this->order_babysitter_model->get_all();
		$this->load->view('admin/head.php');
		$this->load->view('admin/header.php');
		$this->load->view('admin/order/order_babysitter/order_babysitter.php',$data);
		$this->load->view('admin/footer.php');
	}

	public function edit($id){
		$this->load->model("data/babysitter_model",'babysitter_model');

		$data['data'] = $this->order_babysitter_model->get($id);
		$data['babysitter'] = $this->babysitter_model->get($data['data']->id_babysitter);

		$this->load->view('admin/head.php');
		$this->load->view('admin/header.php');
		$this->load->view('admin/order/order_babysitter/order_babysitter-edit.php',$data);
		$this->load->view('admin/footer.php');
	}

	public function add_new(){
		$this->load->model("data/kota_model",'kota_model');
		$data['kota']=$this->kota_model->get_all();

		$this->load->view('admin/head.php');
		$this->load->view('admin/header.php');
		$this->load->view('admin/order_babysitter-new.php',$data);
		$this->load->view('admin/footer.php');
	}


	public function do_edit(){

		$data = array(
			'status' => $_POST['status'],
		);
		$this->order_babysitter_model->update($_POST['id'],$data);
		redirect(site_url('admin/order_babysitter').'#sukses');
	}


	public function delete($id){
		$data = array('active' => false );
		$this->order_babysitter_model->update($id,$data);
		redirect(site_url('/admin/order_babysitter/').'#sukses');
	}
}
