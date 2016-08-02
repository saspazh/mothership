<?php
class M_admin_stok extends Model{
    function  __construct() {
        parent::Model();
    }


    function get_all() {
		$str="SELECT b.id_stok,`a`.`serial`, `c`.`nama_product`, `c`.`color`, `a`.`size`, `b`.`serial` 
		FROM (`barang` a, `stok` b, `product` c)
		".$where." 
		ORDER BY `b`.`id_stok` 
		DESC LIMIT 0,25";
		$query = $this->db->query($str);
		return $query->result();
    }

	function get_stok() {
		$this->db->select('a.serial as serial, c.nama_product, c.color, a.size, b.serial as serialstok');
		$this->db->where('a.id_barang = b.id_barang');
		$this->db->where('a.id_product = c.id_product');
		//$this->db->order_by('a.waktu','DESC');
        $query = $this->db->get('barang a, stok b, product c');
		return $query->result();
    }

    function get_latest() {
		$this->db->select('*');
		$this->db->where('a.id_product = b.id_product');
		$this->db->where('a.id_product = c.id_product');
		$this->db->where('b.type','medium');
		$this->db->order_by('a.waktu','DESC');
        $query = $this->db->get('product a, poto b, barang c');
		return $query->result();
    }
	
	function detail($id) {
		$this->db->select('*');
		$this->db->where('a.id_barang = b.id_barang');
		$this->db->where('a.id_barang',$id);
		$this->db->order_by('b.tanggal','DESC');
        $query = $this->db->get('barang a, stok b');
		return $query->result();
    }
	
	function savepoto($poto){
        $this->db->insert('poto', $poto);
    }
	
	function save($insert){
        $this->db->insert('stok', $insert);
    }
	
	function save_terjual($insert){
        $this->db->insert('penjualan', $insert);
    }
	
	function delete($id){
        $this->db->where('id_stok',$id);
        $this->db->delete('stok');
    }
	
	function getdata($id){
        $str="SELECT *
FROM product a, barang b, stok c
WHERE a.id_product = b.id_product
AND b.id_barang = c.id_barang
AND c.id_stok = $id";
		$query = $this->db->query($str);
		return $query->row();
    }


	function editsave($data,$id){
        $this->db->where('id_stok',$id);
        $this->db->update('stok',$data);
    }
	
	
	function count()
    {
        return $this->db->count_all_results('informasi');
    }
	
}
?>
