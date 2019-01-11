<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_model {

	public function login($txtUsuario, $txtPassword){
		$this->db->where('email', $txtUsuario);
		$this->db->where('password', $txtPassword);

		$data = $this->db->get('user');
			if ($data->num_rows()>0){
				return true;
			}else{
				return false;
			}
		
	}

	
}	

