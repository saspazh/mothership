<?php
class Admin_kategori extends Controller{
    function  __construct() {
        parent::Controller();
		$this->load->model('m_admin_kategori');

    }
    
    function index(){
//      if ($this->session->userdata('login_admin') == TRUE){
           $data['data_list'] = $this->m_admin_kategori->get_latest();
		   
           $data['title'] = "News";
           $data['noUrut'] = 1;
           $data['page'] = "v";
           $this->load->view("sb-admin",$data);
  //      }else{
    //         redirect('user/index');
      //  }

    }
	
	function add(){
//      if ($this->session->userdata('login_admin') == TRUE){
     	   
           $data['title'] = "Kategori";
           $data['page'] = "add";
           $this->load->view("sb-admin",$data);
  //      }else{
    //         redirect('user/index');
      //  }

    }
	
	function save(){
       
                 $this->load->library('form_validation');
				 $this->form_validation->set_rules('kategori','kategori','required');
                 $this->form_validation->set_message('required','Field %s harus diisi!');

                 $kategori= $this->input->post('kategori');
				 
                 if ($this->form_validation->run() == FALSE){
					
					$data['title'] = "News";
					$data['page'] = "add";
				   $this->load->view("sb-admin",$data);
                }else{
					
						
						$insert = array('nama_kategori' => $kategori);
                        $this->m_admin_kategori->save($insert);
                        $this->session->set_flashdata('message','Berhasil Diinput!');
                        redirect('admin_kategori');
					
                }
           
    }
	
	function edit(){
//       if ($this->session->userdata('login_admin') == TRUE){
          $data['title'] = "Edit post";
             
             $id = $this->uri->segment(3);
             if($id){
                
                $data['db'] = $this->m_admin_kategori->getdata($id);
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
         if ($id){
             $this->m_admin_kategori->delete($id);
             $this->session->set_flashdata('hapus','Berhasil Dihapus!');
             redirect('admin_kategori');
         }else{
             show_404();
         }
    }
	
}

?>
