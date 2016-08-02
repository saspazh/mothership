<?php
class Admin_privilege extends Controller{
    function  __construct() {
        parent::Controller();
		$this->load->model('m_admin_privilege');

    }
    
    function index(){
      if ($this->session->userdata('login_admin') == TRUE){
           $data['data_list'] = $this->m_admin_privilege->get_latest();

           $data['title'] = "Privilege";
           $data['noUrut'] = 1;
           $data['page'] = "v";
           $this->load->view("edumix",$data);
        }else{
             redirect('user/index');
        }

    }
	
	function add(){
      if ($this->session->userdata('login_admin') == TRUE){
     	   
           $data['title'] = "Kategori";
           $data['page'] = "add";
           $this->load->view("edumix",$data);
        }else{
             redirect('user/index');
        }

    }
	
	function save(){
       
    $id_privilege= $this->input->post('id_privilege');
    $username= $this->input->post('username');		
						
		$insert = array(
      'id_privilege' => $id_privilege,
    );
    $this->m_admin_privilege->saveuser($insert,$username);
    $this->session->set_flashdata('message','Berhasil Diinput!');
    redirect('admin_privilege');
		       
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
         
    $insert = array(
      'id_privilege' => $id_privilege,
    );

    $this->m_admin_privilege->saveuser($insert,$id);
    $this->session->set_flashdata('hapus','Berhasil Dihapus!');
    redirect('admin_privilege');
         
    }
	
}

?>
