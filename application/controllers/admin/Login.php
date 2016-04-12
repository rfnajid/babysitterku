<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('data/admin_model','user');
	}

	function index(){
		$sess=$this->session->userdata('logged_in');
		if(!empty($sess))
			redirect(site_url('/admin/babysitter'));
		else
			$this->load->view('admin/login.php');
	}

	function cek(){
		$msg=array();
		$data=$this->user->get($_POST['username']);
		if($data){
			if($data->password==md5($_POST['password'])){
				$sess_array['username']=$data->username;

				//new dBug($this->session);
				$this->session->set_userdata('logged_in', $sess_array);

				$msg['message']='Login Success';
				$msg['status']='success';

				redirect(site_url('/admin/babysitter'));
			}else{
				$msg['message']='Account error';
				$msg['status']='error';
			}
		}else{
			$msg['message']="Username doesn't exists";
			$msg['status']='error';
		}
		$toast['msg']=$msg;
		$this->load->view('/admin/login',$toast);
	}

	function logout()
	{
	   $this->session->unset_userdata('logged_in');
     $msg['message']="Logout berhasil!";
     $msg['status']='success';
     $data['msg']=$msg;
	   $this->load->view('/admin/login',$data);
	}
}
?>
