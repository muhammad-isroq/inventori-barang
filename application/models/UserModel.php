<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Model extends CI_Model{
	//mendapatkan user berdasarkan username
	public function get_user_by_username($username){
		return $this->db->where('username', $username)->get('users')->row();
	}	
}



 ?>