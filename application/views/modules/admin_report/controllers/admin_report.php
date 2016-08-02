<?php
class Admin_report extends Controller{
    function  __construct() {
        parent::Controller();
		$this->load->helper(array('form', 'url'));
		$this->load->model('m_admin_report');
    }

	
	function image_form(){
		$this->load->view('image_form'); 
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
	
    function v_penjualan(){
      if ($this->session->userdata('login_admin') == TRUE){
           $data['data_list'] = $this->m_admin_barang->get_latest();
		   
		   $data['filter'] = $this->input->post('filter');
		   
           $data['title'] = "Report";
           $data['noUrut'] = 1;
           $data['page'] = "v_penjualan";
           $this->load->view("sb-admin",$data);
        }else{
             redirect('user/index');
        }

    }
	
	function excel(){
		if ($this->session->userdata('login_admin') == TRUE){
          $data['title'] = "Detail";
             
             $id = $this->uri->segment(3);
             if($id){
			 
				$this->load->view("excel",$data);
             }else {
                 show_404();
             }
        }else{
             redirect('user/index');
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


	
	function save(){
        $this->load->library('form_validation');
		$this->form_validation->set_rules('kategori','kategori','required');
        $this->form_validation->set_message('required','Field %s harus diisi!');

        $nama_barang= $this->input->post('nama_barang');
        $pic= $this->input->post('pic');
        $id_kategori= $this->input->post('kategori');
        $harga= $this->input->post('harga');
				 
        if ($this->form_validation->run() == FALSE){			
			$data['title'] = "News";
			$data['page'] = "add";
			$this->load->view("sb-admin",$data);
        }else{
			$insert = array('nama_barangs' => $nama_barang,'pic' => $pic,'id_kategori' => $id_kategori,'harga' => $harga);
            $this->m_admin_barang->save($insert);
            $this->session->set_flashdata('message','Berhasil Diinput!');
            redirect('admin_barang');	
        }
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
	
	function detail(){
//       if ($this->session->userdata('login_admin') == TRUE){
          $data['title'] = "Detail";
             
             $id = $this->uri->segment(3);
             if($id){
                
                $data['db'] = $this->m_admin_barang->detail($id);
                $data['page'] = "detail";
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
         	 if($id){
			 
			    $this->m_admin_barang->delete($id);
				
					$data_poto = $this->m_admin_barang->getpoto($id);
					foreach($data_poto as $poto){
						unlink($poto->path.$poto->file_name);
					}
					/*
					
					
					*/
					$this->m_admin_barang->delete_poto($id);
					$this->session->set_flashdata('hapus','Berhasil Dihapus!');
					redirect('admin_barang');
				
			 }else{ 
				show_404(); 
			 }
    }
	
	function test(){
		unlink('uploads/medium/tshirt-for-mens-black-6.jpg');
	}
	
	function stok(){
		$data['noUrut']=1;
		$data['data_list'] = $this->m_admin_report->get_stok();
		   
		$data['filter'] = $this->input->post('filter');
		$data['page']='stok';
		$this->load->view('sb-admin',$data); 
	}
	
	function penjualan(){
		
		if ($this->session->userdata('login_admin') == TRUE){
     	   
			$data['filter'] = $this->input->post('filter');
			$data['noUrut']=1;
			$data['data_list'] = $this->m_admin_report->get_penjualan();
			   
			$data['page']='penjualan';
			$this->load->view('sb-admin',$data);
		
        }else{
             redirect('user/index');
        }
	}
	
	
} 

?>