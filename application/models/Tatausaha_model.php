<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tatausaha_model extends CI_Model {
	public function __construct(){
		parent::__construct();		
	}

	public function getAllTus(){
		return $this->db->get('tata_usaha')->result();
	}

}

/* End of file Tatausaha_model.php */
/* Location: ./application/models/Tatausaha_model.php */