<?php
class M_admin_popular extends Model{
    function  __construct() {
        parent::Model();
    }

    function get_latest() {
		
        $str ='select * from popular';
        $query = $this->db->query($str);
		return $query->result();

    }
	
	function save($insert){
        $this->db->insert('popular', $insert);
    }
	
	function delete($id){
        $this->db->where('id_popular',$id);
        $this->db->delete('popular');
    }
	
	function getdata($id){
        $str ="select * from popular where id_popular = $id";
        $query = $this->db->query($str);
        return $query->row();
    }


	function editsave($data,$id){
        $this->db->where('id_popular',$id);
        $this->db->update('popular',$data);
    }
	
	
	function count()
    {
        return $this->db->count_all_results('informasi');
    }
	
}
?>
