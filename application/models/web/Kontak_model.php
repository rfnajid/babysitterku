<?php

class kontak_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	//GET ALL

	public function get_all()
	{
		$query = $this->db->get('kontak');
		return $query->result();
	}

	//GET DETAIL
	public function get($jenis)
	{
		$this->db->where('jenis',$jenis);
		$query = $this->db->get('kontak');
		return $query->row();
	}

	public function get_by_id($id){
		$this->db->where('id',$id);
		$query = $this->db->get('kontak');
		return $query->row();
	}

	//INSERT User
	public function add($data)
	{
	 $this->db->insert('kontak',$data);
	}


	// DELETE
	public function delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('kontak');
	}

	// UPDATE
	public function update($id, $data)
	{
		$this->db->where('id',$id);
		$this->db->update('kontak',$data);
	}

}
