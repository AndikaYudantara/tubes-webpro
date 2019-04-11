<?php

class Penerbangan_model extends CI_model{

	public function getAll(){
		return $this->db->get('penerbangan')->result_array();
	}
		
}

?>