<?php
class M_admin_stok extends CI_Model{
    function  __construct() {
        parent::__construct();
    }

    function get_latest($where) {
		$str="SELECT c.id_kategori,g.nama_kategori, b.id_stok,`a`.`serial` as kode_barang, `c`.`nama_product`,c.hpp,c.price, `c`.`color`, `a`.`size`, `b`.`serial` as serialstok, d.investor_name,b.ket ,b.state,b.store_id,f.store_name
		FROM (`barang` a, `stok` b, `product` c, investor d, project e, store f,kategori g) 
		WHERE `a`.`id_barang` = b.id_barang 
		AND `a`.`id_product` = c.id_product
		AND `d`.`investor_id` = e.investor_id
		AND b.store_id = f.id
		AND c.id_kategori = g.id_kategori
		AND b.project_id = e.id ".$where;  
		$query = $this->db->query($str);
		return $query->result();

	}

	function getdata($id){
        $str="SELECT *
FROM product a, barang b, stok c, investor d, project e, store f,kategori g
WHERE a.id_product = b.id_product
AND b.id_barang = c.id_barang


AND g.id_kategori = a.id_kategori
AND d.investor_id = e.investor_id
AND c.store_id = f.id
AND c.project_id = e.id

AND c.id_stok = $id";
		$query = $this->db->query($str);
		return $query->result();
    }

//=============================================================================================================
    function get() { 
        $str="select a.id_investor, a.nama_investor, a.no_hp, sum(coalesce(b.amount,0)) as total_amount 
        from investor a 
        left join investor_amount b 
        on a.id_investor=b.investor_id 
        GROUP BY a.id_investor 
        ORDER BY `a`.`id_investor` DESC";  
		$query = $this->db->query($str);
		return $query->result();
    }

    function get_amount($id) { 
        $str="SELECT * FROM `investor_amount` 
WHERE investor_id = $id";  
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
        $this->db->insert('stok', $insert);
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
	
	function get_product($id){
        $this->db->select('*');
		$query = $this->db->get('product');
		return $query;
    }

    function get_investor($id){
        $this->db->select('*');
		$query = $this->db->get('investor a');
		return $query;
    }

    function get_assign($id){
        $this->db->select('*');
		$query = $this->db->get('customer a');
		return $query;
    }



	function editsave($data,$id){
        $this->db->where('id_investor',$id);
        $this->db->update('investor',$data);
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
