<?php
class Admin_barcode extends Controller{
    function  __construct() {
        parent::Controller();
		$this->load->helper(array('form', 'url', 'file'));
		$this->load->model('m_admin_barcode');

    }

    function index(){
      if ($this->session->userdata('login') == 'admin'){
           $data['data_list'] = $this->m_admin_barcode->get_product();
		   
           $data['title'] = "News";
           $data['noUrut'] = 1;
           $data['page'] = "v";
           $this->load->view("edumix",$data);
           
        }else{
             redirect('user');
        }

    }

    function generate(){
    	$data['id_barang'] = $this->input->post('id_barang');
		$data['serial']  = $this->input->post('serial');
		$data['price']  = $this->input->post('price');
		$data['nama_product']  = $this->input->post('nama_product');
		$data['size']  = $this->input->post('size');
		$data['qty'] = $this->input->post('qty');
		
		$data['count'] = count($data['id_barang']);
				

		$this->load->view("print_barcode",$data);
	}

    function barcode(){		
		$this->load->library('ciqrcode');
		$get= $this->m_admin_barcode->get_stok();
		foreach($get as $stok){	
			
			$params['data'] = $stok->serial;
			$params['level'] = 'H';
			$params['size'] = 10;
			$params['savename'] = FCPATH.'barcode/'.$stok->serial.'-'.$stok->nama_product.'-'.$stok->size.'.png';
			$this->ciqrcode->generate($params);
			//echo '<img src="'.base_url().'barcode/tes.png" />';

			$this->session->set_flashdata('message','Berhasil generate');
			redirect("admin_barcode");
		}
	}
	
	function print_barcode(){
		
		$this->load->view("print_barcode",$data);
		//$this->load->view("export_jpg");
	}
	
	function detail(){
       if ($this->session->userdata('login_admin') == TRUE){
          $data['title'] = "Detail";
             
             $id = $this->uri->segment(3);
             if($id){
                $data['noUrut']=1;
                $data['data_list'] = $this->m_admin_stok->detail($id);
                $data['page'] = "v_stok";
                $this->load->view("sb-admin",$data);
             }else {
                 show_404();
             }
        }else{
             redirect('user/index');
       }
    }
	
	function save_import(){
		$config['upload_path'] = './temp_upload/';
		$config['allowed_types'] = 'xls|xlsx';
		
		$id_barang = $this->input->post('id_barang');
		
		$username = $this->session->userdata('username');
		
		
		//=====================================================================
		$kategori= $this->db->query("SELECT id_kategori FROM  `barang` where id_barang = '$id_barang'");
		$urutkategori = $kategori->last_row()->id_kategori;
		
		
			
		//=====================================================================
		 
                
		$this->load->library('upload', $config);
                

		if ( ! $this->upload->do_upload())
		{
			$data = array('error' => $this->upload->display_errors());
			
		}
		else
		{
            $data = array('error' => false);
			$upload_data = $this->upload->data();

            $this->load->library('excel_reader');
			$this->excel_reader->setOutputEncoding('CP1251');

			$file =  $upload_data['full_path'];
			$this->excel_reader->read($file);
			error_reporting(E_ALL ^ E_NOTICE);

			// Sheet 1
			$data = $this->excel_reader->sheets[0] ;
                        $dataexcel = Array();
			for ($i = 1	; $i <= $data['numRows']; $i++) {
			

                            if($data['cells'][$i][1] == '') break;
							
							$dataexcel[$i-1]['id_barang'] = $id_barang;
                            $dataexcel[$i-1]['id_dealer'] = $id_dealer;
							$dataexcel[$i-1]['gear'] = $data['cells'][$i][1];
							$dataexcel[$i-1]['size'] = $data['cells'][$i][2];
							
			}
			
			
            for($i=1; $i<count($dataexcel);$i++){
				
//				echo $id_barang.'  '.$dataexcel[$i]['gear'].' '.$dataexcel[$i]['size'].'<br>';
				//	echo	$idNum = substr($auto2,13,-4);
				$autoNum = $i;
//		$autoNum = '1';		
				$tahunfix = date('ymdHis'); 
				if($autoNum<10)
				$autoNum = $urutkategori.$tahunfix."00".$autoNum;
				elseif($autoNum<100)
				$autoNum = $urutkategori.$tahunfix."0".$autoNum;
				elseif($autoNum<1000)
				$autoNum = $urutkategori.$tahunfix.$autoNum;
				$no_order= $autoNum;
				
				$serial= $no_order;
				
				$insert = array('id_barang' => $id_barang,'serial' => $serial,'size' => $dataexcel[$i]['size'],'tanggal' => date('Y-m-d H:m:s'));
				$this->m_admin_stok->save($insert);
			}            
                        
            delete_files($upload_data['file_path']);

		}

			

			$this->session->set_flashdata('message','Berhasil Diinput!');
  		    redirect('admin_stok');

	}
	
