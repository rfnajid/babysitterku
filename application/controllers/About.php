<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	function index()
	{
		$this->load->model('web/tim_model','tim_model');
		$this->load->model('web/page_model','page_model');
		$this->load->model('web/partner_model','partner_model');
		$this->load->model('web/kontak_model','kontak');

		$data['page']=$this->page_model->getbylink('about');
		$data['tim']=$this->tim_model->get_all();
		//$data['partner']=$this->partner_model->get_all();

		$kontak['email']= $this->kontak->get('Email')->isi;
		$kontak['hotline1']= $this->kontak->get('Hotline 1')->isi;
		$kontak['hotline2']= $this->kontak->get('Hotline 2')->isi;

		$title="About | Insan Medika | Home Health Care Provider";
		$desc = "Babysitterku merupakan agen penyalur babysitter untuk datang kerumah yang berbasis website dengan proses mudah dan praktis";
		$this->load->view('front/template/home-head',array('title' => $title,'description'=>$desc));
		$this->load->view('front/template/home-header');
		$this->load->view('front/konten/about',$data);
		$this->load->view('front/template/home-footer',$kontak);
	}
}
