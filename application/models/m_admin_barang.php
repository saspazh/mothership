<?php
class M_admin_barang extends CI_Model{
    function  __construct() {
        parent::__construct();
    }

    function get_latest() {
		$this->db->select('*');
		$this->db->where('a.id_product = b.id_product');
		//$this->db->where('b.highlight',1);
		//$this->db->where('b.type','medium');
		$this->db->order_by('a.waktu','DESC');
        $query = $this->db->get('product a, barang b');
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
