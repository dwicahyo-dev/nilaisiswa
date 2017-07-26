<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Guru extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('guru_model', 'gurus');
		$this->load->model('jeniskelamin_model', 'kelamins');
		$this->load->model('mapel_model', 'mapels');

		if($this->session->userdata('status') != 'login'){
			redirect(base_url());
			// echo "HARUS LOGIN DULU";
		}
	}

	public function index(){
		$data = array(
			'title' => 'Data Guru | .this.nilaiSiswa',
			'content' => $this->load->view('guru/guru_view', [
				'kelamins' => $this->kelamins->getAllJenisKelamin(),
				'mapels' => $this->mapels->getAllMapel()
				], TRUE)
			);

		$this->load->view('template/index', $data);
	}

	public function ajax_list()
	{
		$list = $this->gurus->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $gurus) {
			$no++;
			$row = array();
			$row[] = $no;
			$row[] = $gurus->id_guru_mapel;
			$row[] = $gurus->nama_guru_mapel;
			$row[] = $gurus->alamat;
			$row[] = $gurus->nama_jenis_kelamin;
			$row[] = $gurus->nama_mapel;

			//add html for action
			$row[] = '<a class="btn btn-flat btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_guru('."'".$gurus->id_guru_mapel."'".')"><i class="glyphicon glyphicon-pencil"></i>  Edit</a>
			<a class="btn btn-flat btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_guru('."'".$gurus->id_guru_mapel."'".')"><i class="glyphicon glyphicon-trash"></i>  Delete</a>';

			$data[] = $row;
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->gurus->count_all(),
			"recordsFiltered" => $this->gurus->count_filtered(),
			"data" => $data,
			);

		//output to json format
		echo json_encode($output);
	}

	public function ajax_add(){
		$this->_validate();
		$data = array(
			'id_guru_mapel' => $this->input->post('id_guru_mapel'),
			'nama_guru_mapel' => $this->input->post('nama_guru_mapel'),
			'alamat' => $this->input->post('alamat'),
			'id_jenis_kelamin' => $this->input->post('id_jenis_kelamin'),
			'kode_mapel' => $this->input->post('kode_mapel')
			);
		$insert = $this->gurus->save($data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_edit($id_guru_mapel){
		$data = $this->gurus->get_by_id($id_guru_mapel);
		echo json_encode($data);
	}

	public function ajax_update(){
		$data = array(
			'id_guru_mapel' => $this->input->post('id_guru_mapel'),
			'nama_guru_mapel' => $this->input->post('nama_guru_mapel'),
			'alamat' => $this->input->post('alamat'),
			'id_jenis_kelamin' => $this->input->post('id_jenis_kelamin'),
			'kode_mapel' => $this->input->post('kode_mapel')
			);

		$this->gurus->update(array('id_guru_mapel' => $this->input->post('id_guru_mapel')), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_delete($id_guru_mapel){
		$this->gurus->delete_by_id($id_guru_mapel);
		echo json_encode(array("status" => TRUE));
	}

	private function _validate() {
		$data = array();
		$data['error_string'] = array();
		$data['inputerror'] = array();
		$data['status'] = TRUE;

		if($this->input->post('id_guru_mapel') == ""){
			$data['inputerror'][] = 'id_guru_mapel';
			$data['error_string'][] = 'NIP Harus Diisi';
			$data['status'] = FALSE;
		}

		if($this->input->post('nama_guru_mapel') == ""){
			$data['inputerror'][] = 'nama_guru_mapel';
			$data['error_string'][] = 'Nama Guru Harus Diisi';
			$data['status'] = FALSE;
		}

		if($this->input->post('alamat') == ""){
			$data['inputerror'][] = 'alamat';
			$data['error_string'][] = 'Alamat Harus Diisi';
			$data['status'] = FALSE;
		}

		if($this->input->post('id_jenis_kelamin') == ""){
			$data['inputerror'][] = 'id_jenis_kelamin';
			$data['error_string'][] = 'Jenis Kelamin Harus Diisi';
			$data['status'] = FALSE;
		}

		if($this->input->post('kode_mapel') == ""){
			$data['inputerror'][] = 'kode_mapel';
			$data['error_string'][] = 'Kode Mapel Harus Diisi';
			$data['status'] = FALSE;
		}

		if($data['status'] === FALSE){
			echo json_encode($data);
			exit();
		}
	}





/**
 * =================================================================================================================================
 */


public function delDataGuru(){
	$data = array(
		'id_guru_mapel' => $this->uri->segment(3)
		);

	$this->guru->delete_guru($data);
	redirect('guru');
}

public function mantap(){
	$this->db->join();
}

}

/* End of file Guru.php */
/* Location: ./application/controllers/Guru.php */