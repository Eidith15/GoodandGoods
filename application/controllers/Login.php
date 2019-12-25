<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index ()
    {
        $this->form_validation->set_rules('email','Email','trim|required|valid_email');
        $this->form_validation->set_rules('password','Password','trim|required');
        
        if ($this->form_validation->run() == false) {
          
        $data['title'] = ' Login page';
        
            $this->load->view('templates/account_header', $data);
            $this->load->view('account/login');
            $this->load->view('templates/account_footer');

    } else {
          //validasi lolos
          $this->_login();  
        
        }
       
    }


    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user',['email'=>$email])->row_array();
        
        if ($user) {
            if ($user['is_active'] == 1) {
                //cek password

                if (password_verify($password, $user['password'])){ 
                    $data = [
                        'email' => $user['email'],
                        'role_id'=> $user['role_id']
                    ];
                    $this->session->set_userdata($data);
                    if ($user['role_id'] ==1) {
                        redirect('admin');
                    }  else {
                    redirect('shop');
                }

                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Wrong Password
                  </div');
                    redirect('login');
                } 
                    
            }else{ 
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                This email has not been activeted!
              </div');
                redirect('login');
            }

        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Email not Registered!
            </div');
            redirect('login');    
        
        }



    }
    public function logout() 
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_data');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        You have been logout
      </div');
        redirect('home');
    }


}


