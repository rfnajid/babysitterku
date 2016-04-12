<?php

class tim_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	//GET ALL

	public function get_all()
	{
		$query = $this->db->get('tim');
		return $query->result();
	}

	//GET DETAIL
	public function get($id)
	{
		$this->db->where('id',$id);
		$query = $this->db->get('tim');
		return $query->row();
	}

	//INSERT User
	public function add($data)
	{
	 $this->db->insert('tim',$data);
	}


	// DELETE
	public function delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('tim');
	}

	// UPDATE
	public function update($id, $data)
	{
		$this->db->where('id',$id);
		$this->db->update('tim',$data);
	}

}
