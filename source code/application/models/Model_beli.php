<?php 

/**
* 
*/
class Model_beli extends CI_Model
{
	
	public $nama_table='pembelian';
		public $id='id_pembeli';
		public $order='ASC';
		
	function __construct()
	{
	parent::__construct();
	}
	function tambah_data($data){
		return $this->db->insert($this->nama_table,$data);
		
	}

	function ambil_data_nama()
	{
		$this->db->order_by($this->id,$this->order);
		return $this->db->get($this->nama_table)->result();
	}

	function hapus_data($id_pembeli)
	{
		$this->db->where($this->id,$id_pembeli);
		return $this->db->delete($this->nama_table);
	}
	function update($id_pembeli,$data) 
	{
			$this->db->where($this->id,$id_pembeli);
		return $this->db->update($this->nama_table,$data);
	}
	function ambil_data_nama1($id_pembeli) 
	{
		$this->db->where($this->id,$id_pembeli);
		return $this->db->get($this->nama_table)->row();
	}
	function ambildatamember($username){
		$this->db->where('username',$username);
		return $this->db->get($this->nama_table)->result();
	}
}

 ?>