<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	
	public function index()
	{
		
		$this->load->view('templets/header');
		$this->load->view('templets/sidebar');
		$this->load->view('templets/topbar');
		$this->load->view('dashboard');
		$this->load->view('templets/footer');
		

	}


	public function produk()
	{
		$data['produk'] = $this->db->get('produk')->result_array();
		
		
		$this->load->view('templets/header');
		$this->load->view('templets/sidebar');
		$this->load->view('templets/topbar');
		$this->load->view('data_produk', $data);
		$this->load->view('templets/footer');
		
	}

	public function tambah_produk() 
	{
		$this->form_validation->set_rules('nama_produk', 'nama_produk', 'required|trim');
		$this->form_validation->set_rules('harga_produk', 'harga_produk', 'required|trim');
		$this->form_validation->set_rules('stok', 'stok', 'required|trim');

		if ($this->form_validation->run() == false) {
			$data['produk'] = $this->db->get('produk')->result_array();		
			$this->load->view('templets/header');
			$this->load->view('templets/sidebar');
			$this->load->view('templets/topbar');
			$this->load->view('data_produk', $data);
			$this->load->view('templets/footer');
		}else{
			$data = [
				'NamaProduk' => $this->input->post('nama_produk', true),
				'Harga' => $this->input->post('harga_produk', true),
				'Stok' => $this->input->post('stok', true)
			];

			$this->db->insert('produk', $data);
			redirect('dashboard/produk');
		}

	}

	public function edit_produk($id) 
	{
		$this->form_validation->set_rules('nama_produk', 'nama_produk', 'required|trim');
		$this->form_validation->set_rules('harga_produk', 'harga_produk', 'required|trim');
		$this->form_validation->set_rules('stok', 'stok', 'required|trim');

		if ($this->form_validation->run() == false) {
			$data['produk'] = $this->db->get('produk')->result_array();		
			$this->load->view('templets/header');
			$this->load->view('templets/sidebar');
			$this->load->view('templets/topbar');
			$this->load->view('data_produk', $data);
			$this->load->view('templets/footer');
		}else{
			$data = [
				'NamaProduk' => $this->input->post('nama_produk', true),
				'Harga' => $this->input->post('harga_produk', true),
				'Stok' => $this->input->post('stok', true)
			];

			$this->db->where('ProdukID',$id);
			$this->db->update('produk', $data);
			redirect('dashboard/produk');
		}

	}

	public function hapusProduk($id) {
		$this->db->where('ProdukID', $id);
		$this->db->delete('produk');
		redirect('dashboard/produk');
	}

	public function petugas()
	{
	  if ($this->form_validation->run() == false) {
		  $data['role'] = $this->db->get('role')->result_array();	
		  $this->load->view('templets/header');
		  $this->load->view('templets/sidebar');
		  $this->load->view('templets/topbar');
		  $this->load->view('data_petugas', $data);
		  $this->load->view('templets/footer');
	  }		
	}

	public function editPetugas($id) 
	{
		$this->form_validation->set_rules('nama_petugas', 'nama_petugas', 'required|trim');

		if ($this->form_validation->run() == false) {
			$data['role'] = $this->db->get('role')->result_array();		
			$this->load->view('templets/header');
			$this->load->view('templets/sidebar');
			$this->load->view('templets/topbar');
			$this->load->view('data_petugas', $data);
			$this->load->view('templets/footer');
		}else{
			$data = [
				'Nama' => $this->input->post('nama_petugas', true),
			];

			$this->db->where('ID',$id);
			$this->db->update('role', $data);
			redirect('dashboard/petugas');
		}

	}

	public function tambahPetugas() {
		$this->form_validation->set_rules('nama_petugas', 'nama_petugas', 'required|trim');

		if ($this->form_validation->run() == false) {
			$data['role'] = $this->db->get('role')->result_array();		
			$this->load->view('templets/header');
			$this->load->view('templets/sidebar');
			$this->load->view('templets/topbar');
			$this->load->view('data_petugas', $data);
			$this->load->view('templets/footer');
		}else{
			$data = [
				'Nama' => $this->input->post('nama_petugas', true),
			];

			$this->db->insert('role',$data);
			redirect('dashboard/petugas');
		}
	}
	 
	public function dashboard()
	{
		$this->load->view('templets/header');
		$this->load->view('templets/sidebar');
		$this->load->view('templets/topbar');
		$this->load->view('dashboard');
		$this->load->view('templets/footer');
		
	}

}
