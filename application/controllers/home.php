<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller{
    function  __construct() {
        parent::__construct();
		$this->load->model('m_home');

    }
	
	function comingsoon(){
		$this->load->view('comingsoon');
	}
	function save_email(){
		$email= $this->input->post('email');
		
		
		
		if(empty($email)){
			$this->session->set_flashdata('message','You have to use email for subscription, You may forget to enter your email');
			redirect('home/comingsoon');		
		}else{
			$insert = array('email' => $email);
			$this->m_home->save_email($insert);
		
			$this->session->set_flashdata('message','Thank you for your subscription');
			redirect('home/comingsoon');
		}
	}
    

    function index(){
        $data['title'] = "Saspazh | Apparel, Gear and Workware";
        $data['description'] = "Shop Saspazh Apparel, clothing and accessories and get the latest product and team updates";
        $data['data_list'] = $this->m_home->get_latest();
		    
        $data['popular'] = $this->m_home->get_popular();

//        $data['page'] = "v_home";
        $this->load->view("saspazh",$data);
    }

    function shop(){

       

		   $data['title'] = "Saspazh &laquo; Apparel, Gear and Workware &laquo;  We Are Born With A TRUST";
           $data['description'] = "Saspazh is a fashion brand founded by Fadhli maulidri. the expectation would like to give satisfactory clothing products for people in all walks of life";
           
        $data['slideshow'] = $this->m_home->get_slideshow(0, 3);
       		   

       $data['product'] = $this->m_home->get_highlight(0, 4);
		   $data['products'] = $this->m_home->get_highlight(4, 4);
           
		   $data['latest'] = $this->m_home->get_latest(0, 4);
		   $data['latests'] = $this->m_home->get_latest(4, 4);
		   
       $data['popular'] = $this->m_home->get_popular();
       
           //$data['page'] = "v";
           $data['page'] = "home/v_shop";
           $this->load->view("vintage/index",$data);
    }

    function folio(){
    
           $data['page'] = "folio";
           $this->load->view("saspazh",$data);
    }

    function blog(){
    
           $data['description'] = "Shop Saspazh Apparel, clothing and accessories and get the latest product and team updates";
           
		   $data['page'] = "blog";
           $this->load->view("saspazh",$data);
    }

    function contact(){
    
           $data['page'] = "contact";
           $this->load->view("saspazh",$data);
    }

    function login(){
    
           $data['page'] = "login";
           $this->load->view("saspazh",$data);
    }
    

	
}

?>
