<?php

class admin_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	//GET ALL

	public function get_all()
	{
		$query = $this->db->get('admin');
		return $query->result();
	}

	//GET DETAIL
	public function get($username)
	{
		$this->db->where('username',$username);
		$query = $this->db->get('admin');
		return $query->row();
	}

	//INSERT User
	public function add($data)
	{
	 $this->db->insert('admin',$data);
	}


	// DELETE
	public function delete($username)
	{
		//$data = array('active' => false );
		//$this->update($username, $data);
		$this->db->where('username',$username);
		$this->db->delete('admin');
	}


	// UPDATE
	public function update($username, $data)
	{
		$this->db->where('username',$username);
		$this->db->update('admin',$data);
	}

	public function isExist($username){
		$this->db->where('username',$username);
		$q = $this->db->get('admin');

		return ($q->num_rows()>0);
	}

}
