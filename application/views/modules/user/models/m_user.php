<?php
class M_user extends Model{
	
	function __construct()
	{
		parent::Model();
	}
	var $admin = 'admin';
	var $customer = 'customer';

/*
	function getNews()
	{
	$this->db->order_by('created', 'DESC');
	$query = $this->db->get('news');
	return $query;
	}
*/
	function savesetting($data,$id){
        $this->db->where('username',$id);
        $this->db->update('admin',$data);
    }
	
	function editsave($data,$id){
        $this->db->where('username',$id);
        $this->db->update('customer',$data);
    }

    function check_user($username, $password){
    	$a="SELECT * FROM  customer a, privilege b 
		WHERE a.id_privilege = b.id_privilege  
		AND a.username = $username
		AND a.password = $password";

		$b="SELECT * FROM  customer a 
		WHERE a.username = $username
		AND a.password = $password";
	
		if($this->db->query($a)->num_rows() > 0){
			$data = array(
				'id_user' => $this->db->query($a)->row()->id_customer,
				'username' => $this->db->query($a)->row()->username,
				'login_admin' => TRUE,
				'privilege' => $this->db->query($a)->nama_privilege
			);
		}elseif($this->db->query($b)->num_rows() > 0) {
			$data = array(
				'id_user' => $this->db->query($a)->row()->id_customer,
				'username' => $this->db->query($a)->row()->username,
				'login_customer' => TRUE,
				'privilege' => $this->db->query($a)->nama_privilege
			);
		}
		return $data;
	}
	
	
	function check_customer($username, $password)
	{
		$query = $this->db->get_where($this->customer, array('username' => $username, 'password' =>$password, 'status' => '1'), 1, 0);
		if ($query->num_rows() > 0)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}
	
	function getaccount($username){
        $this->db->select('*');
//		$this->db->where('a.status = 0');
//		$this->db->where('a.id_user = b.id_guru');
		$this->db->where('a.username', $username);
		
        $query = $this->db->get('customer a');
		return $query->row();
    }

}



?>
