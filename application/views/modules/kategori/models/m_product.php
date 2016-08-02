<?php
class M_product extends Model{
    function  __construct() {
        parent::Model();
    }

	
	function detail($id) {
			
		$str="SELECT a.id_barang, a.id_kategori, c.nama_kategori, b.id_poto, a.nama_barang, a.color, a.price, a.description, b.file_name, b.path, a.waktu
FROM barang a, poto b, kategori c
WHERE a.id_barang = b.id_barang
AND a.id_kategori = c.id_kategori
AND b.highlight =  '1'
AND a.id_barang =  '$id'";
		$query = $this->db->query($str);
//		return $query->result();
		return $query->row();
	}
	
    function get_latest() {
		
		$str="SELECT a.id_barang, a.id_kategori, c.nama_kategori, b.id_poto, a.nama_barang, a.color, a.price, a.description, b.file_name, b.path, a.waktu
FROM barang a, poto b, kategori c
WHERE a.id_barang = b.id_barang
AND a.id_kategori = c.id_kategori
AND b.highlight =  '1'
ORDER BY  `a`.`waktu` DESC ";
		$query = $this->db->query($str);
		return $query->result();
		
    }
	
	function best() {
		
		$str="SELECT a.id_barang, a.id_kategori, b.id_poto, a.nama_barang, a.color, a.price, a.description, b.file_name, b.path, a.waktu
FROM barang a, poto b
WHERE a.id_barang = b.id_barang
AND b.highlight =  '1'
ORDER BY  `a`.`waktu` DESC 
LIMIT 0 , 3 ";
		$query = $this->db->query($str);
		return $query->result();
		
    }
	
	
	
	function save($insert){
        $this->db->insert('informasi', $insert);
    }
	
	function delete($id){
        $this->db->where('id_informasi',$id);
        $this->db->delete('informasi');
    }
	


	function editsave($data,$id_informasi){
        $this->db->where('id_informasi',$id_informasi);
        $this->db->update('informasi',$data);
    }
	
	
	function count()
    {
        return $this->db->count_all_results('informasi');
    }
	
}
?>
