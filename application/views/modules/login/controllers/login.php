<?php

class Login extends Controller { // Our Cart class extends the Controller class
	
	function  __construct() {
        parent::Controller();
		$this->load->model('m_login');
		$this->load->library(array('cart')); // Load our cart model for our entire class
    }
	
	function index(){
		if($this->session->userdata('login')=='customer'){
			redirect('product');
		}else{
		
			$data['title']='Saspazh | Login';
			$data['page']='v';
			$this->load->view("vintage/index",$data);
		}
	}
	
	function auth(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$data = $this->m_login->check_user($username, $password);

		if($data['login'] == 'customer' or $data['login'] == 'admin'){
			//echo $data['id_user'].'<br>';
			//echo $data['username'].'<br>';
			//echo $data['privilege'].'<br>';
			
			$sesi = array('id_user' => $data['id_user'],'username' => $data['username'], 'login' => $data['privilege']);	
			$this->session->set_userdata($sesi);

			//add poin
			$str = "SELECT * FROM customer WHERE username = '$username' AND password = '$password' and jenis = 'user'";
			$customer = $this->db->query($str);
			$id_customer = $customer->row()->id_customer;
			$this->m_logpoin->auto_add('login',$id_customer);
					
			if($this->cart->total_items()==0){
				redirect('');
			}elseif($this->cart->total_items()>0){
				redirect('checkout/login');
			}
		}else{
			redirect('login');
		}

	}
	
	function authx(){


			$username = $this->input->post('username');
			$password = $this->input->post('password');
			
			//$segment= $this->input->post('segment');
			
			//$check_customer = $this->m_login->check_customer($username, $password);
			$where = "username = '$username'
			OR email = '$username'
			AND password = '$password'
			AND jenis = 'user'
			";

			if ($this->m_login->check_customer($where) == TRUE){

				$user = $this->m_login->get_customer($where);
				
				$data = array('username' => $user->username,'nama' => $user->first_name, 'login_customer' => TRUE);
				$this->session->set_userdata($data);
				
				//$account = $this->m_user->getaccount($username);
				
				//if(
				//	empty($account->first_name) or
				//	empty($account->last_name) or
				//	empty($account->address1) or
				//	empty($account->city) or
				//	empty($account->province) or
				//	empty($account->no_hp) or
				//	empty($account->username) 
				//){
				//	$this->session->set_flashdata('message',' Silakan lengkapi Biodata Anda');
			
				$str = "SELECT * FROM customer WHERE username = '$username' AND password = '$password' and jenis = 'user'";
				$customer = $this->db->query($str);
				$id_customer = $customer->row()->id_customer;
				$this->m_logpoin->auto_add('login',$id_customer);
				
				if($this->cart->total_items()==0){
					redirect('');
				}elseif($this->cart->total_items()>0){
					redirect('checkout/login');
				}
				
			

			}else{
				
//				$this->session->set_flashdata('message', 'Maaf, username dan atau password Anda salah');
				redirect('login');
			}
	}

	/**
	 * Memproses logout
	 */
	function logout()
	{
		$this->session->sess_destroy();
		redirect('');
	}
}

/* End of file cart.php */
/* Location: ./application/controllers/cart.php */
?>