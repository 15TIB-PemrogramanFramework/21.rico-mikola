 <?php 

/**
* 
*/
class Model_barang extends CI_Model
{
		public $nama_table='barang';
		public $id='id_barang';
		public $order='ASC';
		
	function __construct()
	{
	parent::__construct();
	}

	function tambah_data($data){
		return $this->db->insert($this->nama_table,$data);
		
	}
	

	function ambil_data() 
	{
		$this->db->order_by($this->id,$this->order);
		return $this->db->get($this->nama_table)->result();
	}

	function hapus_data($id_barang)
	{
		$this->db->where($this->id,$id_barang);
		return $this->db->delete($this->nama_table);
	}
	function update($id_barang,$data) 
	{
			$this->db->where($this->id,$id_barang);
		return $this->db->update($this->nama_table,$data);
	}

	function ambil_data_id($id_barang) 
	{
		$this->db->where($this->id,$id_barang);
		return $this->db->get($this->nama_table)->row();
	}

	function ambil_nama_barang($id_barang){
		$this->db->select('nama_barang');
		$this->db->where($this->id,$id_barang);
		$this->db->from('barang');
		$query= $this->db->get();
		return $query-> row();
	}


}

 ?>