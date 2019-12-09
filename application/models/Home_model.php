<?php 
class Home_model extends CI_model{
	public function getAllBarang(){
		return $query = $this->db->get('barang')->result_array();
	}

	public function tambahDataBarang(){
		$data = [
			"nama_barang" => $this->input->post('nama_barang', true),
			"deskripsi_barang" => $this->input->post('deskripsi_barang', true),
			"harga_barang" => $this->input->post('harga_barang', true),
			"stock_barang" => $this->input->post('stock_barang', true),
			"image_barang" => $this->input->post('image_barang', true)
		];

		$this->db->insert('barang', $data);
	}

	public function hapusDataBarang($id){
		$this->db->delete('barang', ['id_barang' => $id]);
	}

	public function getBarangById($id){
		return $this->db->get_where('barang', ['id_barang' => $id])->row_array();
	}

	public function ubahDataBarang(){
		$data = [
			"nama_barang" => $this->input->post('nama_barang', true),
			"deskripsi_barang" => $this->input->post('deskripsi_barang', true),
			"harga_barang" => $this->input->post('harga_barang', true),
			"stock_barang" => $this->input->post('stock_barang', true),
			"image_barang" => $this->input->post('image_barang', true)
		];

		$this->db->where('id_barang', $this->input->post('id_barang'));
		$this->db->update('barang', $data);
	}

	public function cariDataBarang(){
		$keyword = $this->input->post('keyword', true);
		$this->db->like('nama_barang', $keyword);
		$this->db->or_like('deskripsi_barang', $keyword);
		$this->db->or_like('harga_barang', $keyword);
		return $this->db->get('mahasiswa')->result_array();
	}

}
 ?>