<?php
class M_product extends Model{
    function  __construct() {
        parent::Model();
    }

	
	function size($id) {
			
		$str="SELECT * FROM  `barang` WHERE id_product = '$id'";
		$query = $this->db->query($str);
//		return $query->result();
		return $query->result();
	} 
	
	function detail($id) {
			
		$str="SELECT a.id_product, a.id_kategori, c.nama_kategori, b.id_poto, a.nama_product, a.color, a.price, a.description, a.tag, b.file_name, b.path, a.waktu
FROM product a, poto b, kategori c
WHERE a.id_product = b.id_product
AND a.id_kategori = c.id_kategori
AND b.highlight =  '1'
AND a.id_product =  '$id'";
		$query = $this->db->query($str);
//		return $query->result();
		return $query->row();
	} 
	
	function get_search($search) {
		
		$str="SELECT a.id_product, a.id_kategori, c.nama_kategori, b.id_poto, a.nama_product, a.slug, a.color, a.price, a.description, a.tag, b.file_name, b.path, a.waktu
FROM product a, poto b, kategori c
WHERE a.id_product = b.id_product
AND a.id_kategori = c.id_kategori
AND b.type =  'medium'
AND a.display =  '1'

AND a.nama_product like '%$search%'


ORDER BY  `a`.`waktu` DESC ";
		$query = $this->db->query($str);
		return $query->result();
		
    }

    function get_latest() {
		
		$str="SELECT a.id_product, a.id_kategori, c.nama_kategori, b.id_poto, a.nama_product, a.slug, a.color, a.price, a.description, a.tag, b.file_name, b.path, a.waktu
FROM product a, poto b, kategori c
WHERE a.id_product = b.id_product
AND a.id_kategori = c.id_kategori
AND b.type =  'medium'
AND a.display =  '1'
ORDER BY  `a`.`waktu` DESC ";
		$query = $this->db->query($str);
		return $query->result();
		
    }
	
	function kategori_product($id) {
		
		$str="SELECT a.id_product, a.id_kategori, c.nama_kategori, b.id_poto, a.nama_product, a.slug, a.color, a.price, a.description, a.tag, b.file_name, b.path, a.waktu
FROM product a, poto b, kategori c
WHERE a.id_product = b.id_product
AND a.id_kategori = c.id_kategori
AND b.type =  'medium'
AND a.display =  '1'
AND a.id_kategori = '$id'
ORDER BY  `a`.`waktu` DESC ";
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