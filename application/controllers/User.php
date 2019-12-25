<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function index() {
        $data['title'] = 'My Profile';
        $data['user'] = $this->db->get_where('user',['email'=> $this->session->userdata('email')])->row_array();
        
       
        $this->load->view('templates/header_admin',$data);
        $this->load->view('templates/sidebar_admin',$data);
        $this->load->view('templates/topbar_admin',$data);
        $this->load->view('user/index',$data);
       
        $this->load->view('templates/footer_admin');


    }

    public function edit() 
    {
    
        $data['title'] = 'Edit Profile';
        $data['user'] = $this->db->get_where('user',['email'=> $this->session->userdata('email')])->row_array();
        
        $this->form_validation->set_rules('name', 'full Name','required|trim');
    
        if($this->form_validation->run() == false) {
    
            $this->load->view('templates/header_admin',$data);
            $this->load->view('templates/sidebar_admin',$data);
            $this->load->view('templates/topbar_admin',$data);
            $this->load->view('user/edit',$data);
            $this->load->view('templates/footer_admin');
    
        }else{
            $name = $this->input->post('name');
            $email = $this->input->post('email');
    
            //cek jika ada gambar yang akan di upload
            $upload_image = $_FILES['image']['name'];
    
            if($upload_image) {
                
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']     = '2048';
                $config['upload_path'] = './assets/img/profile';
    
                $this->load->library('upload', $config);
    
                if ($this->upload->do_upload('image')) {
                    $old_image = $data['user'] ['image'];
                    if($old_image != 'default.jpg') {
                        unlink(FCPATH .'assets/img/profile/' . $old_image);
                    }
    
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                }else{
                    echo $this->upload->dispay_errors();
                }
    
            }
    
    
            $this->db->set('name', $name);
            $this->db->where('email', $email);
            $this->db->update('user');
    
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Foto berhasil di tambahkan
                </div');
                redirect('user'); 
    
        }
       
    
    
    } 


}