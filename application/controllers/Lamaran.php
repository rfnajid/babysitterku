<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class lamaran extends CI_Controller {

	function index()
	{
		$this->load->model('web/kontak_model','kontak');

		$kontak['email']= $this->kontak->get('Email')->isi;
		$kontak['hotline1']= $this->kontak->get('Hotline 1')->isi;
		$kontak['hotline2']= $this->kontak->get('Hotline 2')->isi;

		//$data['lamaran']=$this->lamaran_model->get_all();
		$title="Form Lamaran Kerja | Insan Medika | Home Health Care Provider";
		$desc = "Lowongan Babysitter Jakarta, Bandung, Bogor, Jogja, Surabaya";
		$this->load->view('front/template/home-head',array('title' => $title,'description'=>$desc));
		$this->load->view('front/template/home-header');
		$this->load->view('front/konten/lamaran');
		$this->load->view('front/template/home-footer',$kontak);
	}

	function submit(){
		if(!isset($_POST['check']))
			die();

		$this->load->model('web/lamaran_model','lamaran_model');

		$data = array(
			'nama' => $_POST['nama'],
			'email' => $_POST['email'],
			'telpon' => $_POST['telpon'],
			'kelamin' => $_POST['kelamin'],
			'tempat_lahir' => $_POST['tempat_lahir'],
			'tanggal_lahir' => $_POST['tanggal_lahir'],
			'bulan_lahir' => $_POST['bulan_lahir'],
			'tahun_lahir' => $_POST['tahun_lahir'],
			'tinggi_badan' => $_POST['tinggi_badan'],
			'berat_badan' => $_POST['berat_badan'],
			'anak_ke' => $_POST['anak_ke'],
			'saudara' => $_POST['saudara'],
			'agama' => $_POST['agama'],
			'riwayat_penyakit' => $_POST['riwayat_penyakit'],
			'jalan' => $_POST['jalan'],
			'kelurahan' => $_POST['kelurahan'],
			'kecamatan' => $_POST['kecamatan'],
			'kota' => $_POST['kota'],
			'provinsi' => $_POST['provinsi'],
			'pendidikan_terakhir' => $_POST['pendidikan_terakhir'],
			'asal_pendidikan' => $_POST['asal_pendidikan'],
			'lulus_tahun' => $_POST['lulus_tahun'],
			'keahlian' => $_POST['keahlian'],
			'pengalaman' => $_POST['pengalaman'],
			'gaji' => $_POST['gaji'],
			'nama_ortu' => $_POST['nama_ortu'],
			'pekerjaan_ortu' => $_POST['pekerjaan_ortu'],
			'nama_suami' => $_POST['nama_suami'],
			'pekerjaan_suami' => $_POST['pekerjaan_suami'],
			'mengetahui' => $_POST['mengetahui'],
			'tanggal'=>  date('Y-m-d')
		);

		$hash = preg_replace("![^a-z0-9]+!i", "-", $_POST['nama']);
		$hash = substr($hash, 0,10)."_".date('Y_m_d');
		$error = false;

		//upload foto wajah
		$config = array(
			'upload_path' => FCPATH.'/assets/img/lamaran/wajah',
			'allowed_types' => 'jpg|png',
			'overwrite' => true,
			'file_name'=> 'w-'.$hash
		);

		$this->load->library('upload',$config);
		if($this->upload->do_upload('foto_wajah')){
			$up_data=$this->upload->data();
			$data['foto_wajah']=$up_data['file_name'];
		}else{
			echo $this->upload->display_errors();
			echo "foto wajah : ".$_FILES['foto_wajah']['name'].'<br><br><br>';
			$error=true;
		}

		//upload foto full body

		$config = array(
			'upload_path' => FCPATH.'/assets/img/lamaran/body',
			'allowed_types' => 'jpg|png',
			'overwrite' => true,
			'file_name'=> 'b-'.$hash
		);
		$this->upload->initialize($config);
		if($this->upload->do_upload('foto_seluruh_badan')){
			$up_data=$this->upload->data();
			$data['foto_seluruh_badan']=$up_data['file_name'];
		}else{
			echo $this->upload->display_errors();
			echo "foto full body : ".$_FILES['foto_seluruh_badan']['name'].'<br><br><br>';
			$error=true;
		}

		$config = array(
			'upload_path' => FCPATH.'/assets/upload/lamaran',
			'allowed_types' => 'zip|rar',
			'overwrite' => true,
			'file_name'=> 'f-'.$hash
		);
		var_dump($config);
		$this->upload->initialize($config);
		if($this->upload->do_upload('berkas_lamaran')){
			$up_data=$this->upload->data();
			$data['berkas_lamaran']=$up_data['file_name'];
		}else{
			echo $this->upload->display_errors();
			echo "file berkas : ".$_FILES['berkas_lamaran']['name'].'<br><br><br>';
			$error=true;
		}

		if(!$error){
			$this->load->model('web/lamaran_model','lamaran_model');
			$this->lamaran_model->add($data);
			redirect(site_url('/thanks'));
		}
	}
}
