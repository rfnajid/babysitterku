<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class gallery extends CI_Controller {

	function index()
	{
		$this->load->model('web/gallery_model','gallery_model');

		$data['foto']=$this->gallery_model->get_all('foto');
		$data['youtube']=$this->gallery_model->get_all('youtube');
		$title="Gallery | Insan Medika | Home Health Care Provider";

		$desc = "Galeri Video & Foto PT Insan Medika Persada";
		$this->load->view('front/template/head',array('title' => $title,'description'=>$desc));

		$this->load->view('front/template/header');
		$this->load->view('front/konten/gallery',$data);
		$this->load->view('front/template/footer');
	}
}
