<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if (!$this->session->userdata('name')) {
			redirect('auth');
		}
	}
	public function index(){
		// $this->load->model("Rein");
		$data['user'] = $this->db->get_where('user',['name' => $this->session->userdata('name')])->row_array();
		$this->session->set_flashdata('welcome','<div class="alert" role="alert">
					  Selamat datang ' . $data["user"]["name"] . '
					</div>');
		$this->load->model("sbm");
		$parameter = array(
			'limit' => 1000,
			'lolod' => 'desc'
		);
		$jumlahdata = $this->sbm->get_sbm_data($parameter);
		$data['last_transaction'] = $this->sbm->get_sbm_data($parameter);
		$datamember = $this->sbm->jumlah_member($parameter);
		// $datarank = $this->sbm->jumlah_rank($parameter);
		$datasumber = $this->sbm->jumlah_sumber($parameter);
		$data['datafilm'] = $this->sbm->get_film_data_lilit2();
		
		$data['jumlahnonton'] = $this->sbm->get_jumlah_nonton();
		$data['datamember'] = $datamember;
		// $data['datarank'] = $datarank;
		$data['datasumber'] = $datasumber;
		$data['v'] = 0;
		$data['i'] = 0;
		//data total hitung
		$data['jumlahtransaksibln'] = 0;
		$data['total_transaksi'] = 0;
		$data['total_transaksi'] = sizeof($jumlahdata);
		
		// cek bulan
		// $bulan = array(
		// 	'bulan' => date("m"));
		 // foreach($jumlahdata as $k){
		 // 	if ($k->tgl_in==date("m")) {
		 // 		$data_kem['jumlahp'] += 1;
		 // 	}
		 // }
		// echo print_r($datasales);
		$this->load->view("tampilan/dashboard",$data);
	}
	public function semuadata(){
		// $this->load->model("Rein");
		$data['user'] = $this->db->get_where('user',['name' => $this->session->userdata('name')])->row_array();
		$this->session->set_flashdata('welcome','<div class="alert" role="alert">
					  Selamat datang ' . $data["user"]["name"] . '
					</div>');
		$this->load->model("sbm");
		$parameter = array(
			'limit' => 10,
			'lolod' => 'desc'
		);
		$data['last_transaction'] = $this->sbm->get_sbm_data($parameter);
		$data['v'] = 0;
		
		$this->load->view("data/semuadata",$data);
	}
	public function userrole(){
		$data['user'] = $this->db->get_where('user',['name' => $this->session->userdata('name')])->row_array();
		if ($data["user"]["role_id"]==1) {
			$this->session->set_flashdata('welcome','<div class="alert" role="alert">
						  Selamat datang ' . $data["user"]["name"] . '
						</div>');
			$parameter = array(
				'limit' => 10,
				'lolod' => 'desc'
			);
			$data['last_transaction'] = $this->sbm->get_user_data($parameter);
			// $data['pilihjeti'] = $this->sbm->get_jetty_data($parameter);
			$data['v'] = 0;
			$this->load->view("user/user",$data);
		}else{
			$this->index();
		}
		
	}
	public function pengaturan(){
		$data['user'] = $this->db->get_where('user',['name' => $this->session->userdata('name')])->row_array();
		$this->load->model("sbm");
		$parameter = array(
			'limit' => 10,
			'lolod' => 'desc'
		);
		// $data['pilihjeti'] = $this->sbm->get_jetty_data($parameter);
		$this->load->view("data/pengaturan",$data);	
	}

	public function pemasukan(){
		$data['user'] = $this->db->get_where('user',['name' => $this->session->userdata('name')])->row_array();
		$this->load->model("sbm");
		$parameter = array(
			'limit' => 10,
			'lolod' => 'desc'
		);
		$data['datafilm'] = $this->sbm->get_flim_data($parameter);
		$this->load->view("data/pemasukan",$data);	
	}
	
	public function pengeluaran(){
		$data['user'] = $this->db->get_where('user',['name' => $this->session->userdata('name')])->row_array();
		$this->load->view("pengeluaran",$data);	
	}
	public function ubah($id){
		$data['user'] = $this->db->get_where('user',['name' => $this->session->userdata('name')])->row_array();
		$this->load->model("Rein");
		$parameter = array(
			'id' => $id
		);
		$data['id'] =$id;
		$this->load->model("sbm");
		$data['datafilm'] = $this->sbm->get_flim_data($parameter);
		$data['data'] = $this->Rein->getupdate($parameter);
		
		$this->load->view("data/edit",$data);	
	}
	public function hapus($id){
		$this->load->model("Rein");
		$this->Rein->hapusdata($id);
		$this->session->set_flashdata("flashHapus","Hapus");	
		redirect('welcome/semuadata');
	}
//==========================================whatsapp=======================================
	public function appwa(){
		// $this->load->model("Rein");
		$data['user'] = $this->db->get_where('user',['name' => $this->session->userdata('name')])->row_array();
		$this->session->set_flashdata('welcome','<div class="alert" role="alert">
					  Selamat datang ' . $data["user"]["name"] . '
					</div>');
		$this->load->model("sbm");
		$parameter = array(
			'limit' => 10,
			'lolod' => 'desc'
		);
		$data['last_transaction'] = $this->sbm->get_sbm_data($parameter);
		$data['v'] = 0;
		
		$this->load->view("appwa/info",$data);	
	}
	//==========================================HOD=======================================
	public function hodinfo(){
		// $this->load->model("Rein");
		$data['user'] = $this->db->get_where('user',['name' => $this->session->userdata('name')])->row_array();
		$this->session->set_flashdata('welcome','<div class="alert" role="alert">
					  Selamat datang ' . $data["user"]["name"] . '
					</div>');
		$this->load->model("sbm");
		$parameter = array(
			'limit' => 10,
			'lolod' => 'desc'
		);
		$data['last_transaction'] = $this->sbm->get_sbm_data($parameter);
		$data['v'] = 0;
		
		$this->load->view("hod/input",$data);	
	}
	public function hodinput(){
		// $this->load->model("Rein");
		$data['user'] = $this->db->get_where('user',['name' => $this->session->userdata('name')])->row_array();
		$this->session->set_flashdata('welcome','<div class="alert" role="alert">
					  Selamat datang ' . $data["user"]["name"] . '
					</div>');
		$this->load->model("sbm");
		$parameter = array(
			'limit' => 10,
			'lolod' => 'desc'
		);
		$data['last_transaction'] = $this->sbm->get_sbm_data($parameter);
		$data['v'] = 0;
		
		$this->load->view("hod/input",$data);	
	}
	public function hodiedit(){
		// $this->load->model("Rein");
		$data['user'] = $this->db->get_where('user',['name' => $this->session->userdata('name')])->row_array();
		$this->session->set_flashdata('welcome','<div class="alert" role="alert">
					  Selamat datang ' . $data["user"]["name"] . '
					</div>');
		$this->load->model("sbm");
		$parameter = array(
			'limit' => 10,
			'lolod' => 'desc'
		);
		$data['last_transaction'] = $this->sbm->get_sbm_data($parameter);
		$data['v'] = 0;
		
		$this->load->view("hod/input",$data);	
	}
}
