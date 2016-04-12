<?php

class layanan_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	// get all
	public function get_all()
	{
		$query = $this->db->get('layanan');
		return $query->result();
	}

	//DETAIL
	public function get($id)
	{
		$this->db->where('id',$id);
		$query = $this->db->get('layanan');
		return $query->row();
	}

	//get layanan
	public function get_layanan($id_suster){
		$this->db->select('id_layanan');
		$this->db->where('id_suster',$id_suster);
		$query = $this->db->get('layanan_suster');
		$hasil=$query->result();
		$id=array();
		foreach ($hasil as $h) {
			array_push($id,$h->id_layanan);
		}
		if(empty($id)){
			return  array();
		}
		$this->db->where_in('id',$id);
		return $this->db->get('layanan')->result();
	}

	public function get_not($id_suster){
		$this->db->select('id_layanan');
		$this->db->where('id_suster',$id_suster);
		$hasil=$this->db->get('layanan_suster')->result();

		$id=array();
		foreach ($hasil as $h) {
			array_push($id,$h->id_layanan);
		}
		if(empty($id)){
			$id=$this->get_layanan($id_suster);
			if(empty($id)){ //belum ada semua
				return $this->get_all();
			}
			else { //sudah ada
				return array();
			}
		}
		$this->db->where_not_in('id',$id);
		return $this->db->get('layanan')->result();
	}

	public function get_names($data){
		$this->db->where_in('id',$data);
		return $this->db->get('layanan')->result();
	}

	//INSEERT
	public function add($data){
		$this->db->insert('layanan',$data);
	}

	//UPDATE
	public function update($id,$data)
	{
		$this->db->where('id',$id);
		$this->db->update('layanan',$data);
	}

	//DELETE
	public function delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('layanan');
	}

}
