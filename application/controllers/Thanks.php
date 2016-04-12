<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class thanks extends CI_Controller {

	function index()
	{
		$this->load->model('web/kontak_model','kontak');

		$kontak['email']= $this->kontak->get('Email')->isi;
		$kontak['hotline1']= $this->kontak->get('Hotline 1')->isi;
		$kontak['hotline2']= $this->kontak->get('Hotline 2')->isi;

		//$data['lamaran']=$this->lamaran_model->get_all();
		$title="Terima Kasih | Babysitterku.id | Penyedia Jasa Babysitter";
		$desc = "Babysitterku merupakan agen penyalur Babysitter";
		$this->load->view('front/template/home-head',array('title' => $title,'description'=>$desc));
		$this->load->view('front/template/home-header');
		$this->load->view('front/konten/thanks');
		$this->load->view('front/template/home-footer',$kontak);
	}
}
