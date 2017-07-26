<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {
	var $table = 'user';
	var $column_order = array('nama_tata_usaha', 'username',null); //set column field database for datatable orderable
	var $column_search = array('nama_tata_usaha', 'username'); //set column field database for datatable searchable just firstname
	var $order = array('id' => 'asc'); // default order 


	public function __construct(){
		parent::__construct();
	}

	private function _get_datatables_query(){
		
		$this->db->select('*');
		$this->db->from('user');
		$this->db->join('tata_usaha', 
			'tata_usaha.id_tata_usaha = user.id_tata_usaha');
		$this->db->join('keterangan', 
			'keterangan.id_keterangan = user.id_keterangan');

		$i = 0;

		foreach ($this->column_search as $item) // loop column 
		{
			if($_POST['search']['value']) // if datatable send POST for search
			{
				
				if($i===0) // first loop
				{
					$this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
					$this->db->like($item, $_POST['search']['value']);
				}
				else
				{
					$this->db->or_like($item, $_POST['search']['value']);
				}

				if(count($this->column_search) - 1 == $i) //last loop
					$this->db->group_end(); //close bracket
				}
				$i++;
			}

		if(isset($_POST['order'])) // here order processing
		{
			$this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		} 
		else if(isset($this->order))
		{
			$order = $this->order;
			$this->db->order_by(key($order), $order[key($order)]);
		}
	}

	function get_datatables()
	{
		$this->_get_datatables_query();
		if($_POST['length'] != -1)
			$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();
		return $query->result();
	}

	function count_filtered()
	{
		$this->_get_datatables_query();
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function count_all(){
		$this->db->from($this->table);
		return $this->db->count_all_results();
	}

	public function get_by_id($id)
	{
		$this->db->from($this->table);
		$this->db->where('id',$id);
		$query = $this->db->get();

		return $query->row();
	}

	public function save($data){
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}

	public function update($where, $data){
		$this->db->update($this->table, $data, $where);
		return $this->db->affected_rows();
	}

	public function delete_by_id($id)
	{
		$this->db->where('id', $id);
		$this->db->delete($this->table);
	}

	public function cek($username, $password){
		$this->db->where('username', $username);
		$this->db->where('password', $password);

		return $this->db->get('user');
	}





	public function getAllUser(){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->join('tata_usaha', 
			'tata_usaha.id_tata_usaha = user.id_tata_usaha');
		$this->db->join('keterangan', 
			'keterangan.id_keterangan = user.id_keterangan');
		return $this->db->get()->result();
	}

	// public function save($data){
	// 	$this->db->insert('user', $data);
	// 	return $this->db->insert_id();

	// }

	public function login($username,$password){
		// Validasi
		$this->db->where('username', $username);
		$this->db->where('password', $password);

		$result = $this->db->get('user');

		if($result->num_rows() == 1){
			return $result->row(0)->id;
		} else {
			return false;
		}
	}

	// Check username exists
	public function check_username_exists($username){
		$query = $this->db->get_where('user', array('username' => $username));
		if(empty($query->row_array())){
			return true;
		} else {
			return false;
		}
	}

	public function delete_user($data){
		$this->db->delete('user', $data);
	}

	function cek_login($table,$where){
		return $this->db->get_where($table,$where);
	}



}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */