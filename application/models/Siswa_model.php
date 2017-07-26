<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Siswa_model extends CI_Model {
	var $table = 'siswa';
	var $column_order = array('nis','nama_siswa', 'tempat_lahir', 'tanggal_lahir', 'alamat', 'nama_jenis_kelamin', 'nama_kelas', null); //set column field database for datatable orderable
	var $column_search = array('nis','nama_siswa', 'tempat_lahir', 'tanggal_lahir', 'alamat', 'nama_jenis_kelamin', 'nama_kelas'); //set column field database for datatable searchable just firstname
	var $order = array('nis' => 'asc'); // default order 


	public function __construct(){
		parent::__construct();
		
	}

	private function _get_datatables_query(){
		
		$this->db->select('*');
		$this->db->from('siswa');
		$this->db->join('jenis_kelamin',
			'jenis_kelamin.id_jenis_kelamin = siswa.id_jenis_kelamin');
		$this->db->join('kelas',
			'kelas.id_kelas = siswa.id_kelas');

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


	/**
	 * GET SISWA BY KELAS VII
	 */
	
	/**
	 * BY KELAS VII A
	 */
	function get_datatables_by_kelas_vii_A(){
		$this->_get_datatables_query_by_kelas_vii_A();
		if($_POST['length'] != -1)
			$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();
		return $query->result();
	}

	private function _get_datatables_query_by_kelas_vii_A(){
		
		$this->db->select('*');
		$this->db->from('siswa');
		$this->db->join('jenis_kelamin',
			'jenis_kelamin.id_jenis_kelamin = siswa.id_jenis_kelamin');
		$this->db->join('kelas',
			'kelas.id_kelas = siswa.id_kelas');
		$this->db->where('nama_kelas', 'VII A');

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

	/**
	 * BY KELAS VII B
	 */	
	function get_datatables_by_kelas_vii_B(){
		$this->_get_datatables_query_by_kelas_vii_B();
		if($_POST['length'] != -1)
			$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();
		return $query->result();
	}

	private function _get_datatables_query_by_kelas_vii_B(){
		
		$this->db->select('*');
		$this->db->from('siswa');
		$this->db->join('jenis_kelamin',
			'jenis_kelamin.id_jenis_kelamin = siswa.id_jenis_kelamin');
		$this->db->join('kelas',
			'kelas.id_kelas = siswa.id_kelas');
		$this->db->like('nama_kelas', 'VII B');

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

	/**
	 * BY KELAS VII C
	 */	
	function get_datatables_by_kelas_vii_C(){
		$this->_get_datatables_query_by_kelas_vii_C();
		if($_POST['length'] != -1)
			$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();
		return $query->result();
	}

	private function _get_datatables_query_by_kelas_vii_C(){
		
		$this->db->select('*');
		$this->db->from('siswa');
		$this->db->join('jenis_kelamin',
			'jenis_kelamin.id_jenis_kelamin = siswa.id_jenis_kelamin');
		$this->db->join('kelas',
			'kelas.id_kelas = siswa.id_kelas');
		$this->db->like('nama_kelas', 'VII C');

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

	/**
	 * --------------------------------------------------------------------------------------------------------
	 */

	/**
	 * GET SISWA BY KELAS VIII
	 */
	
	/**
	 * BY KELAS VIII A
	 */
	function get_datatables_by_kelas_viii_A(){
		$this->_get_datatables_query_by_kelas_viii_A();
		if($_POST['length'] != -1)
			$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();
		return $query->result();
	}

	private function _get_datatables_query_by_kelas_viii_A(){
		
		$this->db->select('*');
		$this->db->from('siswa');
		$this->db->join('jenis_kelamin',
			'jenis_kelamin.id_jenis_kelamin = siswa.id_jenis_kelamin');
		$this->db->join('kelas',
			'kelas.id_kelas = siswa.id_kelas');
		$this->db->like('nama_kelas', 'VIII A');

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

	/**
	 * BY KELAS VIII B
	 */	
	function get_datatables_by_kelas_viii_B(){
		$this->_get_datatables_query_by_kelas_viii_B();
		if($_POST['length'] != -1)
			$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();
		return $query->result();
	}

	private function _get_datatables_query_by_kelas_viii_B(){
		
		$this->db->select('*');
		$this->db->from('siswa');
		$this->db->join('jenis_kelamin',
			'jenis_kelamin.id_jenis_kelamin = siswa.id_jenis_kelamin');
		$this->db->join('kelas',
			'kelas.id_kelas = siswa.id_kelas');
		$this->db->like('nama_kelas', 'VIII B');

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

	/**
	 * BY KELAS VIII C
	 */	
	function get_datatables_by_kelas_viii_C(){
		$this->_get_datatables_query_by_kelas_viii_C();
		if($_POST['length'] != -1)
			$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();
		return $query->result();
	}

	private function _get_datatables_query_by_kelas_viii_C(){
		
		$this->db->select('*');
		$this->db->from('siswa');
		$this->db->join('jenis_kelamin',
			'jenis_kelamin.id_jenis_kelamin = siswa.id_jenis_kelamin');
		$this->db->join('kelas',
			'kelas.id_kelas = siswa.id_kelas');
		$this->db->like('nama_kelas', 'VIII C');

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

	/**
	 * --------------------------------------------------------------------------------------------------------
	 */

	/**
	 * GET SISWA BY KELAS IX
	 */
	
	/**
	 * BY KELAS IX A
	 */
	function get_datatables_by_kelas_ix_A(){
		$this->_get_datatables_query_by_kelas_ix_A();
		if($_POST['length'] != -1)
			$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();
		return $query->result();
	}

	private function _get_datatables_query_by_kelas_ix_A(){
		
		$this->db->select('*');
		$this->db->from('siswa');
		$this->db->join('jenis_kelamin',
			'jenis_kelamin.id_jenis_kelamin = siswa.id_jenis_kelamin');
		$this->db->join('kelas',
			'kelas.id_kelas = siswa.id_kelas');
		$this->db->like('nama_kelas', 'IX A');

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

	/**
	 * BY KELAS IX B
	 */	
	function get_datatables_by_kelas_ix_B(){
		$this->_get_datatables_query_by_kelas_ix_B();
		if($_POST['length'] != -1)
			$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();
		return $query->result();
	}

	private function _get_datatables_query_by_kelas_ix_B(){
		
		$this->db->select('*');
		$this->db->from('siswa');
		$this->db->join('jenis_kelamin',
			'jenis_kelamin.id_jenis_kelamin = siswa.id_jenis_kelamin');
		$this->db->join('kelas',
			'kelas.id_kelas = siswa.id_kelas');
		$this->db->like('nama_kelas', 'IX B');

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

	/**
	 * BY KELAS IX C
	 */	
	function get_datatables_by_kelas_ix_C(){
		$this->_get_datatables_query_by_kelas_ix_C();
		if($_POST['length'] != -1)
			$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();
		return $query->result();
	}

	private function _get_datatables_query_by_kelas_ix_C(){
		$this->db->select('*');
		$this->db->from('siswa');
		$this->db->join('jenis_kelamin',
			'jenis_kelamin.id_jenis_kelamin = siswa.id_jenis_kelamin');
		$this->db->join('kelas',
			'kelas.id_kelas = siswa.id_kelas');
		$this->db->like('nama_kelas', 'IX C');

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







	/**
	 * ***************************************************************************************************************
	 */

	function count_filtered()
	{
		$this->_get_datatables_query();
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function count_all()
	{
		$this->db->from($this->table);
		return $this->db->count_all_results();
	}

	public function get_by_id($nis)
	{
		$this->db->from($this->table);
		$this->db->where('nis',$nis);
		$query = $this->db->get();

		return $query->row();
	}

	public function delete_by_id($nis)
	{
		$this->db->where('nis', $nis);
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

	public function getAllSiswa(){
		$this->db->select('*');
		$this->db->from('siswa');
		$this->db->join('jenis_kelamin',
						'jenis_kelamin.id_jenis_kelamin = siswa.id_jenis_kelamin');
		$this->db->join('kelas',
						'kelas.id_kelas = siswa.id_kelas');
		return $this->db->get()->result();
	}

	function count_vii(){
		$this->db->like('id_kelas', '07');
		$this->db->from($this->table);
		return $this->db->count_all_results();
	}

	function count_viii(){
		$this->db->like('id_kelas', '08');
		$this->db->from($this->table);
		return $this->db->count_all_results();
	}

	function count_ix(){
		$this->db->like('id_kelas', '09');
		$this->db->from($this->table);
		return $this->db->count_all_results();
	}

}

/* End of file Siswa_model.php */
/* Location: ./application/models/Siswa_model.php */