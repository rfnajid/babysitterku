<?php

class Paket_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	//GET ALL

	public function get_all()
	{
		$this->db->order_by('id','desc');
		$query = $this->db->get('paket');
		return $query->result();
	}

	//GET DETAIL
	public function get($id)
	{
		$this->db->where('id',$id);
		$query = $this->db->get('paket');
		return $query->row();
	}

	//INSERT User
	public function add($data)
	{
	 $this->db->insert('paket',$data);
	}


	// DELETE
	public function delete($paket)
	{
		$this->db->where('id',$paket);
		$this->db->delete('paket');
	}

	// UPDATE
	public function update($id,$data)
	{
		$this->db->where('id',$id);
		$this->db->update('paket',$data);
	}

}
