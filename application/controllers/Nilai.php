<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Nilai extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('guru_model', 'gurus');
		$this->load->model('siswa_model', 'siswas');
		$this->load->model('mapel_model', 'mapels');
		$this->load->model('kelas_model', 'kelass');

		if($this->session->userdata('status') != 'login'){
			redirect(base_url());
			// echo "HARUS LOGIN DULU";
		}

	}

	public function index(){
		$data = array(
			'title' => 'Data Nilai | .this.nilaiSiswa',
			'content' => $this->load->view('nilai/index', [
				'mapels' => $this->mapels->getAllMapel(),
				'kelass' => $this->kelass->getAllKelas(),
				'gurus' => $this->gurus->getAllGuru()
				], TRUE),

			);
		
		$this->load->view('template/index', $data);
	}

	function tampil(){
		$data['tampilGuru'] = $this->gurus->getAllGuru();
		$data['tampilSiswa'] = $this->siswas->getAllSiswa();

		$this->load->view('nilai/tampil',$data);
	}

	function cariGuru(){
		$id_guru_mapel = $this->input->post('id_guru_mapel');

		$guru = $this->gurus->cariGuru($id_guru_mapel);
		if ($guru->num_rows() > 0) {
			$guru = $guru->row();
			echo $guru->nama_guru_mapel;
		}
	}

	function cariMapel(){
		$id_guru_mapel = $this->input->post('id_guru_mapel');

		$guru = $this->gurus->cariMapel($id_guru_mapel);
		if ($guru->num_rows() > 0) {
			$guru = $guru->row();
			echo $guru->kode_mapel;
		}
	}

}

/* End of file Nilai.php */
/* Location: ./application/controllers/Nilai.php */