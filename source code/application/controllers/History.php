<?php 
class History extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_beli');
	}

	 public function index()
	{
		$data['beli']=$this->Model_beli->ambil_data_nama();
		$this->load->view('History',$data);

	}
	function ambildata($username){
		$data['beli']=$this->Model_beli->ambildatamember($username);
		$this->load->view('History',$data);
	}
}
 ?>