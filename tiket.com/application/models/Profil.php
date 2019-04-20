<?php

class Profil extends CI_model{

	public function getAll(){
		return $this->db->get('user')->result_array();
	}

	

	public function update($username,$data){
		$this->db->where('username',$username);
		return $this->db->update('user',$data);
	}

	public function delete($username){
		$this->db->where('username',$username);
		return $this->db->delete('user');
	}
	
}

?>