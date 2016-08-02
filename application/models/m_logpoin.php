<?php 

class M_Logpoin extends CI_Model{

	public function auto_add($a,$id) {

		$daftar_poin = $this->db->query("select * from daftar_poin where action = '$a'");
		$poin = $daftar_poin->last_row()->poin;

        $arrayName = array(
        	'id_customer' => $id,
        	'poin' => $poin,
        	'tanggal' => date('Y-m-d H:i:s'),
        	'keterangan'=> $a 
        );

        $this->db->insert('poin', $arrayName);
    }

    function get_list($a) {

        $daftar_poin = $this->db->query("select * from daftar_poin where action = '$a'");
        $poin = $daftar_poin->last_row();
        return $poin;
    }



}