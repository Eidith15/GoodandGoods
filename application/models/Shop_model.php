<?php 

class Shop_model extends CI_model{

	public function getAllBarang(){
		return $query = $this->db->get('barang')->result_array();
	}

	public function getBarang($limit, $start){
		return $this->db->get('barang', $limit, $start)->result_array();
	}

	public function countAllBarang(){
		return $this->db->get('barang')->num_rows();
	}

	

}

 ?>