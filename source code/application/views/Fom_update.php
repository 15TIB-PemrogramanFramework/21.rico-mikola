<?php $this->load->view('templates/head_admin1'); ?>
<form action="<?php echo $aksi; ?>" method="POST">
<h1><center>Form Update Barang</center></h1>
<center>
<div class="form group">
	<input type="hidden" name="id barang" class="form_control" value="<?php echo $id_barang; ?>"></input>
 	
</div>
<div class="form group">
<label>Nama Barang
	<input type="text" name="nama barang" class="form_control" value="<?php echo $nama_barang ?>"></input>
	</label>
</div>
<div class="form group">
<label>Jenis Barang
	<input type="text" name="jenis barang" class="form_control" value="<?php echo $jenis_barang; ?>"></input>
	</label>
</div>
<div class="form group">
<label>Jumlah Barang
	<input type="text" name="jumlah barang" class="form_control"  value="<?php echo $jumlah_barang; ?>"></input>
	</label>
</div>
<div class="form group">
<label>Harga Barang
	<input type="text" name="harga barang" class="form_control" value="<?php echo $harga_barang; ?>"></input>
	</label>

</div>

<button class="btn btn-primary" type="submit"><?php echo $button; ?></button>
</center>
<?php $this->load->view('templates/tail'); ?>
