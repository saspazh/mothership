<?php
class M_home extends Model{
    function  __construct() {
        parent::Model();
    }

    function get_latest() {
		
		$this->db->select('*');
		$this->db->where('a.id_kategori = b.id_kategori');
//		$this->db->where('a.id_user = b.id_guru');
        $query = $this->db->get('informasi a, kategori b');
		return $query->result();

    }
	
	function get_comment($id) {
		
		$this->db->select('*');
		$this->db->where('a.id_informasi = b.id_informasi');
		$this->db->where('a.id_informasi',$id);
        $query = $this->db->get('informasi a, comment b');
		return $query->result();

    }
	
	function get_kategori() {
		
		$this->db->select('*');
//		$this->db->where('a.id_user = b.id_siswa');
//		$this->db->where('a.id_user = b.id_guru');
        $query = $this->db->get('kategori');
		return $query->result();

    }
	
	function save($insert){
        $this->db->insert('informasi', $insert);
    }
	
	function save_kategori($insert){
        $this->db->insert('kategori', $insert);
    }
	
	function delete($id){
        $this->db->where('id_informasi',$id);
        $this->db->delete('informasi');
    }
	
	function delete_kategori($id){
        $this->db->where('id_kategori',$id);
        $this->db->delete('kategori');
    }
	
	function getdata($id){
        $this->db->select('*');
//		$this->db->where('a.id_user = b.id_siswa');
//		$this->db->where('a.id_user = b.id_guru');
		$this->db->where('a.id_informasi', $id);
		
//        $query = $this->db->get('informasi a, guru b');
        $query = $this->db->get('informasi a');
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
