<?php $this->load->view('templates/head'); ?> 
<table id="example" class="table table-striped table-bordered">
	
	<thead>
	<b>list Barang</b>
		<tr>
			<th>nama barang</th>
			<th>jenis barang</th>
			<th>harga barang</th>
			<th>gambar barang</th>
			<?php if ($this->session->userdata("username")!=null) {?>
			<th>aksi</th>
						<?php } ?>
		</tr>

	</thead>
	<tbody>
		<?php foreach($barang as $key =>$value) {?>
			<tr>
		<td> <a href="<?php echo base_url()."index.php/utshome/komentar/".$value->id_barang?>"><?php echo $value->nama_barang; ?></td>
		<td><?php echo $value->jenis_barang; ?></td>
		<td><?php echo $value->harga_barang; ?></td>
		 <td><img style="width:200px; height:auto;" width="50%" height="50%" src="<?php echo site_url("assets/uploads/");?><?php echo $value->gambar_barang;?>"></td>
		 <?php if ($this->session->userdata("username")!=null) {?>
		 <td>
		  <a href="<?php echo site_url('index.php/beli_control/tambah/'.$value->id_barang.'/'.$value->nama_barang.'/'.$value->jenis_barang.'/'.$value->harga_barang); ?>"
              class="btn btn-warning" style="font-size:30px;">
              <i class="fa fa-pencil-square"></i>
            </a>
            </td>
<?php } ?>
			</tr>
			<?php } ?>
	</tbody>
</table>
<?php $this->load->view('templates/tail'); ?>
<script type="text/javascript">
	$(document).ready(function(){
		$('example').DataTable();
	});

</script>




