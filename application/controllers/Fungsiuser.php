<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fungsiuser extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if (!$this->session->userdata('name')) {
			redirect('auth');
		}
	}
	public function insert(){
		$this->load->model("rein");
		$data = array();
		$data['tgl_in'] = $this->input->post("tanggal");
		$data['nama_j'] = $this->input->post("namaj");
		$data['buyer'] = $this->input->post("buyer");
		$data['cob'] = $this->input->post("cob");
		$data['nama_t'] = $this->input->post("namat");
		$data['barge_t'] = $this->input->post("barget");
		$data['total_m'] = $this->input->post("totalm");
		$data['tujuan'] = $this->input->post("tujuan");
		
		$this->db->insert('sbmdata', $data);
		$id=$this->db->insert_id();
		
		$this->session->set_flashdata("flash","ditambahkan");
		echo json_encode("true");
		redirect('welcome/pemasukan');
	}
	public function ubah($id){
		$data['user'] = $this->db->get_where('user',['name' => $this->session->userdata('name')])->row_array();
		$this->load->model("Sbm");
		$parameter = array(
			'id' => $id
		);
		$data['id'] =$id;
		$data['data'] = $this->Sbm->getupdate($parameter);
		$this->load->view("user/edituser",$data);	

	}
	public function ubahfoto($id){
		$data['user'] = $this->db->get_where('user',['name' => $this->session->userdata('name')])->row_array();
		$this->load->model("Sbm");
		$parameter = array(
			'id' => $id
		);
		$data['id'] =$id;
		$data['data'] = $this->Sbm->getupdate($parameter);
		$this->load->view("user/edituser",$data);	

	}
	public function update($id){
		$this->load->model("Sbm");
		$data = array();
		// $config['upload_path']          = './foto/';
	 //    $config['allowed_types']        = 'gif|jpg|png';
	 //    $config['max_size']             = 10000;
	 //    $config['max_width']            = 10024;
	 //    $config['max_height']           = 10000;

	 //    $this->load->library('upload', $config);

		//     if (!$this->upload->do_upload('userfile'))
		//     {
		//             echo "gagal memasukan foto";
		//             $this->upload->display_errors();
		//     }
		//     else
		//     {
					// $data['gambar'] = $gambar['file_name'];
					// $this->Sbm->updateRein($data);
					$data['id'] = $id;
					$data['name'] = $this->input->post("nama");
					$data['email'] = $this->input->post("email");
					$data['role_id'] = $this->input->post("role_id");
					$data['is_active'] = $this->input->post("is_active");
					$data['akses'] = $this->input->post("akses");
					$this->Sbm->updateRein($data);
					$this->session->set_flashdata("flashupdate","Di update");
					echo json_encode("true");
					redirect('welcome/userrole');
			// }
	}
	// public function uploadfoto($id){
	// $img_uji = $this->input->post('nameimg'); // 

	// 	if ($img_uji == NULL) {
	// 		$file_gambar = realpath($_FILES["image"]["tmp_name"]);
	// 	} else {
	// 		$file_gambar = realpath('upload/' . $img_uji);
	// 	}

	// 	// $file_gambar = realpath($_FILES["image"]["tmp_name"]);
	// 	$this->resize_img($file_gambar);

	// 	$im = imagecreatefromjpeg($file_gambar);

	// 	list($width, $height) = getimagesize($file_gambar); // mengambil ukuran lebar dan tinggi

	// 	$mtx = array(); //ingin buat matrix array

	// 	//? ambil hasil klasifikasi (kategori), kalo hasilnya array, ubah ke string dulu.
	// 	//? kalo tidak, langsung tampilkan
	// 	$kelas = ($classy["kelas"]);
	// 	if(!is_array($kelas)){
	// 		$kelas = $kelas;
	// 	} else {
	// 		$kelas = implode($kelas);
	// 	}

	// 	//? kalo tidak, langsung tampilkan
	// 	$level = ($classy["level"]);
	// 	if(!is_array($level)){
	// 		$level = $level;
	// 	} else {
	// 		$level = implode($level);
	// 	}

	// 	//? bungkus data array kedalam json, supaya bisa ditampilkan.(json: format data yang digunakan untuk pertukaran dan penyimpanan data)
	// 	echo json_encode(array(
	// 		"status" => $kelas,
	// 		"level" => $level,
	// 		"foto" => $file_gambar,
	// 	));

	// 	$this->db->update('cm_hasil_uji', array(
	// 		'kategori' => $kelas,
	// 		'level' => $level,
	// 		'gambar' => $img_uji,
	// 	));
	// }
	
	public function hapus($id){
		$this->load->model("Rein");
		$this->Rein->hapusdatauser($id);
		$this->session->set_flashdata("flashHapus","Hapus");	
		redirect('welcome/userrole');
	}

}
