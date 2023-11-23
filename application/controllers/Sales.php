<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sales extends CI_Controller {
	public function index(){
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
}