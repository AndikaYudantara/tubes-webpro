<?php

class Penumpang_model extends CI_model{

	public function getAll(){
		return $this->db->get('penumpang')->result_array();
	}


	public function insert($data){
		$this->db->insert('penumpang', $data);
	}
	
}

?>