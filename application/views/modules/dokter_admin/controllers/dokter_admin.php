<?php
class Dokter_admin extends Controller{
    function  __construct() {
        parent::Controller();
        $this->load->model('m_dokter_admin');

        $this->load->helper(array('form', 'url'));

    }
    function index(){
        if ($this->session->userdata('login_admin') == TRUE){

            $data['title'] = "Dokter";
            $data['page'] = "add";
           $this->load->view("template_admin",$data);
       }else{
             redirect('user/index');
       }
    }
    function v(){
      if ($this->session->userdata('login_admin') == TRUE){
           $data['data_list'] = $this->m_dokter_admin->get_latest();
           $data['noUrut'] = 1;
           $data['title'] = "View Siswa";
           $data['page'] = "v";
           $this->load->view("template_admin",$data);
        }else{
             redirect('user/index');
       }
    }
     function edit_view(){
       if ($this->session->userdata('login_admin') == TRUE){
          $data['title'] = "Dokter";
             
             $id = $this->uri->segment(3);
             if($id){
                
                $data['db'] = $this->m_dokter_admin->getdata($id);
                $data['page'] = "edit";
                $this->load->view("template_admin",$data);
             }else {
                 show_404();
             }
        }else{  
             redirect('user/index');
       }
    }

    function save(){
       
                 $this->load->library('form_validation');
                 $this->form_validation->set_rules('nama','Nama','required');
//				 $this->form_validation->set_rules('username','Username','required');
//				 $this->form_validation->set_rules('password','Password','required');
                 $this->form_validation->set_message('required','Field %s harus diisi!');

                 $nama = $this->input->post('nama');
                 $nip = $this->input->post('nip');
//				 $username = $this->input->post('username');
//               $password = $this->input->post('password');

		if ($this->form_validation->run() == FALSE){
		
				$data['title'] ='Dokter';
				$data['page'] = 'add';
				$this->load->view('template_admin',$data);
		}else{
			
// generate password
$length = 8;
$chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $count = mb_strlen($chars);
    for ($i = 0, $result = ''; $i < $length; $i++) {
        $index = rand(0, $count - 1);
        $result .= mb_substr($chars, $index, 1);
    }
	$password = $result;
	
								
							
    $insert = array('nama_dokter' => $nama,'nip' => $nip,'username' => $nip,'password' => $password,'file_name' => $file_name,'path' => $path);
    $this->m_dokter_admin->save($insert);
    $this->session->set_flashdata('message','Berhasil Diinput!');
    redirect('dokter_admin/v');			

		}
	}

    function do_upload()
    {
    
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '1000';
        $config['max_width']  = '1024';
        $config['max_height']  = '768';

        $this->load->library('upload', $config);



        if ( ! $this->upload->do_upload())
        {
            $data['error'] = $this->upload->display_errors();
            $data['title']= 'Galeri';
            $data['page']= 'add';
            $this->load->view('template_admin', $data);
        }
        else
        {
//          $image_name= addslashes($_FILES['userfile']['name']);

            
            $data['upload_data'] = $this->upload->data();
            $poto = $data['upload_data'];
            
            $nama = $this->input->post('nama');
            $nip = $this->input->post('nip');
            $description = $this->input->post('deskripsi');
            $highlight = $this->input->post('highlight');
            $date=date('Y-m-d');

            // generate password
            $length = 8;
            $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
            $count = mb_strlen($chars);
            for ($i = 0, $result = ''; $i < $length; $i++) {
                $index = rand(0, $count - 1);
                $result .= mb_substr($chars, $index, 1);
            }
            $password = $result;

            $insert = array('nama_dokter' => $nama,'nip' => $nip,'username' => $nip,'password' => $password,'file_name' => $poto['file_name'],'path' => 'uploads/');
            $this->m_dokter_admin->save($insert);

            redirect('dokter_admin/v');
            // $data['title']= 'Galeri';
            // $data['page']= 'v';
            // $this->load->view('template_admin', $data);
        }
    }

    function edit(){         
                 $id_dokter = $this->input->post('id_siswa');
                 $nip = $this->input->post('nip');
				 $nama = $this->input->post('nama');
				 $username = $this->input->post('username');
                 $password = $this->input->post('password');
                 
                $insert = array('id_dokter' => $id_dokter,'nip' => $nip,'nama_dokter' => $nama,'username' => $username,'password' => $password);
                                $this->m_dokter_admin->editsave($insert,$id_dokter);
                                $this->session->set_flashdata('message','Berhasil Di Edit!');
                             
                                redirect('dokter_admin/v');
    }

    function delete_sw(){
         $id = $this->uri->segment(3);
         if ($id){
             $this->m_dokter_admin->delete($id);
             $this->session->set_flashdata('hapus','Berhasil Dihapus!');
             redirect('dokter_admin/v');
         }else{
             show_404();
         }
    }
	
	function aktifasi_sw(){
         $id = $this->uri->segment(3);
         if ($id){
			 
			 $auto = $this->db->query("select * from siswa where id_siswa = '$id'");
             $status = $auto->last_row()->status;
			 
			 if($status==0){
				 $newstatus=1;
			 }elseif($status==1){
				 $newstatus=2;
			 }elseif($status==2){
				 $newstatus=0;
//				 $this->session->set_flashdata('message',' Siswa telah di DO!');
//                 redirect('siswa/v');
			 }
			 
//			 echo $newstatus;
			 
			 
			 $insert = array('id_siswa' => $id,'status' => $newstatus);
                                $this->m_siswa->status($insert,$id);
                                $this->session->set_flashdata('message','Berhasil Di Edit!');
                             
                                redirect('siswa/v');
								
								
         }else{
             show_404();
         }
		        				
    }




}

?>
