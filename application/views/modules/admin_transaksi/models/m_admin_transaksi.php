<?php
class M_admin_transaksi extends Model{
    function  __construct() {
        parent::Model();
    }

    function get_latest() {
		$str ="SELECT a.id_transaksi, a.no_order, SUM(d.price) as total, a.nama_customer, a.propinsi, a.kota, a.email, a.tgl_order, a.konfirmasi,a.paid,a.konfirmasi_penerimaan_barang,a.id_voucher
		FROM transaksi a, stok b, barang c, product d 
		WHERE a.no_order = b.no_order 
		AND b.id_barang = c.id_barang 
		AND c.id_product = d.id_product 
		GROUP BY a.id_transaksi 
		ORDER BY `a`.`tgl_order` 
		DESC LIMIT 0,25";
		$query = $this->db->query($str);
		return $query->result();
    }

    function get_transaksi($id){
        $this->db->select('*');
		$this->db->where('a.id_transaksi', $id);
        $query = $this->db->get('transaksi a');
		return $query->row();
    }

	
	function detail($id) {
		$str ="SELECT a.id_transaksi, c.id_barang, d.nama_product, e.file_name, e.path, c.serial, d.color, c.size, d.price
FROM
`transaksi` a, `stok` b,  `barang` c, product d,  `poto` e

WHERE  `a`.`no_order` = b.no_order
AND  `b`.`id_barang` = c.id_barang
AND  `c`.`id_product` = d.id_product
AND  `d`.`id_product` = e.id_product
AND e.type =  'small'
AND  `a`.`id_transaksi` = '$id'";
		$query = $this->db->query($str);
		return $query->result();
    }
	
	function get_barang_order($id) {
		$str ="SELECT DISTINCT a.id_barang, a.nama_barang, a.color
FROM barang a, stok b, penjualan c, transaksi d
WHERE a.id_barang = b.id_barang
AND b.id_stok = c.id_stok
AND c.id_transaksi = d.id_transaksi
AND d.id_transaksi =  '$id'";
		$query = $this->db->query($str);
		return $query->result();
    }
	
	function get_barang() {
		$this->db->select('*');
		$this->db->where('a.id_barang = b.id_barang');
		$this->db->where('a.id_typesize = c.id_typesize');
		$this->db->where('b.type','medium');
		$this->db->order_by('a.waktu','DESC');
        $query = $this->db->get('barang a, poto b, typesize c');
		return $query->result();
    }

    function get_order($type) {
		
		$this->db->select('*');
		$this->db->where('a.id_customer = b.id_customer');
//		$this->db->where('type', $type);
        $query = $this->db->get('transaksi a,customer b');
		return $query->result();
    }
	
	
	
	
	/*==================guest===================*/
	
	function get_guest() {
		
		$this->db->select('*');
//		$this->db->where('a.id_user = b.id_siswa');
		$this->db->where('status = 1');
        $query = $this->db->get('customer');
		return $query->result();

    }
	
	function save($insert){
        $this->db->insert('transaksi', $insert);
    }
	
	function save_penjualan($insert){
        $this->db->insert('penjualan', $insert);
    }
	
	function delete($id){
        $this->db->where('id_transaksi',$id);
        $this->db->delete('transaksi');
    }
	
	function getdata($id){
        $this->db->select('*');
//		$this->db->where('a.id_user = b.id_siswa');
//		$this->db->where('a.id_user = b.id_guru');
		$this->db->where('a.id_customer', $id);
		
        $query = $this->db->get('customer a');
		return $query->row();
    }
	
	


	function editsave($data,$id){
        $this->db->where('id_customer',$id);
        $this->db->update('customer',$data);
    }
	
	
	function count()
    {
        return $this->db->count_all_results('informasi');
    }
	
}
?>
