<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mail extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
   public function __construct()
   {
     // Call the CI_Model constructor
     parent::__construct();
     $sess=$this->session->userdata('logged_in');
   		if(!$sess){
   			redirect(site_url('/admin/login'));
   		}
     $this->load->helper('form');
     $this->load->model('m_mail');
   }


	public function index()
	{
    $data['mail']=$this->m_mail->getall();
    $data['username']=$this->session->userdata('logged_in')['username'];
		$this->load->view('admin/head.php');
    $this->load->view('admin/header.php');
    $this->load->view('admin/mail.php',$data);
    $this->load->view('admin/footer.php');
	}

  public function add(){
    $data=array(
    'email'=>$_POST['email']
    );
    $data=$this->m_mail->add($data);
    if($data)
      redirect(site_url('/admin/mail'));
    else {
      echo "gagal ditambah <br> <a href='".site_url('/admin/mail')."'>kembali</a>";
    }
  }

  public function delete($id){
    $data=$this->m_mail->delete($id);
    if($data)
      redirect(site_url('/admin/mail'));
    else {
      echo "gagal dihapus :(<br><a href='".site_url('/admin/jual')."'>kembali</a>";
    }
  }
}
