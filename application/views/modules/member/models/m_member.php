<?php 

class M_checkout extends Model {

	function save($shipping){
        $this->db->insert('customer', $shipping);
    }
	
	function savetransaksi($transaksi){
        $this->db->insert('transaksi', $transaksi);
    }
	
	function savepenjualan($penjualan){
        $this->db->insert('penjualan', $penjualan);
    }
		
	function updatestok($data,$id){
        $this->db->where('id_stok',$id);
        $this->db->update('stok',$data);
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
