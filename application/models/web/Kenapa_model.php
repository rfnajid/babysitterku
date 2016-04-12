<?php

class kenapa_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	// get all
	public function get_all()
	{
		$query = $this->db->get('kenapa');
		return $query->result();
	}

	//DETAIL
	public function get($id)
	{
		$this->db->where('id',$id);
		$query = $this->db->get('kenapa');
		return $query->row();
	}


	//INSEERT
	public function add($data){
		$this->db->insert('kenapa',$data);
	}

	//UPDATE
	public function update($id,$data)
	{
		$this->db->where('id',$id);
		$this->db->update('kenapa',$data);
	}

	//DELETE
	public function delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('kenapa');
	}

}
