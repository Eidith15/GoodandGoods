<?php 
class Contact extends CI_Controller {

	public function index(){
		$data['judul'] = 'Contact Us';
		$data['header'] = 'header--3 bg__white';
		
		$this->load->view('templates/header', $data);
		$this->load->view('contact/index', $data);
		$this->load->view('templates/footer');
	}
}

 ?>