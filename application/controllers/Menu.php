<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller 
{

public function index() 
{
    $data['title'] = 'Tambah Barang';
    $data['user'] = $this->db->get_where('user',['email'=> $this->session->userdata('email')])->row_array();
    
    

    
        $this->load->view('templates/header_admin',$data);
        $this->load->view('templates/sidebar_admin',$data);
        $this->load->view('templates/topbar_admin',$data);
        $this->load->view('menu/index',$data);
       
        $this->load->view('templates/footer_admin');
     

    


    }

    public function submenu (){
    $data['title'] = 'Sub Menu Management';
    $data['user'] = $this->db->get_where('user',['email'=> $this->session->userdata('email')])->row_array();

        
   
        $this->load->view('templates/header_admin',$data);
        $this->load->view('templates/sidebar_admin',$data);
        $this->load->view('templates/topbar_admin',$data);
        $this->load->view('menu/submenu',$data);
       
        $this->load->view('templates/footer_admin');
    }   


}