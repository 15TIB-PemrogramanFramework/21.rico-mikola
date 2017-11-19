<?php 
class Fom_beli extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_beli');
	}

 function index()
	{
		$this->load->view('Fom_beli');
	}

}
 ?>