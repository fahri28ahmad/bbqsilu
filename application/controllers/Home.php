<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index(){
		$data['user'] = $this->db->get_where('user',['name' => $this->session->userdata('name')])->row_array();
		$this->load->model("sbm");
		$parameter = array(
			'limit' => 10,
			'lolod' => 'desc'
		);
		$data['last_transaction'] = $this->sbm->get_sbm_data($parameter);
		$data['v'] = 0;
		$data['datafilm'] = $this->sbm->get_film_data_lilit2();
		
		$this->load->view("dashboard",$data);
	}
	public function lndex(){
		$data['user'] = $this->db->get_where('user',['name' => $this->session->userdata('name')])->row_array();
		$this->load->model("sbm");
		$parameter = array(
			'limit' => 10,
			'lolod' => 'desc'
		);
		$data['last_transaction'] = $this->sbm->get_sbm_data($parameter);
		$data['v'] = 0;

		$this->load->view("dashboard2",$data);
	}
	public function properties(){
		$data['user'] = $this->db->get_where('user',['name' => $this->session->userdata('name')])->row_array();
		$this->load->model("sbm");
		$parameter = array(
			'limit' => 10,
			'lolod' => 'desc'
		);
		$data['last_transaction'] = $this->sbm->get_sbm_data($parameter);
		$data['v'] = 0;

		$this->load->view("tampilan/luar/properties-single",$data);
	}
	public function About(){
		$data['user'] = $this->db->get_where('user',['name' => $this->session->userdata('name')])->row_array();
		$this->load->model("sbm");
		$parameter = array(
			'limit' => 10,
			'lolod' => 'desc'
		);
		$data['last_transaction'] = $this->sbm->get_sbm_data($parameter);
		$data['v'] = 0;

		$this->load->view("tampilan/luar/about",$data);
	}
	public function Contact(){
		$data['user'] = $this->db->get_where('user',['name' => $this->session->userdata('name')])->row_array();
		$this->load->model("sbm");
		$parameter = array(
			'limit' => 10,
			'lolod' => 'desc'
		);
		$data['last_transaction'] = $this->sbm->get_sbm_data($parameter);
		$data['v'] = 0;

		$this->load->view("tampilan/luar/Contact",$data);
	}
	public function input(){
		$this->load->model("rein");
		$data = array();
		$data['nama'] = $this->input->post("nama");
		$data['sales'] = "web";
		$data['sumber'] = $this->input->post("film");
		$data['status'] = 0;
		$data['keterangan'] = "-";
		$data['tgl_a'] = date("d-m-Y");
		$data['notlp'] = $this->input->post("notlp");
		// $data['status'] = '1';
		
		$this->db->insert('alldata', $data);
		$id=$this->db->insert_id();
		$this->session->set_flashdata("flash","ditambahkan");
		echo json_encode("true");
		redirect('home/index');
	}
}