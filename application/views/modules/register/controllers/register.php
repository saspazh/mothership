<?php

class Register extends Controller { // Our Cart class extends the Controller class
	
	function  __construct() {
        parent::Controller();
		$this->load->model('m_register');
		$this->load->model('poin/m_poin');
		$this->load->library(array('cart')); // Load our cart model for our entire class
    }
	
	function index(){
		if($this->session->userdata('login_customer')==TRUE){
			redirect('product');
		}else{
		
			$data['title']='Saspazh | Register';
			$data['page']='v_vintage';
			//$this->load->view("shopper_new",$data);
			$this->load->view("vintage/index",$data);
		}
	}
	
	function save(){
		$username = $this->input->post('username');
		$password= $this->input->post('password');
		$email= $this->input->post('email');
		$nama= $this->input->post('nama');
		$no_hp= $this->input->post('no_hp');
		
		$where = "username = '$username'
		OR email = '$username'
		AND password = '$password'
		AND jenis = 'user'
		";


		if($this->m_register->check_customer($where)==FALSE){
			$data = array(
	              		'username' => $username,
	               		'password' => $password,
	               		'first_name' => $nama,
	               		'email'    => $email,
	               		'no_hp' => $no_hp
	    	);
			$this->m_register->save($data);

			$str = "SELECT * FROM customer WHERE username = '$username' AND email = '$email' and jenis = 'user'";
			$customer = $this->db->query($str);
			$id_customer = $customer->row()->id_customer;
			
			$this->m_logpoin->auto_add('register',$id_customer);


			$data = array('username' => $username, 'login' => 'customer');
			$this->session->set_userdata($data);
			redirect('user/account');
		}else{
			redirect('register');
		}
	}
}

/* End of file cart.php */
/* Location: ./application/controllers/cart.php */
?>