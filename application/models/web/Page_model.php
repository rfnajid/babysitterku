<?php

class page_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	//GET ALL

	public function get_all()
	{
		$query = $this->db->get('page');
		return $query->result();
	}

	//GET DETAIL
	public function get($id)
	{
		$this->db->where('id',$id);
		$query = $this->db->get('page');
		return $query->row();
	}

	//GET DETAIL
	public function getbylink($link)
	{
		$this->db->where('link',$link);
		$query = $this->db->get('page');
		return $query->row();
	}


	//INSERT User
	public function add($data)
	{
	 $this->db->insert('page',$data);
	}


	// DELETE
	public function delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('page');
	}

	// UPDATE
	public function update($id, $data)
	{
		$this->db->where('id',$id);
		$this->db->update('page',$data);
	}

}
