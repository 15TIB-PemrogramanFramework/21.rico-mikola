 <?php 

/**
* 
*/
class Model_komen extends CI_Model
{
		public $nama_table='komentar';
		public $id='id_barang';
		public $order='ASC';
		
	function __construct()
	{
	parent::__construct();
	}

	function tambah_data($data){
		return $this->db->insert($this->nama_table,$data);
		
	}

	function ambil_data_id($id_barang) 
	{
		$this->db->where($this->id,$id_barang);
		return $this->db->get($this->nama_table)->result();
	}


}

 ?>