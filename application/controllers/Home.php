<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
		parent::__construct();

		$this->load->model('guru_model', 'gurus');
		$this->load->model('kelas_model', 'kelass');
		$this->load->model('mapel_model', 'mapels');
		$this->load->model('siswa_model', 'siswas');
		$this->load->model('user_model', 'users');


		if($this->session->userdata('status') != 'login'){
			redirect(base_url());
			// echo "HARUS LOGIN DULU";
		}
	}

	public function index(){
		$data = array(
			'title' => 'Dashboard | .this.nilaiSiswa',
			'content' => $this->load->view('dashboard/content', [
					'gurus' => $this->gurus->count_all(),
					'siswas' => $this->siswas->count_all(),
					'mapels' => $this->siswas->count_all(),
					'kelass' => $this->kelass->count_all(),
					'users' => $this->users->count_all(),
					'vii' => $this->siswas->count_vii(),
					'viii' => $this->siswas->count_viii(),
					'ix' => $this->siswas->count_ix(),

				], TRUE)
			);
		
		$this->load->view('template/index', $data);
	}

	

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */