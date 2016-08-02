<?php
class Admin_partner extends Controller{
    function  __construct() {
        parent::Controller();
		$this->load->model('m_admin_partner');

    }
    
    function index(){
      if ($this->session->userdata('login_admin') == TRUE){
           $data['data_list'] = $this->m_admin_partner->get_latest();
		   
           $data['title'] = "News";
           $data['noUrut'] = 1;
           $data['page'] = "v";
           $this->load->view("edumix",$data);
        }else{
             redirect('user/index');
        }
    }
	
	function add(){
//      if ($this->session->userdata('login_admin') == TRUE){
     	   
           $data['title'] = "Kategori";
           $data['page'] = "add";
           $this->load->view("edumix",$data);
  //      }else{
    //         redirect('user/index');
      //  }

    }
	
	function save(){
    
    $partnership= $this->input->post('partnership');
		
    $insert = array('nama_partnership' => $partnership);
    $this->m_admin_partnership->save($insert);
    $this->session->set_flashdata('message','Berhasil Diinput!');
    redirect('admin_partnership');
				 
  }
	
	function edit(){
//       if ($this->session->userdata('login_admin') == TRUE){
          $data['title'] = "Edit";
             
             $id = $this->uri->segment(3);
             if($id){
                
                $data['db'] = $this->m_admin_partnership->getdata($id);
                $data['page'] = "edit";
                $this->load->view("edumix",$data);
             }else {
                 show_404();
             }
//        }else{
//             redirect('user/index');
//       }
    }

	function editsave(){         

    $id_partnership= $this->input->post('id_partnership');
		$nama_partnership= $this->input->post('nama_partnership');
				
		$insert = array('id_partnership' => $id_partnership,'nama_partnership' => $nama_partnership);
		$this->m_admin_partnership->editsave($insert,$id_partnership);
    $this->session->set_flashdata('message',' Berhasil Diedit!');
    redirect('admin_partnership');
				 
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
