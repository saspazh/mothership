<?php
class M_dokter_admin extends Model{
    function  __construct() {
        parent::Model();
    }

    function save($data){
        $this->db->insert('dokter', $data);
    }
    function getdata($id){
        $this->db->where('id_dokter',$id);
        $get = $this->db->get('dokter');
        return $get->row();
    }
    function delete($id){
        $this->db->where('id_dokter',$id);
        $this->db->delete('dokter');
        }

    function editsave($data,$id_siswa){
        $this->db->where('id_dokter',$id_siswa);
        $this->db->update('dokter',$data);
    }
	
	function status($data,$id){
        $this->db->where('id_siswa',$id);
        $this->db->update('siswa',$data);
    }

    function get_latest() {
        $this->db->order_by("id_dokter", "Asc");
        $query = $this->db->get('dokter');
        return $query->result();
    }
 

      function count()
    {
        return $this->db->count_all_results('siswa');
    }
}
?>
