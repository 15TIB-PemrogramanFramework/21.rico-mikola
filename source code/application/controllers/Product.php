<?php 
class Product extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_barang');
	}

	 public function index()
	{
		$data['barang']=$this->Model_barang->ambil_data();
		
		$this->load->view('Product',$data);
	}
}
 ?>