<?php

class Voucher extends Controller { // Our Cart class extends the Controller class
	
	function  __construct() {
        parent::Controller();
		$this->load->model('m_voucher');
		$username = $this->session->userdata('username');
    }
	
	
	// function index(){
	
		//$id = $this->uri->segment(3);
        
		// if(!empty($username)){
			// redirect("member/$username");
		// }else{
			// redirect("register");
		// }
		
	// }
	
	function index()
    {
    	$voucher = $this->input->post('voucher');
    	$jumlah_transaksi = $this->input->post('jumlah_transaksi');
    	$datetime = date('Y-m-d H:i:s');
		
		$var_voucher_mass = $this->m_voucher->cek_voucher_mass($voucher,$jumlah_transaksi,$datetime);
        $var_voucher = $this->m_voucher->cek_voucher($voucher,$jumlah_transaksi,$datetime);


		if($var_voucher_mass->num_rows>0){
            $data = array(
                'id_voucher' => $var_voucher_mass->row()->voucher_mass_id,
                'kode' => $var_voucher_mass->row()->kode_event,
                'jenis_voucher' => 'mass',
                'voucher_harga' => $var_voucher_mass->row()->amount,
                'voucher_persen' => $var_voucher_mass->row()->percent,
                'voucher_min_trx' => $var_voucher_mass->row()->min_trx,
                'voucher_max_trx' => $var_voucher_mass->row()->max_trx
            );

            $this->session->set_userdata($data);
        }elseif($var_voucher->num_rows>0){
			$data = array(
				'id_voucher' => $var_voucher->row()->id_voucher,
				'kode' => $var_voucher->row()->kode_voucher,
                'jenis_voucher' => 'singel',
                'voucher_harga' => $var_voucher->row()->harga,
				'voucher_persen' => $var_voucher->row()->persen,
				'voucher_min_trx' => $var_voucher->row()->minimal_transaksi,
				'voucher_max_trx' => $var_voucher->row()->maximal_transaksi

			);

			$this->session->set_userdata($data);
		}else{
        
        }
		
        redirect('cart');
    }

    function tampil()
    {
    	 echo $this->session->userdata('username');	
    	 echo $this->session->userdata('id_voucher');	
    	 echo $this->session->userdata('voucher_kode');	
    	 echo $this->session->userdata('voucher_harga');	
    	 echo $this->session->userdata('voucher_persen');	
    	 echo $this->session->userdata('voucher_min_trx');	
    	 echo $this->session->userdata('voucher_max_trx');	
    }

    function hapus()
    {
    	 $arrayName = array(
    	 	'id_voucher' =>'',
            'voucher_kode' =>'',
            'voucher_harga' =>'',
    	 	'voucher_persen' =>'',
    	 	'voucher_min_trx' =>'', 
    	 	'voucher_max_trx' =>'',
    	 );

    	 $this->session->unset_userdata($arrayName);
    	 redirect('voucher/tampil');	
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