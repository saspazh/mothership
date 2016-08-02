<?php
class Product extends Controller{
    function  __construct() {
        parent::Controller();
		$this->load->model('m_product');
		$this->load->library(array('cart')); // Load our cart model for our entire class
    }
	

	function kemeja(){
		$this->load->view('cebong');
	}

	function search(){

	       $search = $this->input->post('search');
	       //echo $search;

	          if($search){
	          	$data['data_list'] = $this->m_product->get_search($search);

	          	$this->m_logpengunjung->savekeyword($search);

			    $data['title'] = "Search | Saspazh";
			    $data['page'] = "v_vintage";
			    $this->load->view("vintage/index",$data);


	          }else{
	          	redirect('product');
	          }
	          

	   	   

//           $data['data_list'] = $this->m_product->get_latest();
  //  	   $data['judul'] = 'Product';
		   
	//	   $data['title'] = "Product | Saspazh";
	//	   $data['page'] = "v_vintage";
	//	   $this->load->view("vintage/index",$data);

          
	}

	
/*	
	function tambah()
	{
		$id = $this->input->post('id_barang'); // Assign posted product_id to $id
		$cty = $this->input->post('banyak'); // Assign posted quantity to $cty
		
		$this->db->where('id_barang', $id); // Select where id matches the posted id
		$query = $this->db->get('barang', 1); // Select the products where a match is found and limit the query by 1
		
		// Check if a row has been found
		if($query->num_rows > 0){
		
			foreach ($query->result() as $row)
			{
			    $data = array(
               		'id'      => $id,
               		'qty'     => $cty,
               		'price'   => $row->price,
               		'name'    => $row->nama_barang
            	);

				$this->cart->insert($data);
			}
		}
		redirect('product/cart');
		
	}
	function cart(){
		$this->load->view("cart",$data);
	}
	function update_cart(){
		
		$total = $this->cart->total_items();
		$item = $this->input->post('rowid');
	    $qty = $this->input->post('qty');

		for($i=0;$i < $total;$i++)
		{
			$data = array(
               'rowid' => $item[$i],
               'qty'   => $qty[$i]
            );
            
			$this->cart->update($data);
		}
		redirect('product/cart');
	}
	
	function empty_cart(){
		$this->cart->destroy();
		redirect('product/cart');
	}
	
	function total_cart()
	{
		$data['total'] = $this->cart->total_items();
		$this->load->view('total',$data);
	}
*/	
    //==========================================================

    function dialog(){
           
           $this->load->view("dialog",$data);
    }
	
	function index(){
	       
           $data['data_list'] = $this->m_product->get_latest();
    	   $data['judul'] = 'Product';
		   
		   $data['title'] = "Product | Saspazh";
		   $data['page'] = "v_vintage";
		   $this->load->view("vintage/index",$data);

          
	}

    function detail(){
		$id = $this->uri->segment(3);
		if($id){
           $data['db'] = $this->m_product->detail($id);
		   
           $data['size'] = $this->m_product->size($id);
		   
		   $data['title'] = $data['db']->nama_product.' '.$data['db']->color." - ".$data['db']->nama_kategori." | Saspazh";

		   $data['page'] = "v_detail";
		   $this->load->view("vintage/index",$data);
		}else{
			show_404();
		}
	}
	
	function kategori(){
		$id = $this->uri->segment(3);
		$data['judul'] = $this->db->query("SELECT * FROM  `kategori` WHERE id_kategori = '$id' ORDER BY  `kategori`.`nama_kategori` ASC ")->row()->nama_kategori;
								
		if($id){
           $data['data_list'] = $this->m_product->kategori_product($id);
		   $data['title'] = $data['judul']." &laquo; Product | Saspazh";
		   $data['page'] = "v_vintage";
		   $this->load->view("vintage/index",$data);
		}else{
			redirect('product');
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