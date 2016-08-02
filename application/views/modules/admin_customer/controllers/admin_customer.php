<?php
class Admin_customer extends Controller{
    function  __construct() {
        parent::Controller();
		$this->load->model('m_admin_customer');

    }
    /*====================distributor========================*/
	function v(){
      if ($this->session->userdata('login_admin') == TRUE){
		   $type = $this->uri->segment(3);
		   
		   if(!empty($type)){		   
			   $status=1;
			   $data['title'] = $type;
			   $data['data_list'] = $this->m_admin_customer->get_customer($type);
			   $data['noUrut'] = 1;
			   $data['page'] = $type.'/v';
			   $this->load->view("sb-admin",$data);
		   }else{
				
				$select = '*';
				$from = 'customer';
				$where = "id_customer is not null";
				
			   $status=1;
			   $data['title'] = $type;
			   $data['data_list'] = $this->m_admin_customer->customer($select, $from, $where);
			   $data['noUrut'] = 1;
			   $data['page'] = 'customer';
			   $this->load->view("sb-admin",$data);
			   
		   }
        }else{
             redirect('user/index');
        }
    }
	
	
	function export_excel(){
		
				$select = '*';
				$from = 'customer';
				$where = "id_customer is not null";
				
			   $status=1;
			   $data['title'] = $type;
			   $data['data_list'] = $this->m_admin_customer->customer($select, $from, $where);
			   $data['noUrut'] = 1;
			   $this->load->view("export_excel",$data);
			   
	}
	
	
	function add_distributor(){
      if ($this->session->userdata('login_admin') == TRUE){
     	   
           $data['title'] = "Distributor";
           $data['page'] = "distributor/add";
           $this->load->view("sb-admin",$data);
        }else{
             redirect('user/index');
        }
    }
	
	function save_distributor(){
        if ($this->session->userdata('login_admin') == TRUE){
     	
			$type = $this->input->post('type');
			$first = $this->input->post('first');
			$last = $this->input->post('last');
			$address1 = $this->input->post('address1');
			$city = $this->input->post('city');
			$province = $this->input->post('province');
			$mobile = $this->input->post('mobile');
			$email = $this->input->post('email');
			$receive = $this->input->post('receive');
			
						 
				

				$insert = array(
					'first_name' => $first,
					'last_name' => $last,
					'address1' => $address1,
					'city' => $city,
					'province' => $province,
					'no_hp' => $mobile,
					'email' => $email,
					'receive' => $receive,
					'type' => $type
				);
				$this->m_admin_customer->save($insert);
				
			$this->session->set_flashdata('message','Berhasil Diinput!');
			redirect('admin_customer/v/'.$type);	
			
		
        
        }else{
             redirect('user/index');
        }
    }
	
	
	//=====================================member====================================
	function add_member(){
      if ($this->session->userdata('login_admin') == TRUE){
     	   
           $data['title'] = "Member";
           $data['page'] = "member/add";
           $this->load->view("sb-admin",$data);
        }else{
             redirect('user/index');
        }

    }
	
	function import(){
      if ($this->session->userdata('login_admin') == TRUE){
     	   
           $data['title'] = "Member";
           $data['page'] = "import";
           $this->load->view("sb-admin",$data);
        }else{
             redirect('user/index');
        }

    }

