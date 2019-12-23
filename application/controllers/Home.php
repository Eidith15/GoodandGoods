<?php 

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('cart');
		$this->load->model('Home_model');
		// $this->load->model('MKeranjang');
	}


	public function index(){
		$data['judul'] = 'Home';
		$data['header'] = '';
		$data['barang'] = $this->Home_model->getAllBarang();

		$this->load->view('templates/header', $data);
		$this->load->view('home/index', $data);
		$this->load->view('templates/footer');
	}

	public function detail($id){
		$data['judul'] = 'Detail Buku';
		$kategori=($this->uri->segment(3))?$this->uri->segment(3):0;
		$data['barang'] = $this->Home_model->get_produk_kategori($kategori);
		$data['kategori'] = $this->Home_model->get_kategori_all();
		$data['barang'] = $this->Home_model->getBarangById($id);
		$this->load->view('templates/header', $data);
		$this->load->view('home/detail', $data);
		$this->load->view('templates/footer');
	}

}

 ?>