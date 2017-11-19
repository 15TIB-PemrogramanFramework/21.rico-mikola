<?php 
/**
* 
*/
class Model_admin extends CI_Model
{
	public $nama_table='admin';
	function __construct()
	{
		parent::__construct();

	}

	function ceklogin($username,$password)
{
$this->db->where('username',$username);
$this->db->where('password',$password);
return $this->db->get($this->nama_table)->row();

}

 
}
?>

