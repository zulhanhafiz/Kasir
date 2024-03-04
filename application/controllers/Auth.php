<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->library('form_validation');
	}

	public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {       
            $this->load->view('login');
        } else {
            $username = $this->input->post('username');
       		$password = md5($this->input->post('password'));


        $login = $this->db->get_where('user', ['UserName' => $username])->row_array();

        // if ($login) {
//password_verify($password, $login['Password'] ini untuk pakai register)
            if ($login['Password'] == $password) {

                $data = [
                    'username' => $login['UserName'],
                    'level' => $login['Level']
                ];
                $this->session->set_userdata($data);

                if ($login['Level'] == 'admin') {
                    redirect('dashboard');
                } else {
                    redirect('kasir');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Salah.....</div>');
                redirect('auth');
            }
        }
    }

	public function register()
	{
		$this->load->view('register');
	}
}
