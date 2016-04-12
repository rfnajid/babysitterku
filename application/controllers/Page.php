<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class page extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('web/page_model','page_model');
		$this->load->model('web/kontak_model','kontak');

	}

	function index()
	{
		redirect(site_url('/home'));
	}

	function view($link){
		$data['page']=$this->page_model->getbylink($link);

		$kontak['email']= $this->kontak->get('Email')->isi;
		$kontak['hotline1']= $this->kontak->get('Hotline 1')->isi;
		$kontak['hotline2']= $this->kontak->get('Hotline 2')->isi;

		$title = $data['page']->nama.' | Babysitterku | Penyedia Jasa Babysitter';
		$desc = strip_tags($data['page']->isi);
		$this->load->view('front/template/home-head',array('title' => $title,'description'=>$desc));
		$this->load->view('front/template/home-header');
		$this->load->view('front/konten/page',$data);
		$this->load->view('front/template/home-footer',$kontak);
	}
}
