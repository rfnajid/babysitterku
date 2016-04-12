<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pemesanan extends CI_Controller {

	function index()
	{
		redirect(site_url(), 'refresh');
	}

	function babysitter($id){

		if(!isset($id)){
			redirect(site_url(), 'refresh');
		}

		$this->load->model('data/babysitter_model','babysitter_model');
		$this->load->model('web/kontak_model','kontak');

		$kontak['email']= $this->kontak->get('Email')->isi;
		$kontak['hotline1']= $this->kontak->get('Hotline 1')->isi;
		$kontak['hotline2']= $this->kontak->get('Hotline 2')->isi;

		$data['babysitter']=$this->babysitter_model->get($id);
		$title="Form Pemesanan Babysitter | Babysitterku.id";
		$desc = "Babysitterku adalah situs penyedia jasa babysitter terbaik di Jakarta, Bandung, Surabaya, Medan, dan kota lain";

		$this->load->view('front/template/home-head',array('title' => $title,'description'=>$desc));

		$this->load->view('front/template/home-header');
		$this->load->view('front/konten/babysitter-pesan',$data);
		$this->load->view('front/template/home-footer',$kontak);
	}

	function submit_pemesanan_babysitter(){
		if(!isset($_POST['check']))
			die();

		$data = array(
			'nama' => $_POST['nama'],
			'email' => $_POST['email'],
			'telpon' => $_POST['telpon'],
			'ktp' => $_POST['ktp'],
			'waktu_hubungi' => $_POST['waktu_hubungi'],
			'tujuan' => $_POST['tujuan'],
			'jumlah_anak' => $_POST['jumlah_anak'],
			'id_babysitter' => $_POST['id_babysitter'],
			'keterangan' => $_POST['keterangan'],
			'tanggal' => date('Y-m-d')
		);

		$this->load->model('order/order_babysitter_model','order_babysitter_model');
		$this->order_babysitter_model->add($data);
		redirect(site_url('/thanks'));
	}
}
