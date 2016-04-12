<?php

class babysitter_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	// get all
	public function get_all()
	{
		$query = $this->db->get('babysitter');
		return $query->result();
	}

	//DETAIL
	public function get($id)
	{
		$this->db->where('id',$id);
		$query = $this->db->get('babysitter');
		return $query->row();
	}

	//INSEERT
	public function add($data){
		$this->db->insert('babysitter',$data);
	}

	//UPDATE
	public function update($id,$data)
	{
		$this->db->where('id',$id);
		$this->db->update('babysitter',$data);
	}

	//DELETE
	public function delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('babysitter');
	}

	//get layanan
	public function get_layanan($id_babysitter){
		$this->db->select('id_layanan');
		$this->db->where('id_babysitter',$id_babysitter);
		$query = $this->db->get('layanan_babysitter');
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

	// Tambah layanan
	public function add_layanan($data){
		$this->db->insert('layanan_babysitter',$data);
	}

	// hapus layanan
	public function delete_layanan($idbabysitter,$idlayanan){
		$this->db->where('id_layanan',$idlayanan);
		$this->db->where('id_babysitter',$idbabysitter);
		$this->db->delete('layanan_babysitter');
	}

	//get gallery
	public function get_gallery($id_babysitter){
		$this->db->where('id_babysitter',$id_babysitter);
		$query = $this->db->get('gallery_babysitter');
		return $query->result();
	}

	// Tambah gallery
	public function add_gallery($data){
		$this->db->insert('gallery_babysitter',$data);
	}

	// hapus gallery
	public function delete_gallery($id){
		$data = array('id' => $id);
		$this->db->where($data);
		$this->db->delete('gallery_babysitter');
	}

	function ampas_cari($q){
		extract($q);

/*		//mencari layanan
		if($layanan!='all'){
			$this->db->select('id_babysitter');
			$this->db->from('layanan_babysitter');
			$this->db->where('id_layanan',$q['layanan']);
			$l=$this->db->get()->result();
			$array=array();

			/*foreach ($l as $k) {
				array_push($array, $k->id_babysitter);
			}

			if(count($array)>0){
				$this->db->where_in('id',$array);
			}else{
				$this->db->where(1,0); //fake false query
			}*/

		if($kelamin!="all"){
			$this->db->where('kelamin',$kelamin);
		}
		if($agama!="all"){
			$this->db->where('agama',$agama);
		}
		if($penempatan!="all"){
			if($penempatan=="Jawa"){
				$this->db->where('jawa',true);

			}
			else{
				$this->db->where('luar_jawa',true);
			}
		}
		if($key!=""){
			$this->db->like('keyword',$key);
			$this->db->or_like('pengalaman',$key);
		}

		$this->db->order_by('status');
	}

	//cari
	function cari($q,$limit){
		$this->ampas_cari($q);
		$this->db->limit($limit,($q['page']-1)*$limit);
		$q=$this->db->get('babysitter');
		return $q->result();
	}

	//count
	public function cari_count($q){
		$this->ampas_cari($q);
		return $this->db->get('babysitter')->num_rows();
	}

	//get review
	function get_review_all(){
		$q=$this->db->get("review");
		return $q->result();
	}

	function get_review_aktif($id){
		$this->db->where('id_babysitter',$id);
		$this->db->where('status',"AKTIF");
		$q=$this->db->get('review');
		return $q->result();
	}

	function get_review_count($id){
		$sql="
		select AVG(bintang) bintang,count(bintang) dari from review
		where id_babysitter='$id' and status='AKTIF';
		";
		$q=$this->db->query($sql);
		return $q->row();

	}

	function get_review($id){
		$this->db->where('id',$id);
		$q=$this->db->get('review');
		return $q->row();
	}

	function add_review($data){
		$this->db->insert('review',$data);
	}

	function update_review($id,$data)
	{
		$this->db->where('id',$id);
		$this->db->update('review',$data);
	}


	function delete_review($id){
		$this->db->where('id',$id);
		$this->db->delete('review');
	}

}
