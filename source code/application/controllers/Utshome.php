<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Utshome extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_barang');
    $this->load->model('Model_komen');
    }

    public function index()
    {
	
		$this->load->view('Utshome');
        
    } 
    function komentar($id_barang){
        
        $data=array(
            'barang'        =>$this->Model_barang->ambil_data_id($id_barang),
            'komentar'      =>$this->Model_komen->ambil_data_id($id_barang)
            );
        $this->load->view('Komen_barang',$data);
    }
    function tambah(){
        
        $data=array(
            'id_komentar' =>$this->input->post('id_komentar'),
            'username'  =>$this->input->post('username'),
             'id_barang' =>$this->input->post('id_barang'),
             'komentar' =>$this->input->post('komentar')
            );
        $this->Model_komen->tambah_data($data);
        redirect(site_url('index.php/Utshome/komentar/'.$this->input->Post('id_barang')));
    }
}
