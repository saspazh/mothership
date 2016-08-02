<?php
class M_admin_partnership extends Model{
    function  __construct() {
        parent::Model();
    }

    function get_latest() {
		
		$this->db->select('*');
//		$this->db->where('a.id_user = b.id_siswa');
//		$this->db->where('a.id_user = b.id_guru');
        $query = $this->db->get('partnership');
		return $query->result();

    }
	
	function save($insert){
        $this->db->insert('partnership', $insert);
    }
	
	function delete($id){
        $this->db->where('id_kategori',$id);
        $this->db->delete('kategori');
    }
	
	function getdata($id){
        $this->db->select('*');
//		$this->db->where('a.id_user = b.id_siswa');
//		$this->db->where('a.id_user = b.id_guru');
		$this->db->where('a.id_partnership', $id);
		
        $query = $this->db->get('partnership a');
		return $query->row();
    }


	function editsave($data,$id){
        $this->db->where('id_partnership',$id);
        $this->db->update('partnership',$data);
    }
	
	
	function count()
    {
        return $this->db->count_all_results('informasi');
    }
	
}
?>
