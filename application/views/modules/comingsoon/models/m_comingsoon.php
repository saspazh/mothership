<?php
class M_comingsoon extends Model{
    function  __construct() {
        parent::Model();
    }

	function get_dokter() {
        $this->db->order_by("nama_dokter", "Asc");
        $query = $this->db->get('dokter');
        return $query->result();
    }
	
    function save($data){
        $this->db->insert('member', $data);
    }
    function getdata($id){
        $this->db->where('id_brand',$id);
        $get = $this->db->get('brand');
        return $get->row();
    }
    function delete($id){
        $this->db->where('id_brand',$id);
        $this->db->delete('brand');
        }

    function editsave($data,$id_brand){
        $this->db->where('id_brand',$id_brand);
        $this->db->update('brand',$data);
    }

    function get_latest() {
        $this->db->order_by("id_brand", "Asc");
        $query = $this->db->get('brand');
        return $query->result();
    }
	
	
 

      function count()
    {
        return $this->db->count_all_results('siswa');
    }
}
?>
