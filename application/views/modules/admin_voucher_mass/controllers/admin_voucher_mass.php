<?php
class Admin_voucher_mass extends Controller{
    function  __construct() {
        parent::Controller();
		$this->load->helper(array('form', 'url'));
		$this->load->model('m_admin_voucher_mass');
    }

    function index(){
      if ($this->session->userdata('login') == 'admin'){
            
           $data['title'] = "Poin";
           $data['noUrut'] = 1;
            $data['data_list'] = $this->m_admin_voucher_mass->get_latest();
		   $data['page'] = "v"; 
           $this->load->view("edumix",$data);
        }else{
             redirect('user/index');
        }

    }

	function add(){
      if ($this->session->userdata('login') == 'admin'){
           
           $data['title'] = "Voucher";
		   $data['page'] = "add"; 
           $this->load->view("edumix",$data);
        }else{
             redirect('user/index');
        }

    }
	
	function save(){
		$username = $this->session->userdata('login_admin');
		$event = $this->input->post('event');
		$kode_event = $this->input->post('kode_event');
		$kode_voucher = $this->input->post('kode_voucher');
		
		$thn_start = $this->input->post('thn_start');
		$bln_start = $this->input->post('bln_start');
		$tgl_start = $this->input->post('tgl_start');
		$hour_start = $this->input->post('hour_start');
		$menit_start = $this->input->post('menit_start');

		$thn_end = $this->input->post('thn_end');
		$bln_end = $this->input->post('bln_end');
		$tgl_end = $this->input->post('tgl_end');
		$hour_end = $this->input->post('hour_end');
		$menit_end = $this->input->post('menit_end');
		
		$harga = $this->input->post('harga');
		$min_trx = $this->input->post('min_trx');
		$max_trx = $this->input->post('max_trx');
		
		$insert = array(
			'nama_event' => $event,
			'kode_event' => $kode_event,
			'date_start' => $thn_start.'-'.$bln_start.'-'.$tgl_start.' '.$hour_start.':'.$menit_start.':00',
			'date_end' => $thn_end.'-'.$bln_end.'-'.$tgl_end.' '.$hour_end.':'.$menit_end.':00',
			'amount' => $harga,
			'percent' => $persen,
			'min_trx' => $min_trx,
			'jumlah_voucher' => $max_trx,
			'creator' => $username,
			'created_at' => date('Y-m-d H:i:s')
		); 
		
		$this->m_admin_voucher_mass->save($insert);
		
		
        $this->session->set_flashdata('message','Berhasil Diinput!');
        redirect("admin_voucher_mass");	
    }

	
	function detail(){

		if ($this->session->userdata('login_admin') == TRUE){
           
		   $username = $this->uri->segment(3);
		   
		   if($username){
			   $data['title'] = "Detail poin";
			   $data['noUrut'] = 1;
			   $data['data_list'] = $this->m_admin_poin->get_poin($username);
			   $data['page'] = "v_detail"; 
			   $this->load->view("edumix",$data);   
		   }else{
			   redirect('user/index');
		   }
        }else{
             redirect('user/index');
        }

	}
	
	
	
	
	
	

	
	function export_excel(){
      if ($this->session->userdata('login_admin') == TRUE){
           $data['data_list'] = $this->m_admin_barang->get_latest();
		   
           $data['title'] = "News";
           $data['noUrut'] = 1;
           $this->load->view("export_excel",$data);
        }else{
             redirect('user/index');
        }

    }
	
    
	

		
	function edit(){
    	if ($this->session->userdata('login') == 'admin'){
        	$data['title'] = "Edit";
             
            $id = $this->uri->segment(3);
            if($id){
                $data['db'] = $this->m_admin_voucher_mass->getdata($id);
                $data['page'] = "edit";
                $this->load->view("edumix",$data);
            }else {
                 show_404();
            }
        }else{
            redirect('user/index');
    	}
    }
	

	function editsave(){         

        $voucher_mass_id = $this->input->post('voucher_mass_id');
		$kode_event = $this->input->post('kode_event');
		
		$thn_start = $this->input->post('thn_start');
		$bln_start = $this->input->post('bln_start');
		$tgl_start = $this->input->post('tgl_start');
		$hour_start = $this->input->post('hour_start');
		$menit_start = $this->input->post('menit_start');

		$thn_end = $this->input->post('thn_end');
		$bln_end = $this->input->post('bln_end');
		$tgl_end = $this->input->post('tgl_end');
		$hour_end = $this->input->post('hour_end');
		$menit_end = $this->input->post('menit_end');
		
		$harga = $this->input->post('harga');
		$min_trx = $this->input->post('min_trx');
		$max_trx = $this->input->post('max_trx');
		
		$insert = array(
			'voucher_mass_id' => $voucher_mass_id,
			'kode_event' => $kode_event,
			'date_start' => $thn_start.'-'.$bln_start.'-'.$tgl_start.' '.$hour_start.':'.$menit_start.':00',
			'date_end' => $thn_end.'-'.$bln_end.'-'.$tgl_end.' '.$hour_end.':'.$menit_end.':00',
			'amount' => $harga,
			'percent' => $persen,
			'min_trx' => $min_trx,
			'max_trx' => $max_trx
		);



		$this->m_admin_voucher_mass->editsave($insert,$voucher_mass_id);
        $this->session->set_flashdata('message',' Berhasil Diedit!');
        redirect('admin_voucher_mass');
				 
	}
	
	

	function delete(){
			 $id = $this->uri->segment(3);
			 $username = $this->uri->segment(4);
         	 if($id){
			    $this->m_admin_poin->delete($id);
				$this->session->set_flashdata('hapus','Berhasil Dihapus!');
				redirect("admin_poin/detail/$username");
			 }else{ 
				show_404(); 
			 }
    }
	
	function test(){
		unlink('uploads/medium/tshirt-for-mens-black-6.jpg');
	}
	
} 

?>