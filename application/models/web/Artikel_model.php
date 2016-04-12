<?php

class artikel_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	//GET ALL

	public function get_all()
	{
		$this->db->order_by('id','desc');
		$query = $this->db->get('artikel');
		return $query->result();
	}

	// GET WITH LIMIT

	public function get_limit($limit){
		$this->db->order_by('id','desc');
		$this->db->limit($limit);
		$query = $this->db->get('artikel');
		return $query->result();
	}

	//GET DETAIL
	public function get($id)
	{
		$this->db->where('id',$id);
		$query = $this->db->get('artikel');
		return $query->row();
	}

	//GET DETAIL by link
	public function getbylink($link)
	{
		$this->db->where('link',$link);
		$query = $this->db->get('artikel');
		return $query->row();
	}

	//INSERT User
	public function add($data)
	{
	 $this->db->insert('artikel',$data);
	}


	// DELETE
	public function delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('artikel');
	}

	// UPDATE
	public function update($id, $data)
	{
		$this->db->where('id',$id);
		$this->db->update('artikel',$data);
	}

}
