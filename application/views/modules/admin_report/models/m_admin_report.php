<?php
class M_admin_report extends Model{
    function  __construct() {
        parent::Model();
    }

    function get_stok() {
		$this->db->select('a.id_product, a.id_kategori, a.nama_product, a.color,a.hpp, a.price, b.serial, b.size,c.tanggal, c.status');
		$this->db->where('a.id_product = b.id_product');
		$this->db->where('b.id_barang = c.id_barang');
		$this->db->order_by('a.waktu DESC');
		$query = $this->db->get('product a, barang b, stok c');
		return $query->result();
    }
	
	function get_penjualan() {
		$this->db->select('a.id_product, a.id_kategori, a.nama_product, a.color,a.hpp, a.price, b.serial, b.size,c.tanggal, c.status, d.margin, d.tanggal, d.price, d.status');
		$this->db->where('a.id_product = b.id_product');
		$this->db->where('b.id_barang = c.id_barang');
		$this->db->where('c.id_stok = d.id_stok');
		$this->db->where('d.id_transaksi = e.id_transaksi');
		$this->db->where('e.id_customer = f.id_customer');
		$this->db->order_by('d.tanggal DESC');
		$query = $this->db->get('product a, barang b, stok c, penjualan d, transaksi e, customer f');
		return $query->result();
    }
	
	function savepoto($poto){
        $this->db->insert('poto', $poto);
    }
	
	function save($insert){
        $this->db->insert('barang', $insert);
    }
	
	function delete($id){
        $this->db->where('id_barang',$id);
        $this->db->delete('barang');
    }
	
	function delete_poto($id){
        $this->db->where('id_barang',$id);
        $this->db->delete('poto');
    }
	
	function getpoto($id){
        $str="SELECT a.file_name, a.path
FROM poto a 
WHERE a.id_barang =  '$id'";
		$query = $this->db->query($str);
		return $query->result();
    }
	
	function getdata($id){
        $this->db->select('*');
		$this->db->where('a.id_barang = b.id_barang');
		$this->db->where('b.highlight',1);
		$this->db->order_by('a.waktu','DESC');
		$this->db->where('a.id_barang', $id);
		
        $query = $this->db->get('barang a, poto b');
		return $query->row();
    }


	function editsave($data,$id){
        $this->db->where('id_barang',$id);
        $this->db->update('barang',$data);
    }
	
	function detail($id) {
			
		$str="SELECT a.id_barang, a.id_kategori, c.nama_kategori, b.id_poto, a.nama_barang, a.color, a.price, a.description, a.tag, b.file_name, b.path, a.waktu
FROM barang a, poto b, kategori c
WHERE a.id_barang = b.id_barang
AND a.id_kategori = c.id_kategori
AND b.highlight =  '1'
AND a.id_barang =  '$id'";
		$query = $this->db->query($str);
//		return $query->result();
		return $query->row();
	}
	
	function count()
    {
        return $this->db->count_all_results('informasi');
    }
	
}
?>
