<?php
class Shop extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Home_model');
	}

	public function index()
	{
		$data['judul'] = 'Product';
		$data['header'] = 'header--3 bg__white';
		$data['barang'] = $this->Home_model->getAllBarang();

		$this->load->view('templates/header', $data);
		$this->load->view('shop/index', $data);
		$this->load->view('templates/footer');
	}
}
