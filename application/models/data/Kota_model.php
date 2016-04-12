<?php

class kota_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	// get all
	public function get_all()
	{
		$query = $this->db->get('kota');
		return $query->result();
	}

	//get SINGLE

	public function get($id){
		$this->db->where('id',$id);
		$query = $this->db->get('kota');
		return $query->row();
	}

	//INSEERT
	public function add($data){
		$this->db->insert('kota',$data);
	}

	//UPDATE
	public function update($id,$data)
	{
		$this->db->where('id',$id);
		$this->db->update('kota',$data);
	}

	//DELETE
	public function delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('kota');
	}

}
