<?php

class Member extends Controller { // Our Cart class extends the Controller class
	
	function  __construct() {
        parent::Controller();
//		$this->load->model('m_checkout');
//		$this->load->library(array('cart')); // Load our cart model for our entire class
		$username = $this->session->userdata('username');
    }
	
	
	// function index(){
	
		//$id = $this->uri->segment(3);
        
		// if(!empty($username)){
			// redirect("member/$username");
		// }else{
			// redirect("register");
		// }
		
	// }
	
	public function index($param = NULL)
    {
        // your code here for checking $param
    }

    public function _remap($method, $params = array())
    {
        if (method_exists($this, $method))
        {
            return call_user_func_array(array($this, $method), $params);
        }

        show_404();
    }
	

}

/* End of file cart.php */
/* Location: ./application/controllers/cart.php */
?>