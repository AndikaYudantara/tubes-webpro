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
	
}

?>