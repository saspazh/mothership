<?php 

class M_checkout extends Model {

	function save($shipping){
        $this->db->insert('customer', $shipping);
    }
	
	function editsave($data,$username){
        $this->db->where('username',$username);
        $this->db->update('customer',$data);
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
	
    function getlogin($username){

$str="SELECT *
FROM customer a
WHERE username = '$username'";
		$query = $this->db->query($str);
		return $query->row();
    }

	function getdata($id,$token){
		if($token == NULL){

			$str="SELECT * FROM transaksi WHERE no_order = '$id'";
		
		}else{

			$str="SELECT * FROM transaksi WHERE no_order = '$id' AND token = '$token'";
		}

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

    function get_data_order($segment_waktu){
    	 

		$str="SELECT no_order, SUBSTRING( no_order, 7, 4 ) AS no_urutorder 
		FROM  `transaksi`
		WHERE no_order like '$segment_waktu%' 
		ORDER BY  `transaksi`.`id_transaksi` DESC limit 0,1";
		$query = $this->db->query($str);
		return $query;
    }

    function get_data_stok($id_product,$qty,$size){
			$stok = $this->db->query("SELECT id_stok 
			FROM stok a, barang b, product c
			WHERE a.id_barang = b.id_barang
			AND b.id_product = c.id_product
			AND c.id_product = '$id_product'
			AND b.size = '$size'
			LIMIT 0,$qty");

			return $stok->result();
    }

    function get_data_trx($no_order,$id_customer,$token){

    	if($id_customer != NULL){

		$ttt = $this->db->query("SELECT id_transaksi
FROM  transaksi 
WHERE id_customer = '$id_customer'
AND no_order = '$no_order'
");
		}elseif($token != NULL){

		$ttt = $this->db->query("SELECT id_transaksi
FROM  transaksi 
WHERE token = '$token'
AND no_order = '$no_order'
");

		}else{
			$ttt = FALSE;
		}

		return $ttt;
    }
}
