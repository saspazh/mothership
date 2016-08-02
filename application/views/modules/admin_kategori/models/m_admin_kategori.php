<?php
class M_admin_kategori extends Model{
    function  __construct() {
        parent::Model();
    }

    function get_latest() {
		
		$this->db->select('*');
//		$this->db->where('a.id_user = b.id_siswa');
//		$this->db->where('a.id_user = b.id_guru');
        $query = $this->db->get('kategori');
		return $query->result();

    }
	
	function save($insert){
        $this->db->insert('kategori', $insert);
    }
	
	function delete($id){
        $this->db->where('id_kategori',$id);
        $this->db->delete('kategori');
    }
	
	function getdata($id){
        $this->db->select('*');
//		$this->db->where('a.id_user = b.id_siswa');
//		$this->db->where('a.id_user = b.id_guru');
		$this->db->where('a.id_kategori', $id);
		
        $query = $this->db->get('kategori a');
		return $query->row();
    }


	function editsave($data,$id){
        $this->db->where('id_kategori',$id);
        $this->db->update('kategori',$data);
    }
	
	
	function count()
    {
        return $this->db->count_all_results('informasi');
    }
	
}
?>
