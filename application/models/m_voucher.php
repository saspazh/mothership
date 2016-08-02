<?php 

class M_voucher extends CI_Model {

	function cek_voucher_mass($voucher,$trx,$datetime){
	$str="SELECT * FROM `voucher_mass` 
WHERE kode_event='$voucher' 
AND $trx BETWEEN min_trx AND max_trx 
AND '$datetime' BETWEEN date_start AND date_end";
		$query = $this->db->query($str);
		return $query;
    }

    function cek_voucher($voucher,$trx,$datetime){
	$str="SELECT * FROM `voucher` 
WHERE kode_voucher='$voucher' 
AND $trx BETWEEN minimal_transaksi AND maximal_transaksi 
AND '$datetime' BETWEEN tanggal_mulai AND tanggal_berakhir
AND status='available'";
		$query = $this->db->query($str);
		return $query;
    }

	function getvoucher($username){
	$str="SELECT b.id_voucher, b.kode_voucher, b.harga, b.tanggal_mulai, b.tanggal_berakhir, b.minimal_transaksi, b.maximal_transaksi, b.status
FROM customer a, voucher b
WHERE a.id_customer = b.id_customer
AND a.username = '$username'";
		$query = $this->db->query($str);
		return $query->result();
    }
	
	function savetransaksi($transaksi){
        $this->db->insert('transaksi', $transaksi);
    }
	
	function savepenjualan($penjualan){
        $this->db->insert('penjualan', $penjualan);
    }
		
	function updatevoucher($data,$id){
        $this->db->where('kode_voucher',$id);
        $this->db->update('voucher',$data);
    }

    function create($kode_voucher,$status,$created_at,$kode_event){
    	$data ="INSERT INTO voucher(kode_event,kode_voucher, tanggal_mulai, tanggal_berakhir,harga,persen,minimal_transaksi,maximal_transaksi,status,created_at) 
		SELECT kode_event,'$kode_voucher',date_start,date_end,amount,percent,min_trx,max_trx,'$status','$created_at' 
		FROM voucher_mass 
		WHERE kode_event ='$kode_event'";
    	$query = $this->db->query($data);
	}

	function get_singel_voucher($kode_voucher){
		$str="SELECT * FROM voucher WHERE kode_voucher= '$kode_voucher'";
		$query = $this->db->query($str);
		return $query->row();
	}

	
	function getdata($id){

$str="SELECT *
FROM customer a, transaksi b
WHERE a.id_customer = b.id_customer
AND b.no_order = '$id'";
		$query = $this->db->query($str);
		return $query->row();
    }
	
	

}
