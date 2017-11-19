<?php 

/**
* 
*/
class model_member extends CI_Model
{
		public $nama_table='member';
		public $username='username';
		public $order='ASC';
		
	function __construct()
	{
	parent::__construct();
	}

	function cekuser($username,$password)
	{
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		return $this->db->get($this->nama_table)->row();
	}

	function regis($data){
		return $this->db->insert($this->nama_table,$data);
	}
	

	function ambil_data() 
	{

		$this->db->order_by($this->username,$this->order);
		return $this->db->get($this->nama_table)->result();
	}

	function hapus_data($username)
	{
		$this->db->where($this->username,$username);
		return $this->db->delete($this->nama_table);
	}
	function ambildatamember($username){
		$this->db->where('username',$username);
		return $this->db->get($this->nama_table)->result();
	}
}

 ?>