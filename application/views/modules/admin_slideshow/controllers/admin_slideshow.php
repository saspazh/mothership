<?php
class Admin_slideshow extends Controller{
    function  __construct() {
        parent::Controller();
		$this->load->helper(array('form', 'url'));
		$this->load->model('m_admin_slideshow');
    }

    function index(){
      if ($this->session->userdata('login') == 'admin'){
            
           $data['title'] = "Poin";
           $data['noUrut'] = 1;
            $data['data_list'] = $this->m_admin_slideshow->get_latest();
		   $data['page'] = "v"; 
           $this->load->view("edumix",$data);
        }else{
             redirect('user/index');
        }

    }

	function add(){
      if ($this->session->userdata('login') == 'admin'){
           
           $data['title'] = "Voucher";
		   $data['page'] = "add"; 
           $this->load->view("edumix",$data);
        }else{
             redirect('user/index');
        }

    }
	
	function save(){
		$title = $this->input->post('title');
		$path = $this->input->post('path');
		$image = $this->input->post('image');
		
		$insert = array(
			'title' => $title,
			'path' => $path,
			'image' => $image
		); 
		
		$this->m_admin_slideshow->save($insert);
		
		
        $this->session->set_flashdata('message','Berhasil Diinput!');
        redirect("admin_slideshow");	
    }

	
	function detail(){

		if ($this->session->userdata('login_admin') == TRUE){
           
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
	
	
	
	
	
	

	
	function export_excel(){
      if ($this->session->userdata('login_admin') == TRUE){
           $data['data_list'] = $this->m_admin_barang->get_latest();
		   
           $data['title'] = "News";
           $data['noUrut'] = 1;
           $this->load->view("export_excel",$data);
        }else{
             redirect('user/index');
        }

    }
	
    
	

		
	function edit(){
    	if ($this->session->userdata('login') == 'admin'){
        	$data['title'] = "Edit";
             
            $id = $this->uri->segment(3);
            if($id){
                $data['db'] = $this->m_admin_slideshow->getdata($id);
                $data['page'] = "edit";
                $this->load->view("edumix",$data);
            }else {
                 show_404();
            }
        }else{
            redirect('user/index');
    	}
    }
	

	function editsave(){         

        $id_slideshow = $this->input->post('id_slideshow');
		$title = $this->input->post('title');
		$path = $this->input->post('path');
		$image = $this->input->post('image');
		
		$insert = array(
			'id_slideshow' => $id_slideshow,
			'title' => $title,
			'path' => $path,
			'image' => $image
		);



		$this->m_admin_slideshow->editsave($insert,$id_slideshow);
        $this->session->set_flashdata('message',' Berhasil Diedit!');
        redirect('admin_slideshow');
				 
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