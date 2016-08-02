<?php

class Poin extends Controller { // Our Cart class extends the Controller class
	
	function  __construct() {
        parent::Controller();
		$this->load->model('m_poin');
		$this->load->model('user/m_user');
//		$this->load->library(array('cart')); // Load our cart model for our entire class
		$username = $this->session->userdata('username');
    }

    function index(){
    	if($this->session->userdata('login')=='customer' or $this->session->userdata('login')=='admin'){
			
		$username = $this->session->userdata('username');
		
			
//echo		$username = $this->uri->segment(3);
			if($username){
				$data['title']='Saspazh | My Account';
				$data['db'] = $this->m_user->getaccount($username);

				$data['noUrut']=1;
				$data['data_poin'] = $this->m_poin->getpoin($username);

//				$data['noUrutVc']=1;
//				$data['data_voucher'] = $this->m_voucher->getvoucher($username);

				$data['page']='v';
				//$this->load->view("shopper_new",$data);
				$this->load->view("vintage/index",$data);
			
			}else{
				redirect('home/shop');
			
			}
			
		
		}else{
		
			redirect('register');
		}
    }
	
	
	function save(){
		$username = $this->session->userdata('username');
		$str=$this->db->query("SELECT * FROM `customer` WHERE username='$username' limit 0,1");
		$id_customer = $str->row()->id_customer;	

    	$kode= $this->input->post('coupon-code');
    	$tanggal=date('Y-m-d');
    	
    	if($this->m_poin->get_kodepoin($kode, $tanggal)->num_rows()>0){
    		
    		$db = $this->m_poin->get_kodepoin($kode, $tanggal)->row();

    		$tambah = array(
    			'id_customer' => $id_customer,
    			'poin' => $db->poin,
    			'tanggal' => date('Y-m-d H:i:s'),
    			'keterangan' => $db->event
    		);
    		$this->m_poin->tambahpoin($tambah);
			
			
			$update = array(
				'status' => 'used'
			);
    		$this->m_poin->updatekodepoin($db->id,$update);
    		redirect('user/account');
    	}else{

    		redirect('poin');
    	}	
    }

    public function _remap($method, $params = array())
    {
        if (method_exists($this, $method))
        {
            return call_user_func_array(array($this, $method), $params);
        }

        show_404();
    }
	

}

/* End of file cart.php */
/* Location: ./application/controllers/cart.php */
?>