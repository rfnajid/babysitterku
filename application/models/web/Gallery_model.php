<?php

class gallery_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	//GET ALL

	public function get_all($type)
	{
		$query = $this->db->get($type);
		return $query->result();
	}

	//GET DETAIL
	public function get($type,$id)
	{
		$this->db->where('id',$id);
		$query = $this->db->get($type);
		return $query->row();
	}

	//INSERT User
	public function add($type,$data)
	{
	 $this->db->insert($type,$data);
	}


	// DELETE
	public function delete($type,$id)
	{
		//$data = array('active' => false );
		//$this->update($id, $data);
		$this->db->where('id',$id);
		$this->db->delete($type);
	}

	// UPDATE
	public function update($type,$id, $data)
	{
		$this->db->where('id',$id);
		$this->db->update($type,$data);
	}

}
