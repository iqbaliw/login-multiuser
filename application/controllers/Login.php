<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller{
	public function index(){
		$d['title'] = 'Login Multiuser Codeigniter dengan MySql &minus; AneIqbalcom';
		$d['judul'] = 'Login Multiuser Codeigniter dengan Mysql';
		$this->load->view('home', $d);
	}

	function masuk()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$cek = $this->model_login->cek($username, $password);
		if($cek->num_rows() == 1)
		{
			foreach($cek->result() as $data){
				$sess_data['id_user'] = $data->id_user;
				$sess_data['username'] = $data->username;
				$sess_data['id_jenis_user'] = $data->id_jenis_user;
				$this->session->set_userdata($sess_data);
			}

			if($this->session->userdata('id_jenis_user') == '1')
			{
				redirect('admin');
			}
			elseif($this->session->userdata('id_jenis_user') == '2')
			{
				redirect('contributor');
			}
			elseif($this->session->userdata('id_jenis_user') == '0')
			{
				redirect('home');
			}
		}
		else
		{
			$this->session->set_flashdata('pesan', 'Maaf, kombinasi username dengan password salah.');
			redirect('login');
		}
	}

	function keluar()
	{
		$this->session->sess_destroy();
		redirect('login');
	}
}