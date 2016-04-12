<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class artikel extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('web/artikel_model','artikel_model');
		$this->load->model('web/kontak_model','kontak');
	}

	function index()
	{
		$data['artikel']=$this->artikel_model->get_all();
		$title="Artikel | Babysitter | Penyedia Jasa Babysitter";
		$desc = "Artikel-artikel kesehatan yang ditulis oleh penyedia jasa babysitter terbaik";

		$kontak['email']= $this->kontak->get('Email')->isi;
		$kontak['hotline1']= $this->kontak->get('Hotline 1')->isi;
		$kontak['hotline2']= $this->kontak->get('Hotline 2')->isi;

		$this->load->view('front/template/home-head',array('title' => $title,'description'=>$desc));
		$this->load->view('front/template/home-header');
		$this->load->view('front/konten/artikel',$data);
		$this->load->view('front/template/home-footer',$kontak);
	}

	function view($link){
		$data['artikel']=$this->artikel_model->getbylink($link);

		$title = $data['artikel']->judul.' | Babysitterku | Penyedia Jasa Babysitter';
		$desc = $data['artikel']->headline;

		$kontak['email']= $this->kontak->get('Email')->isi;
		$kontak['hotline1']= $this->kontak->get('Hotline 1')->isi;
		$kontak['hotline2']= $this->kontak->get('Hotline 2')->isi;

		$this->load->view('front/template/home-head',array('title' => $title,'description'=>$desc));
		$this->load->view('front/template/home-header');
		$this->load->view('front/konten/artikel-view',$data);
		$this->load->view('front/template/home-footer',$kontak);
	}
}
