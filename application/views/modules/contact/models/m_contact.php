<?php
class M_contact extends Model{
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
        $this->db->insert('message', $insert);
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
