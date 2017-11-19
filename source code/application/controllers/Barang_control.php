<?php 
/**
* 
*/
class Barang_control extends CI_Controller
{
	var $limit=10;
	var $offset=10;
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_barang');
		$this->load->helper(array('url'));
	}

function index($page=NULL,$offset='',$key=NULL)
	{
		//print_r($this->prodi_model->ambil_data());
		$data['barang'] = $this->Model_barang->ambil_data();
		$this->load->view('Barang_list',$data);
	}

	function tambah(){
		$data=array(
			'aksi'=>site_url('index.php/Barang_control/tambah_aksi'),
			'id_barang'=>set_value('id_barang'),
			'nama_barang'=>set_value('nama_barang'),
			'jenis_barang'=>set_value('jenis_barang'),
			'jumlah_barang'=>set_value('jumlah_barang'),
			'harga_barang'=>set_value('harga_barang'),
			'button'=>'Insert'
			);
		$this->load->view('Tambah_barang',$data);
	}

	function tambah_aksi()
	{

		$this->load->library('upload');
        $nmfile = "".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/uploads/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '3072'; //maksimum besar file 3M
        $config['max_width']  = '5000'; //lebar maksimum 5000 px
        $config['max_height']  = '5000'; //tinggi maksimu 5000 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);
        
        if($_FILES['gambar_barang']['name'])
        {
            if ($this->upload->do_upload('gambar_barang'))
            {
                $gbr = $this->upload->data();
                $data = array(
                'gambar_barang' 				=>$gbr['file_name'],
                'id_barang' 		=> $this->input->post('id_barang'),
				'nama_barang' 		=> $this->input->post('nama_barang'),
				'jenis_barang' 		=> $this->input->post('jenis_barang'),
				'jumlah_barang' 		=> $this->input->post('jumlah_barang'),
				'harga_barang' 		=> $this->input->post('harga_barang')                 
                );
                $this->Model_barang->tambah_data($data); //akses model untuk menyimpan ke database

                //pesan yang muncul jika berhasil diupload pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Insert data berhasil !!</div></div>");
                redirect('index.php/Barang'); //jika berhasil maka akan ditampilkan view upload
            }else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Insert data gagal !!</div></div>");
                redirect('index.php/Tambah_barang'); //jika gagal maka akan ditampilkan form upload
            }
        }


		$data = array(
			  'id_barang' 		=> $this->input->post('id_barang'),
				'nama_barang' 		=> $this->input->post('nama_barang'),
				'jenis_barang' 		=> $this->input->post('jenis_barang'),
				'jumlah_barang' 		=> $this->input->post('jumlah_barang'),
				'harga_barang' 		=> $this->input->post('harga_barang')         
			);
		$this->model_barang->tambah_data($data);
		redirect(site_url('index.php/Barang'));
	}


	

	function delete($id_barang)
    {
        $this->Model_barang->hapus_data($id_barang);
        redirect(site_url('index.php/Barang'));
    }


function update($id_barang)
    {
        $barang=$this->Model_barang->ambil_data_id($id_barang);
        $data = array(
            'aksi'                  => site_url('index.php/Barang_control/update_aksi'),
            'id_barang'            => set_value('id_barang',$barang->id_barang),
            'nama_barang'            => set_value('nama_barang',$barang->nama_barang),
            'jenis_barang'                 => set_value('jenis_barang',$barang->jenis_barang),
            'jumlah_barang'                  => set_value('jumlah_barang',$barang->jumlah_barang),
             'harga_barang'                  => set_value('harga_barang',$barang->harga_barang),
            'button'                => 'Update'
            );
        $this->load->view('Fom_update',$data);      
    }

    function update_aksi(){
    	$data=array(
				'id_barang' 		=> $this->input->post('id_barang'),
				'nama_barang' 		=> $this->input->post('nama_barang'),
				'jenis_barang' 		=> $this->input->post('jenis_barang'),
				'jumlah_barang' 	=> $this->input->post('jumlah_barang'),
				'harga_barang' 		=> $this->input->post('harga_barang')         
			);
    	$id_barang=$this->input->post('id_barang');
    	$this->Model_barang->update($id_barang,$data);
    	redirect(site_url('index.php/Barang'));

    }

   
}

 ?>