<?php 

/**
* 
*/
class Member extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_member');
	}

	function index()
	{

		$data['member'] = $this->Model_member->ambil_data();

		$this->load->view('Member_list',$data);
	}

	function delete($username)
	{
		$this->Model_member->hapus_data($username);
		redirect(site_url('index.php/Member/index'));
	}

	function register(){
		$data=array(
			'nama'=>$this->input->post('nama'),
			'alamat'=>$this->input->post('alamat'),
			'nomor'=>$this->input->post('nomor'),
			'username'=>$this->input->post('username'),
			'password'=>$this->input->post('password')
			);
		$this->Model_member->regis($data);
		redirect(site_url('index.php/Login'));
	}
}

 ?>