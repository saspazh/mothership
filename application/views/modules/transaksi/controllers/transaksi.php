<?php

class Transaksi extends Controller { // Our Cart class extends the Controller class
	
	function  __construct() {
        parent::Controller();
		$this->load->model('m_transaksi');
		$this->load->library(array('cart')); // Load our cart model for our entire class
    }
	
	//use
    function index(){
		if($this->session->userdata('login')=='customer' or $this->session->userdata('login')=='admin'){
			$username = $this->session->userdata('username');	
			$data['title']='Saspazh | Transaksi';
			$data['data_list'] = $this->m_transaksi->get_latest($username);
			$data['page']='index';
			$this->load->view("vintage/index",$data);
		}else{
			redirect('');
		}
		
	}

	//use
	function konfirmasi(){
		$username = $this->session->userdata('username');
		$id_transaksi=$this->uri->segment(3);
		$token=$this->uri->segment(4);

		$yesihave = $this->m_transaksi->cekpemiliktransaksi($username,$id_transaksi,$token);

		if(!empty($yesihave)){			

			if($yesihave->num_rows() == 1){
				$data['title']='Saspazh | Konfirmasi';
				$data['page']='konfirmasi';
				$data['token']=$token;
				$this->load->view("vintage/index",$data);

			}else{
				redirect('transaksi');
				
			}
		}else{
			show_404();
		}
	}

	//use
	function save_konfirmasi(){
		$username = $this->session->userdata('username');
		$id_transaksi = $this->input->post('id_transaksi');
		$token=$this->input->post('token');

		$yesihave = $this->m_transaksi->cekpemiliktransaksi($username,$id_transaksi,$token);

		if(!empty($yesihave)){
						
			$metode = $this->input->post('metode');
			$no_rek_pengirim = $this->input->post('no_rek_pengirim');
			$nama_pengirim = $this->input->post('nama_pengirim');
			

			$data = array(
				'konfirmasi' => date('Y-m-d H:i:s'),
				'metode' => $metode,
				'no_rek_pengirim' => $no_rek_pengirim,
				'nama_pengirim' => $nama_pengirim

			);

			$this->m_transaksi->update_transaksi($data, $id_transaksi);
			
			redirect("transaksi/detail/$id_transaksi/$token");

		}else{
			show_404();
		}
		
	}

	//use
	function cektransaksi(){
		
		$data['title']='Saspazh | Cek transaksi';
		$data['page']='v';
		$this->load->view("vintage/index",$data);
		
	}
	
	//use
	function auth(){
		$no_transaksi=$this->input->post('no_transaksi');
		if($no_transaksi){
			$data['title']='Saspazh | Transaksi';

			

			$data['db'] = $this->m_transaksi->get_transaksi($no_transaksi);

			$data['page']='v_transaksi';
			$this->load->view("vintage/index",$data);
		}else{
			show_404();
		}

	}

	function detail(){
		$username = $this->session->userdata('username');
		$id_transaksi=$this->uri->segment(3);
		$token=$this->uri->segment(4);
		
		$data['db'] = $this->m_transaksi->get_transaksi($id_transaksi,$token,$username);

		if($data['db'] != NULL){
		
			$data['title']='Saspazh | Transaksi';

			$data['t_voucher'] = $this->m_transaksi->get_voucher($id_transaksi)->harga;
			
			$data['page']='v_transaksi';
		
			$this->load->view("vintage/index",$data);
		}else{
			show_404();
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