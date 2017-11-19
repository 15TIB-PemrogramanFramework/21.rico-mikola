<?php $this->load->view('templates/head_admin1') ?>
 <div class="col-md-12 text-right">
    <a href="<?php echo site_url('index.php/barang_control/tambah'); ?>" class="btn btn-primary" 
    style="margin-top:20px; margin-bottom:20px">
    <i class="fa fa-plus-circle"></i> Insert</a>
    </div>  
<table id="example" class="table table-striped table-bordered">
	
	<thead>
	<b>Data Barang</b>
		<tr>
			<th>id_barang</th>
			<th>nama_barang</th>
			<th>jenis_barang</th>
			<th>jumlah_barang</th>
			<th>harga_barang</th>
			<th>gambar_barang</th>
			<th>aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($barang as $key =>$value) {?>
			<tr>
		<td><?php echo $value->id_barang; ?></td>
		<td><?php echo $value->nama_barang; ?></td>
		<td><?php echo $value->jenis_barang; ?></td>
		<td><?php echo $value->jumlah_barang; ?></td>
		<td><?php echo $value->harga_barang; ?></td>
		 <td><img style="width:200px; height:auto;" width="50%" height="50%" src="<?php echo site_url("assets/uploads/");?><?php echo $value->gambar_barang;?>"></td>
		<td>
			<a href="<?php echo site_url('index.php/barang_control/delete/'.$value->id_barang); ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
			 <br>
            <a href="<?php echo site_url('index.php/barang_control/update/'.$value->id_barang); ?>"
              class="btn btn-warning" style="font-size:30px;">
              <i class="fa fa-pencil-square"></i>
            </a>

		</td>
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
