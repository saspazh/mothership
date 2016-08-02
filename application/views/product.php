<?php
class Product extends Controller{
    function  __construct() {
        parent::Controller();
		$this->load->model('m_product');
		$this->load->library(array('cart')); // Load our cart model for our entire class
    }
	

	function page($id=NULL){
		$jml = $this->db->query("SELECT a.id_barang, a.id_kategori, c.nama_kategori, b.id_poto, a.nama_barang, a.color, a.price, a.description, b.file_name, b.path, a.waktu
FROM barang a, poto b, kategori c
WHERE a.id_barang = b.id_barang
AND a.id_kategori = c.id_kategori
AND b.highlight =  '1'
ORDER BY  `a`.`waktu` DESC ");
		
		$config['total_rows'] = $jml->num_rows();
		
 $config['base_url'] = base_url().'product/page';
 $config['per_page'] = '6';
 $config['first_page'] = 'Awal';
 $config['last_page'] = 'Akhir';
 $config['next_page'] = '&laquo;';
 $config['prev_page'] = '&raquo;';
 
 
		$config['full_tag_open'] = '<div class="pagination-centered"><ul class="pagination">';
		$config['full_tag_close'] = '</ul></div><!--pagination-->';

		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li class="prev page">';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li class="next page">';
		$config['last_tag_close'] = '</li>';

		$config['next_link'] = 'Next';
		$config['next_tag_open'] = '<li class="next page">';
		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = 'Prev';
		$config['prev_tag_open'] = '<li class="prev page">';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="active"><a href="">';
		$config['cur_tag_close'] = '</a></li>';

		$config['num_tag_open'] = '<li class="page">';
		$config['num_tag_close'] = '</li>';
		
 
 $this->pagination->initialize($config);
 
 $data['halaman'] = $this->pagination->create_links();
 
 $data['data_list'] = $this->m_product->ambil_karyawan($config['per_page'], $id);

		   $data['title'] = "Product &laquo; Saspazh : We Are Born With A TRUST ";
		   $data['judul'] = "Product";
           $data['page'] = "v";
           $this->load->view("shopper_new",$data);
           
		   
		   //$this->load->view("karyawan_view",$data);
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
    	   $data['title'] = "Product &laquo; Saspazh : We Are Born With A TRUST ";	
           $data['judul'] = 'Product';
		   $data['page'] = "v";
           $this->load->view("shopper_new",$data);
	}

    function detail(){
		$id = $this->uri->segment(3);
		if($id){
            $data['db'] = $this->m_product->detail($id);
		   
			$data['title'] = $data['db']->nama_barang.' , '.$data['db']->color." &laquo; ".$data['db']->nama_kategori." &laquo; Saspazh";
			$data['description'] = "Saspazh cloth apparel brand style premium art simple color tees. Saspazh established by a founder of IT background. Decided to quit his job and start his own company.";
			$data['H4'] = $data['db']->nama_kategori;
			$data['H1'] = $data['db']->nama_barang;
			$data['H5'] = $data['db']->color;
			
			$data['data_best'] = $this->m_product->related(0,3);
			$data['data_bestt'] = $this->m_product->related(3,3);
			
		    //$data['page'] = "detail";
		    $this->load->view("detail-product",$data);
		}else{
			show_404();
		}
	}
	
	function kategori(){
		$id = $this->uri->segment(3);
		$data['judul'] = $this->db->query("SELECT * FROM  `kategori` WHERE id_kategori = '$id' ORDER BY  `kategori`.`nama_kategori` ASC ")->row()->nama_kategori;
								
		if($id){
           $data['data_list'] = $this->m_product->kategori_product($id);
		   $data['title'] = $data['judul']." &laquo; Product &laquo; Saspazh : We Are Born With A TRUST ";
		   $data['page'] = "v";
		   $this->load->view("shopper_new",$data);
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