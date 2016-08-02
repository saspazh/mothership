<?php
class Admin_stok extends Controller{
    function  __construct() {
        parent::Controller();
	//	$this->load->helper(array('form', 'url'));
		$this->load->model('m_admin_stok');
    }

    function index(){
      if ($this->session->userdata('login') == 'admin'){
           
           $data['product'] = $this->input->post('product');
           $data['investor'] = $this->input->post('investor');
           $data['assign'] = $this->input->post('assign');

           if($data['product'] AND $data['investor'] AND $data['assign']){
           		$where = "WHERE c.nama_product=".$data['product']." AND id_investor=".$data['investor']." AND assign=".$data['assign'];
           }else{
           		$where = " ";
           }

           $data['product'] = $this->m_admin_stok->get_product()->result();
		   $data['investor'] = $this->m_admin_stok->get_investor()->result();
		   $data['assign'] = $this->m_admin_stok->get_assign()->result();
		   



           $data['title'] = "Stok";
           $data['noUrut'] = 1;
           $data['data_list'] = $this->m_admin_stok->get_latest();
		   $data['page'] = "v"; 
           $this->load->view("edumix",$data);
      }else{
           redirect('user/index');
      }

    }

    function v_amount(){

		if ($this->session->userdata('login') == 'admin'){
           
		   $id_investor = $this->uri->segment(3);
		   
		   if($id_investor){
			   $data['db'] = $this->m_admin_investor->getdata($id_investor);
			   
			   $data['title'] = "Investasi ".$data['db']->nama_investor;
			   $data['noUrut'] = 1;
			   $data['data_list'] = $this->m_admin_investor->get_amount($id_investor);
			   
			   $data['page'] = "v_amount"; 
			   $this->load->view("edumix",$data);   
		   }else{
			   redirect('user/index');
		   }
        }else{
             redirect('user/index');
        }

	}

	function add_amount(){
        if ($this->session->userdata('login') == 'admin'){
           
		   $id_investor = $this->uri->segment(3);
		   
		   if($id_investor){
			   $data['db'] = $this->m_admin_investor->getdata($id_investor);
			   
			   $data['title'] = "Investasi ".$data['db']->nama_investor;
			   $data['noUrut'] = 1;
			   $data['data_list'] = $this->m_admin_investor->get_amount($id_investor);
			   
			   $data['page'] = "add_amount"; 
			   $this->load->view("edumix",$data);   
		   }else{
			   redirect('user/index');
		   }
        }else{
             redirect('user/index');
        }

    }

    function add(){
      if ($this->session->userdata('login') == 'admin'){
           
           $data['title'] = "Voucher";
		   $data['page'] = "add_amount"; 
           $this->load->view("edumix",$data);
        }else{
             redirect('user/index');
        }

    }
	
	function save(){
		$nama = $this->input->post('nama');
		$no_hp = $this->input->post('no_hp');
		
		$insert = array(
			'nama_investor' => $nama,
			'no_hp' => $no_hp
		); 
		
		$this->m_admin_investor->save($insert);
		
		
        $this->session->set_flashdata('message','Berhasil Diinput!');
        redirect("admin_investor");	
    }

    function save_amount(){
		$investor_id = $this->input->post('investor_id');
		$amount = $this->input->post('amount');
		
		$insert = array(
			'investor_id' => $investor_id,
			'amount' => $amount,
			'date' => date('Y-m-d')
		); 
		
		$this->m_admin_investor->save_amount($insert);
		
		
        $this->session->set_flashdata('message','Berhasil Diinput!');
        redirect("admin_investor/v_amount/".$investor_id);	
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
                $data['db'] = $this->m_admin_investor->getdata($id);
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

        $id_investor = $this->input->post('id_investor');
		$nama = $this->input->post('nama');
		$no_hp = $this->input->post('no_hp');
		
		$insert = array(
			'id_investor' => $id_investor,
			'nama_investor' => $nama,
			'no_hp' => $no_hp
		);



		$this->m_admin_investor->editsave($insert,$id_investor);
        $this->session->set_flashdata('message',' Berhasil Diedit!');
        redirect('admin_investor');
				 
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