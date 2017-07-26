<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jeniskelamin_model extends CI_Model {
	public function __construct(){
		parent::__construct();
	}

	public function getAllJenisKelamin(){
		return $this->db->get('jenis_kelamin')->result();
	}

}

/* End of file Jeniskelamin_model.php */
/* Location: ./application/models/Jeniskelamin_model.php */