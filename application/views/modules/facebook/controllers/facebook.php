<?php
class Facebook extends Controller{
    function  __construct() {
        parent::Controller();
		//$this->load->model('m_about');

    }
    
    function index(){
           $data['title'] = "Home";
           //$data['page'] = "v_facebook";
           $this->load->view("v_facebook",$data);
    }
	
}

?>
