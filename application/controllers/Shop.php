<?php
class Shop extends CI_Controller
{

<<<<<<< HEAD
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Home_model');
	}

	public function index()
	{
=======
	public function index(){
>>>>>>> 5bad549e90912a7462f8df6118c5c5f7980adb21
		$data['judul'] = 'Product';
		$data['header'] = 'header--3 bg__white';

		$this->load->model('Shop_model', 'shop');

		//Pagination
		$this->load->library('pagination');

		//Config Pagination
		$config['base_url'] = 'http://localhost/GoodandGoods/shop/index';
		$config['total_rows'] = $this->shop->countAllBarang();
		$config['per_page'] = 12;

		//Initialize
		$this->pagination->Initialize($config);

		$data['start'] = $this->uri->segment(2);
		$data['barang'] = $this->shop->getBarang($config['per_page'], $data['start']);


		$this->load->view('templates/header', $data);
		$this->load->view('shop/index', $data);
		$this->load->view('templates/footer');
	}
}
