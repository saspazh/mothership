<?php

class Gallery extends Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model('m_gallery', '', TRUE);
	}

	function index()
	{

		$data['title']= 'Gallery';
		$data['page']= 'gallery_vintage';
		$this->load->view('vintage/index',$data);
	}

	function v()
	{

		$data['title']= 'Galeri';
		$data['page']= 'galery';
		$data['noUrut']=1;
		$data['data_list'] = $this->m_galery_admin->get_latest();
		$this->load->view('template_admin',$data);
	}

	function do_upload()
	{
	
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '1000';
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
//			$image_name= addslashes($_FILES['userfile']['name']);

			
			$data['upload_data'] = $this->upload->data();
			$poto = $data['upload_data'];
			$judul = $this->input->post('judul');
            $description = $this->input->post('deskripsi');
			$highlight = $this->input->post('highlight');
			$date=date('Y-m-d');

			$insert = array('file_name' => $poto['file_name'],'judul' => $judul,'description'=>$description,'path' => 'uploads/','tanggal'=>$date,'highlight'=>$highlight);
			$this->m_galery_admin->save($insert);

			redirect('galery_admin/v');
			// $data['title']= 'Galeri';
			// $data['page']= 'v';
			// $this->load->view('template_admin', $data);
		}
	}


	function edit_view(){
       if ($this->session->userdata('login_admin') == TRUE){
          $data['title'] = "Edit area";
             
             $id = $this->uri->segment(3);
             if($id){
                
                $data['db'] = $this->m_galery_admin->getdata($id);
                $data['page'] = "edit";
                $this->load->view("template_admin",$data);
             }else {
                 show_404();
             }
        }else{
             redirect('user/index');
       }
    }

    function editsave(){         
                $id_poto = $this->input->post('id_poto');
                $judul = $this->input->post('judul');
	            $description = $this->input->post('deskripsi');
				$highlight = $this->input->post('highlight');
				$date=date('Y-m-d');
				 
                $insert = array('id_poto' => $id_poto,'judul' => $judul,'description' => $description,'highlight' => $highlight,'tanggal' => $date);
				$this->m_galery_admin->editsave($insert,$id_poto);
                $this->session->set_flashdata('message','Berhasil Di Edit!');
                             
                redirect('galery_admin/v');
    }


}
?>