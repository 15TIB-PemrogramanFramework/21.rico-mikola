<?php 

/**
* 
*/
class Beli_control extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_beli');
		$this->load->model('Model_barang');
	}
	function tambah($id_barang,$nama_barang,$jenis_barang,$harga_barang){

		//$barang=$this->model_barang->ambil_data_id('$id_barang');
		//$nama=$barang->nama_barang;

		$data=array(
			'aksi'=>site_url('index.php/Beli_control/konfirmasi'),
			'id_pembeli'=>set_value('id_pembeli'),
			 'id_barang'=>$id_barang,
			 'username'=>set_value('username'),
			'alamat_pembeli'=>set_value('alamat_pembeli'),
			 'nama_barang'=>$nama_barang,
			'harga_barang'=>$harga_barang,
			'jenis_barang'=>$jenis_barang,
			'jumlah_barang'=>set_value('jumlah_barang'),
			'total_harga'=>set_value('total_harga'),
			'button'=>'beli'
			);
		$this->load->view('Fom_beli',$data);
	}

function konfirmasi(){
	$jumlah=$this->input->post('jumlah_barang');
	$harga=$this->input->post('harga_barang');
	$total=$jumlah*$harga;
		$data=array(
				'aksi'=>site_url('index.php/Beli_control/tambah_aksi'),
				'id_barang' => $this->input->post('id_barang'),
				 'id_pembeli' => $this->input->post('id_pembeli'),
				 'username' =>$this->input->post('username'),
				'nama_pembeli'		=> $this->input->post('nama_pembeli'),
				 'nama_barang'		=> $this->input->post('nama_barang'),
				 'jenis_barang'		=> $this->input->post('jenis_barang'),
				  'username'		=> $this->input->post('username'),			   
				'alamat_pembeli' 	=> $this->input->post('alamat_pembeli'),
				'harga_barang' 		=> $this->input->post('harga_barang') , 
		    	'jumlah_barang' 	=> $this->input->post('jumlah_barang'),
		    	'total_harga'		=> $total,
			'button'=>'konfirmasi'
			);
		$this->load->view('Konfirmasi_beli',$data);
	}

	function tambah_aksi()
	{
	$data = array(
			   'id_pembeli'		=> $this->input->post('id_pembeli'),
				 'id_barang'		=> $this->input->post('id_barang'),
				  'username'		=> $this->input->post('username'),			   
				'alamat_pembeli' 	=> $this->input->post('alamat_pembeli'),
				'harga_barang' 		=> $this->input->post('harga_barang') , 
		    	'jumlah_barang' 	=> $this->input->post('jumlah_barang'),
		    	'total_harga'		=> $this->input->post('total_harga')
			);
		$this->Model_beli->tambah_data($data);
		$stlama =$this->Model_barang->ambil_data_id($this->input->post('id_barang'))->jumlah_barang;
		$jbeli = $this->input->post('jumlah_barang');
		$stbaru=$stlama-$jbeli;
		$datab= array(
			'jumlah_barang' => $stbaru
			);
		$this->Model_barang->update($this->input->post('id_barang'), $datab);

		redirect(site_url('index.php/History'));
	}

	function delete($id_pembeli)
    {
        $this->Model_beli->hapus_data($id_pembeli);
        redirect(site_url('index.php/Beli_list'));
    }


function update($id_pembeli,$nama_pembeli,$nama_barang,$jenis_barang)
    {
        $beli_list=$this->Model_beli->ambil_data_nama1($id_pembeli);
        $data = array(
            'aksi'                  => base_url('index.php/Beli_control/update_aksi'),
            'id_pembeli'            => set_value('id_pembeli',$beli_list->id_pembeli),
            'id_barang'            => set_value('id_barang',$beli_list->id_barang),
            'nama_pembeli'			=> set_value('nama_pembeli',$nama_pembeli),
             'nama_barang'			=> set_value('nama_barang',$nama_barang),
             'jenis_barang'			=> set_value('jenis_barang',$jenis_barang),
            'alamat_pembeli'			=> set_value('alamat_pembeli',$beli_list->alamat_pembeli),
            'username'                 => set_value('username',$beli_list->username),
            'jumlah_barang'                  => set_value('jumlah_barang',$beli_list->jumlah_barang),
             'harga_barang'                  => set_value('harga_barang',$beli_list->harga_barang),
             'total_harga'                  => set_value('total_harga',$beli_list->total_harga),
            'button'                => 'Update'
            );
        $this->load->view('Fom_update_beli',$data);      
    }

    function update_aksi(){
    	$data=array(
				'id_barang' => $this->input->post('id_barang'),
				 'id_pembeli' => $this->input->post('id_pembeli'),
				 'username' =>$this->input->post('username'),		   
				'alamat_pembeli' 	=> $this->input->post('alamat_pembeli'),
				'harga_barang' 		=> $this->input->post('harga_barang') , 
		    	'jumlah_barang' 	=> $this->input->post('jumlah_barang'),
		    	'total_harga'		=> $this->input->post('total_harga')
			);
    	$nama_pembeli=$this->input->post('id_pembeli');
    	$this->Model_beli->update($this->input->post('id_pembeli'),$data);
    	redirect(site_url('index.php/Beli_list'));

    }
}

 ?>