    function save_import(){
		ini_set('memory_limit','512M');
		set_time_limit(0);
		ini_set('max_execution_time', 0);

		$this->load->library('phpexcel/PHPExcel');
		
		$filename 	= $_FILES['files']['name']; 
		$filetype 	= $_FILES['files']['type']; 
		$filesize 	= $_FILES['files']['size']; 
		$fileloc	= $_FILES['files']['tmp_name']; 

		if($filename and is_uploaded_file($fileloc)) 
		{	 
			 move_uploaded_file($fileloc,"tmp/$filename");  
		}

		$file 	   = "tmp/".$filename;

		$typ = substr(strrchr($filename, "."), 1);

		if($this->input->post('method') == 'replace'){
			$this->db->query("TRUNCATE `customer`");
		}

		if($typ == 'xls' or $typ == 'xlsx'){

			if($typ == 'XLS'){
		
				$objReader = new PHPExcel_Reader_Excel5();

			}else{
				
				$objReader = new PHPExcel_Reader_Excel2007();
					
			}

			$objReader->setReadDataOnly(true);
			$objPHPExcel = $objReader->load($file);

			$sheetData = $objPHPExcel->getSheet()->toArray(null,true,true,true);

			// var_dump($objPHPExcel->setActiveSheetIndex(0)->getCell('AB6')->getValue());

			// die();

			foreach ($sheetData as $key => $value) {
				if(1 == $key) continue;
				// var_dump($value);
				
				$nama = explode(' ',$sheetData[$key]['B']);
					
					//foreach($i=1; $i<=array_count_values($nama); $i++) $nama[$i].' ';
						
					
				  
				  $email = $sheetData[$key]['G'];
				  $no_hp = $sheetData[$key]['F'];
//jika email kosong dan no_kosong
//jika email gak ada @ dan no_hp kosong
				  
				  if((empty($email) and (empty($no_hp))) or ((strpos($email, "@") == false ) and (empty($no_hp))) ){
				  
				  }else{	
				  
				  
					$sql = "INSERT INTO `customer`(
								`first_name`,
								`last_name`,
								`address1`,
								`city`,
								`province`,
								`no_hp`,
								`email`,
								`username`,
								`password`,
								`receive`,
								`status`,
								`type`)
							VALUES (
									'".$nama[0]."',
									'".$nama[1].' '.$nama[2].' '.$nama[3]."',
									'".$sheetData[$key]['C']."',
									'".$sheetData[$key]['E']."',
									'".$sheetData[$key]['D']."',
									'".$sheetData[$key]['F']."',
									'".$sheetData[$key]['G']."',
									'".$sheetData[$key]['H']."',
									'".$sheetData[$key]['I']."',
									'".$sheetData[$key]['J']."',
									'".$sheetData[$key]['K']."',
									'".$sheetData[$key]['L']."'
									)";
					
					
						$this->db->query($sql);
						
				  }	
			}

			
			$objPHPExcel->disconnectWorksheets();
			$this->session->set_flashdata('message', 'success');

			redirect('admin_customer/v');

		}else{
			$this->session->set_flashdata('message', 'failed');
			redirect('admin_customer/import');
		}

	
	}
	
    function member(){
      if ($this->session->userdata('login_admin') == TRUE){
		   $status=1;
           $data['title'] = "Member";
           $data['data_list'] = $this->m_admin_customer->get_customer($status);
           $data['noUrut'] = 1;
           $data['page'] = "member/v";
           $this->load->view("sb-admin",$data);
        }else{
             redirect('user/index');
        }
    }
	
    /*====================guest========================*/
	function guest(){
//      if ($this->session->userdata('login_admin') == TRUE){
		   $status=0;
           $data['title'] = "Member";
           $data['data_list'] = $this->m_admin_customer->get_customer($status);
           $data['noUrut'] = 1;
           $data['page'] = "member/v";
           $this->load->view("sb-admin",$data);
  //      }else{
    //         redirect('user/index');
      //  }
    }
	
	function add(){
//      if ($this->session->userdata('login_admin') == TRUE){
     	   
           $data['title'] = "Member";
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
                        $this->m_admin_customer->save($insert);
                        $this->session->set_flashdata('message','Berhasil Diinput!');
                        redirect('admin_kategori');
					
                }
           
    }
	
	function edit(){
       if ($this->session->userdata('login_admin') == TRUE){
             
             $type = $this->uri->segment(3);
             $id = $this->uri->segment(4);
             if($id){
				$data['title'] = $type;
                
                $data['db'] = $this->m_admin_customer->getdata($id);
                $data['page'] = $type.'/edit';
                $this->load->view("sb-admin",$data);
             }else {
                 show_404();
             }
        }else{
             redirect('user/index');
        }
    }

	function editsave(){         
		$id = $this->input->post('id');
		$type = $this->input->post('type');
		$first = $this->input->post('first');
		$last = $this->input->post('last');
		$address1 = $this->input->post('address1');
		$city = $this->input->post('city');
		$province = $this->input->post('province');
		$mobile = $this->input->post('mobile');
		$email = $this->input->post('email');
		$receive = $this->input->post('receive');
		
					 
			
		$insert = array(
				'first_name' => $first,
				'last_name' => $last,
				'address1' => $address1,
				'city' => $city,
				'province' => $province,
				'no_hp' => $mobile,
				'email' => $email,
				'receive' => $receive,
				'type' => $type
		);
		$this->m_admin_customer->editsave($insert,$id);
				
        $this->session->set_flashdata('message',' Berhasil Diedit!');
        redirect('admin_customer/v/'.$type);
				 
	}
	
	

	function delete(){
         $type = $this->uri->segment(3);
         $id = $this->uri->segment(4);
         if ($id){
             $this->m_admin_customer->delete($id);
             $this->session->set_flashdata('hapus','Berhasil Dihapus!');
             redirect('admin_customer/v/'.$type);
         }else{
             show_404();
         }
    }
	
}

?>
