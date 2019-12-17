<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login';
            $this->load->view('templates/header2', $data);
            $this->load->view('account/registration');
            
            $this->load->view('templates/footer');
        } else {
            // validasinya success
            $this->_login();
        }
    }

    


    public function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        // Jika usernya ada
        if ($user) {
            // Jika usernya aktif
            if ($user['is_active'] == 1) {
                // Cek password
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id']
                    ];
                    $this->session->set_userdata($data);
                    redirect('user');
                } else {
                    $this->session->set_flashdata(
                        'message',
                        '<div class="alert alert-danger" role="alert">
                        Wrong password!
                        </div>'
                    );
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata(
                    'message',
                    '<div class="alert alert-danger" role="alert">
                    This email has not been activated!
                    </div>'
                );
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-danger" role="alert">
                Email is not registered!
                </div>'
            );
            redirect('auth');
        }
    }


    public function registration()
    {
        $this->form_validation->set_rules('name', 'Full Name', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', ['is_unique' => 'This email has a already registered!']);
		$this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]|matches[confirmpassword]', [
				'matches' => 'Password dont match!',
				'min_length' => 'Password too short!']);
		$this->form_validation->set_rules('confirmpassword', 'Password', 'required|trim|matches[password]');

		if ($this->form_validation->run() == false) {
            $data['title'] = 'User Register';
            $this->load->view('templates/header2', $data);
            $this->load->view('account/registration', $data);
            $this->load->view('templates/footer');

			//echo "haia";
		} else {
			  $data = [
                  'fullname' => htmlspecialchars($this->input->post('fullname', true)),
			   'email' => htmlspecialchars($this->input->post('email', true)),
			  	'password' => password_hash(htmlspecialchars($this->input->post('password')), PASSWORD_DEFAULT),    
			  		]; 
 
    			$this->db->insert('user', $data);
                 $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! your account has been created. Please Login</div>');
                 redirect(auth/index);     
        }
    }


    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success" role="alert">
            You have been logged out!
            </div>'
        );
        redirect('auth');
    }
}
