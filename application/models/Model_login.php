<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_login extends CI_Model{
	function cek($username, $password){
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		return $this->db->get('tbl_m_user');
	}
}