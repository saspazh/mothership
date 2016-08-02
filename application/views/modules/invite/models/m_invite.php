<?php
class M_invite extends Model{
    function  __construct() {
        parent::Model();
    }

    function save($insert){
        $this->db->insert('invite', $insert);
    }

    function update_transaksi($data, $id){
        $this->db->where('id_transaksi',$id);
        $this->db->update('transaksi',$data);
    }

    function cekpemiliktransaksi($username,$id_transaksi) {
		
		$str="SELECT * 
FROM customer b, transaksi a 
WHERE a.id_customer = b.id_customer
AND b.username = '$username'
AND a.id_transaksi = '$id_transaksi'";
		$query = $this->db->query($str);
		return $query;
    }

    function get_latest($username) {
		
		$str="SELECT * 
FROM customer b, transaksi a 
WHERE a.id_customer = b.id_customer
AND b.username = '$username'";
		$query = $this->db->query($str);
		return $query->result();
    }

    function get_transaksi($no_transaksi,$id_transaksi) {
		
		$str="SELECT *
FROM transaksi
WHERE no_order = '$no_transaksi'
OR id_transaksi = '$id_transaksi'";
		$query = $this->db->query($str);
		return $query->row();
    }

    function get_voucher($id_transaksi) {
		
		$str="SELECT *
FROM transaksi a, voucher b
WHERE a.id_voucher = b.id_voucher
AND a.id_transaksi = '$id_transaksi'";
		$query = $this->db->query($str);
		return $query->row();
    }



    function check_customer($where)
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

	function get_customer($where)
	{
		$query = $this->db->query("SELECT * FROM customer WHERE $where  LIMIT 1");
		return $query->row();
	}
	
	
	
	
	/*==================guest===================*/
	
	function get_guest() {
		
		$this->db->select('*');
//		$this->db->where('a.id_user = b.id_siswa');
		$this->db->where('status = 1');
        $query = $this->db->get('customer');
		return $query->result();

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
