<?php

class Invite extends Controller { // Our Cart class extends the Controller class
	
	function  __construct() {
        parent::Controller();
		$this->load->model('m_invite');
        $this->load->model('m_logpoin');
        
//		$this->load->library(array('cart')); // Load our cart model for our entire class
		$username = $this->session->userdata('username');
    }

    function index(){
    	if($this->session->userdata('login')=='customer' or $this->session->userdata('login')=='admin'){
    	
			$username = $this->session->userdata('username');

			$data['judul']='Undang teman anda bergabung';

			$data['title']='Saspazh | My Account';
			$data['page']='add';
			$this->load->view("vintage/index",$data);
			
		}else{
		
			redirect('register');
		}
    }
	
	
	function save(){
		if($this->session->userdata('login')=='customer' or $this->session->userdata('login')=='admin'){
        
            $username = $this->session->userdata('username');
            $str=$this->db->query("SELECT * FROM `customer` WHERE username='$username' limit 0,1");
            $id_customer = $str->row()->id_customer;    

            $email= $this->input->post('email');

            $invite = array(
                'id_customer' => $id_customer,
                'email' => $email
            );
    		$this->m_invite->save($invite);
			
            $this->m_logpoin->auto_add('invite',$id_customer);            

            redirect('invite');
    	}else{
    		redirect('invite');
    	}	
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