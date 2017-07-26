<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('user_model', 'users');
		$this->load->model('Tatausaha_model', 'tus');
		$this->load->model('Keterangan_model', 'kets');

		if($this->session->userdata('status') != 'login'){
			redirect(base_url());
			// echo "HARUS LOGIN DULU";
		}
	}

	public function index(){
		$data = array(
			'title' => 'Data User | .this.nilaiSiswa',
			'content' => $this->load->view('user/user_view', [
				'kets' => $this->kets->getAllKet(),
				'tatas' => $this->tus->getAllTus()
				], TRUE),
			
			);

		$this->load->view('template/index', $data);
	}

	public function ajax_list()
	{
		$list = $this->users->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $users) {
			$no++;
			$row = array();
			$row[] = $no;
			$row[] = $users->nama_tata_usaha;
			$row[] = $users->nama_keterangan;
			$row[] = $users->username;
			$row[] = "********************";

			//add html for action
			$row[] = '<a class="btn btn-flat btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_user('."'".$users->id."'".')"><i class="glyphicon glyphicon-trash"></i>  Delete</a>';

			$data[] = $row;
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->users->count_all(),
			"recordsFiltered" => $this->users->count_filtered(),
			"data" => $data,
			);

		//output to json format
		echo json_encode($output);
	}

	public function ajax_add(){
		$this->_validate();
		$data = array(
			'id_tata_usaha' => $this->input->post('id_tata_usaha'),
			'id_keterangan' => $this->input->post('id_keterangan'),
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password')),
			);
		$insert = $this->users->save($data);
		echo json_encode(array("status" => TRUE));
	}



	public function ajax_delete($id){
		$this->users->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}

	private function _validate() {
		$data = array();
		$data['error_string'] = array();
		$data['inputerror'] = array();
		$data['status'] = TRUE;

		if($this->input->post('username') == ""){
			$data['inputerror'][] = 'username';
			$data['error_string'][] = 'Username Harus Diisi';
			$data['status'] = FALSE;
		}

		if($this->input->post('password') == ""){
			$data['inputerror'][] = 'password';
			$data['error_string'][] = 'Password Harus Diisi';
			$data['status'] = FALSE;
		}

		if($data['status'] === FALSE){
			echo json_encode($data);
			exit();
		}
	}





/**
 * ================================================== END OF USER CONTROLLER =====================================================
 */



public function add_User(){
	$data = array(
		'id_tata_usaha' => $this->input->post('id_tata_usaha'),
		'id_keterangan' => $this->input->post('id_keterangan'),
		'username' => $this->input->post('username'),
		'password' => $this->input->post('password')
		);

	$insert = $this->users->save($data);
		// echo json_encode(array("status" => TRUE));

	redirect('user','refresh');
}

public function tambah_data_user(){
	$data = array(
		'title' => 'Data User | .this.nilaiSiswa',
		'sidebar' => $this->load->view('template/sidebar', [
			'judul' => 'Data User',
			'tus' => $this->tus->getAllTu(),
			'kets' => $this->kets->getAllKet()
			], TRUE),
		'content' => $this->load->view('user/tambah_user', '', TRUE)
		);

	$this->load->view('template/index', $data);
}

public function delDataUser(){
	$data = array(
		'id' => $this->uri->segment(3)
		);

	$this->users->delete_user($data);

	redirect('user');
}

}

/* End of file User.php */
/* Location: ./application/controllers/User.php */