<?php

class diliput_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	//GET ALL

	public function get_all()
	{
		$query = $this->db->get('diliput');
		return $query->result();
	}

	//GET DETAIL
	public function get($id)
	{
		$this->db->where('id',$id);
		$query = $this->db->get('diliput');
		return $query->row();
	}

	//INSERT User
	public function add($data)
	{
	 $this->db->insert('diliput',$data);
	}


	// DELETE
	public function delete($id)
	{
		//$data = array('active' => false );
		//$this->update($id, $data);
		$this->db->where('id',$id);
		$this->db->delete('diliput');
	}

	// UPDATE
	public function update($id, $data)
	{
		$this->db->where('id',$id);
		$this->db->update('diliput',$data);
	}

}
