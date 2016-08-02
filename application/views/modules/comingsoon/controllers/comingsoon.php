<?php
class Comingsoon extends Controller{
    function  __construct() {
        parent::Controller();
        $this->load->model('m_comingsoon');

    }
	
    function index(){

           $this->load->view("comingsoon",$data);

    }

    function save(){         
                $email = $this->input->post('email');
				 
                $insert = array('email' => $email);
				$this->m_comingsoon->save($insert);
                $this->session->set_flashdata('message',' Thank you ! We have received your message.');
                             
                redirect('');
    }
}
?>