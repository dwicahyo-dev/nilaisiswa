<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Siswa extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('siswa_model', 'siswas');
		$this->load->model('jeniskelamin_model', 'kelamins');
		$this->load->model('kelas_model', 'kelass');

		if($this->session->userdata('status') != 'login'){
			redirect(base_url());
			// echo "HARUS LOGIN DULU";
		}
	}

	public function index(){
		$data = array(
			'title' => 'Data Semua Siswa | .this.nilaiSiswa',
			'content' => $this->load->view('siswa/siswa_view', [
				'kelamins' => $this->kelamins->getAllJenisKelamin(),
				'kelass' => $this->kelass->getAllKelas()
				], TRUE)
			);

		$this->load->view('template/index', $data);
	}

	public function ajax_add(){
		$this->_validate();
		$data = array(
			'nis' => $this->input->post('nis'),
			'nama_siswa' => $this->input->post('nama_siswa'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),
			'tanggal_lahir' => $this->input->post('tanggal_lahir'),
			'alamat' => $this->input->post('alamat'),
			'id_jenis_kelamin' => $this->input->post('id_jenis_kelamin'),
			'id_kelas' => $this->input->post('id_kelas'),
			);
		$insert = $this->siswas->save($data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_list(){
		$list = $this->siswas->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $siswas) {
			$no++;
			$row = array();
			$row[] = $no;
			$row[] = $siswas->nis;
			$row[] = $siswas->nama_siswa;
			$row[] = $siswas->tempat_lahir . ', '. $siswas->tanggal_lahir;
			$row[] = $siswas->alamat;
			$row[] = $siswas->nama_jenis_kelamin;
			$row[] = $siswas->nama_kelas;

			//add html for action
			$row[] = '<a class="btn btn-flat btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_siswa('."'".$siswas->nis."'".')"><i class="glyphicon glyphicon-pencil"></i>  Edit</a>
			<a class="btn btn-flat btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_siswa('."'".$siswas->nis."'".')"><i class="glyphicon glyphicon-trash"></i>  Delete</a>';

			$data[] = $row;
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->siswas->count_all(),
			"recordsFiltered" => $this->siswas->count_filtered(),
			"data" => $data,
			);

		//output to json format
		echo json_encode($output);
	}

	/**
	 * ---------------------------------------------------------------------------------------------------------------------
	 */

	public function siswa_kelas_vii(){
		$data = array(
			'title' => 'Data Siswa Kelas VII | .this.nilaiSiswa',
			'content' => $this->load->view('siswa/siswa_view_kelas_vii', [
				'kelamins' => $this->kelamins->getAllJenisKelamin(),
				'kelass' => $this->kelass->getAllKelas()
				], TRUE)
			);

		$this->load->view('template/index', $data);
	}

	public function siswa_kelas_viii(){
		$data = array(
			'title' => 'Data Siswa Kelas VIII | .this.nilaiSiswa',
			'content' => $this->load->view('siswa/siswa_view_kelas_viii', [
				'kelamins' => $this->kelamins->getAllJenisKelamin(),
				'kelass' => $this->kelass->getAllKelas()
				], TRUE)
			);

		$this->load->view('template/index', $data);
	}

	public function siswa_kelas_ix(){
		$data = array(
			'title' => 'Data Siswa Kelas IX | .this.nilaiSiswa',
			'content' => $this->load->view('siswa/siswa_view_kelas_ix', [
				'kelamins' => $this->kelamins->getAllJenisKelamin(),
				'kelass' => $this->kelass->getAllKelas()
				], TRUE)
			);

		$this->load->view('template/index', $data);
	}

	/**
	 * ============================================================================================================================
	 */

	public function ajax_list_kelas_vii_A(){
		$list = $this->siswas->get_datatables_by_kelas_vii_A();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $siswas) {
			$no++;
			$row = array();
			$row[] = $no;
			$row[] = $siswas->nis;
			$row[] = $siswas->nama_siswa;
			$row[] = $siswas->tempat_lahir. ', '. $siswas->tanggal_lahir;
			$row[] = $siswas->alamat;
			$row[] = $siswas->nama_jenis_kelamin;
			$row[] = $siswas->nama_kelas;

			//add html for action
			$row[] = '<a class="btn btn-flat btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_siswa('."'".$siswas->nis."'".')"><i class="glyphicon glyphicon-pencil"></i>  Edit</a>
			<a class="btn btn-flat btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_siswa('."'".$siswas->nis."'".')"><i class="glyphicon glyphicon-trash"></i>  Delete</a>';

			$data[] = $row;
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->siswas->count_all(),
			"recordsFiltered" => $this->siswas->count_filtered(),
			"data" => $data,
			);

		//output to json format
		echo json_encode($output);
	}

	public function ajax_list_kelas_viii_A(){
		$list = $this->siswas->get_datatables_by_kelas_viii_A();
		$data = array();
		$no = $_POST['start']; 
		foreach ($list as $siswas) {
			$no++;
			$row = array();
			$row[] = $no;
			$row[] = $siswas->nis;
			$row[] = $siswas->nama_siswa;
			$row[] = $siswas->tempat_lahir. ', '. $siswas->tanggal_lahir;
			$row[] = $siswas->alamat;
			$row[] = $siswas->nama_jenis_kelamin;
			$row[] = $siswas->nama_kelas;


			//add html for action
			$row[] = '<a class="btn btn-flat btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_siswa('."'".$siswas->nis."'".')"><i class="glyphicon glyphicon-pencil"></i>  Edit</a>
			<a class="btn btn-flat btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_siswa('."'".$siswas->nis."'".')"><i class="glyphicon glyphicon-trash"></i>  Delete</a>';

			$data[] = $row;
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->siswas->count_all(),
			"recordsFiltered" => $this->siswas->count_filtered(),
			"data" => $data,
			);

		//output to json format
		echo json_encode($output);
	}

	public function ajax_list_kelas_ix_A(){
		$list = $this->siswas->get_datatables_by_kelas_ix_A();
		$data = array();
		$no = $_POST['start']; 
		foreach ($list as $siswas) {
			$no++;
			$row = array();
			$row[] = $no;
			$row[] = $siswas->nis;
			$row[] = $siswas->nama_siswa;
			$row[] = $siswas->tempat_lahir. ', '. $siswas->tanggal_lahir;
			$row[] = $siswas->alamat;
			$row[] = $siswas->nama_jenis_kelamin;
			$row[] = $siswas->nama_kelas;


			//add html for action
			$row[] = '<a class="btn btn-flat btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_siswa('."'".$siswas->nis."'".')"><i class="glyphicon glyphicon-pencil"></i>  Edit</a>
			<a class="btn btn-flat btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_siswa('."'".$siswas->nis."'".')"><i class="glyphicon glyphicon-trash"></i>  Delete</a>';

			$data[] = $row;
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->siswas->count_all(),
			"recordsFiltered" => $this->siswas->count_filtered(),
			"data" => $data,
			);

		//output to json format
		echo json_encode($output);
	}

	public function ajax_list_kelas_vii_B(){
		$list = $this->siswas->get_datatables_by_kelas_vii_B();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $siswas) {
			$no++;
			$row = array();
			$row[] = $no;
			$row[] = $siswas->nis;
			$row[] = $siswas->nama_siswa;
			$row[] = $siswas->tempat_lahir. ', '. $siswas->tanggal_lahir;
			$row[] = $siswas->alamat;
			$row[] = $siswas->nama_jenis_kelamin;
			$row[] = $siswas->nama_kelas;


			//add html for action
			$row[] = '<a class="btn btn-flat btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_siswa('."'".$siswas->nis."'".')"><i class="glyphicon glyphicon-pencil"></i>  Edit</a>
			<a class="btn btn-flat btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_siswa('."'".$siswas->nis."'".')"><i class="glyphicon glyphicon-trash"></i>  Delete</a>';

			$data[] = $row;
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->siswas->count_all(),
			"recordsFiltered" => $this->siswas->count_filtered(),
			"data" => $data,
			);

		//output to json format
		echo json_encode($output);
	}

	public function ajax_list_kelas_viii_B(){
		$list = $this->siswas->get_datatables_by_kelas_viii_B();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $siswas) {
			$no++;
			$row = array();
			$row[] = $no;
			$row[] = $siswas->nis;
			$row[] = $siswas->nama_siswa;
			$row[] = $siswas->tempat_lahir. ', '. $siswas->tanggal_lahir;
			$row[] = $siswas->alamat;
			$row[] = $siswas->nama_jenis_kelamin;
			$row[] = $siswas->nama_kelas;


			//add html for action
			$row[] = '<a class="btn btn-flat btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_siswa('."'".$siswas->nis."'".')"><i class="glyphicon glyphicon-pencil"></i>  Edit</a>
			<a class="btn btn-flat btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_siswa('."'".$siswas->nis."'".')"><i class="glyphicon glyphicon-trash"></i>  Delete</a>';

			$data[] = $row;
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->siswas->count_all(),
			"recordsFiltered" => $this->siswas->count_filtered(),
			"data" => $data,
			);

		//output to json format
		echo json_encode($output);
	}

	public function ajax_list_kelas_ix_B(){
		$list = $this->siswas->get_datatables_by_kelas_ix_B();
		$data = array();
		$no = $_POST['start']; 
		foreach ($list as $siswas) {
			$no++;
			$row = array();
			$row[] = $no;
			$row[] = $siswas->nis;
			$row[] = $siswas->nama_siswa;
			$row[] = $siswas->tempat_lahir. ', '. $siswas->tanggal_lahir;
			$row[] = $siswas->alamat;
			$row[] = $siswas->nama_jenis_kelamin;
			$row[] = $siswas->nama_kelas;


			//add html for action
			$row[] = '<a class="btn btn-flat btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_siswa('."'".$siswas->nis."'".')"><i class="glyphicon glyphicon-pencil"></i>  Edit</a>
			<a class="btn btn-flat btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_siswa('."'".$siswas->nis."'".')"><i class="glyphicon glyphicon-trash"></i>  Delete</a>';

			$data[] = $row;
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->siswas->count_all(),
			"recordsFiltered" => $this->siswas->count_filtered(),
			"data" => $data,
			);

		//output to json format
		echo json_encode($output);
	}

	public function ajax_list_kelas_vii_C(){
		$list = $this->siswas->get_datatables_by_kelas_vii_C();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $siswas) {
			$no++;
			$row = array();
			$row[] = $no;
			$row[] = $siswas->nis;
			$row[] = $siswas->nama_siswa;
			$row[] = $siswas->tempat_lahir. ', '. $siswas->tanggal_lahir;
			$row[] = $siswas->alamat;
			$row[] = $siswas->nama_jenis_kelamin;
			$row[] = $siswas->nama_kelas;


			//add html for action
			$row[] = '<a class="btn btn-flat btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_siswa('."'".$siswas->nis."'".')"><i class="glyphicon glyphicon-pencil"></i>  Edit</a>
			<a class="btn btn-flat btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_siswa('."'".$siswas->nis."'".')"><i class="glyphicon glyphicon-trash"></i>  Delete</a>';

			$data[] = $row;
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->siswas->count_all(),
			"recordsFiltered" => $this->siswas->count_filtered(),
			"data" => $data,
			);

		//output to json format
		echo json_encode($output);
	}

	public function ajax_list_kelas_viii_C(){
		$list = $this->siswas->get_datatables_by_kelas_viii_C();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $siswas) {
			$no++;
			$row = array();
			$row[] = $no;
			$row[] = $siswas->nis;
			$row[] = $siswas->nama_siswa;
			$row[] = $siswas->tempat_lahir. ', '. $siswas->tanggal_lahir;
			$row[] = $siswas->alamat;
			$row[] = $siswas->nama_jenis_kelamin;
			$row[] = $siswas->nama_kelas;


			//add html for action
			$row[] = '<a class="btn btn-flat btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_siswa('."'".$siswas->nis."'".')"><i class="glyphicon glyphicon-pencil"></i>  Edit</a>
			<a class="btn btn-flat btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_siswa('."'".$siswas->nis."'".')"><i class="glyphicon glyphicon-trash"></i>  Delete</a>';

			$data[] = $row;
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->siswas->count_all(),
			"recordsFiltered" => $this->siswas->count_filtered(),
			"data" => $data,
			);

		//output to json format
		echo json_encode($output);
	}

	public function ajax_list_kelas_ix_C(){
		$list = $this->siswas->get_datatables_by_kelas_ix_C();
		$data = array();
		$no = $_POST['start']; 
		foreach ($list as $siswas) {
			$no++;
			$row = array();
			$row[] = $no;
			$row[] = $siswas->nis;
			$row[] = $siswas->nama_siswa;
			$row[] = $siswas->tempat_lahir. ', '. $siswas->tanggal_lahir;
			$row[] = $siswas->alamat;
			$row[] = $siswas->nama_jenis_kelamin;
			$row[] = $siswas->nama_kelas;


			//add html for action
			$row[] = '<a class="btn btn-flat btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_siswa('."'".$siswas->nis."'".')"><i class="glyphicon glyphicon-pencil"></i>  Edit</a>
			<a class="btn btn-flat btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_siswa('."'".$siswas->nis."'".')"><i class="glyphicon glyphicon-trash"></i>  Delete</a>';

			$data[] = $row;
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->siswas->count_all(),
			"recordsFiltered" => $this->siswas->count_filtered(),
			"data" => $data,
			);

		//output to json format
		echo json_encode($output);
	}

	public function ajax_edit($nis){
		$data = $this->siswas->get_by_id($nis);
		echo json_encode($data);
	}

	public function ajax_update(){
		$data = array(
			'nis' => $this->input->post('nis'),
			'nama_siswa' => $this->input->post('nama_siswa'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),
			'tanggal_lahir' => $this->input->post('tanggal_lahir'),
			'alamat' => $this->input->post('alamat'),
			'id_jenis_kelamin' => $this->input->post('id_jenis_kelamin'),
			'id_kelas' => $this->input->post('id_kelas'),
			);

		$this->siswas->update(array('nis' => $this->input->post('nis')), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_delete($nis){
		$this->siswas->delete_by_id($nis);
		echo json_encode(array("status" => TRUE));
	}



	private function _validate() {
		$data = array();
		$data['error_string'] = array();
		$data['inputerror'] = array();
		$data['status'] = TRUE;

		if($this->input->post('nis') == ""){
			$data['inputerror'][] = 'nis';
			$data['error_string'][] = 'NIS Harus Diisi';
			$data['status'] = FALSE;
		}

		if($this->input->post('nama_siswa') == ""){
			$data['inputerror'][] = 'nama_siswa';
			$data['error_string'][] = 'Nama Siswa Harus Diisi';
			$data['status'] = FALSE;
		}

		if($this->input->post('tempat_lahir') == ""){
			$data['inputerror'][] = 'tempat_lahir';
			$data['error_string'][] = 'Tempat Lahir Harus Diisi';
			$data['status'] = FALSE;
		}

		if($this->input->post('tanggal_lahir') == ""){
			$data['inputerror'][] = 'tanggal_lahir';
			$data['error_string'][] = 'Tanggal Lahir Harus Diisi';
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

		if($this->input->post('id_kelas') == ""){
			$data['inputerror'][] = 'id_kelas';
			$data['error_string'][] = 'Kelas Harus Diisi';
			$data['status'] = FALSE;
		}

		if($data['status'] === FALSE){
			echo json_encode($data);
			exit();
		}
	}

}

/* End of file Siswa.php */
/* Location: ./application/controllers/Siswa.php */