<?php
class M_admin_poin extends Model{
    function  __construct() {
        parent::Model();
    }

    function get_latest() { 
        $str="SELECT a.id_customer, a.username, sum(poin) as jumlah_poin 
		FROM customer a, poin b 
		WHERE a.id_customer = b.id_customer
		GROUP BY a.username 
		ORDER BY username 
		DESC"; 
		$query = $this->db->query($str);
		return $query->result();
    }
	
	function get_poin($username) { 
        $str="SELECT b.id_poin, a.id_customer, a.username, b.poin, b.keterangan, b.tanggal, b.created_by
		FROM customer a, poin b 
		WHERE a.id_customer = b.id_customer
		AND a.username = '$username'
		ORDER BY tanggal 
		DESC"; 
		$query = $this->db->query($str);
		return $query->result();
    }
	
	function save($insert){
        $this->db->insert('poin', $insert);
    }
	
	function delete($id){
        $this->db->where('id_poin',$id);
        $this->db->delete('poin');
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
