<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index() {
		$this->load->view('templets/header');
		$this->load->view('templets/sidebar');
		$this->load->view('templets/topbar');
		$this->load->view('petugas/tambah_petugas');
		$this->load->view('templets/footer');
	}
}
