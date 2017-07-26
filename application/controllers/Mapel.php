<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mapel extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Mapel_model', 'mapels');

		if($this->session->userdata('status') != 'login'){
			redirect(base_url());
			// echo "HARUS LOGIN DULU";
		}
	}

	public function index(){
		$data = array(
			'title' => 'Data Mapel | .this.nilaiSiswa',
			'content' => $this->load->view('mapel/mapel_view', '', TRUE)
			);

		$this->load->view('template/index', $data);
	}

	public function ajax_list()
	{
		$list = $this->mapels->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $mapels) {
			$no++;
			$row = array();
			$row[] = $no;
			$row[] = $mapels->kode_mapel;
			$row[] = $mapels->nama_mapel;

			//add html for action
			$row[] = '<a class="btn btn-flat btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_mapel('."'".$mapels->kode_mapel."'".')"><i class="glyphicon glyphicon-pencil"></i>  Edit</a>
			<a class="btn btn-flat btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_mapel('."'".$mapels->kode_mapel."'".')"><i class="glyphicon glyphicon-trash"></i>  Delete</a>';

			$data[] = $row;
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->mapels->count_all(),
			"recordsFiltered" => $this->mapels->count_filtered(),
			"data" => $data,
			);

		//output to json format
		echo json_encode($output);
	}

	public function ajax_add(){
		$this->_validate();
		$data = array(
			'kode_mapel' => $this->input->post('kode_mapel'),
			'nama_mapel' => $this->input->post('nama_mapel'),
			);
		$insert = $this->mapels->save($data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_edit($kode_mapel){
		$data = $this->mapels->get_by_id($kode_mapel);
		echo json_encode($data);
	}

	public function ajax_update(){
		$data = array(
			'kode_mapel' => $this->input->post('kode_mapel'),
			'nama_mapel' => $this->input->post('nama_mapel'),
			);
		$this->mapels->update(array('kode_mapel' => $this->input->post('kode_mapel')), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_delete($kode_mapel){
		$this->mapels->delete_by_id($kode_mapel);
		echo json_encode(array("status" => TRUE));
	}

	private function _validate() {
		$data = array();
		$data['error_string'] = array();
		$data['inputerror'] = array();
		$data['status'] = TRUE;

		if($this->input->post('kode_mapel') == ""){
			$data['inputerror'][] = 'kode_mapel';
			$data['error_string'][] = 'Kode Mapel Harus Diisi';
			$data['status'] = FALSE;
		}

		if($this->input->post('nama_mapel') == ""){
			$data['inputerror'][] = 'nama_mapel';
			$data['error_string'][] = 'Nama Mapel Harus Diisi';
			$data['status'] = FALSE;
		}

		if($data['status'] === FALSE){
			echo json_encode($data);
			exit();
		}
	}






















//////////////////////// NATIVE CODEIGNITER ////////////////////////


	public function tambah_data_mapel(){
		$data = array(
			'title' => 'Data Mapel | .this.nilaiSiswa',
			'sidebar' => $this->load->view('template/sidebar', [
				'judul' => 'Data Mapel'
				], TRUE),
			'content' => $this->load->view('mapel/add_mapel_view', '', TRUE)
			);

		$this->load->view('template/index', $data);
	}

	public function add(){
		$data = array(
			'kode_mapel' => $this->input->post('kode_mapel', TRUE),
			'nama_mapel' => $this->input->post('nama_mapel', TRUE)
			);
	}

	public function delDataMapel(){
		$data = array(
			'kode_mapel' => $this->uri->segment(3)
			);

		$this->mapels->delete_mapel($data);

		redirect('mapel');
	}

}

/* End of file Mapel.php */
/* Location: ./application/controllers/Mapel.php */