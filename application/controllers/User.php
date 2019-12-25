<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Home_model');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Home';
        $data['header'] = '';
        $data['barang'] = $this->Home_model->getAllBarang();

        $this->load->view('templates/user_header', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Buku';
        $kategori = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['barang'] = $this->Home_model->get_produk_kategori($kategori);
        $data['kategori'] = $this->Home_model->get_kategori_all();
        $data['barang'] = $this->Home_model->getBarangById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('home/detail', $data);
        $this->load->view('templates/footer');
    }
}
