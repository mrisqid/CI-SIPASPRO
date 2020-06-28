<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Auth_model extends CI_Model
{

	public function register($data)
	{
		$this->db->insert('user', $data);
		return $this->db->insert_id();
	}

	public function login($email)
	{
		$query = $this->db->get_where('user', ['email' => $email]);
		return $query->row_array();
	}
}

/* End of file Auth.php */
