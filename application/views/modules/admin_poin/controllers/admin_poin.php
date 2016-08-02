<?php
class Admin_poin extends Controller{
    function  __construct() {
        parent::Controller();
		$this->load->helper(array('form', 'url'));
		$this->load->model('m_admin_poin');
    }

    function index(){
      if ($this->session->userdata('login') == 'admin'){

           $data['title'] = "Poin";
           $data['noUrut'] = 1;
           $data['data_list'] = $this->m_admin_poin->get_latest();
		   $data['page'] = "v"; 
           $this->load->view("edumix",$data);
        }else{
             redirect('user/index');
        }

    }

	
	function detail(){
		if ($this->session->userdata('login') == 'admin'){     
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
	
	function add(){
		if ($this->session->userdata('login') == 'admin'){
           
           $data['title'] = "Poin";
           $data['noUrut'] = 1;
           $data['data_list'] = $this->m_admin_poin->get_latest();
		   $data['page'] = "add"; 
           $this->load->view("edumix",$data);
        }else{
             redirect('user/index');
        }

    }
	
	function save(){
		$username = $this->input->post('username');
		$poin = $this->input->post('poin');
		$keterangan = $this->input->post('event');
		
				 
		
		$id_customer = $this->db->query("SELECT * FROM customer WHERE username = '$username'")->row()->id_customer;
		
		$insert = array(
			'id_customer' => $id_customer,
			'poin' => $poin,
			'keterangan' => $keterangan,
			'created_by' => 'admin',
			'tanggal' => date('Y-m-d H:i:s')
		); 
		
		$this->m_admin_poin->save($insert);
		
		
        $this->session->set_flashdata('message','Berhasil Diinput!');
        redirect("admin_poin/detail/$username");	
    }
	
	
	function image_control(){
		
		$config['upload_path'] = './images/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = '3000';
		$config['max_width'] = '3000';
		$config['max_height'] = '3000';

		$this->load->library('upload', $config);
		//echo $config['upload_path'];
		$this->upload->initialize($config);
		
		if ($this->upload->do_upload('foto')){
			//echo 'sukses';
			$data = $this->upload->data();
			$url_logo = './images/'.$data['file_name'] ;
		  
			chmod($url_logo, 0777) ;
			$this->load->library('image_lib');
			$img['image_library'] = 'gd2';
			$img['thumb_marker'] = '';
			$img['quality'] = '100%' ;
			$img['source_image'] = $url_logo;
			$img['create_thumb'] = TRUE;
			$img['maintain_ratio'] = TRUE;
			$img['width'] = 106;
			$img['height'] = 84;
			$img['new_image'] = './images/thumb/' ;
		  

			$this->image_lib->initialize($img);
			$this->image_lib->resize();

			$data=array('title'=>'Image Manajemen',);
			$error = array('error' => $this->upload->display_errors());     
			$this->load->view('index',$data, $error);
		}else{
			//echo 'gagal';
			$data=array('title'=>'Image Manajemen',);
			$error = array('error' => $this->upload->display_errors());   
			$this->load->view('image_hasil');
		}	

	}
	
	function export_excel(){
      if ($this->session->userdata('login') == 'admin'){
           $data['data_list'] = $this->m_admin_barang->get_latest();
		   
           $data['title'] = "News";
           $data['noUrut'] = 1;
           $this->load->view("export_excel",$data);
        }else{
             redirect('user/index');
        }

    }
	
    
	
	
	
	function do_upload(){
		//$t=date('Ymd');
		$auto = $this->db->query("SELECT * 
FROM  `barang` 
ORDER BY  `barang`.`id_barang` DESC 
LIMIT 0 , 1");
	if($auto->num_rows()>0){
		$urut = $auto->last_row()->id_barang;
		$urut= $urut + 1;
	}else{
		$urut= 1;
	
	}
/*	
			
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
*/
//		$file_name= 'IMG-20140407-0001';

$nama_barang= $this->input->post('nama_barang');
$id_kategori= $this->input->post('kategori');
$kategori = $this->db->query("SELECT nama_kategori
FROM  `kategori` 
WHERE id_kategori =  '$id_kategori'");
$nama_kategori = $kategori->last_row()->nama_kategori;

$color= $this->input->post('color');
$harga= $this->input->post('harga');
$judul = $this->input->post('judul');
$slug = $this->input->post('slug');
$description = $this->input->post('description');
$keywords = $this->input->post('keywords');
$tag = $this->input->post('tag');

$file_name= $slug.'-'.$urut;


		
		$config = array(
			   'upload_path' => 'uploads/original/',
			   'allowed_types' => 'gif|jpg|png',
			   'max_size' => '10000',
			   'max_width' => '10240',
			   'max_height' => '7680',
			   'file_name' => $file_name
		); 


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
			

			$data['upload_data'] = $this->upload->data();
			$poto = $data['upload_data'];
			
			/*/===========resize 220x270===================
			
			$this->load->library('image_lib');
			//$file_name = 'IMG-20140407-0001.jpg';
			$config['image_library'] = 'gd2';
			$config['source_image'] = './uploads/original/'.$file_name;
			$config['create_thumb'] = TRUE;
			$config['maintain_ratio'] = TRUE;
			$config['width']     = 220;
			$config['height']   = 270; 
			$config['new_image'] ='./uploads/220x270/'.'medium-'.$file_name;

			$this->image_lib->clear();
			$this->image_lib->initialize($config);
			$this->image_lib->resize();
			
			//===========resize===================*/
			
			
			//$highlight = $this->input->post('highlight');
			$date=date('Y-m-d');
			$datetime=date('Y-m-d H:m:s');

			$barang = array('id_barang' => $id_barang,'id_kategori' => $id_kategori,'judul' => $judul,'url_suffix' => $slug,'nama_barang' => $nama_barang,'color' => $color,'price' => $harga,'description'=> $description,'keywords'=> $keywords,'tag'=> $tag,'waktu'=> $datetime);
			$this->m_admin_barang->save($barang);
			$poto = array('id_barang' => $id_barang,'file_name' => $poto['file_name'],'path' => $config['upload_path'],'type'=>'original','tanggal'=>$date);
			$this->m_admin_barang->savepoto($poto);
			
			//$this->admin_barang->resize_medium($poto['file_name']);

			$this->session->set_flashdata('message',$poto['file_name']);
			redirect('admin_barang/resize_medium/'.$id_barang);
			
 

		}
	}
	
	
	function resize_medium(){
			$file_name = $this->session->flashdata('message');
			
			$this->load->library('image_lib');

			$id_barang = $this->uri->segment(3);
			$config['image_library'] = 'gd2';
			$config['source_image'] = './uploads/original/'.$file_name;
			$config['create_thumb'] = FALSE;
			$config['maintain_ratio'] = TRUE;
			$config['width']     = 220;
			$config['height']   = 270; 
			$config['new_image'] ='./uploads/medium/'.$file_name;
			
			$date=date('Y-m-d');
			$path='uploads/medium/';

			$this->image_lib->clear();
			$this->image_lib->initialize($config);
			$this->image_lib->resize();

			$poto = array('id_barang' => $id_barang,'file_name' => $file_name,'path' => $path,'type' => 'medium','tanggal'=>$date);
			$this->m_admin_barang->savepoto($poto);
			
			$this->session->set_flashdata('message',$file_name);
			redirect('admin_barang/resize_small/'.$id_barang);
			
			
	}
	
	function resize_small(){ 
			$file_name = $this->session->flashdata('message');
			
			$this->load->library('image_lib');
			$id_barang = $this->uri->segment(3);	
			$config['image_library'] = 'gd2';
			$config['source_image'] = './uploads/original/'.$file_name;
			$config['create_thumb'] = FALSE;
			$config['maintain_ratio'] = TRUE;
			$config['width']     = 50;
			$config['height']   = 70;  
			$config['new_image'] ='./uploads/small/'.$file_name;
			
			$date=date('Y-m-d');
			$path='uploads/small/';

			$this->image_lib->clear();
			$this->image_lib->initialize($config);
			$this->image_lib->resize();
			
			$poto = array('id_barang' => $id_barang,'file_name' => $file_name,'path' => $path,'type' => 'small','tanggal'=>$date);
			$this->m_admin_barang->savepoto($poto);
			
			redirect('admin_barang');
//		}
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

                 $id_barang= $this->input->post('id_barang');
                 $id_kategori= $this->input->post('kategori');
				 $nama_barang= $this->input->post('nama_barang');
				 $color= $this->input->post('color');
				 $price= $this->input->post('harga');
				 $description= $this->input->post('description');
				 $tag= $this->input->post('tag');
				 
					
						
						$insert = array(
							'id_barang' => $id_barang,
							'id_kategori' => $id_kategori,
							'nama_barang' => $nama_barang,
							'color' => $color,
							'price' => $price,
							'description' => $description,
							'tag' => $tag
						);
						$this->m_admin_barang->editsave($insert,$id_barang);
                        $this->session->set_flashdata('message',' Berhasil Diedit!');
                        redirect('admin_barang');
				 
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