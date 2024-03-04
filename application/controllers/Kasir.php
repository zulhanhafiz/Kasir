<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kasir extends CI_Controller {
	
	public function index()
	{
		
		$this->load->view('templets/kasir/header');
		$this->load->view('templets/kasir/sidebar');
		$this->load->view('templets/kasir/topbar');
		$this->load->view('dashboard/kasir');
		$this->load->view('templets/kasir/footer');
		

	}

	public function produk()
	{
		$data['produk'] = $this->db->get('produk')->result_array();
		
		$this->load->view('templets/kasir/header');
		$this->load->view('templets/kasir/sidebar');
		$this->load->view('templets/kasir/topbar');
		$this->load->view('kasir/dataproduk', $data);
		$this->load->view('templets/kasir/footer');
		
	}

	public function tambah_produk() 
	{
		$this->form_validation->set_rules('nama_produk', 'nama_produk', 'required|trim');
		$this->form_validation->set_rules('harga_produk', 'harga_produk', 'required|trim');
		$this->form_validation->set_rules('stok', 'stok', 'required|trim');

		if ($this->form_validation->run() == false) {
			$data['produk'] = $this->db->get('produk')->result_array();		
			$this->load->view('templets/kasir/header');
			$this->load->view('templets/kasir/sidebar');
			$this->load->view('templets/kasir/topbar');
			$this->load->view('kasir/dataproduk', $data);
			$this->load->view('templets/kasir/footer');
		}else{
			$data = [
				'NamaProduk' => $this->input->post('nama_produk', true),
				'Harga' => $this->input->post('harga_produk', true),
				'Stok' => $this->input->post('stok', true)
			];

			$this->db->insert('produk', $data);
			redirect('kasir/produk');
		}

	}

	public function edit_produk($id) 
	{
		$this->form_validation->set_rules('nama_produk', 'nama_produk', 'required|trim');
		$this->form_validation->set_rules('harga_produk', 'harga_produk', 'required|trim');
		$this->form_validation->set_rules('stok', 'stok', 'required|trim');

		if ($this->form_validation->run() == false) {
			$data['produk'] = $this->db->get('produk')->result_array();		
			$this->load->view('templets/kasir/header');
			$this->load->view('templets/kasir/sidebar');
			$this->load->view('templets/kasir/topbar');
			$this->load->view('kasir/dataproduk', $data);
			$this->load->view('templets/kasir/footer');
		}else{
			$data = [
				'NamaProduk' => $this->input->post('nama_produk', true),
				'Harga' => $this->input->post('harga_produk', true),
				'Stok' => $this->input->post('stok', true)
			];

			$this->db->where('ProdukID',$id);
			$this->db->update('produk', $data);
			redirect('kasir/produk');
		}

	}
}
