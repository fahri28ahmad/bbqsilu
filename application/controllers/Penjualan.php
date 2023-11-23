<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penjualan extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if (!$this->session->userdata('name')) {
			redirect('auth');
		}
	}
	public function index(){
		$data['user'] = $this->db->get_where('user',['name' => $this->session->userdata('name')])->row_array();
		$this->load->model("sbm");
		$parameter = array(
			'limit' => 10,
			'lolod' => 'desc'
		);
		$data['last_transaction'] = $this->sbm->get_penjualan($parameter);
		$data['v'] = 0;
		// $data['pilihjeti'] = $this->sbm->get_jetty_data($parameter);
		$this->load->view("penjualan/penjualan",$data);	
	}
	public function pemasukan(){
		$data['user'] = $this->db->get_where('user',['name' => $this->session->userdata('name')])->row_array();
		$this->load->model("sbm");
		$parameter = array(
			'limit' => 10,
			'lolod' => 'desc'
		);
		$this->load->view("penjualan/pemasukan",$data);	
	}
	public function ubah($id){
		$data['user'] = $this->db->get_where('user',['name' => $this->session->userdata('name')])->row_array();
		$this->load->model("Rein");
		$parameter = array(
			'id' => $id
		);
		$data['id'] =$id;
		$this->load->model("sbm");
		$parameter1 = array(
			'limit' => 10,
			'lolod' => 'desc'
		);
		// $data['pilihjeti'] = $this->sbm->get_jetty_data($parameter1);
		$data['data'] = $this->sbm->getupdatepenjualan($parameter);
		// $data['data'] = $this->Rein->getupdate();
		$this->load->view("penjualan/edit",$data);	
	}
	public function insert_penjualan(){
		$this->load->model("rein");
		$data = array();
		$data['waktu'] = $this->input->post("waktu");
		$data['nama_user'] = $this->input->post("namau");
		$data['blok'] = $this->input->post("namablk");
		$data['Kontrak'] = $this->input->post("Kontrak");
		$data['jatuh_tempo'] = $this->input->post("tempo");
		$data['kredit'] = $this->input->post("kredit");
		$data['sales'] = $this->input->post("market");
		$data['angsuran_t'] = $this->input->post("angt");
		$data['angsuran_s'] = $this->input->post("angs");
		$data['tunggakan'] = 0;
		
		$this->db->insert('db_penjualan', $data);
		$id=$this->db->insert_id();
		$this->session->set_flashdata("flash","ditambahkan");
		echo json_encode("true");
		redirect('penjualan/pemasukan');
	}
	public function updatepenjualan($id){
		$this->load->model("rein");
		$data = array();

		$data['id'] = $id;
		$data['waktu'] = $this->input->post("waktu");
		$data['nama_user'] = $this->input->post("namau");
		$data['blok'] = $this->input->post("namablk");
		$data['Kontrak'] = $this->input->post("Kontrak");
		$data['jatuh_tempo'] = $this->input->post("tempo");
		$data['kredit'] = $this->input->post("kredit");
		$data['sales'] = $this->input->post("market");
		$data['angsuran_t'] = $this->input->post("angt");
		$data['angsuran_s'] = $this->input->post("angs");
		$data['tunggakan'] = $this->input->post("tunggakan");
		
		$this->rein->updatepenjualan($data);
		$this->session->set_flashdata("flashupdate","Di update");
		echo json_encode("true");
		redirect('penjualan');
	}
	public function hapus($id){
		$this->load->model("Rein");
		$this->Rein->hapuspenjualan($id);
		$this->session->set_flashdata("flashHapus","Hapus");	
		redirect('penjualan');
	}
}
