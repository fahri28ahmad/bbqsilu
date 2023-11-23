<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fungsi extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if (!$this->session->userdata('name')) {
			redirect('auth');
		}
	}
	public function insert_pendapatan(){
		$this->load->model("rein");
		$data = array();
		$data['nama'] = $this->input->post("namau");
		$data['sales'] = $this->input->post("namas");
		$data['sumber'] = $this->input->post("sumber");
		$data['pax'] = $this->input->post("pax");
		$data['metod_p'] = $this->input->post("metodp");
		$data['status'] = $this->input->post("status");
		$data['keterangan'] = $this->input->post("ket");
		$data['tgl_in'] = date('Y-m-d');
		$data['notlp'] = $this->input->post("notlp");
		// $data['status'] = '1';
		
		$this->db->insert('alldata', $data);
		$id=$this->db->insert_id();
		$this->session->set_flashdata("flash","ditambahkan");
		echo json_encode("true");
		redirect('welcome/pemasukan');
	}
	public function update($id){
		$this->load->model("rein");
		$data = array();

		$data['id'] = $id;$data['nama'] = $this->input->post("namau");
		$data['sales'] = $this->input->post("namas");
		$data['sumber'] = $this->input->post("sumber");
		$data['pax'] = $this->input->post("pax");
		$data['metod_p'] = $this->input->post("metodp");
		$data['keterangan'] = $this->input->post("ket");
		$data['tgl_a'] = date('Y-m-d');
		$data['notlp'] = $this->input->post("notlp");
		$data['status'] = $this->input->post("status");
		
		$this->rein->updateRein($data);
		
		$this->session->set_flashdata("flashupdate","Di update");
		echo json_encode("true");
		redirect('welcome/semuadata');
	}
	public function print_(){
		$this->load->model("rein");
		$data['tanggal'] = $this->input->post("tanggal");
		$data['bulan'] = $this->input->post("bulan");
		$data['tahun'] = $this->input->post("tahun");
		$data['hari'] = $this->input->post("hari");
		$data['tanggal_awal'] = $this->input->post("tanggal_awal");
		$data['tanggal_akhir'] = $this->input->post("tanggal_akhir");
		$data['keterangan'] = $this->input->post("keterangan");

		// print_r($data);

		$r = $this->rein->get_cari($data);
		$i = $this->rein->get_cari($data);

		$stat = new StdClass();
		$big_nom = array();
		// $temp_nom = 0;
		// foreach($r as $p){
		// 	if($p->nominal > $temp_nom){
		// 		$temp_nom = $p->nominal;
		// 		$big_nom['nominal'] = $p->nominal;
		// 		$big_nom['tanggal'] = $p->tanggal;
		// 	}
		// }

		$stat->large_number = $big_nom;


		$l['income'] = $i;
		$l['revenue'] = $r;
		$l['stat'] = $stat;
		// echo json_encode($l);
		$this->load->view("printh",$l);
	}
}
