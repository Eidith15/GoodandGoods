<?php 

class profile extends CI_Controller {
	public function __construct()
	{
		parent:: __construct();
		$this->load->model('Profile_model');
	  	
  
	}
	

	public function index(){
		$data['judul'] = 'Profile';
		$data['user'] = $this->Profile_model->getAllUser();

		$this->load->view('templates/header', $data);
		$this->load->view('profile/index', $data);
		$this->load->view('templates/footer');
		
	}


	public function ubah_profile(){
		$data['judul'] = 'Ubah Profile';
		

		$this->load->view('templates/header2', $data);
		$this->load->view('profile/ubah_profile', $data);
		$this->load->view('templates/footer');
		
	}

	
}



 ?>