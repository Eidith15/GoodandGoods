<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
 
 
class Shopping extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->library('cart');
        $this->load->model('Mkeranjang');
    }
 
    public function tampil_cart()
    {
        $data['judul'] = 'Keranjang';
        $data['kategori'] = $this->Mkeranjang->get_kategori_all();

        $data['header'] = 'header--3 bg__white';

        $this->load->view('templates/header',$data);
        $this->load->view('shopping/tampil_cart',$data);
        $this->load->view('templates/footer');
    }
 
    public function check_out()
    {
        $data['judul'] = 'Check out';
        $data['kategori'] = $this->Mkeranjang->get_kategori_all();

        $data['header'] = 'header--3 bg__white';

        $this->load->view('templates/header',$data);
        $this->load->view('shopping/check_out',$data);
        $this->load->view('templates/footer');
    }

    public function check_outLogin()
    {

            
            $data['header'] = 'header--3 bg__white';

            $data['judul'] = ' Login page';

            $this->load->view('templates/account_header', $data);
            $this->load->view('account/login');
            $this->load->view('templates/account_footer');
        redirect('account/login');
    }

 
    function tambah()
    {
        $data_produk= array('id' => $this->input->post('id'),
                             'name' => $this->input->post('nama'),
                             'price' => $this->input->post('harga'),
                             'gambar' => $this->input->post('gambar'),
                             'qty' =>$this->input->post('qty')
                            );
        $this->cart->insert($data_produk);
        redirect('home');
    }
 
    function hapus($rowid)
    {
        if ($rowid=="all")
            {
                $this->cart->destroy();
            }
        else
            {
                $data = array('rowid' => $rowid,
                              'qty' =>0);
                $this->cart->update($data);
            }
        redirect('shopping/tampil_cart');
    }


        function hapusCart($rowid)
    {
        if ($rowid=="all")
            {
                $this->cart->destroy();
            }
        else
            {
                $data = array('rowid' => $rowid,
                              'qty' =>0);
                $this->cart->update($data);
            }
        redirect('home');
    }

 
 
 //CeckOut
    public function proses_order()
    {
        //-------------------------Input data pelanggan--------------------------

        $data_pelanggan = array('nama' => $this->input->post('nama'),
                            'email' => $this->input->post('email'),
                            'alamat' => $this->input->post('alamat'),
                            'telp' => $this->input->post('telp'));
        $id_pelanggan = $this->Mkeranjang->tambah_pelanggan($data_pelanggan);
        //-------------------------Input data order------------------------------
        $data_order = array('tanggal' => date('Y-m-d'),
                            'pelanggan' => $id_pelanggan);
        $id_order = $this->Mkeranjang->tambah_order($data_order);
        //-------------------------Input data detail order-----------------------
        if ($cart = $this->cart->contents())
            {
                foreach ($cart as $item)
                    {
                        $data_detail = array('order_id' =>$id_order,
                                        'produk' => $item['id'],
                                        'qty' => $item['qty'],
                                        'harga' => $item['price']);
                        $proses = $this->Mkeranjang->tambah_detail_order($data_detail);
                    }
            }
        //-------------------------Hapus shopping cart--------------------------
        $this->cart->destroy();
        $data['kategori'] = $this->Mkeranjang->get_kategori_all();

        $data['header'] = 'header--3 bg__white';

        $data['judul'] = 'Orderan';

        $this->load->view('templates/header',$data);
        $this->load->view('shopping/order_sukses',$data);
        $this->load->view('templates/footer');
    }
}
?>