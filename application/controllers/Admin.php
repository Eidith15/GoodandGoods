<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function index() {
        $data['title'] = 'Dashbord';
        $data['user'] = $this->db->get_where('user',['email'=> $this->session->userdata('email')])->row_array();
        
       
        $this->load->view('templates/header_admin',$data);
        $this->load->view('templates/sidebar_admin',$data);
        $this->load->view('templates/topbar_admin',$data);
        $this->load->view('admin/index',$data);
       
        $this->load->view('templates/footer_admin');
        


    }
}