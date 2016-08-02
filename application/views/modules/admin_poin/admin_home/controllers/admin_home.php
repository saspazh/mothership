<?php
class Admin_home extends Controller{
    function  __construct() {
        parent::Controller();
		$this->load->model('m_admin_home');

    }
    
    function index(){
//      if ($this->session->userdata('login_admin') == TRUE){
//           $data['data_list'] = $this->m_home->get_latest();
                     
           $data['title'] = "News";
           $data['page'] = "dashboard";
           //$this->load->view("bluewhile",$data);
           $this->load->view("sb-admin",$data);
  //      }else{
    //         redirect('user/index');
      //  }

    }
	
	function post(){
      if ($this->session->userdata('login_admin') == TRUE){
            $data['noUrut']         = $this->uri->segment(3)+1;
             if(empty($offset))
               {
                $offset=0;
                $data['noUrut'] = 1;
               }
           $data['data_list'] = $this->m_home->get_latest();
                     
           $data['title'] = "News";
           $data['page'] = "new_post";
           $this->load->view("template_admin",$data);
        }else{
             redirect('user/index');
        }

    }
	
	function save_news(){
       
                 $this->load->library('form_validation');
                 $this->form_validation->set_rules('judul','Judul','required');
				 $this->form_validation->set_rules('content','Content','required');
                 $this->form_validation->set_message('required','Field %s harus diisi!');

                 $judul= $this->input->post('judul');
				 $content = $this->input->post('content');

                 if ($this->form_validation->run() == FALSE){
					
					$data['title'] = "News";
					$data['page'] = "new_post";
				   $this->load->view("template_admin",$data);
                }else{
					
					$username=$this->session->userdata('username');
					$auto = $this->db->query("SELECT id_admin
					FROM admin
					WHERE username='$username'
					");
					$id_user = $auto->last_row()->id_admin;
					$tanggal=date('D, '.'d '.'M '.'Y ');
						
						$insert = array('id_user' => $id_user,'judul' => $judul,'tanggal' => $tanggal,'content'=>$content);
                        $this->m_home->save($insert);
                        $this->session->set_flashdata('message','Berhasil Diinput!');
                        redirect('home/');
					
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
	function delete_post(){
         $id = $this->uri->segment(3);
         if ($id){
             $this->m_home->delete($id);
             $this->session->set_flashdata('hapus','Berhasil Dihapus!');
             redirect('home/mypost');
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
                $data['page'] = "edit_post";
                $this->load->view("template_admin",$data);
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
				 $content = $this->input->post('content');

                 if ($this->form_validation->run() == FALSE){
					
					$data['title'] = "News";
					$data['page'] = "new_post";
				   $this->load->view("template_admin",$data);
                }else{
					
					$username=$this->session->userdata('username');
					$auto = $this->db->query("SELECT id_admin
					FROM admin
					WHERE username='$username'
					");
					$id_user = $auto->last_row()->id_admin;
					$tanggal=date('D, '.'d '.'M '.'Y ');
						
						$insert = array('id_user' => $id_user,'judul' => $judul,'tanggal' => $tanggal,'content'=>$content);
						$this->m_home->editsave($insert,$id_informasi);
                        $this->session->set_flashdata('message',' Berhasil Diedit!');
                        redirect('home/mypost');
					
                }				 	
				 
	}
}

?>
