<?php

class Kota_model extends CI_model{

	public function getAll(){
		return $this->db->get('kota')->result_array();
	}
		
}

?>