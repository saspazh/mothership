<?php

class Cart extends Controller { // Our Cart class extends the Controller class
	
	function  __construct() {
        parent::Controller();
//		$this->load->model('m_cart');
//		$this->load->library(array('cart')); // Load our cart model for our entire class
    }
	
	function index(){
		//$data['title']='Saspazh | Cart';
		//$data['page']='v';
		//$this->load->view("shopper_new",$data);

		$data['title']='Saspazh | Cart';
		$data['page']='cart_vintage';
		$this->load->view("vintage/index",$data);		
	}
	
	function tambah()
	{
		$id = $this->input->post('id_product'); // Assign posted product_id to $id
		$cty = $this->input->post('qty'); // Assign posted quantity to $cty
		$size = $this->input->post('size');
		$max = $this->input->post('max');
		
//		$this->db->where('id_barang', $id); // Select where id matches the posted id
//		$query = $this->db->get('barang', 1); // Select the products where a match is found and limit the query by 1
		
		$this->db->select('a.id_product, a.id_kategori, c.nama_kategori, b.id_poto, a.nama_product, a.color, a.price, a.description, b.file_name, b.path, a.waktu');
		$this->db->where('a.id_product = b.id_product');
		$this->db->where('a.id_kategori = c.id_kategori');
		$this->db->where('a.id_product', $id); 
        $query = $this->db->get('product a, poto b, kategori c',1);
//		return $query->result();
		
		// Check if a row has been found
		if($query->num_rows > 0){
		
			foreach ($query->result() as $row)
			{
			    $data = array(
               		'id'      => $id,
               		'qty'     => $cty,
               		'path'    => $row->path,
               		'file_name'    => $row->file_name,
               		'name'    => $row->nama_product,
               		'color'    => $row->color,
               		'size'    => $size,
               		'max'    => $max,
               		'price'   => $row->price
            	);

				$this->cart->insert($data);
			}
		}
		redirect('cart');
		
	}

	function update_cart(){
		
		$total = $this->cart->total_items();
		$item = $this->input->post('rowid');
	    $size = $this->input->post('size');
	    $qty = $this->input->post('qty');

		/*===========cek stok men===========*
		$cs = $this->db->query("SELECT count(id_stok) as jml 
		FROM  `stok`
		WHERE id_barang = '$item'
		AND size = '$size'");
	if($qty <= $cs->last_row()->jml ){
		
	}else{
		
	}
		*===========batasnya sini men ahha===========*/
		
		
		
		for($i=0;$i < $total;$i++)
		{
			$data = array(
               'rowid' => $item[$i],
               'qty'   => $qty[$i]
            );
            
			$this->cart->update($data);
		}
		redirect('cart');
	}
	
	function empty_cart(){
		$this->cart->destroy();
		redirect('cart');
	}
	
	function total_cart()
	{
		$data['total'] = $this->cart->total_items();
		$this->load->view('total',$data);
	}

}

/* End of file cart.php */
/* Location: ./application/controllers/cart.php */
?>