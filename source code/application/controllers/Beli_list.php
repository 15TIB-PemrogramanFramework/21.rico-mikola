<?php 
class Beli_list extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_beli');
	}

	 public function index()
	{
		$data['beli']=$this->Model_beli->ambil_data_nama();
		$this->load->view('Beli_list',$data);

	}
}
 ?>