	//===========================================================================================================
	
	
	function import(){
//      if ($this->session->userdata('login_admin') == TRUE){
           
           $data['title'] = "Stok";
           $data['page'] = "import_excel";
           $this->load->view("sb-admin",$data);
  //      }else{
    //         redirect('user/index');
      //  }

    }
	
	function zend_barcode($visitor_id){
		
		$this->load->library('zend');
        $this->zend->load('Zend/Barcode');
 
        Zend_Barcode::render('code39', 'image', array('text' => $visitor_id), array());
 
	}
	
	function cebong(){
		
		$this->load->library('ciqrcode');

			
			$params['data'] = 'http://localhost/onlineshop/product/detail/7';
			$params['level'] = 'H';
			$params['size'] = 10;
			$params['savename'] = FCPATH.'barcode/cebong.png';
			$this->ciqrcode->generate($params);

			echo '<img src="'.base_url().'barcode/cebong.png" />';
		
	}
	
	
	
	
    
    

    function all(){
      if ($this->session->userdata('login_admin') == TRUE){
           
           $data['t_awal'] = $this->input->post('t_awal');
           $data['b_awal'] = $this->input->post('b_awal');
           $data['tgl_awal'] = $this->input->post('tgl_awal');

           if($data['t_awal'] AND $data['b_awal'] AND $data['tgl_awal']){
           
           }else{
           		$where = " ";

           	$data['t_awal'] = date('Y');
           	$data['b_awal'] = date('m');
           	$data['tgl_awal'] = date('d');
           }

           $data['title'] = "Dashboard";
           $data['noUrut'] = 1;
           $data['data_list'] = $this->m_admin_stok->get_all($where);
		   


           
           $data['page'] = "all";
           $this->load->view("edumix",$data);
        }else{
             redirect('user');
        }

    }
	
	function add(){
      if ($this->session->userdata('login') == 'admin'){
     	   
           $data['title'] = "Stok";
           $data['page'] = "add";
           $this->load->view("sb-admin",$data);
        }else{
             redirect('user/index');
        }

    }
	
	function tes(){
		$userfile= $this->input->post('userfile');
		echo count($userfile);
	}
	
	function do_upload()
	{
	
		$t=date('Ymd');
		$auto = $this->db->query("SELECT file_name, SUBSTRING( file_name, 5, 8 ) AS tgl, SUBSTRING( file_name, 14, 4 ) AS urut
FROM  `poto` 
WHERE SUBSTRING( file_name, 5, 8 ) =  '$t'
ORDER BY  `poto`.`file_name` DESC 
LIMIT 0 , 1");
	if($auto->num_rows()>0){
		$urut = $auto->last_row()->urut;
		$urut= $urut + 1;
	}else{
		$urut= 1;
	
	}
			
//	echo	$idNum = substr($auto2,13,-4);
		$autoNum = $urut;
//		$autoNum = '1';

				
		$tahunfix = date('Ymd');
		if($autoNum<10)
		$autoNum = "IMG-".$tahunfix."-000".$autoNum;
		elseif($autoNum<100)
		$autoNum = "IMG-".$tahunfix."-00".$autoNum;
		elseif($autoNum<1000)
		$autoNum = "IMG-".$tahunfix."-0".$autoNum;
		elseif($autoNum<10000)
		$autoNum = $autoNum;
		$file_name= $autoNum;

//		$file_name= 'IMG-20140407-0001';
	
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '10000';
		$config['max_width']  = '10240';
		$config['max_height']  = '7680';
		$config['file_name']  = $file_name;


		$this->load->library('upload', $config);


		if ( ! $this->upload->do_upload())
		{
			$data['error'] = $this->upload->display_errors();
			$data['title']= 'Barang';
			$data['page']= 'add';
			$this->load->view('sb-admin', $data);
		}
		else
		{

		
			$auto = $this->db->query("SELECT * FROM  `barang` ORDER BY  `barang`.`id_barang` DESC LIMIT 0 , 1");
			if(!empty($auto->last_row()->id_barang)){
				$id_barang= $auto->last_row()->id_barang + 1;
			}else{
				$id_barang= 1;
			}
			$nama_barang= $this->input->post('nama_barang');
			$id_kategori= $this->input->post('kategori');
	        $color= $this->input->post('color');
	        $harga= $this->input->post('harga');
			
			$data['upload_data'] = $this->upload->data();
			$poto = $data['upload_data'];
			$judul = $this->input->post('judul');
            $description = $this->input->post('description');
			//$highlight = $this->input->post('highlight');
			$date=date('Y-m-d');
			$datetime=date('Y-m-d H:m:s');

			$barang = array('id_barang' => $id_barang,'id_kategori' => $id_kategori,'nama_barang' => $nama_barang,'color' => $color,'price' => $harga,'description'=>$description,'waktu'=>$datetime);
			$this->m_admin_barang->save($barang);
			$poto = array('id_barang' => $id_barang,'file_name' => $poto['file_name'],'judul'=>$nama_barang,'path' => 'uploads/','tanggal'=>$date);
			$this->m_admin_barang->savepoto($poto);

			redirect('admin_barang');
			// $data['title']= 'Galeri';
			// $data['page']= 'v';
			// $this->load->view('template_admin', $data);

		}
	}
	
	function save(){
        
        $id_barang= $this->input->post('id_barang');
        $qty= $this->input->post('qty');
        
		
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
					 
			

			$insert = array('id_barang' => $id_barang,'serial' => $serial,'tanggal' => date('Y-m-d H:m:s'));
			$this->m_admin_stok->save($insert);
		}
			
		$this->session->set_flashdata('message','Berhasil Diinput!');
        redirect('admin_stok');	

    }
	
