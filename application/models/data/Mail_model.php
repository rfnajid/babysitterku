<?php

class mail_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	// get all
	public function get_all()
	{
		$query = $this->db->get('mail');
		return $query->result();
	}

	public function add($data){
		$this->db->insert('mail',$data);
	}

	//INSEERT AJAX
	public function addjax($data){

		$response = array(
			'success' => false,
		);


		$this->db->where('email',$data['email']);
		$this->db->where('jenis',$data['jenis']);
		$q = $this->db->get('mail');

		if ( $q->num_rows() == 0 )
		{
			$this->db->insert('mail',$data);
			$response['success']=true;
		}
		return $response;
	}

	//DELETE
	public function delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('mail');
	}

}
