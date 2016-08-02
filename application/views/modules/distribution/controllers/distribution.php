<?php
class Distribution extends Controller{
    function  __construct() {
        parent::Controller();
		$this->load->model('m_distribution');

    }
    
    function index(){
		$data['title']="Distribution | Saspazh";
        $data['page'] = "v";
        $this->load->view("shopper_new",$data);
    }


    function save(){
		$name = $this->input->post('name');
		$phone= $this->input->post('phone');
		$email= $this->input->post('email');
		$message= $this->input->post('message');
		   
		$insert = array(
			'name'=>$name,
			'phone'=>$phone,
			'email'=>$email,
			'message'=>$message,
		);
			
		$this->m_contact->save($insert);
		$this->session->set_flashdata('message','message sent');
		redirect('contact');
    }

    function folio(){
    
        $data['page'] = "folio";
        $this->load->view("saspazh",$data);
    }

    function blog(){
    
           $data['page'] = "blog";
           $this->load->view("saspazh",$data);
    }
	
    function login(){
    
           $data['page'] = "login";
           $this->load->view("saspazh",$data);
    }
    

	
}

?>
