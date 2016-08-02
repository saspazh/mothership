<?php 

class M_poin extends Model {

	//fungsi untuk menambahkan poin user berdasarkan aksi
	function auto_add($k, $t){
		$str="SELECT * FROM `kode_poin` 
		WHERE kode='$kode' 
		AND '$tanggal' BETWEEN date(start_date) 
		AND date(end_date)
		AND status = 'available'";
		$query = $this->db->query($str);
		return $query;
    }

	function auto_addd() {

		$daftar_poin = $this->db->query("select * from daftar_poin where action = '$action'");
		$poin = $daftar_poin->last_row()->poin;

        $arrayName = array(
        	'id_customer' => $id_customer,
        	'poin' => $poin,
        	'tanggal' => date('Y-m-d H:i:s'),
        	'keterangan'=> $action 
        );

        $this->db->insert('poin', $arrayName);
    }

	function getpoin($username){
$str="SELECT b.id_poin, a.id_customer, b.poin, b.tanggal, b.keterangan, b.status
FROM customer a, poin b
WHERE a.id_customer = b.id_customer
AND a.username = '$username'";
		$query = $this->db->query($str);
		return $query->result();
    }

	function get_kodepoin($kode, $tanggal){
		$str="SELECT * FROM `kode_poin` 
		WHERE kode='$kode' 
		AND '$tanggal' BETWEEN date(start_date) 
		AND date(end_date)
		AND status = 'available'";
		$query = $this->db->query($str);
		return $query;
    }
	
	function tambahpoin($data){
        $this->db->insert('poin', $data);
    }
	
	function savepenjualan($penjualan){
        $this->db->insert('penjualan', $penjualan);
    }
		
	function updatekodepoin($id,$data){
        $this->db->where('id',$id);
        $this->db->update('kode_poin',$data);
    }
	
	function getdata($id){

$str="SELECT *
FROM customer a, transaksi b
WHERE a.id_customer = b.id_customer
AND b.no_order = '$id'";
		$query = $this->db->query($str);
		return $query->row();
    }
	
	function get_bio($username){

$str="SELECT *
FROM customer a
WHERE a.username= '$username'";
		$query = $this->db->query($str);
		return $query->row();
    }
}
