<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class babysitter extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('data/babysitter_model','babysitter_model');
		$this->load->model('web/kontak_model','kontak');
	}

	function index()
	{
		$this->cari();
	}

	function cari(){
		extract($_GET);
		if(!isset($kelamin))
			$kelamin="all";
		if(!isset($agama))
			$agama="all";
		if(!isset($penempatan))
			$penempatan="all";
		if(!isset($key))
			$key="";
		if(!isset($page))
			$page=1;

		$limit=5;

		$query = array(
			'kelamin' 	=> 	$kelamin,
		 	'agama'			=>	$agama,
			'penempatan'=>	$penempatan,
			'key'				=>	$key,
			'page'			=>	$page,
		);

		$data['babysitter']=$this->babysitter_model->cari($query,$limit);
		$data['count_all']=$this->babysitter_model->cari_count($query);
		$data['count_page']=$data['count_all']/$limit;
		$data['query']=$query;

		$kontak['email']= $this->kontak->get('Email')->isi;
		$kontak['hotline1']= $this->kontak->get('Hotline 1')->isi;
		$kontak['hotline2']= $this->kontak->get('Hotline 2')->isi;

		//view thing

		$title="Pencarian Babysitter";
		$desc = "Babysitterku adalah situs penyedia jasa babysitter terbaik di Jakarta, Bandung, Surabaya, Medan, dan kota lain";
		$this->load->view('front/template/home-head',array('title' => $title,'description'=>$desc));
		$this->load->view('front/template/home-header');
		$this->load->view('front/konten/babysitter-cari',$data);
		$this->load->view('front/template/home-footer',$kontak);
	}

	function detail($id){
		$data['babysitter']=$this->babysitter_model->get($id);
		$data['gallery']=$this->babysitter_model->get_gallery($id);

		$kontak['email']= $this->kontak->get('Email')->isi;
		$kontak['hotline1']= $this->kontak->get('Hotline 1')->isi;
		$kontak['hotline2']= $this->kontak->get('Hotline 2')->isi;

		$title=$data['babysitter']->nama." | Babysitterku.id | Penyedia Jasa Professional";
		$desc = $data['babysitter']->pengalaman;
		$this->load->view('front/template/home-head',array('title' => $title,'description'=>$desc));
		$this->load->view('front/template/home-header');
		$this->load->view('front/konten/babysitter-detail',$data);
		$this->load->view('front/template/home-footer',$kontak);
	}

	function review($id){
		extract($_POST);
		extract($_GET);

		if(!isset($review) && !isset($nama) && !isset($email))
			redirect(site_url());

		if(!isset($id_user))
			$id_user="";

		$data=array(
			"nama"=>$nama,
			"email"=>$email,
			"review"=>$review,
			"bintang"=>$star,
			"id_babysitter"=>$id,
			"id_user"=>$id_user
		);

		$this->load->model("data/babysitter_model","babysitter_model");
		$this->babysitter_model->add_review($data);

		redirect(site_url("/thanks"));
	}
}
