<?php
class Admin_transaksi extends Controller{
    function  __construct() {
        parent::Controller();
		$this->load->model('m_admin_transaksi');
		$this->load->model('mymodel');

    }
	
    function index(){
       if ($this->session->userdata('login') == 'admin'){
          $data['title'] = "Manage Transaction";
             		   
		   $status=1;
           $data['title'] = $type;
           $data['data_list'] = $this->m_admin_transaksi->get_latest();
           $data['noUrut'] = 1;
           $data['page'] = 'v';
           $this->load->view("edumix",$data);

        }else{
             redirect('user/index');
       }
    }

	function detail(){
       if ($this->session->userdata('login') == 'admin'){
          $data['title'] = "Detail";
             
             $id = $this->uri->segment(3);
             if($id){
			 
				$data['db'] = $this->m_admin_transaksi->get_transaksi($id); 
				
                $data['noUrut']=1;
                $data['data_list'] = $this->m_admin_transaksi->detail($id);
                $data['page'] = "v_penjualan";
                $this->load->view("sb-admin",$data);
             }else {
                 show_404();
             }
        }else{
             redirect('user/index');
       }
    }
	
	function excel(){
       if ($this->session->userdata('login') == 'admin'){
          $data['title'] = "Detail";
             
             $id = $this->uri->segment(3);
             if($id){
			 
				$data['db'] = $this->m_admin_transaksi->get_transaksi($id); 
				
                $data['noUrut']=1;
                $data['data_list'] = $this->m_admin_transaksi->detail($id);
                $data['page'] = "v_penjualan";
                $this->load->view("e",$data);
             }else {
                 show_404();
             }
        }else{
             redirect('user/index');
       }
    }
	
    /*====================distributor========================*/
	function v(){
      if ($this->session->userdata('login_admin') == TRUE){
		   $type = $this->uri->segment(3);
		   
		   $status=1;
           $data['title'] = $type;
           $data['data_list'] = $this->m_admin_transaksi->get_order($type);
           $data['noUrut'] = 1;
           $data['page'] = 'v_order';
           $this->load->view("sb-admin",$data);
        }else{
             redirect('user/index');
        }
    }
	
	function add(){
      if ($this->session->userdata('login') == 'admin'){
		
		$type = $this->uri->segment(3);
		$data['noUrut'] = 1;
		$data['data_list'] = $this->m_admin_transaksi->get_barang();
		
           $data['title'] = $type;
           $data['page'] = "order/add";
           $this->load->view("sb-admin",$data);
        }else{
             redirect('user/index');
        }
    }
	
	function save_distributor(){
        if ($this->session->userdata('login_admin') == TRUE){
     	
			$type = $this->input->post('type');
			$first = $this->input->post('first');
			$last = $this->input->post('last');
			$address1 = $this->input->post('address1');
			$city = $this->input->post('city');
			$province = $this->input->post('province');
			$mobile = $this->input->post('mobile');
			$email = $this->input->post('email');
			$receive = $this->input->post('receive');
			
						 
				

				$insert = array(
					'first_name' => $first,
					'last_name' => $last,
					'address1' => $address1,
					'city' => $city,
					'province' => $province,
					'no_hp' => $mobile,
					'email' => $email,
					'receive' => $receive,
					'type' => $type
				);
				$this->m_admin_transaksi->save($insert);
				
			$this->session->set_flashdata('message','Berhasil Diinput!');
			redirect('admin_transaksi/v/'.$type);	
			
		
        
        }else{
             redirect('user/index');
        }
    }
	
	
	//=====================================member====================================
	function add_member(){
//      if ($this->session->userdata('login_admin') == TRUE){
     	   
           $data['title'] = "Member";
           $data['page'] = "member/add";
           $this->load->view("sb-admin",$data);
  //      }else{
    //         redirect('user/index');
      //  }

    }

    function member(){
      if ($this->session->userdata('login_admin') == TRUE){
		   $status=1;
           $data['title'] = "Member";
           $data['data_list'] = $this->m_admin_transaksi->get_customer($status);
           $data['noUrut'] = 1;
           $data['page'] = "member/v";
           $this->load->view("sb-admin",$data);
        }else{
             redirect('user/index');
        }
    }
	
    /*====================guest========================*/
	function guest(){
//      if ($this->session->userdata('login_admin') == TRUE){
		   $status=0;
           $data['title'] = "Member";
           $data['data_list'] = $this->m_admin_transaksi->get_customer($status);
           $data['noUrut'] = 1;
           $data['page'] = "member/v";
           $this->load->view("sb-admin",$data);
  //      }else{
    //         redirect('user/index');
      //  }
    }
	
