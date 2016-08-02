<?php
class M_admin_customer extends Model{
    function  __construct() {
        parent::Model();
    }

    function get_customer($type) {
		
		$this->db->select('*');
//		$this->db->where('a.id_user = b.id_siswa');
		$this->db->where('type', $type);
        $query = $this->db->get('customer');
		return $query->result();
    }
	
	function customer($select, $from, $where) {
		$sql = $this->db->query("SELECT $select FROM $from WHERE $where");
		return $sql->result();
    }
	
	
	/*==================guest===================*/
	
	function get_guest() {
		
		$this->db->select('*');
//		$this->db->where('a.id_user = b.id_siswa');
		$this->db->where('status = 1');
        $query = $this->db->get('customer');
		return $query->result();

    }
	
	function save($insert){
        $this->db->insert('customer', $insert);
    }
	
	function delete($id){
        $this->db->where('id_customer',$id);
        $this->db->delete('customer');
    }
	
	function getdata($id){
        $this->db->select('*');
//		$this->db->where('a.id_user = b.id_siswa');
//		$this->db->where('a.id_user = b.id_guru');
		$this->db->where('a.id_customer', $id);
		
        $query = $this->db->get('customer a');
		return $query->row();
    }


	function editsave($data,$id){
        $this->db->where('id_customer',$id);
        $this->db->update('customer',$data);
    }
	
	
	function count()
    {
        return $this->db->count_all_results('informasi');
    }
	
}
?>
