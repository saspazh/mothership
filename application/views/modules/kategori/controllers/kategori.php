<?php
class Kategori extends Controller{
    function  __construct() {
        parent::Controller();
		$this->load->model('m_kategori');

		$this->load->library(array('cart')); // Load our cart model for our entire class

    }
	

    //==========================================================

    function dialog(){
           
           $this->load->view("dialog",$data);
    }
	
	function index(){
	
           $data['title'] = "Product | Saspazh";
    //       $data['page'] = "v_product";
           $data['data_list'] = $this->m_product->get_latest();
    //       $this->load->view("saspazh",$data);
    
			
           $data['page'] = "v";
           $this->load->view("shopper_new",$data);
	}

    function detail(){
		$id = $this->uri->segment(3);
		if($id){
           $data['title'] = "Product | Saspazh";
           $data['db'] = $this->m_product->detail($id);
		   
           $data['data_best'] = $this->m_product->best();
           
		   $data['page'] = "detail";
		   $this->load->view("shopper_new",$data);
		}else{
			show_404();
		}
	}
	
	function buy(){
		$id_barang = $this->input->post('id_barang');
		$size = $this->input->post('size');
		
		echo $id_barang.'<br>'.$size.'<br>';
		
		//$this->load->view("saspazh",$data);
	}

    function folio(){
    
           $data['page'] = "folio";
           $this->load->view("saspazh",$data);
    }

    function blog(){
    
           $data['page'] = "blog";
           $this->load->view("saspazh",$data);
    }

    function contact(){
    
           $data['page'] = "contact";
           $this->load->view("saspazh",$data);
    }

    function login(){
    
           $data['page'] = "login";
           $this->load->view("saspazh",$data);
    }
}

?>
