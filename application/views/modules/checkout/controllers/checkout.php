<?php

class Checkout extends Controller { // Our Cart class extends the Controller class
	
	function  __construct() {
        parent::Controller();
		$this->load->model('m_checkout');
		$this->load->model('voucher/m_voucher');
		$this->load->library(array('cart')); // Load our cart model for our entire class
		$this->load->library('myfunction'); // Load our cart model for our entire class
    }

	function email(){
	/*==================================
				$auto = $this->db->query("select * from konsultasi where id_konsultasi = '$id_konsultasi'");
				echo $email = $auto->last_row()->email;
				echo $subject = $auto->last_row()->subject;
				echo $pertanyaan = $auto->last_row()->pertanyaan;
				echo $komentar;
	=====*/

				$email ='fadhlimaulidri@gmail.com';

			$this->load->library('email');

			$this->email->from('konsultasi@saspazh.com', 'klinikgigithedentist');
			$this->email->to("$email"); 
			$this->email->cc('saspazh@gmail.com'); 
			$this->email->bcc('konsultasi@saspazh.com'); 

			$this->email->subject("Email saspazh");
			$this->email->message("
	Konsultasi: 
	Isi email

	Reply admin saspazh : 
	komentar

	"); 

			$this->email->send();
	/*======================================*/
	
	}
	
	function index(){
		if(($this->session->userdata('login')=='customer') or ($this->session->userdata('login')=='admin')){
			redirect('checkout/login');
		}else{
			$data['title']='Saspazh | Checkout';
			$data['page']='v_vintage';
			//$this->load->view("shopper_new",$data);

			$this->load->view("vintage/index",$data);
		}
	}

	function login(){
		if(($this->session->userdata('login')=='customer') or ($this->session->userdata('login')=='admin')){
			
			$data['title']='Saspazh | Checkout';
			$data['judul']='Checkout';
			

			$username = $this->session->userdata('username');
			$data['db']=$this->m_checkout->getlogin($username);

			$data['page']='v_vintage_login';
			//$this->load->view("shopper_new",$data);

			$this->load->view("vintage/index",$data);
		}else{
			redirect('checkout');
		}
	}
	
/*================================================================================*/	
	function shipping(){
		$data['title']='Saspazh | Shipping';
		$data['page']='shipping';
		$this->load->view("shopper_new",$data);
	}
	function saveshipping(){
		$first_name = $this->input->post('first_name');
		$last_name = $this->input->post('last_name');
		$email = $this->input->post('email');
		$no_hp = $this->input->post('no_hp');
		
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		
		$company = $this->input->post('company');
		$addres= $this->input->post('address1');
		$address= $this->input->post('address2');
		$city= $this->input->post('city');
		$province= $this->input->post('province');
		$status= $this->input->post('status');
		
		$shipping= array('first_name' => $first_name,
						'last_name' => $last_name,
						'email' => $email,
						'no_hp' => $no_hp,
						'username' => $username,
						'password'=>$password,
						'company'=>$company,
						'address1'=>$addres,
						'address2'=>$address,
						'city'=>$city,
						'province'=>$province,
						'status'=>$status
		);
//		$this->m_checkout->save($shipping);
		
		$this->session->set_userdata($shipping);
		redirect('checkout/review');
		
	}
	
	function billing(){
		$data['title']='Saspazh | Cart';
		$data['page']='billing';
		$this->load->view("shopper_new",$data);
	}
	
	function review(){
		if(($this->session->userdata('login')=='customer') or ($this->session->userdata('login')=='admin')){

			$username = $this->session->userdata('username');
			$data['bio'] = $this->m_checkout->get_bio($username);
			$data['page']='review_customer';
		}else{
			
			
			$data['page']='review';
		}
		
		$data['title']='Saspazh | Cart';
		$this->load->view("shopper_new",$data);	
		
	}
	
	function confirm_customer(){
		
		$username = $this->session->userdata('username');
		$customer= $this->m_checkout->get_bio($username);

		
		$email=$customer->email;
		$no_hp=$customer->no_hp;
		$id_customer = $customer->id_customer;

		$order = $this->db->query("SELECT no_order, SUBSTRING( no_order, 10, 3 ) AS no_urutorder FROM  `transaksi`");
		if($order->num_rows()>0){
			$urut = $order->last_row()->no_urutorder;
			$urut= $urut + 1;
		}else{
			$urut= 1;
		}
			
		$autoNum = $urut;
				
		$tahunfix = date('ymd'); 
		if($autoNum<10)
		$autoNum = "00".$id_customer.$tahunfix."00".$autoNum;
		elseif($autoNum<100)
		$autoNum = "0".$id_customer.$tahunfix."0".$autoNum;
		elseif($autoNum<1000)
		$autoNum = $id_customer.$tahunfix.$autoNum;
		$no_order= $autoNum;
		
		$transaksi= array('id_customer' => $id_customer,
						  'no_order' => $no_order,
						  'tgl_order' => date('Y-m-d H:m:s')
		);
		$this->m_checkout->savetransaksi($transaksi);

		foreach($this->cart->contents() as $items){
			
			$id_product = $items['id'];
			$qty = $items['qty'];
			$size = $items['size'];
			
			$stok = $this->db->query("SELECT id_stok 
			FROM  stok a, barang b, product c 
			WHERE c.id_product = '$id_product' AND b.size = '$size' LIMIT 0,$qty")->result();
			
				foreach($stok as $dsa){
					$dsa->id_stok;
					$id_customer = $customer->id_customer;

					$ttt = $this->db->query("SELECT id_transaksi
FROM  transaksi 
WHERE id_customer = '$id_customer'
AND no_order = '$no_order'
");
					
					$penjualan= array('id_stok' => $dsa->id_stok,
									  'id_transaksi' => $ttt->last_row()->id_transaksi,
									  'tanggal' => date('Y-m-d')
					);
					$this->m_checkout->savepenjualan($penjualan);
					$zzz = array('status' => 0);
					$this->m_checkout->updatestok($zzz,$dsa->id_stok);
				}
		}
		$this->session->sess_destroy();
		redirect("checkout/note/$no_order");
		
	}
	

	//checkout untuk QB
	function confirm(){
		
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$no_hp = $this->input->post('no_hp');
		$provinsi = $this->input->post('provinsi');
		$kota = $this->input->post('kota');
		$kecamatan = $this->input->post('kecamatan');
		$kodepos = $this->input->post('kodepos');
		$alamat = $this->input->post('alamat');

		$message = $this->input->post('message');

		$payment_method = $this->input->post('payment-method');


		$customer= array(
						'first_name' => $nama,
						'email' => $email,
						'no_hp' => $no_hp,
						'province'=>$provinsi,
						'city'=>$kota,
						'kecamatan'=>$kecamatan,
						'kodepos'=>$kodepos,
						'address'=>$alamat,
						'status'=>'0',
						'jenis'=>'QB'
		);


		$this->m_checkout->save($customer);
		

		
		$auto = $this->db->query("SELECT id_customer 
FROM  `customer` 
WHERE email = '$email'
AND no_hp = '$no_hp'
ORDER BY  `customer`.`id_customer` DESC limit 0,1
");
/*==========================transaksi===================================*/
		$id_customer = $auto->last_row()->id_customer;

		$order = $this->db->query("SELECT no_order, SUBSTRING( no_order, 10, 3 ) AS no_urutorder
FROM  `transaksi`");
	if($order->num_rows()>0){
		$urut = $order->last_row()->no_urutorder;
		$urut= $urut + 1;
	}else{
		$urut= 1;
	
	}
			
//	echo	$idNum = substr($auto2,13,-4);
		$autoNum = $urut;
//		$autoNum = '1';

				
		$tahunfix = date('ymd'); 
		if($autoNum<10)
		$autoNum = "00".$id_customer.$tahunfix."00".$autoNum;
		elseif($autoNum<100)
		$autoNum = "0".$id_customer.$tahunfix."0".$autoNum;
		elseif($autoNum<1000)
		$autoNum = $id_customer.$tahunfix.$autoNum;
		$no_order= $autoNum;
		
//		$no_order=1;
		$transaksi= array('id_customer' => $id_customer,
						  'no_order' => $no_order,

						  'nama_customer' => $nama,
						  'email' => $email,
						  'no_hp' => $no_hp,
						  'propinsi' => $provinsi,
						  'kota' => $kota,
						  'kecamatan' => $kecamatan,
						  'alamat' => $alamat,
						  'kodepos' => $kodepos,
						  'note' => $message,

						  'tgl_order' => date('Y-m-d H:m:s'),
						  'payment_method' => $payment_method
		);
		$this->m_checkout->savetransaksi($transaksi);
/*=============================================================*/

		
/*==============================penjualan===============================*/
		foreach($this->cart->contents() as $items){
			
			$id_product = $items['id'];
			$qty = $items['qty'];
			$size = $items['size'];
			
			$stok = $this->db->query("SELECT id_stok 
			FROM stok a, barang b, product c
			WHERE a.id_barang = b.id_barang
			AND b.id_product = c.id_product
			AND c.id_product = '$id_product'
			AND b.size = '$size'
			LIMIT 0,$qty")->result();
			
				foreach($stok as $dsa){
					$dsa->id_stok;
					$id_customer = $auto->last_row()->id_customer;
					$ttt = $this->db->query("SELECT id_transaksi
FROM  transaksi 
WHERE id_customer = '$id_customer'
AND no_order = '$no_order'
");
					
					$penjualan= array('id_stok' => $dsa->id_stok,
									  'id_transaksi' => $ttt->last_row()->id_transaksi,
									  'tanggal' => date('Y-m-d')
					);
					$this->m_checkout->savepenjualan($penjualan);
					$zzz = array('status' => 0);
					$this->m_checkout->updatestok($zzz,$dsa->id_stok);
				}
		}
		$this->session->sess_destroy();
		redirect("checkout/note/$no_order");
		
	}

	function create_trx(){
		
		$username = $this->session->userdata('username');
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$no_hp = $this->input->post('no_hp');
		$provinsi = $this->input->post('provinsi');
		$kota = $this->input->post('kota');
		$kecamatan = $this->input->post('kecamatan');
		$kodepos = $this->input->post('kodepos');
		$alamat = $this->input->post('alamat');
		$message = $this->input->post('message');
		$payment_method = $this->input->post('payment-method');

		//atur voucher
		if($this->session->userdata('jenis_voucher')=='mass'){
			//create vocuher singel
			$kode_voucher = $this->myfunction->generate_voucher(); //generate kode_voucher singel
			$kode_event = $this->session->userdata('kode');
			$data = $this->m_voucher->create($kode_voucher,'available',date('Y-m-d H:i:s'),$kode_event); //create singel voucher
			$singel_voucher = $this->m_voucher->get_singel_voucher($kode_voucher); //get singel voucher berdasarkan kode voucher
		}elseif($this->session->userdata('jenis_voucher')=='singel'){
			$kode_voucher = $this->session->userdata('kode');
			$singel_voucher = $this->m_voucher->get_singel_voucher($kode_voucher); //get singel voucher berdasarkan kode voucher
		
		}

		
		//atur transaksi
		//save biodata customer	
		$customer= array(
						'first_name' => $nama,
						'email' => $email,
						'no_hp' => $no_hp,
						'province'=>$provinsi,
						'city'=>$kota,
						'kecamatan'=>$kecamatan,
						'kodepos'=>$kodepos,
						'address'=>$alamat,
						'status'=>'0',
						'jenis'=>'User'
		);
		$this->m_checkout->editsave($customer,$username);

		//get data user berdasarkan username
		$data_user = $this->m_checkout->get_bio($username);
		$id_customer = $data_user->id_customer;


		//get data order terakhir
		
		//generate no order

//		$order_segment = $this->myfunction->generate_no_order(date('ymd'));
		
		//get data order terakhir
		$segment_waktu = date('ymd');
		$data_order = $this->m_checkout->get_data_order($segment_waktu);

		if($data_order->num_rows()>0){
			$urut = $data_order->last_row()->no_urutorder;
			$urut= $urut + 1;
		}else{
			$urut= 1;
		
		}
		//generate no order
		$no_order = $this->myfunction->generate_no_order($urut);




		/**
		metode pembayaran
		//+++++++++++++++++++++++++++++++++++
			//bank transfer
		.. code
			//kartu kredit
		..	
		//+++++++++++++++++++++++++++++++++++
		*/
		$transaksi= array('id_customer' => $id_customer,
						  'nama_customer' => $nama,
						  'email' => $email,
						  'no_hp' => $no_hp,
						  'propinsi' => $provinsi,
						  'kota' => $kota,
						  'kecamatan' => $kecamatan,
						  'alamat' => $alamat,
						  'kodepos' => $kodepos,
						  'note' => $message,
						  'no_order' => $no_order,
						  'tgl_order' => date('Y-m-d H:m:s'),
						  'payment_method' => $payment_method,
						  'id_voucher' => $singel_voucher->id_voucher
		);
		$this->m_checkout->savetransaksi($transaksi);

		//get data trx
		$data_trx = $this->m_checkout->get_data_trx($no_order,$id_customer);


		//update status voucher menjadi used
		$datavoucher= array('status' => 'used',
						  'used_at' => date('Y-m-d H:i:s')
		);
		$this->m_voucher->updatevoucher($datavoucher,$kode_voucher);

		//input data penjualan
		foreach($this->cart->contents() as $items){
			
			$id_product = $items['id'];
			$qty = $items['qty'];
			$size = $items['size'];
			
			//get data stok
			$stok = $this->m_checkout->get_data_stok($id_product,$qty,$size);
			
			foreach($stok as $dsa){
				$dsa->id_stok;
				$id_customer = $data_user->id_customer;
				
					
				//simpan data penjualan
				/**
				$penjualan= array('id_stok' => $dsa->id_stok,
								  'id_transaksi' => $data_trx->last_row()->id_transaksi,
								  'tanggal' => date('Y-m-d')
				);
				$this->m_checkout->savepenjualan($penjualan);
				*/
				//update stok
				$zzz = array(
					'no_order' => $no_order
				);
				$this->m_checkout->updatestok($zzz,$dsa->id_stok);
			}
		}
		//kosongkan keranjang
		$this->cart->destroy();

		redirect("checkout/note/$no_order");

	}

	function create_trx_qb(){
		
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$no_hp = $this->input->post('no_hp');
		$provinsi = $this->input->post('provinsi');
		$kota = $this->input->post('kota');
		$kecamatan = $this->input->post('kecamatan');
		$kodepos = $this->input->post('kodepos');
		$alamat = $this->input->post('alamat');
		$message = $this->input->post('message');
		$payment_method = $this->input->post('payment-method');

		$token = $this->myfunction->generate_token();

		//atur voucher
		if($this->session->userdata('jenis_voucher')=='mass'){
			//create vocuher singel
			$kode_voucher = $this->myfunction->generate_voucher(); //generate kode_voucher singel
			$kode_event = $this->session->userdata('kode');
			$data = $this->m_voucher->create($kode_voucher,'available',date('Y-m-d H:i:s'),$kode_event); //create singel voucher
			$singel_voucher = $this->m_voucher->get_singel_voucher($kode_voucher); //get singel voucher berdasarkan kode voucher
		}elseif($this->session->userdata('jenis_voucher')=='singel'){
			$kode_voucher = $this->session->userdata('kode');
			$singel_voucher = $this->m_voucher->get_singel_voucher($kode_voucher); //get singel voucher berdasarkan kode voucher
		}
		//echo $singel_voucher->id_voucher

		
		//atur transaksi
		//save biodata customer	
		$customer= array(
						'first_name' => $nama,
						'email' => $email,
						'no_hp' => $no_hp,
						'province'=>$provinsi,
						'city'=>$kota,
						'kecamatan'=>$kecamatan,
						'kodepos'=>$kodepos,
						'address'=>$alamat,
						'status'=>'0',
						'jenis'=>'User'
		);
		$this->m_checkout->editsave($customer,$username);

		//get data user berdasarkan username
		$data_user = $this->m_checkout->get_bio($username);
		$id_customer = $data_user->id_customer;

		//get data order terakhir
		$segment_waktu = date('ymd');
		$data_order = $this->m_checkout->get_data_order($segment_waktu);

		if($data_order->num_rows()>0){
			$urut = $data_order->last_row()->no_urutorder;
			$urut= $urut + 1;
		}else{
			$urut= 1;
		
		}
		//generate no order
		$no_order = $this->myfunction->generate_no_order($urut);

		
		$transaksi= array('nama_customer' => $nama,
						  'email' => $email,
						  'no_hp' => $no_hp,
						  'propinsi' => $provinsi,
						  'kota' => $kota,
						  'kecamatan' => $kecamatan,
						  'alamat' => $alamat,
						  'kodepos' => $kodepos,
						  'note' => $message,
						  'no_order' => $no_order,
						  'tgl_order' => date('Y-m-d H:m:s'),
						  'payment_method' => $payment_method,
						  'id_voucher' => $singel_voucher->id_voucher,
						  'token' => $token

		);
		$this->m_checkout->savetransaksi($transaksi);

		//get data trx
		$data_trx = $this->m_checkout->get_data_trx($no_order,$id_customer,$token);


		//update status voucher menjadi used
		$datavoucher= array('status' => 'used',
						  'used_at' => date('Y-m-d H:i:s')
		);
		$this->m_voucher->updatevoucher($datavoucher,$kode_voucher);

		//input data penjualan
		foreach($this->cart->contents() as $items){
			
			$id_product = $items['id'];
			$qty = $items['qty'];
			$size = $items['size'];
			
			//get data stok
			$stok = $this->m_checkout->get_data_stok($id_product,$qty,$size);
			
			foreach($stok as $dsa){
				$dsa->id_stok;
				
				/**	
				//simpan data penjualan
				$penjualan= array('id_stok' => $dsa->id_stok,
								  'id_transaksi' => $data_trx->last_row()->id_transaksi,
								  'tanggal' => date('Y-m-d')
				);
				$this->m_checkout->savepenjualan($penjualan);
				*/
				//update stok
				$zzz = array(
					'no_order' => $no_order
				);

				$this->m_checkout->updatestok($zzz,$dsa->id_stok);
			}
		}
		//kosongkan keranjang
		$this->cart->destroy();

		redirect("checkout/note/$no_order/$token");
		
	}	




	function confirmx(){
	//	$this->load->library(array('cart')); // Load our cart model for our entire class
		
		$customer= array('first_name' => $this->session->userdata('first_name'),
						'last_name' => $this->session->userdata('last_name'),
						'company'=>$this->session->userdata('company'),
						'address1'=>$this->session->userdata('address1'),
						'address2'=>$this->session->userdata('address2'),
						'city'=>$this->session->userdata('city'),
						'province'=>$this->session->userdata('province'),
						'no_hp' => $this->session->userdata('no_hp'),
						'email' => $this->session->userdata('email'),
						'username' => $this->session->userdata('username'),
						'password'=>$this->session->userdata('password'),
						'receive'=>$this->input->post('receive'),
						'status'=>$this->session->userdata('status'),
		);
		$this->m_checkout->save($customer);
		
		$email=$this->session->userdata('email');
		$no_hp=$this->session->userdata('no_hp');
		
		$auto = $this->db->query("SELECT id_customer 
FROM  `customer` 
WHERE email = '$email'
AND no_hp = '$no_hp'
ORDER BY  `customer`.`id_customer` DESC limit 0,1
");
/*==========================transaksi===================================*/
		$id_customer = $auto->last_row()->id_customer;

		$order = $this->db->query("SELECT no_order, SUBSTRING( no_order, 10, 3 ) AS no_urutorder
FROM  `transaksi`");
	if($order->num_rows()>0){
		$urut = $order->last_row()->no_urutorder;
		$urut= $urut + 1;
	}else{
		$urut= 1;
	
	}
			
//	echo	$idNum = substr($auto2,13,-4);
		$autoNum = $urut;
//		$autoNum = '1';

				
		$tahunfix = date('ymd'); 
		if($autoNum<10)
		$autoNum = "00".$id_customer.$tahunfix."00".$autoNum;
		elseif($autoNum<100)
		$autoNum = "0".$id_customer.$tahunfix."0".$autoNum;
		elseif($autoNum<1000)
		$autoNum = $id_customer.$tahunfix.$autoNum;
		$no_order= $autoNum;
		
//		$no_order=1;
		$transaksi= array('id_customer' => $id_customer,
						  'no_order' => $no_order,
						  'tgl_order' => date('Y-m-d H:m:s')
		);
		$this->m_checkout->savetransaksi($transaksi);
/*=============================================================*/

		
/*==============================penjualan===============================*/
		foreach($this->cart->contents() as $items){
			
			$id_product = $items['id'];
			$qty = $items['qty'];
			$size = $items['size'];
			
			$stok = $this->db->query("SELECT id_stok 
			FROM stok a, barang b, product c
			WHERE a.id_barang = b.id_barang
			AND b.id_product = c.id_product
			AND c.id_product = '$id_product'
			AND b.size = '$size'
			LIMIT 0,$qty")->result();
			
				foreach($stok as $dsa){
					$dsa->id_stok;
					$id_customer = $auto->last_row()->id_customer;
					$ttt = $this->db->query("SELECT id_transaksi
FROM  transaksi 
WHERE id_customer = '$id_customer'
AND no_order = '$no_order'
");
					
					$penjualan= array('id_stok' => $dsa->id_stok,
									  'id_transaksi' => $ttt->last_row()->id_transaksi,
									  'tanggal' => date('Y-m-d')
					);
					$this->m_checkout->savepenjualan($penjualan);
					$zzz = array('status' => 0);
					$this->m_checkout->updatestok($zzz,$dsa->id_stok);
				}
		}
		$this->session->sess_destroy();
		redirect("checkout/note/$no_order/$token");
		
	}
	
	function note(){
		$data['title']='Saspazh | Note';
	
			$id = $this->uri->segment(3);
			$token = $this->uri->segment(4);

            $data['db'] = $this->m_checkout->getdata($id,$token);

            $arrayName = array(
    	 		'id_voucher' =>'',
            	'voucher_kode' =>'',
            	'voucher_harga' =>'',
    	 		'voucher_persen' =>'',
    	 		'voucher_min_trx' =>'', 
    	 		'voucher_max_trx' =>'',
    	 	);

    	 	$this->session->unset_userdata($arrayName);

			 if($data['db']){
                //$data['page']='note';
				$data['page']='note_vintage';
				$this->load->view("vintage/index",$data);
             }else {
                 show_404();
             }
	}
/*================================================================================*/	
	
	function tambah()
	{
		$id = $this->input->post('id_barang'); // Assign posted product_id to $id
		$cty = 1; // Assign posted quantity to $cty
		$size = $this->input->post('size');
		
//		$this->db->where('id_barang', $id); // Select where id matches the posted id
//		$query = $this->db->get('barang', 1); // Select the products where a match is found and limit the query by 1
		
		$this->db->select('a.id_barang, a.id_kategori, a.id_poto, a.nama_barang, a.color, a.price, b.file_name, b.path');
		$this->db->where('a.id_poto = b.id_poto');
		$this->db->where('a.id_barang', $id); 
        $query = $this->db->get('barang a, poto b',1);
//		return $query->result();
		
		// Check if a row has been found
		if($query->num_rows > 0){
		
			foreach ($query->result() as $row)
			{
			    $data = array(
               		'id'      => $id,
               		'qty'     => $cty,
               		'file_name'    => $row->file_name,
               		'name'    => $row->nama_barang,
               		'color'    => $row->color,
               		'size'    => $size,
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
	    $qty = $this->input->post('qty');

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