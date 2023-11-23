<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uang extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if (!$this->session->userdata('name')) {
			redirect('auth');
		}
	}
	public function index(){
		$data['user'] = $this->db->get_where('user',['name' => $this->session->userdata('name')])->row_array();
		$this->load->model("sbm");
		// $this->load->model("Reni");
		$parameter = array(
			'limit' => 100,
			'lolod' => 'desc'
		);
		// $data['last_transaction'] = $this->sbm->get_uang($parameter);

//uang bulanan======================================================================
		$bulan = array(
			'bulan' => date("m"));
		$bulan['transaksi'] = 'pemasukan';
		$data['last_transaction'] = $this->sbm->get_uang($parameter);
		$data['jumlahdoi'] = 0;
		$data['jumlahdoikeluar'] = 0;
		$jumlahdoi = $this->sbm->get_uang($bulan);
		// $jumlahdoi = $this->sbm->get_pemasukanuang($parameter);
		foreach($jumlahdoi as $k){
			if ($k->transaksi=='Pemasukan') {
				$data['jumlahdoi'] += $k->nominal;
			}
			// $data['jumlahdoi'] += $k->nominal;
		}

		$bulan['transaksi'] = 'pengeluaran';
		$jumlahdoikeluar = $this->sbm->get_uang($bulan);
		foreach($jumlahdoikeluar as $k){
			if ($k->transaksi=='Pengeluaran') {
			$data['jumlahdoikeluar'] += $k->nominal;
			}
		}
		$data['total_transaksi'] = sizeof($jumlahdoi) ;


//uang tahunan==================================================================================
		$tahun = array(
			'tahun' => date("Y"));
		$tahun['transaksi'] = 'Pemasukan';		
		$data['jumlahdoitahun'] = 0;
		$data['jumlahdoikeluartahun'] = 0;
		$jumlahdoitahun = $this->sbm->get_uang($tahun);
		foreach($jumlahdoitahun as $k){
			if ($k->transaksi=='Pemasukan') {
				$data['jumlahdoitahun'] += $k->nominal;
			}
		}

		$tahun['rein'] = 0;
		$jumlahdoikeluartahun = $this->sbm->get_uang($tahun);
		foreach($jumlahdoikeluartahun as $k){
			if ($k->transaksi=='Pengeluaran') {
				$data['jumlahdoikeluartahun'] += $k->nominal;
			}
		}
		$data['total_transaksi_tahun'] = sizeof($jumlahdoitahun);
		$data['v'] = 0;
		// $data['pilihjeti'] = $this->sbm->get_jetty_data($parameter);
		// print_r($jumlahdoitahun);
		$this->load->view("keuangan/info",$data);
	}
	public function pemasukan(){
		$data['user'] = $this->db->get_where('user',['name' => $this->session->userdata('name')])->row_array();
		$this->load->model("sbm");
		$parameter = array(
			'limit' => 10,
			'lolod' => 'desc'
		);
		$this->load->view("keuangan/pemasukan",$data);	
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
		$data['data'] = $this->sbm->getupdateuang($parameter);
		// $data['data'] = $this->Rein->getupdate();
		$this->load->view("keuangan/edit",$data);	
	}
	public function insert_uang(){
		$this->load->model("rein");
		$data = array();
		$data['tanggal'] = $this->input->post("waktu");
		$data['keterangan'] = $this->input->post("ket");
		$data['transaksi'] = $this->input->post("transaksi");
		$data['jenis'] = $this->input->post("jenis");
		$data['nominal'] = $this->input->post("nominal");
		$data['via'] = $this->input->post("via");
		
		$this->db->insert('db_keuangan', $data);
		$id=$this->db->insert_id();
		$this->session->set_flashdata("flash","ditambahkan");
		echo json_encode("true");
		redirect('uang/pemasukan');
	}
	public function updateuang($id){
		$this->load->model("rein");
		$data = array();

		$data['id'] = $id;
		$data['tanggal'] = $this->input->post("waktu");
		$data['keterangan'] = $this->input->post("ket");
		$data['transaksi'] = $this->input->post("transaksi");
		$data['jenis'] = $this->input->post("jenis");
		$data['nominal'] = $this->input->post("nominal");
		$data['via'] = $this->input->post("via");
		
		$this->rein->updateuang($data);
		$this->session->set_flashdata("flashupdate","Di update");
		echo json_encode("true");
		redirect('uang');
	}
	public function hapus($id){
		$this->load->model("Rein");
		$this->Rein->hapusuang($id);
		$this->session->set_flashdata("flashHapus","Hapus");	
		redirect('uang');
	}
}
