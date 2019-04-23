<?php

class User_model extends CI_model{

	public function getAll(){
		return $this->db->get('user')->result_array();
	}

	public function validate($email, $password){
		$valid = FALSE;

		foreach ($this->getAll() as $user) {
			if(strcmp($user['email'], $email) == 0 && strcmp($user['password'], $password) == 0){
				$valid = TRUE;
				break;
			}
		}

		return $valid;
	}

	public function isAdmin($email){
		$admin = FALSE;

		foreach ($this->getAll() as $user) {
			if(strcmp($user['email'], $email) == 0 && $user['isAdmin'] == 1){
				$admin = TRUE;
				break;
			}
		}

		return $admin;
	}

	public function insert($data){
		$this->db->insert('user', $data);
	}

	public function search_by_email($email){
		$this->db->where('email', $email);
		return $this->db->get('user')->row();
	}

	
}

?>