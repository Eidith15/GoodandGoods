<?php 

class profile extends CI_Controller {

	

	public function index(){
		$data['judul'] = 'Profile';
		// $data['barang'] = $this->Home_model->getAllBarang();
		// if ($this->input->post('keyword')) {
		// 	$data['barang'] = $this->Home_model->cariDataBarang();
		// }

		$this->load->view('templates/header2', $data);
		$this->load->view('Profile/index', $data);
		$this->load->view('templates/footer');
		
	}

	
}



 ?>