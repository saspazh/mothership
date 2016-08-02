<?php
class Admin_popular extends Controller{
    function  __construct() {
        parent::Controller();
		$this->load->model('m_admin_popular');

    }
    
    function index(){
//      if ($this->session->userdata('login_admin') == TRUE){
           $data['data_list'] = $this->m_admin_popular->get_latest();
		   
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
    $name_popular= $this->input->post('name_popular');
				 
    			
		$data['title'] = "Popular";
		$data['page'] = "add";
		
    $this->load->view("sb-admin",$data);
    			
		  $insert = array('name_popular' => $name_popular);
      $this->m_admin_popular->save($insert);
      $this->session->set_flashdata('message','Berhasil Diinput!');
      redirect('admin_popular');
	}
	
	function edit(){
       if ($this->session->userdata('login_admin') == TRUE){
          $data['title'] = "Edit Popular";
             
             $id = $this->uri->segment(3);
             if($id){
                
                $data['db'] = $this->m_admin_popular->getdata($id);
                $data['page'] = "edit";
                $this->load->view("sb-admin",$data);
             }else {
                 show_404();
             }
        }else{
             redirect('user/index');
        }
    }

	function editsave(){         

    $id_popular= $this->input->post('id_popular');
		$name_popular= $this->input->post('name_popular');

		$insert = array('id_popular' => $id_popular,'name_popular' => $name_popular);
		$this->m_admin_popular->editsave($insert,$id_popular);
    $this->session->set_flashdata('message',' Berhasil Diedit!');
    redirect('admin_popular');
				 
	}
	
	

	function delete(){
         $id = $this->uri->segment(3);
         if ($id){
             $this->m_admin_popular->delete($id);
             $this->session->set_flashdata('hapus','Berhasil Dihapus!');
             redirect('admin_popular');
         }else{
             show_404();
         }
    }
	
}

?>
