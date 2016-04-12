<?php

class slide_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	//GET ALL

	public function get_all()
	{
		$query = $this->db->get('slide');
		return $query->result();
	}

	//GET DETAIL
	public function get($id)
	{
		$this->db->where('id',$id);
		$query = $this->db->get('slide');
		return $query->row();
	}

	//INSERT User
	public function add($data)
	{
	 $this->db->insert('slide',$data);
	}


	// DELETE
	public function delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('slide');
	}

	// UPDATE
	public function update($id, $data)
	{
		$this->db->where('id',$id);
		$this->db->update('slide',$data);
	}

}
