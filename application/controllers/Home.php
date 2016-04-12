<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct()
	{
		parent::__construct();

	}
	function index()
	{

		$this->load->model('web/testimonial_model','testimonial');
		$this->load->model('web/gallery_model','gallery');
		$this->load->model('web/carakerja_model','carakerja');
		$this->load->model('web/kenapa_model','kenapa');
		$this->load->model('web/kontak_model','kontak');
		$this->load->model('web/slide_model','slide');
		$this->load->model('web/diliput_model','diliput');

		$kontak['email']= $this->kontak->get('Email')->isi;
		$kontak['hotline1']= $this->kontak->get('Hotline 1')->isi;
		$kontak['hotline2']= $this->kontak->get('Hotline 2')->isi;

		$data['testimonial'] = $this->testimonial->get_all();
		$data['video'] = $this->gallery->get_all("youtube");
		$data['carakerja'] = $this->carakerja->get_all();
		$data['kenapa'] = $this->kenapa->get_all();
		$data['kontak'] = $this->kontak->get_all();
		$data['slide'] = $this->slide->get_all();
		$data['diliput'] = $this->diliput->get_all();
		$data['kontak']=$kontak;

		$title='Babysitterku | Jasa Babysitter Terbaik di Indonesia';
		$desc = "Babysitterku adalah penyedia jasa babysitter di Jakarta, Surabaya, Bandung, Semarang, Medan dan kota besar lainnya";
		$this->load->view('front/template/home-head',array('title' => $title,'description'=>$desc));
		$this->load->view('front/template/home-header');
		$this->load->view('front/konten/home',$data);
		$this->load->view('front/template/home-footer',$kontak);

	}
}
