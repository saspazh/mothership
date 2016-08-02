<?php 

class M_Logpengunjung extends CI_Model{
	
	public function add() {


		$pengunjung = array(
			'ip' => $_SERVER['REMOTE_ADDR'],
			'referer' => $_SERVER['HTTP_REFERER'], 
			'language' => $_SERVER['HTTP_ACCEPT_LANGUAGE'],
			'user_agent' => $_SERVER['HTTP_USER_AGENT'], 
			'file_name' => $_SERVER['REQUEST_URI'],
			'username' => $this->session->userdata('username')
			);

		$this->db->insert('log_pengunjung', $pengunjung);

	}

	public function savekeyword($keyword) {


		$pengunjung = array(
			'ip' => $_SERVER['REMOTE_ADDR'],
			'referer' => $_SERVER['HTTP_REFERER'], 
			'language' => $_SERVER['HTTP_ACCEPT_LANGUAGE'],
			'user_agent' => $_SERVER['HTTP_USER_AGENT'], 
			'file_name' => $_SERVER['REQUEST_URI'],
			'username' => $this->session->userdata('username'),
			'keyword' => $keyword
			);

		$this->db->insert('search', $pengunjung);

	}

}