<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kelas_model extends CI_Model {
	var $table = 'kelas';

	public function __construct(){
		parent::__construct();
		
	}

	public function getAllKelas(){
		return $this->db->get('kelas')->result();
	}

	public function count_all(){
		$this->db->from($this->table);
		return $this->db->count_all_results();
	}

}

/* End of file Kelas_model.php */
/* Location: ./application/models/Kelas_model.php */