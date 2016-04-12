<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class faq extends CI_Controller {

	function index()
	{
		$this->load->model('web/faq_model','faq_model');
		$this->load->model('web/kontak_model','kontak');

		$data['faq']=$this->faq_model->get_all();
		$title="FAQ | Insan Medika | Home Health Care Provider";
		$desc = "Bantuan Tanya Jawab FAQ Babysitterku.id";

		$kontak['email']= $this->kontak->get('Email')->isi;
		$kontak['hotline1']= $this->kontak->get('Hotline 1')->isi;
		$kontak['hotline2']= $this->kontak->get('Hotline 2')->isi;

		$this->load->view('front/template/home-head',array('title' => $title,'description'=>$desc));
		$this->load->view('front/template/home-header');
		$this->load->view('front/konten/faq',$data);
		$this->load->view('front/template/home-footer',$kontak);
	}
}