	function edit(){
//       if ($this->session->userdata('login_admin') == TRUE){
          $data['title'] = "Edit post";
             
             $id = $this->uri->segment(3);
             if($id){
                
                $data['db'] = $this->m_admin_barang->getdata($id);
                $data['page'] = "edit";
                $this->load->view("sb-admin",$data);
             }else {
                 show_404();
             }
//        }else{
//             redirect('user/index');
//       }
    }

	function editsave(){         

                 $id_kategori= $this->input->post('id_kategori');
				 $kategori= $this->input->post('kategori');

					
						
						$insert = array('id_kategori' => $id_kategori,'nama_kategori' => $kategori);
						$this->m_admin_kategori->editsave($insert,$id_kategori);
                        $this->session->set_flashdata('message',' Berhasil Diedit!');
                        redirect('admin_kategori');
				 
	}
	
	

	function delete(){
         $id = $this->uri->segment(3);
         $id_b = $this->uri->segment(4);
         if ($id){
             $this->m_admin_stok->delete($id);
             $this->session->set_flashdata('hapus','Berhasil Dihapus!');
             redirect("admin_stok/detail/$id_b");
         }else{
             show_404();
         }
    }
	
	function set_terjual(){
      if ($this->session->userdata('login_admin') == TRUE){
           
		   $id=$this->uri->segment(3);
		   $data['id_barang']=$this->uri->segment(4);
		   $data['db'] = $this->m_admin_stok->getdata($id);
		   
           $data['title'] = "Set Terjual";
           $data['page'] = "set_terjual";
           $this->load->view("sb-admin",$data);
        }else{
           redirect('user');
        }

    }
	function save_set_terjual(){
		if ($this->session->userdata('login_admin') == TRUE){
			$id_barang = $this->input->post('id_barang');
			
			$id_stok = $this->input->post('id_stok');
			$hpp = $this->input->post('hpp');
			$price = $this->input->post('price');
			$margin = $this->input->post('margin');
			$margin_nominal = $margin*$price/100;
			$provit=$price-$margin_nominal;
			$laba=$provit-$hpp;
			$tanggal=date('Y-m-d');
			
			$insert = array(
				'id_stok' => $id_stok,
				'price' => $price,
				'margin' => $margin,
				'margin_nominal' => $margin_nominal,
				'provit' => $provit,
				'laba' => $laba,
				'tanggal' => $tanggal,
				'status' => 1
			);	
			$this->m_admin_stok->save_terjual($insert);
            
			$edit = array(
				'status' => 0
			);
			$this->m_admin_stok->editsave($edit, $id_stok);
			
			redirect("admin_stok/detail/$id_barang");
			
			
			
		}else{
           redirect('user');
		}
	}
	
}

?>
