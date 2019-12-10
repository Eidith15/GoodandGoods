<?php 

class Akun extends CI_Controller {

	

	public function index(){
		$data['judul'] = 'Akun';
		// $data['barang'] = $this->Home_model->getAllBarang();
		// if ($this->input->post('keyword')) {
		// 	$data['barang'] = $this->Home_model->cariDataBarang();
		// }

		$this->load->view('templates/header', $data);
		$this->load->view('akun/index', $data);
		$this->load->view('templates/footer');
	}

	
}



 ?>