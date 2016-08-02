<?php
class News extends Controller{
    function  __construct() {
        parent::Controller();
		$this->load->model('m_home');

    }
    
	function detail(){
     if ($this->session->userdata('login_admin') == TRUE){
           $id = $this->uri->segment(3); 
           $data['db'] = $this->m_home->getdata($id);
           
		   $data['data_list'] = $this->m_home->get_comment($id);
		   
           $data['title'] = "News";
           $data['page'] = "blog-detail";
           $this->load->view("edumix",$data);
        }else{
             redirect('login');
        }

    }
	
    function index(){
     if ($this->session->userdata('login_admin') == TRUE){
            $data['noUrut']         = $this->uri->segment(3)+1;
             if(empty($offset))
               {
                $offset=0;
                $data['noUrut'] = 1;
               }
           $data['data_list'] = $this->m_home->get_latest();
                     
           $data['title'] = "News";
           $data['page'] = "post";
           $this->load->view("edumix",$data);
        }else{
             redirect('login');
        }

    }
	
	function kategori(){
     if ($this->session->userdata('login_admin') == TRUE){
            
           $data['data_list'] = $this->m_home->get_kategori();
                     
           $data['noUrut'] = 1;
           $data['title'] = "Kategori";
           $data['page'] = "kategori";
           $this->load->view("edumix",$data);
        }else{
             redirect('login');
        }

    }
	
	function add_kategori(){
      if ($this->session->userdata('login_admin') == TRUE){
                     
           $data['title'] = "Kategori";
           $data['page'] = "add_kategori";
           $this->load->view("edumix",$data);
        }else{
             redirect('user/index');
        }

    }
	
	function post(){
      if ($this->session->userdata('login_admin') == TRUE){
                     
           $data['title'] = "News";
           //$data['page'] = "new_post";
           $data['page'] = "add";
           $this->load->view("edumix",$data);
        }else{
             redirect('user/index');
        }

    }
	
	function save_kategori(){
       
                 $this->load->library('form_validation');
                 $this->form_validation->set_rules('nama_kategori','Kategori','required');
				 $this->form_validation->set_message('required','Field %s harus diisi!');

                 $kategori= $this->input->post('nama_kategori');
				 
                 if ($this->form_validation->run() == FALSE){
					
					$data['title'] = "Kategori";
					$data['page'] = "add_kategori";
				   $this->load->view("edumix",$data);
                }else{
					
						
						$insert = array('kategori' => $kategori);
                        $this->m_home->save_kategori($insert);
                        $this->session->set_flashdata('message','Berhasil Diinput!');
                        redirect('news/kategori');
					
                }
           
    }
	
	function save_news(){
       
                 $this->load->library('form_validation');
                 $this->form_validation->set_rules('judul','Judul','required');
				 $this->form_validation->set_rules('content','Content','required');
                 $this->form_validation->set_message('required','Field %s harus diisi!');

                 $judul= $this->input->post('judul');
                 $id_kategori= $this->input->post('id_kategori');
				 $content = $this->input->post('content');
				 $status = $this->input->post('status');

                 if ($this->form_validation->run() == FALSE){
					
					$data['title'] = "News";
					$data['page'] = "new_post";
				   $this->load->view("template_admin",$data);
                }else{
					
				
					$tanggal=date('Y-m-d');
						
						$insert = array('id_kategori' => $id_kategori,'judul' => $judul,'tanggal' => $tanggal,'content'=>$content,'status'=>$status);
                        $this->m_home->save($insert);
                        $this->session->set_flashdata('message','Berhasil Diinput!');
                        redirect('news/');
					
                }
           
    }
	function mypost(){
      if ($this->session->userdata('login_admin') == TRUE){
            $data['noUrut']         = $this->uri->segment(3)+1;
             if(empty($offset))
               {
                $offset=0;
                $data['noUrut'] = 1;
               }
           $data['data_list'] = $this->m_home->get_latest();
                     
           $data['title'] = "News";
           $data['page'] = "my_post";
           $this->load->view("template_admin",$data);
        }else{
             redirect('user/index');
        }

    }
	function delete(){
         $id = $this->uri->segment(3);
         if ($id){
             $this->m_home->delete($id);
             $this->session->set_flashdata('hapus','Berhasil Dihapus!');
             redirect('news');
         }else{
             show_404();
         }
    }
	
	function delete_kategori(){
         $id = $this->uri->segment(3);
         if ($id){
             $this->m_home->delete_kategori($id);
             $this->session->set_flashdata('hapus','Berhasil Dihapus!');
             redirect('news/kategori');
         }else{
             show_404();
         }
    }
	
	function edit_view(){
       if ($this->session->userdata('login_admin') == TRUE){
          $data['title'] = "Edit post";
             
             $id = $this->uri->segment(3);
             if($id){
                
                $data['db'] = $this->m_home->getdata($id);
                $data['page'] = "edit";
                $this->load->view("edumix",$data);
             }else {
                 show_404();
             }
        }else{
             redirect('user/index');
       }
    }

	function edit_post(){         
                 $this->load->library('form_validation');
                 $this->form_validation->set_rules('judul','Judul','required');
				 $this->form_validation->set_rules('content','Content','required');
                 $this->form_validation->set_message('required','Field %s harus diisi!');

                 $id_informasi= $this->input->post('id_informasi');
				 $judul= $this->input->post('judul');
				 $id_kategori= $this->input->post('id_kategori');
				 $content = $this->input->post('content');
				 $status = $this->input->post('status');
				 $comment = $this->input->post('comment');


                 if ($this->form_validation->run() == FALSE){
					
					$data['title'] = "News";
					$data['page'] = "new_post";
				   $this->load->view("template_admin",$data);
                }else{
					
					
					$tanggal=date('Y-m-d');
						
						$insert = array(
							'judul' => $judul,
							'id_kategori' => $id_kategori,
							'content' => $content,
							'status'=>$status,
							'comment_status'=>$comment
						);
						$this->m_home->editsave($insert,$id_informasi);
                        $this->session->set_flashdata('message',' Berhasil Diedit!');
                        redirect('news');
					
                }				 	
				 
	}
}

?>
