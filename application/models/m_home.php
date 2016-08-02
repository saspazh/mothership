<?php
class M_home extends CI_Model{
    function  __construct() {
        parent::__construct();
    }
	function save_email($insert){
        $this->db->insert('customer', $insert);
    }
	

    function get_highlight($a, $b) {	
		$this->db->select('a.id_product, a.url_suffix, a.id_kategori, c.nama_kategori, b.id_poto, a.nama_product, a.color, a.price, b.file_name, b.path');
		$this->db->where('a.id_product = b.id_product');
		$this->db->where('a.id_kategori = c.id_kategori');
		$this->db->where('a.highlight = 1');
		$this->db->where('b.highlight = 1');
		$this->db->where('a.display = 1');
		$this->db->where('b.type','medium');
        $query = $this->db->get('product a, poto b, kategori c', $b, $a);
		return $query->result();
    }
	
	function get_latest($a, $b) {
		$query=$this->db->query("SELECT a.id_product,a.url_suffix, a.id_kategori, c.nama_kategori, b.id_poto, a.nama_product, a.color, a.price, b.file_name, b.path, a.waktu
FROM product a, poto b, kategori c
WHERE a.id_product = b.id_product
AND a.id_kategori = c.id_kategori
AND b.highlight =  '1'
AND a.display =  '1'
AND b.type =  'medium'
ORDER BY  `a`.`waktu` DESC 
LIMIT $a , $b")->result();
		return $query;
	}

	function get_popular() {
		$query=$this->db->query("SELECT * FROM popular");
		return $query->result();
	}

	function get_slideshow($a, $b) {
		$query=$this->db->query("SELECT * FROM slideshow
		LIMIT $a , $b");
		return $query->result();
	}

	function get_popular_product($id_popular){

		$str="SELECT b.id_product,
b.url_suffix,
c.path,
c.file_name,
b.nama_product,
b.price,

a.id_popular,
a.id_popular_product, a.link,b.id_kategori,b.judul,b.slug,b.url_suffix,b.color,b.display,
SUBSTRING_INDEX(link,'product/detail/',-1) AS part0,
SUBSTRING_INDEX(SUBSTRING_INDEX(link,'product/detail/',-1),'/',1) AS part1 
FROM popular_product a , product b, poto c
WHERE b.id_product = SUBSTRING_INDEX(SUBSTRING_INDEX(link,'product/detail/',-1),'/',1)
AND b.id_product=c.id_product

AND c.highlight =  '1'
AND c.type =  'medium'

		AND a.id_popular=$id_popular";
		$query=$this->db->query($str);
		return $query->result();
	}
    
	function save($insert){
        $this->db->insert('informasi', $insert);
    }
	
	function delete($id){
        $this->db->where('id_informasi',$id);
        $this->db->delete('informasi');
    }
	
	function getdata($id){
        $this->db->select('*');
//		$this->db->where('a.id_user = b.id_siswa');
		$this->db->where('a.id_user = b.id_guru');
		$this->db->where('a.id_informasi', $id);
		
        $query = $this->db->get('informasi a, guru b');
		return $query->row();
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
