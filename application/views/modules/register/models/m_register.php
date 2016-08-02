<?php
class M_register extends Model{
    function  __construct() {
        parent::Model();
    }

    function check_customer($where,$data)
	{
		$query = $this->db->query("SELECT * FROM customer WHERE $where  LIMIT 1");
		//$query = $this->db->get_where($this->customer, array('username' => $username, 'password' =>$password, 'status' => '1'), 1, 0);
		if ($query->num_rows() > 0)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

    function get_transaksi($status) {
		
		$str="SELECT *
FROM customer a, transaksi b
WHERE a.id_customer = b.id_customer
AND b.status = '$status'
ORDER BY  `b`.`tgl_order` DESC ";
		$query = $this->db->query($str);
		return $query->result();
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
        $this->db->where('id_kategori',$id);
        $this->db->delete('kategori');
    }
	
	function getdata($id){
        $this->db->select('*');
		$this->db->where('a.status = 0');
//		$this->db->where('a.id_user = b.id_guru');
		$this->db->where('a.id_transaksi', $id);
		
        $query = $this->db->get('transaksi a');
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
