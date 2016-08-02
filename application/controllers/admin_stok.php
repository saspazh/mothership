<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_stok extends CI_Controller{
    public function  __construct() {
        parent::__construct();
	//	$this->load->helper(array('form', 'url'));
		$this->load->model('m_admin_kategori');
		$this->load->model('m_admin_product');
		$this->load->model('m_admin_investor');
		$this->load->model('m_admin_store');
		$this->load->model('m_admin_stok');
    }
    
    function index(){	
      if ($this->session->userdata('login') == 'admin'){
           
           $data['category'] = $this->input->get('category');
		   $data['product'] = $this->input->get('product');
		   $data['investor'] = $this->input->get('investor');
		   $data['store'] = $this->input->get('store');

		   

           ( $data['category'] == 'all' ? $a=" " : $a= "AND c.id_kategori=".$data['category']);
           ( $data['product'] == 'all' ? $b=" " : $b= " AND c.id_product=".$data['product']);
           ( $data['investor'] == 'all' ? $c=" " : $c= " AND d.investor_id=".$data['investor']);
           ( $data['store'] == 'all' ? $d=" " : $d= " AND store_id=".$data['store']);

           if($data['category'] AND $data['product'] AND $data['investor'] AND $data['store'] ){
           		//$where = "AND c.id_product=".$data['product']." AND b.investor_id=".$data['investor']." AND assign=".$data['assign'];
           		$where = $a.$b.$c.$d;
           }else{
           		$where = " ";
           }

           $data['category_list'] = $this->m_admin_kategori->get_latest();
		   $data['product_list'] = $this->m_admin_product->get_latest();
		   $data['investor_list'] = $this->m_admin_investor->get_latest();
		   $data['store_list'] = $this->m_admin_store->get_latest();
		   
           $data['title'] = "Stok";
           $data['noUrut'] = 1;
           $data['data_list'] = $this->m_admin_stok->get_latest($where);
		   $data['page'] = "admin/admin_stok/v"; 
           $this->load->view("edumix",$data);
      }else{
           redirect('user/index');
      }

    }

    function add(){
      if ($this->session->userdata('login') == 'admin'){
           
           $data['title'] = "Voucher";
		   $data['page'] = "admin/admin_stok/add"; 
           $this->load->view("edumix",$data);
        }else{
             redirect('user/index');
        }

    }

    //========================================above use==============================

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


	
	function save(){
        
        $id_barang= $this->input->post('id_barang');
        $qty= $this->input->post('qty');
        $project_id= $this->input->post('project_id');
        
		
		for($i=1; $i<=$qty; $i++){	
			$kategori= $this->db->query("SELECT serial FROM  `barang` where id_barang = '$id_barang'");
			$urutkategori = $kategori->last_row()->serial;
			
			$serial = $this->db->query("SELECT a.serial as serial_barang, b.serial
FROM barang a, stok b
WHERE a.id_barang = b.id_barang
and a.id_barang = '$id_barang'");

			if($serial->num_rows()>0){
				$urut = $serial->num_rows() + 1;
			
			}else{
				$urut= 1;
			}

			$autoNum = $urut;
			$tahunfix = ''; 
			if($autoNum<10)
			$autoNum = $urutkategori.$tahunfix."00".$autoNum;
			elseif($autoNum<100)
			$autoNum = $urutkategori.$tahunfix."0".$autoNum;
			elseif($autoNum<1000)
			$autoNum = $urutkategori.$tahunfix.$autoNum;
			$no_order= $autoNum;
			
			$serial= $no_order;
					 
			

			$insert = array(
					'project_id' => $project_id,
					'id_barang' => $id_barang,
					'serial' => $serial,
					'tanggal' => date('Y-m-d H:m:s')
					);
			$this->m_admin_stok->save($insert);
		}
			
		$this->session->set_flashdata('message','Berhasil Diinput!');
        redirect('admin_stok');	

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
             
            $stok_id = $this->input->post('id_stok');

            $count = count($stok_id);

            $data['title'] = "Detail poin";
			$data['noUrut'] = 1;
			
			$data['count'] = $count;
            $data['stok_id'] = $stok_id;

//            for ($i=0; $i < $count; $i++) { 
            //	echo $stok_id[$i].'<br>';
//            	$data['data_list'] = $this->m_admin_stok->getdata($stok_id[$i]);
  //          }
            foreach ($stok_id as $key => $value) {
            	$da = $this->m_admin_stok->getdata($value);
            }
            echo count($da);




            //$data['page'] = "admin/admin_stok/edit"; 

            //$this->load->view("edumix",$data);
            $this->load->view("admin/admin_stok/edit",$data);


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