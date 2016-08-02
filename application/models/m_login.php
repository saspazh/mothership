<?php
class M_login extends CI_Model{
    function  __construct() {
        parent::__construct();
    }

    function check_user($username, $password){
    	$a="SELECT * FROM  customer a, privilege b 
		WHERE a.id_privilege = b.id_privilege  
		AND a.username = '$username'
		AND a.password = '$password'
		AND a.jenis = 'user'";

		$b="SELECT * FROM  customer a 
		WHERE a.username = '$username'
		AND a.password = '$password'
		AND a.jenis = 'user'";
	
		if($this->db->query($a)->num_rows() > 0){
			$data = array(
				'id_user' => $this->db->query($a)->row()->id_customer,
				'username' => $this->db->query($a)->row()->username,
				'privilege' => $this->db->query($a)->row()->nama_privilege,
				'login' => TRUE
			);
		}elseif($this->db->query($b)->num_rows() > 0) {
			$data = array(
				'id_user' => $this->db->query($b)->row()->id_customer,
				'username' => $this->db->query($b)->row()->username,
				'privilege' => 'customer',
				'login' => TRUE
			);
		}else{
			$data = array(
				'login' => FALSE
			);

		}
		return $data;
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
