<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
 
class Page extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library('cart');
        $this->load->model('Mkeranjang');
    }
    public function index()
        {
            $data['produk'] = $this->Mkeranjang->get_produk_all();
            $data['kategori'] = $this->Mkeranjang->get_kategori_all();
            $this->load->view('templates/header',$data);
            $this->load->view('shopping/list_produk',$data);
            $this->load->view('templates/footer');
        }
    public function tentang()
        {
            $data['kategori'] = $this->Mkeranjang->get_kategori_all();
            $this->load->view('templates/header',$data);
            $this->load->view('page/tentang',$data);
            $this->load->view('templates/footer');
        }
    public function cara_bayar()
        {
            $data['kategori'] = $this->Mkeranjang->get_kategori_all();
            $this->load->view('templates/header',$data);
            $this->load->view('page/cara_bayar',$data);
            $this->load->view('templates/footer');
        }
}