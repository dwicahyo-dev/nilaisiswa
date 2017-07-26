<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Keterangan_model extends CI_Model {
	public function __construct(){
		parent::__construct();
	}

	public function getAllKet(){
		return $this->db->get('keterangan')->result();
	}

}

/* End of file Keterangan_model.php */
/* Location: ./application/models/Keterangan_model.php */