	function saveorder(){
		$id_customer = $this->input->post('id_customer');
		$id_barang = $this->input->post('id_barang');
		$jumlah = $this->input->post('jumlah');
		$size = $this->input->post('size');
		$a = count($id_barang);
		
//		echo $a;
		for($i=0; $i<$a; $i++){
			if(empty($jumlah[$i])){
				$jumlah[$i]=0;
			}else{
				echo $id_customer.' '.$id_barang[$i].' '.$jumlah[$i].' '.$size[$i].'<br>';
			
				$stok = $this->db->query("SELECT a.id_stok, a.id_barang, a.size, b.id_penjualan 
				FROM stok a
				LEFT OUTER JOIN penjualan b ON a.id_stok = b.id_stok
				WHERE b.id_penjualan IS NULL 
				AND a.id_barang =  '$id_barang[$i]'
				AND a.size =  '$size[$i]'
				LIMIT 0 , $jumlah[$i]")->result();
				foreach($stok as $stoks){
					echo $stoks->id_stok.'<br>';
				}
			}
			
		}
		
	}
	
	
	function save(){
	
		$id_customer = $this->input->post('id_customer');
		$jenis = $this->input->post('jenis');
		$date = date('Y-m-d H:i:s');
		
		$sqlid_transaksi = $this->db->query("SELECT * FROM  `transaksi` ORDER BY  `transaksi`.`id_transaksi` DESC LIMIT 0 , 1");
		if($sqlid_transaksi->num_rows()>0){
			$id_transaksi = $sqlid_transaksi->last_row()->id_transaksi;
			$id_transaksi= $id_transaksi + 1;
		}else{
			$id_transaksi= 1;
		}
		
		
		
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
		$no_order = $autoNum;
		
		$insert= array('id_transaksi' => $id_transaksi,
						'id_customer' => $id_customer,
						'no_order' => $no_order,
						'tgl_order' => $date,
						'status' => 1
		);
		$this->m_admin_transaksi->save($insert);
	//if($this->m_admin_transaksi->save($insert)){
	
		$id_customer = $this->input->post('id_customer');
		$id_barang = $this->input->post('id_barang');
		$price = $this->input->post('price');
		$jumlah = $this->input->post('jumlah');
		$size = $this->input->post('size');
		$a = count($id_barang);
		
//		echo $a;
		for($i=0; $i<$a; $i++){
			if(empty($jumlah[$i]) or empty($price[$i])){
				$jumlah[$i]=0;
			}else{
				//echo $id_customer.' '.$id_barang[$i].' '.$jumlah[$i].' '.$size[$i].'<br>';
			
				$stok = $this->db->query("SELECT a.id_stok, a.id_barang, a.size, b.id_penjualan 
				FROM stok a
				LEFT OUTER JOIN penjualan b ON a.id_stok = b.id_stok
				WHERE b.id_penjualan IS NULL 
				AND a.id_barang =  '$id_barang[$i]'
				AND a.size =  '$size[$i]'
				LIMIT 0 , $jumlah[$i]")->result();
				foreach($stok as $stoks){
					//echo $stoks->id_stok.'<br>';
					$insert= array('id_stok' => $stoks->id_stok,
						'id_transaksi' => $id_transaksi,
						'tanggal' => $date,
						'price' => $price[$i],
						'status' => $jenis
					);
					$this->m_admin_transaksi->save_penjualan($insert);
				}
			}
		}
	//}else{
	//	echo 'gagal insert';
	//}
	
		redirect('admin_transaksi/v_order/'.$id_transaksi);
    
    }
	
	function edit(){
       if ($this->session->userdata('login_admin') == TRUE){
             
             $type = $this->uri->segment(3);
             $id = $this->uri->segment(4);
             if($id){
				$data['title'] = $type;
                
                $data['db'] = $this->m_admin_transaksi->getdata($id);
                $data['page'] = $type.'/edit';
                $this->load->view("sb-admin",$data);
             }else {
                 show_404();
             }
        }else{
             redirect('user/index');
        }
    }

	function editsave(){         
		$id = $this->input->post('id');
		$type = $this->input->post('type');
		$first = $this->input->post('first');
		$last = $this->input->post('last');
		$address1 = $this->input->post('address1');
		$city = $this->input->post('city');
		$province = $this->input->post('province');
		$mobile = $this->input->post('mobile');
		$email = $this->input->post('email');
		$receive = $this->input->post('receive');
		
					 
			
		$insert = array(
				'first_name' => $first,
				'last_name' => $last,
				'address1' => $address1,
				'city' => $city,
				'province' => $province,
				'no_hp' => $mobile,
				'email' => $email,
				'receive' => $receive,
				'type' => $type
		);
		$this->m_admin_transaksi->editsave($insert,$id);
				
        $this->session->set_flashdata('message',' Berhasil Diedit!');
        redirect('admin_transaksi/v/'.$type);
				 
	}
	
	

	function delete(){
         $type = $this->uri->segment(4);
         $id = $this->uri->segment(3);
         if ($id){
             $this->m_admin_transaksi->delete($id);
             $this->session->set_flashdata('hapus','Berhasil Dihapus!');
             redirect('admin_transaksi/v/'.$type);
         }else{
             show_404();
         }
    }
	
}

?>
