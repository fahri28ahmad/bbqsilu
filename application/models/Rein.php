<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
  
class Rein extends CI_Model{
    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function getTipeKet(){
        $this->db->from("tipe_ket");
        $query = $this->db->get();
        return $query->result();
    }
    public function getupdate($id){
        $query =$this->db->select('t1.*, t2.*');
        $query =$this->db->from('alldata as t1');
        $query =$this->db->join('db_film as t2', 't1.sumber = t2.id_film', 'left');
        $query =$this->db->where('t1.id', $id['id']);
        $query =$this->db->get();
        // $this->db->from("sbmdata");
        // $query = $this->db->select('*')->from('alldata')->where('id',$id['id'])->get();
        // $query = $this->db->select('*')->from('alldata')->join('db_film','alldata.sumber = db_film.id_film')->where('alldata.id',$id['id'])->get();

        // $query = $this->db->query('SELECT * FROM alldata INNER JOIN db_film ON alldata.sumber = db_film.id_film WHERE alldata.id = '$id'');
        return $query->result();
    }
    public function getupdatejety($id){
        // $this->db->from("sbmdata");
        $query = $this->db->select('*')->from('jeti')->where('id',$id['id'])->get();
        return $query->result();
    }

    public function insertRein($data){
        $this->db->insert("rein",$data);
    }
    // public function updateRein($data){
    //     $this->db->update("rein",$data);
    // }
    public function updateRein($data){
        $this->db->where("id",$data['id']);
        $this->db->update("alldata",$data);
    }
    public function updatepenjualan($data){
        $this->db->where("id",$data['id']);
        $this->db->update("db_penjualan",$data);
    }
    public function updateuang($data){
        $this->db->where("id",$data['id']);
        $this->db->update("db_keuangan",$data);
    }
    public function hapusdata($id){
        $this->db->where("id",$id);
        $this->db->delete("alldata");
    }
    public function hapuspenjualan($id){
        $this->db->where("id",$id);
        $this->db->delete("db_penjualan");
    }
    public function hapusuang($id){
        $this->db->where("id",$id);
        $this->db->delete("db_keuangan");
    }
    public function hapusdatauser($id){
        $this->db->where("id",$id);
        $this->db->delete("user");
    }
    // public function information($id) {
    // $q = $this->db->select('*')->from('tableName')->where('id',$id)->get();
    // return $q->result();
    // }
    public function get_cari($data){
        $this->db->select("*");
        $this->db->from("sbmdata");
        if(isset($data['id'])){
            $this->db->where("id",$data['id']);
        }
        if(isset($data['tanggal'])){
            $this->db->where("DATE(tgl_in)",$data['tanggal']);
        }
        if(isset($data['bulan'])){
            $this->db->where("MONTH(tgl_in)",$data['bulan']);
        }
        if(isset($data['tahun'])){
            $this->db->where("YEAR(tgl_in)",$data['tahun']);
        }
        if(isset($data['hari'])){
            $this->db->where("DAYOFWEEK(tgl_in)",$data['hari']);
        }
        if(isset($data['tanggal_awal'])){
            $this->db->where("tgl_in >=",$data['tanggal_awal']);
        }
        if(isset($data['tanggal_akhir'])){
            $this->db->where("tgl_in <=",$data['tanggal_akhir']);
        }
        if(isset($data['keterangan'])){
            $this->db->like("nama_j",$data['keterangan']);
        }
        if(isset($data['rein'])){
            $this->db->where("rein",$data['rein']);
        }
        if(isset($data['limit'])){
            $this->db->limit($data['limit']);
        }
        if(isset($data['lolod'])){
            $this->db->order_by("tgl_in",$data['lolod']);
        }else{
            $this->db->order_by("tgl_in","ASC");
        }
        $query = $this->db->get();
        return $query->result();
    }
    public function insert_user($data){
        $this->db->insert("rein",$data);
    }
    // public function get_uang($data){
    //     $this->db->from("db_keuangan");
    //     $query = $this->db->get();
    //     return $query->result();
    // }
    // public function get_uang($data){
    //     $this->db->select("*");
    //     $this->db->from("db_keuangan r");
    //     if(isset($data['id'])){
    //         $this->db->where("r.id",$data['id']);
    //     }
    //     if(isset($data['tanggal'])){
    //         $this->db->where("DATE(tanggal)",$data['tanggal']);
    //     }
    //     if(isset($data['bulan'])){
    //         $this->db->where("MONTH(tanggal)",$data['bulan']);
    //     }
    //     if(isset($data['tahun'])){
    //         $this->db->where("YEAR(tanggal)",$data['tahun']);
    //     }
    //     if(isset($data['hari'])){
    //         $this->db->where("DAYOFWEEK(tanggal)",$data['hari']);
    //     }
    //     if(isset($data['tanggal_awal'])){
    //         $this->db->where("tanggal >=",$data['tanggal_awal']);
    //     }
    //     if(isset($data['tanggal_akhir'])){
    //         $this->db->where("tanggal <=",$data['tanggal_akhir']);
    //     }
    //     if(isset($data['keterangan'])){
    //         $this->db->like("keterangan",$data['keterangan']);
    //     }
    //     if(isset($data['rein'])){
    //         $this->db->where("rein",$data['rein']);
    //     }
    //     $this->db->join("tipe_ket t","t.id = r.tipe_ket");
    //     if(isset($data['limit'])){
    //         $this->db->limit($data['limit']);
    //     }
    //     if(isset($data['lolod'])){
    //         $this->db->order_by("tanggal",$data['lolod']);
    //     }else{
    //         $this->db->order_by("tanggal","ASC");
    //     }
    //     $query = $this->db->get();
    //     return $query->result();
    // }
}
