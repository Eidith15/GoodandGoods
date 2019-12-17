<?php 

class AdminHome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('AdminHome_model');
		$this->load->library('form_validation');
	}


	public function index(){
		$data['judul'] = 'Home';
		$data['barang'] = $this->AdminHome_model->getAllBarang();
		$kategori=($this->uri->segment(3))?$this->uri->segment(3):0;
		$data['barang'] = $this->AdminHome_model->get_produk_kategori($kategori);
		$data['kategori'] = $this->AdminHome_model->get_kategori_all();

		// if ($this->input->post('keyword')) {
		// 	$data['barang'] = $this->Home_model->cariDataBarang();
		// }
		// $data['kategori'] = $this->Mkeranjang->get_kategori_all();
		$this->load->view('templates/header', $data);
		$this->load->view('admin_home/index', $data);
		$this->load->view('templates/footer');
	}
  
	public function detail($id){
		$data['judul'] = 'Detail Buku';
		$kategori=($this->uri->segment(3))?$this->uri->segment(3):0;
		$data['barang'] = $this->AdminHome_model->get_produk_kategori($kategori);
		$data['kategori'] = $this->AdminHome_model->get_kategori_all();
		$data['barang'] = $this->AdminHome_model->getBarangById($id);
		$this->load->view('templates/header', $data);
		$this->load->view('admin_home/detail', $data);
		$this->load->view('templates/footer');
	}

	public function tambah(){
		$data['judul'] = 'Form Tambah Barang';

		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('nrp', 'NRP', 'required|numeric');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');

		if($this->form_validation->run() == FALSE){
		$this->load->view('templates/header', $data);
		$this->load->view('admin_home/tambah');
		$this->load->view('templates/footer');
		} else {
			$this->Mahasiswa_model->tambahDataMahasiswa();
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('mahasiswa');
		}
		
	}

	public function hapus($id){
		$this->Mahasiswa_model->hapusDataMahasiswa($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('mahasiswa');
	}

	public function ubah($id){
		$data['judul'] = 'Form Ubah Data Mahasiswa';
		$data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaById($id);
		$data['jurusan'] = ['Teknik Informatika',
							'Teknik Industri',
							'Teknik Mesin',
							'Teknik Planologi',
							'Teknik Pangan',
							'Teknik Lingkungan'
							];

		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('nrp', 'NRP', 'required|numeric');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');

		if($this->form_validation->run() == FALSE){
		$this->load->view('templates/header', $data);
		$this->load->view('admin_home/ubah', $data);
		$this->load->view('templates/footer');
		} else {
			$this->Mahasiswa_model->ubahDataMahasiswa();
			$this->session->set_flashdata('flash', 'Diubah');
			redirect('mahasiswa');
		}
		
	}
}



 ?>