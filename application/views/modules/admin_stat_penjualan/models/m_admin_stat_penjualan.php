<?php
class M_admin_stat_penjualan extends Model{
    function  __construct() {
        parent::Model();
    }

    function get_latest() {
        $str="SELECT b.id_product, b.nama_product, a.nama_kategori, COUNT(if(d.id_stok is not null, d.id_stok, NULL)) jumlah, 

COUNT(IF(d.status =0,id_stok,null)) as terjual,COUNT(if(d.status =1,id_stok,null)) AS ready

from kategori a
 join product b on a.id_kategori = b.id_kategori
 join barang c on b.id_product = c.id_product
 left join stok d on c.id_barang = d.id_barang 
GROUP BY b.id_product";
		$query = $this->db->query($str);
		return $query->result();
    }
    /*
		SELECT b.id_product, b.nama_product, a.nama_kategori, 
        COUNT(if(d.id_stok is not null, d.id_stok, NULL)) as jumlah, 
        COUNT(IF(d.status =0,id_stok,null)) AS terjual,
        COUNT(if(d.status =1,id_stok,null)) AS ready,
        from kategori a 
        join product b on a.id_kategori = b.id_kategori 
        join barang c on b.id_product = c.id_product 
        left join stok d on c.id_barang = d.id_barang 
        GROUP BY b.id_product
    */
	
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
