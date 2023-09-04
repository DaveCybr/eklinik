<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Core");
	}

	public function index()
	{
		$this->load->view('Auth/login');
	}

	public function aksi()
	{
		$table = $this->input->post('akun');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		if($table == 'admin'){
			$table = 'admin';
		}else{
			$this->Core->setMassage('Gagal', 'akun tidak ditemukan!', 'danger');
			redirect(base_url() . 'Login');
		}

		$cek = $this->db->get_where($table, array('username' => $username));

		if ($cek->num_rows() > 0) {
			$data = $cek->row_array();
			if ($password == $data['password']) {
				$session = array(
					'username' => $data['username'],
					'nama' => $data['nama'],
					'phone' => $data['phone'],
					'alamat' => $data['alamat'],
					'login' => 'ok'
				);
				$this->session->set_userdata($session);
				redirect(base_url('Home'));
			} else {
				$this->Core->setMassage('Gagal', 'Username atau Password Salah', 'danger');
				redirect(base_url() . 'Login');
			}
		} else {
			$this->Core->setMassage('Gagal', 'Username atau Password Salah', 'danger');
			redirect(base_url() . 'Login');
		}
	}


}
