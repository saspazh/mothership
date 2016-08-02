<?php
class Admin_project extends CI_Controller{
    function  __construct() {
        parent::__construct();
	//	$this->load->helper(array('form', 'url'));
		$this->load->model('m_admin_project');
		$this->load->model('m_admin_investor');
    }

    function index(){
      if ($this->session->userdata('login') == 'admin'){
            
           $data['title'] = "List";
           $data['noUrut'] = 1;
           $data['data_list'] = $this->m_admin_project->get_latest();
		   $data['page'] = "admin/admin_project/v"; 
           $this->load->view("edumix",$data);
        }else{
             redirect('user/index');
        }

    }

    function project_detail(){

		if ($this->session->userdata('login') == 'admin'){
           
		   $id_investor = $this->uri->segment(3);
		   $project_id = $this->uri->segment(4);
		   
		   if($id_investor){
			   $data['db'] = $this->m_admin_investor->getdata($id_investor);
			   
			   $data['title'] = "Investasi ".$data['db']->investor_name;
			   $data['noUrut'] = 1;
			   $data['data_list'] = $this->m_admin_project->get_projectdetail($project_id);
			   
			   $data['page'] = "admin/admin_project/v_project_detail"; 
			   $this->load->view("edumix",$data);   
		   }else{
			   redirect('user/index');
		   }
        }else{
             redirect('user/index');
        }

	}

	function edit_project_detail(){

		if ($this->session->userdata('login') == 'admin'){
           
		   $id_investor = $this->uri->segment(3);
		   $project_id = $this->uri->segment(4);
		   
		   if($id_investor){
			   $data['db'] = $this->m_admin_investor->getdata($id_investor);
			   
			   $data['title'] = "Investasi ".$data['db']->investor_name;
			   $data['noUrut'] = 1;
			   $data['data_list'] = $this->m_admin_project->get_projectdetail($project_id);
			   
			   $data['page'] = "admin/admin_project/edit_project_detail"; 
			   $this->load->view("edumix",$data);   
		   }else{
			   redirect('user/index');
		   }
        }else{
             redirect('user/index');
        }

	}

	function editsave_project_detail(){

		$investor_id = $this->input->post('investor_id');
		$project_id = $this->input->post('project_id');

		$id = $this->input->post('id_project_detail');
        $detail = $this->input->post('detail');
		$amount = $this->input->post('amount');
		
		$count = count($id);

		for ($i=0; $i <= $count; $i++) { 
			
			$insert = array(
				'id' => $id[$i],
				'detail' => $detail[$i],
				'amount' => $amount[$i]
			);
			

			//echo $id[$i].' '.$detail[$i].' '.$amount[$i];

		$this->m_admin_project->editsave_project_detail($insert,$id[$i]);
        
		}

		$this->session->set_flashdata('message',' Berhasil Diedit!');
        redirect("admin_project/edit_project_detail/$investor_id/$project_id");
				 
	}

	function add_project_detail(){

		if ($this->session->userdata('login') == 'admin'){
           
		   $id_investor = $this->uri->segment(3);
		   $project_id = $this->uri->segment(4);
		   
		   if($id_investor){
			   $data['db'] = $this->m_admin_investor->getdata($id_investor);
			   
			   $data['title'] = "Investasi ".$data['db']->investor_name;
			   $data['noUrut'] = 1;
			   $data['data_list'] = $this->m_admin_project->get_projectdetail($project_id);
			   
			   $data['page'] = "admin/admin_project/add_project_detail"; 
			   $this->load->view("edumix",$data);   
		   }else{
			   redirect('user/index');
		   }
        }else{
             redirect('user/index');
        }

	}

	function save_project_detail(){

		$investor_id = $this->input->post('investor_id');
		$project_id = $this->input->post('project_id');

        $detail = $this->input->post('detail');
		$amount = $this->input->post('amount');
		
		$count = count($detail);

		for ($i=0; $i <= $count; $i++) { 
			
			$insert = array(
				'project_id' => $project_id,
				'detail' => $detail[$i],
				'amount' => $amount[$i]
			);
			

			//echo $id[$i].' '.$detail[$i].' '.$amount[$i];
			if($detail[$i] != null){
				$this->m_admin_project->save_project_detail($insert);
        	}else{

        	}
		}

		$this->session->set_flashdata('message',' Berhasil Diedit!');
        redirect("admin_project/project_detail/$investor_id/$project_id");
				 
	}

    function add(){
      if ($this->session->userdata('login') == 'admin'){
           
           $data['title'] = "Project";

           $data['investor'] = $this->m_admin_investor->get_latest();

		   $data['page'] = "admin/admin_project/add"; 
           $this->load->view("edumix",$data);
        }else{
             redirect('user/index');
        }

    }
	
	function save(){
		$project_name = $this->input->post('project_name');
		$investor_id = $this->input->post('investor_id');
		$start_date = $this->input->post('start_date');
		
		$insert = array(
			'project_name' => $project_name,
			'investor_id' => $investor_id,
			'start_date' => $start_date
		); 
		
		$this->m_admin_project->save($insert);
		
		
        $this->session->set_flashdata('message','Berhasil Diinput!');
        redirect("admin_project");	
    }

    function save_amount(){
		$investor_id = $this->input->post('investor_id');
		$amount = $this->input->post('amount');
		
		$insert = array(
			'investor_id' => $investor_id,
			'amount' => $amount,
			'date' => date('Y-m-d')
		); 
		
		$this->m_admin_investor->save_amount($insert);
		
		
        $this->session->set_flashdata('message','Berhasil Diinput!');
        redirect("admin_investor/v_amount/".$investor_id);	
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
            	$data['investor'] = $this->m_admin_investor->get_latest();

                $data['db'] = $this->m_admin_project->getdata($id);
                $data['page'] = "admin/admin_project/edit";
                $this->load->view("edumix",$data);
            }else {
                 show_404();
            }
        }else{
            redirect('user/index');
    	}
    }
	

	function editsave(){         

        $id_investor = $this->input->post('id_investor');
		$nama = $this->input->post('nama');
		$no_hp = $this->input->post('no_hp');
		
		$insert = array(
			'id_investor' => $id_investor,
			'nama_investor' => $nama,
			'no_hp' => $no_hp
		);



		$this->m_admin_investor->editsave($insert,$id_investor);
        $this->session->set_flashdata('message',' Berhasil Diedit!');
        redirect('admin_investor');
				 
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

    function deleteammount(){
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