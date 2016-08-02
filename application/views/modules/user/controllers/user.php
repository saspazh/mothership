<?php
class User extends Controller {
	/**
	 * Constructor
	 */
	function User()
	{
		parent::Controller();
		$this->load->model('m_user', '', TRUE);

		$this->load->model('poin/m_poin');
		$this->load->model('voucher/m_voucher');

		$this->load->helper('cookie');

	}
	
	function index(){
		if ($this->session->userdata('login_admin') == TRUE){
			redirect('admin_home');
		}else{
			$this->load->view('login');
		}
	}
	
	
	function setting(){
       if ($this->session->userdata('login_admin') == TRUE){
           $data['title'] = "Setting";
           $data['page'] = "setting";
           $this->load->view("sb-admin",$data);
       }else{
            redirect('user/index');
       }
    }

	function savesetting(){
		$old = $this->input->post('old');
		$new = $this->input->post('new');
		$confirm = $this->input->post('confirm');
		
		$username = $this->session->userdata('username');
		
		$check = $this->db->query("select * from admin where username = '$username' and password = '$old'");
		
		if($check->num_rows() == 1){
			if($new == $confirm){
				$admin = array('password' => $new);
				$this->m_user->savesetting($admin,$username);
				$this->session->set_flashdata('message', 'Success, Password berhasil diganti');
				redirect('user/setting');
			}else{
				$this->session->set_flashdata('hapus', 'Maaf, Confirmasi password gagal');
				redirect('user/setting');
			}
		}else{
			$this->session->set_flashdata('hapus', 'Maaf, Password lama salah');
			redirect('user/setting');
		} 
		
		//echo $qqq->last_row()->invoice; 
		
    }

	//user
	function account(){
		if($this->session->userdata('login')=='customer' or $this->session->userdata('login')=='admin'){
			$username = $this->session->userdata('username');
			if($username){
				$data['title']='Saspazh | My Account';
				$data['db'] = $this->m_user->getaccount($username);

				$data['noUrut']=1;
				$data['page']='v_vintage';
				$this->load->view("vintage/index",$data);
			}else{
				redirect('home/shop');
			}
		}else{
			redirect('register');
		}
	}
	
	//user
	function edit_general(){
		if($this->session->userdata('login')=='customer' or $this->session->userdata('login')=='admin'){
			
		$username = $this->session->userdata('username');
			
//echo		$username = $this->uri->segment(3);
			if($username){
				$data['title']='Saspazh | Register';
				$data['judul']='Edit akun';
				$data['db'] = $this->m_user->getaccount($username);
				$data['page']='edit';
				$this->load->view("vintage/index",$data);
			}else{
				redirect('home/shop');
			}
		}else{
		
			redirect('register');
		}
	}


	function edit(){
		if($this->session->userdata('login_customer')==TRUE){
			
		$username = $this->session->userdata('username');
			
//echo		$username = $this->uri->segment(3);
			if($username){
				$data['title']='Saspazh | Register';
				$data['db'] = $this->m_user->getaccount($username);
				$data['page']='edit';
				$this->load->view("shopper_new",$data);
			}else{
				redirect('home/shop');
			}
		}else{
		
			redirect('register');
		}
	}
	
	
	//use
	function editsave(){
	
			$id_customer = $this->input->post('id_customer');
			$username = $this->session->userdata('username');

			$a = 'completed account data';
			
			$q = "select a.id_customer from poin a, customer b where a.id_customer=b.id_customer and a.keterangan='$a' and b.username='$username'";
			$query = $this->db->query($q);
			$state_poin = $query->num_rows();

			if($state_poin > 0){
				
				//echo 'ada';
			}else{
				//$poin = $this->m_logpoin->get_list($a)->poin;
				$this->m_logpoin->auto_add($a,$id_customer);
				//echo "blm";
			}
			
			$nama = $this->input->post('nama');
			$email = $this->input->post('email');
			$no_hp = $this->input->post('no_hp');

			$alamat = $this->input->post('alamat');
			$kodepos = $this->input->post('kodepos');

			$kecamatan = $this->input->post('kecamatan');
			$kota = $this->input->post('kota');
			$province = $this->input->post('provinsi');
			
			
			$barang = array(
				'first_name' => $nama,
				'email' => $email,
				'no_hp' => $no_hp,
				'address' => $alamat,
				'kodepos' => $kodepos,
				'kecamatan'=>$kecamatan,
				'province' => $province,
				'city'=>$kota
			);
			
			$this->m_user->editsave($barang,$username);
			$this->session->set_flashdata('message', 'Maaf, username dan atau password Anda salah');
			redirect('user/account');
			
	}
	
	function save(){
	
			$password = $this->input->post('password');
			$confirm = $this->input->post('confirm');
	
			$first_name = $this->input->post('first_name');
			$last_name = $this->input->post('last_name');
			$company = $this->input->post('company');
			$address1 = $this->input->post('address1');
			$address2 = $this->input->post('address2');
			$city = $this->input->post('city');
			$province = $this->input->post('province');
			$no_hp = $this->input->post('no_hp');
			$email = $this->input->post('email');
			
			
			
				$data = array('username' => $username, 'login_customer' => TRUE);
				$this->session->set_userdata($data);
				
				$account = $this->m_user->getaccount($username);
				
				
				

				$this->session->set_flashdata('message', 'Maaf, username dan atau password Anda salah');
				redirect('register');
			
	}
	
	/**
	 * Memeriksa user state, jika dalam keadaan login akan menampilkan halaman absen,
	 * jika tidak akan meload halaman login
	 */

	
	
	function cookie(){

//		$this->helper->input->set_cookie('as');

		setcookie('user', 'Fadhli Maulidri', time()+3600);

		echo $_COOKIE['user'];

	}




	/**
	 * Memproses logout
	 */
	function logout()
	{
		$this->session->sess_destroy();
		redirect('');
	}
	function logout_member()
	{
		$this->session->sess_destroy();
		redirect('');
	}
}
?>
