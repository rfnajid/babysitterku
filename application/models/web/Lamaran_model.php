<?php

class lamaran_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	//GET ALL

	public function get_all()
	{
		$this->db->where('active',true);
		$query = $this->db->get('lamaran');
		return $query->result();
	}

	//GET DETAIL
	public function get($id)
	{
		$this->db->where('id',$id);
		$query = $this->db->get('lamaran');
		return $query->row();
	}

	//INSERT User
	public function add($data)
	{
	 $this->db->insert('lamaran',$data);
	}


	// DELETE
	public function delete($id)
	{
		$data = array('active' => false );
		$this->update($id, $data);
	}

	// UPDATE
	public function update($id, $data)
	{
		$this->db->where('id',$id);
		$this->db->update('lamaran',$data);
	}

}
