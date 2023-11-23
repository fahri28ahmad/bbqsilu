<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
  
class Sbm extends CI_Model{
    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function get_film_data_lilit2() {
         $this->db->from("db_film");
        $query = $this->db->query('SELECT * FROM db_film AS f ORDER BY f.id_film DESC LIMIT 2;');
        // $query = $this->db->get();
        return $query->result();
    }
    public function get_jumlah_nonton(){
        $this->db->from("db_film");
        $query = $this->db->query('SELECT a.sumber, SUM(a.pax) AS jumlah, b.* FROM alldata AS a JOIN db_film AS b ON a.sumber = b.id_film GROUP BY b.nama_f;');
        // $query = $this->db->get();
        return $query->result();
    }
    public function get_flim_data(){
        $this->db->from("db_film");
        $query = $this->db->query('SELECT * FROM db_film');
        // $query = $this->db->get();
        return $query->result();
    }
    public function get_sbm_data($data){
        $this->db->from("alldata");
        $this->db->from("db_film");
        $query = $this->db->query('SELECT * FROM alldata INNER JOIN db_film ON alldata.sumber = db_film.id_film');
        // $query = $this->db->get();
        return $query->result();
    }
    public function jumlah_sales($data){
        $this->db->from("alldata");
        $query = $this->db->query('SELECT sales, COUNT(sales) AS jumlah FROM alldata GROUP BY sales');
        // SELECT sales, COUNT(sales) AS jumlah FROM alldata GROUP BY sales;
        return $query->result();
    }
    public function jumlah_member($data){
        $this->db->from("alldata");
        $query = $this->db->query('SELECT nama, notlp, COUNT(notlp) AS jumlah FROM alldata GROUP BY notlp');
        // SELECT sales, COUNT(sales) AS jumlah FROM alldata GROUP BY sales;
        return $query->result();
    }
    public function jumlah_rank($data){
        $this->db->from("alldata");
        $query = $this->db->query('SELECT rank, COUNT(rank) AS jumlah FROM alldata GROUP BY rank');
        // SELECT sales, COUNT(sales) AS jumlah FROM alldata GROUP BY sales;
        return $query->result();
    }
    public function jumlah_sumber($data){
        $this->db->from("alldata");
        $query = $this->db->query('SELECT alldata.sumber, COUNT(alldata.sumber) AS jumlah, icon.icon FROM alldata INNER JOIN icon ON alldata.sumber=icon.sumber GROUP BY alldata.sumber;');
        // SELECT sales, COUNT(sales) AS jumlah FROM alldata GROUP BY sales;
        return $query->result();
    }
    public function get_user_data($data){
        $this->db->from("user");
        $query = $this->db->get();
        return $query->result();
    }
    public function getupdate($id){
        // $this->db->from("sbmdata");
        $query = $this->db->select('*')->from('user')->where('id',$id['id'])->get();
        return $query->result();
    }
    public function updateRein($data){
        $this->db->where("id",$data['id']);
        $this->db->update("user",$data);
    }
    public function get_penjualan($data){
        $this->db->from("db_penjualan");
        $query = $this->db->get();
        return $query->result();
    }
    public function getupdatepenjualan($id){
        // $this->db->from("sbmdata");
        $query = $this->db->select('*')->from('db_penjualan')->where('id',$id['id'])->get();
        return $query->result();
    }
    public function get_pemasukanuang($id){
        // $this->db->from("sbmdata");
        $query = $this->db->select('*')->from('db_keuangan')->where('transaksi','pemasukan')->get();
        return $query->result();
    }
    public function get_keluaruang($id){
        // $this->db->from("sbmdata");
        $query = $this->db->select('*')->from('db_keuangan')->where('transaksi','pengeluaran')->get();
        return $query->result();
    }
     public function getupdateuang($id){
        // $this->db->from("sbmdata");
        $query = $this->db->select('*')->from('db_keuangan')->where('id',$id['id'])->get();
        return $query->result();
    }
    public function get_uang($data){
        $this->db->select("*");
        $this->db->from("db_keuangan r");
        if(isset($data['id'])){
            $this->db->where("r.id",$data['id']);
        }
        if(isset($data['tanggal'])){
            $this->db->where("DATE(tanggal)",$data['tanggal']);
        }
        if(isset($data['bulan'])){
            $this->db->where("MONTH(tanggal)",$data['bulan']);
        }
        if(isset($data['tahun'])){
            $this->db->where("YEAR(tanggal)",$data['tahun']);
        }
        if(isset($data['hari'])){
            $this->db->where("DAYOFWEEK(tanggal)",$data['hari']);
        }
        if(isset($data['tanggal_awal'])){
            $this->db->where("tanggal >=",$data['tanggal_awal']);
        }
        if(isset($data['tanggal_akhir'])){
            $this->db->where("tanggal <=",$data['tanggal_akhir']);
        }
        if(isset($data['keterangan'])){
            $this->db->like("keterangan",$data['keterangan']);
        }
        if(isset($data['db_keuangan'])){
            $this->db->where("db_keuangan",$data['db_keuangan']);
        }
        if(isset($data['limit'])){
            $this->db->limit($data['limit']);
        }
        if(isset($data['lolod'])){
            $this->db->order_by("tanggal",$data['lolod']);
        }else{
            $this->db->order_by("tanggal","ASC");
        }
        $query = $this->db->get();
        return $query->result();
    }
}
