<?php
class M_admin_project extends CI_Model{
    function  __construct() {
        parent::__construct();
    }

    function get_latest() { 
        $str="SELECT b.id, b.project_name,a.investor_id,a.investor_name, sum(coalesce(c.amount,0)) as total_amount 
        FROM project b 
        left join project_details c ON b.id = c.project_id 
        INNER JOIN investor a ON a.investor_id = b.investor_id 
        GROUP BY b.id 
        ORDER BY `a`.`investor_name` ASC";  
		$query = $this->db->query($str);
		return $query->result();
    }

    function get_projectdetail($id) { 
        $str="SELECT * FROM `project_details` 
WHERE project_id = $id";  
		$query = $this->db->query($str);
		return $query->result();
    }

    function editsave($data,$id){
        $this->db->where('project_id',$id);
        $this->db->update('project',$data);
    }

    function editsave_project_detail($data,$id){
        $this->db->where('id',$id);
        $this->db->update('project_details',$data);
    }

    function save($insert){
        $this->db->insert('project', $insert);
    }

    function save_project_detail($insert){
        $this->db->insert('project_details', $insert);
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
	
	

    function save_amount($insert){
        $this->db->insert('investor_amount', $insert);
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
		$this->db->where('a.id', $id);
		$query = $this->db->get('project a');
		return $query->row();
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
