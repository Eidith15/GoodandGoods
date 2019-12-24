<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
        $data['title'] = 'Register';
        $this->load->view('templates/account_header', $data);
        $this->load->view('account/register', $data);
        $this->load->view('templates/account_footer');
	}

	public function register()
	{
		$this->form_validation->set_rules('fullname', 'Full Name', 'required|trim');
		// $this->form_validation->set_rules('lastname', 'Last Name', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', ['is_unique' => 'This email has a already registered!']);
		$this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]|matches[confirmpassword]', [
			'matches' => 'Password dont match!',
			'min_length' => 'Password too short!'
		]);
		$this->form_validation->set_rules('confirmpassword', 'Password', 'required|trim|matches[password]');

		if ($this->form_validation->run() == false) {
			$data['title'] = 'Register';
			$this->load->view('templates/account_header', $data);
			$this->load->view('account/register');
			$this->load->view('templates/account_footer');			//echo "haia";
		} else {
			$data = [
				'fullname' => htmlspecialchars($this->input->post('fullname', true)),
				'email' => htmlspecialchars($this->input->post('email', true)),
				'image' => 'default.jpg',
				'password' => password_hash(htmlspecialchars($this->input->post('password')), PASSWORD_DEFAULT),
				'role_id' => 2,
				'is_active' => 1,
				'date_created' => time()
			];

			$this->db->insert('user', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! your account has been created. Please Login</div>');
			redirect('Login');
		}
	}
}
//}
