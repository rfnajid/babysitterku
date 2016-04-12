<?php

class order_babysitter_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	// get all
	public function get_all()
	{
		$this->db->where('active',true);
		$this->db->order_by('tanggal','desc');
		$query = $this->db->get('order_babysitter');
		return $query->result();
	}

	//DETAIL
	public function get($id)
	{
		$this->db->where('id',$id);
		$query = $this->db->get('order_babysitter');
		return $query->row();
	}

	//INSERT User
	public function add($data)
	{
	 $this->db->insert('order_babysitter',$data);
	}


	//UPDATE
	public function update($id,$data)
	{
		$this->db->where('id',$id);
		$this->db->update('order_babysitter',$data);
	}

/*tipu-tipu
	//DELETE
	public function delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('order_babysitter');
	}
*/
	// babysitter panggilan

	// get all
	public function get_all_pilihkan()
	{
		$this->db->where('active',true);
		$this->db->order_by('tanggal','desc');
		$query = $this->db->get('order_babysitter_pilihkan');
		return $query->result();
	}

	//DETAIL
	public function get_pilihkan($id)
	{
		$this->db->where('id',$id);
		$query = $this->db->get('order_babysitter_pilihkan');
		return $query->row();
	}

	//INSERT User
	public function add_pilihkan($data)
	{
	 $this->db->insert('order_babysitter_pilihkan',$data);
	}


	//UPDATE
	public function update_pilihkan($id,$data)
	{
		$this->db->where('id',$id);
		$this->db->update('order_babysitter_pilihkan',$data);
	}

/* tipu-tipu
	//DELETE
	public function delete_pilihkan($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('order_babysitter_pilihkan');
	}
*/

	// get all
	public function get_all_visit()
	{
		$this->db->where('active',true);
		$this->db->order_by('tanggal','desc');
		$query = $this->db->get('order_babysitter_visit');
		return $query->result();
	}

	//DETAIL
	public function get_visit($id)
	{
		$this->db->where('id',$id);
		$query = $this->db->get('order_babysitter_visit');
		return $query->row();
	}

	//INSERT User
	public function add_visit($data)
	{
	 $this->db->insert('order_babysitter_visit',$data);
	}

	//UPDATE
	public function update_visit($id,$data)
	{
		$this->db->where('id',$id);
		$this->db->update('order_babysitter_visit',$data);
	}

}
