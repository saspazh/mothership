<?php
class M_gallery extends Model{
    function  __construct() {
        parent::Model();
    }

    function get_latest() {
		
		$this->db->select('*');
//		$this->db->where('a.id_user = b.id_siswa');
//		$this->db->where('a.id_user = b.id_guru');
        $query = $this->db->get('poto');
		return $query->result();

    }
	
	function save($insert){
        $this->db->insert('poto', $insert);
    }
	
	function delete($id){
        $this->db->where('id_informasi',$id);
        $this->db->delete('informasi');
    }
	
	function getdata($id){
        $this->db->select('*');
		$this->db->where('id_poto', $id);
        $query = $this->db->get('poto');
		return $query->row();
    }


	function editsave($data,$id_informasi){
        $this->db->where('id_poto',$id_informasi);
        $this->db->update('poto',$data);
    }
	
	
	function count()
    {
        return $this->db->count_all_results('informasi');
    }
	
}
?>
