<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Login_model');
	}

	public function index()
	{
		$this->load->view('_partials/header');
		$this->load->view('login');
	}

	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$data = array(
			'username' => $username,
			'password' => md5($password)
			);
	$hasil = $this->Login_model->cek_login($data);
	if ($hasil->num_rows() == 1) {

		foreach ($hasil->result() as $sess) {
		$sess_data['logged_in'] = 'Sudah Login';
		$sess_data['username'] = $sess->username;
		$sess_data['role'] = $sess->role;
		$this->session->set_userdata($sess_data);
		}
	$status = $this->session->userdata('role');
	if ($status == 1) 
		 {
			$this->session->set_flashdata('login_berhasil', ' ');
			redirect(base_url("Beranda"));
		}elseif ($status == 2) {
			$this->session->set_flashdata('login_berhasil', ' ');
			redirect(base_url("Spk/a3"));
		
		}
	}
}
	

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('Login'));
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */