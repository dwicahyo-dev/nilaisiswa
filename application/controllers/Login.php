<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('User_model', 'users');
	}

	public function index(){
		$data = array(
			'title' => 'Login Page | .this.nilaiSiswa'
			);

		$this->load->view('template/login_view', $data);
	}

	function proses(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$where = array(
			'username' => $username,
			'password' => $password
			);

		$cek = $this->users->login($username,md5($password));

		if ($cek > 0) {
			$data_session = array(
				'username' => $username,
				'status' => 'login',
				'nama_user' => $cek->id_tata_usaha
				);
			$this->session->set_userdata($data_session);
			redirect('dashboard');
			// echo "BENAR";
		} else{
			// echo "SALAH";
			redirect(base_url());
		}
	}

	function logout(){
		$this->session->sess_destroy();
		// $this->session->unset_userdata('status');
		redirect(base_url());
		// echo "BERHASIL LOGOUT";
	}

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */