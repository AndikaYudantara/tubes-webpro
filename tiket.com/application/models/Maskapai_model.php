<?php

class maskapai_model extends CI_model{

	public function getAll(){
		return $this->db->get('maskapai')->result_array();
	}
		
}

?>