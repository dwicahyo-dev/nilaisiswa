<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Guru_model extends CI_Model {
	var $table = 'guru';
	var $column_order = array('id_guru_mapel','nama_guru_mapel', 'alamat', 'nama_jenis_kelamin', 'nama_mapel', null); //set column field database for datatable orderable
	var $column_search = array('id_guru_mapel','nama_guru_mapel', 'alamat', 'nama_jenis_kelamin', 'nama_mapel'); //set column field database for datatable searchable just firstname
	var $order = array('id_guru_mapel' => 'asc'); // default order 

	public function __construct(){
		parent::__construct();
	}

	private function _get_datatables_query(){
		
		$this->db->select('*');
		$this->db->from('guru');
		$this->db->join('jenis_kelamin',
			'jenis_kelamin.id_jenis_kelamin = guru.id_jenis_kelamin');
		$this->db->join('mapel',
			'mapel.kode_mapel = guru.kode_mapel');

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

	function get_datatables(){
		$this->_get_datatables_query();
		if($_POST['length'] != -1)
			$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();
		return $query->result();
	}

	function count_filtered(){
		$this->_get_datatables_query();
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function count_all(){
		$this->db->from($this->table);
		return $this->db->count_all_results();
	}

	public function get_by_id($id_guru_mapel){
		$this->db->from($this->table);
		$this->db->where('id_guru_mapel',$id_guru_mapel);
		$query = $this->db->get();

		return $query->row();
	}

	public function delete_by_id($id_guru_mapel){
		$this->db->where('id_guru_mapel', $id_guru_mapel);
		$this->db->delete($this->table);
	}

	public function save($data){
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}

	public function update($where, $data){
		$this->db->update($this->table, $data, $where);
		return $this->db->affected_rows();
	}


	

	public function getAllGuru(){
		$this->db->select('*');
		$this->db->from('guru');
		$this->db->join('jenis_kelamin',
			'jenis_kelamin.id_jenis_kelamin = guru.id_jenis_kelamin');
		$this->db->join('mapel',
			'mapel.kode_mapel = guru.kode_mapel');
		return $this->db->get()->result();
	}

	public function delete_guru($data){
		$this->db->delete('guru', $data);
	}


	function cariGuru($id_guru_mapel){
		$this->db->where('id_guru_mapel',$id_guru_mapel);
		return $this->db->get('guru');
	}

	function cariMapel($id_guru_mapel){
		$this->db->where('id_guru_mapel',$id_guru_mapel);
		return $this->db->get('guru');
	}

}

/* End of file Guru_model.php */
/* Location: ./application/models/Guru_model.php */