<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('id_jenis_user') <> '0')
		{
			redirect('login');
		}
	}

	public function index(){
		$d['title'] = 'Login Multiuser Codeigniter dengan MySql &minus; AneIqbalcom';
		$d['judul'] = 'Login Multiuser Codeigniter dengan Mysql';
		$d['username'] = $this->session->userdata('username');
		$d['page'] = 'user';
		$this->load->view('logout', $d);
	}
}