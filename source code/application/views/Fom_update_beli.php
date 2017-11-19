<?php $this->load->view('templates/head_admin1'); ?>
<form action="<?php echo $aksi; ?>" method="POST">
<h1>Form Update Barang</h1>
<div class="form group">
<label>Nama Pembeli
	<input type="text" name="nama_pembeli" class="form_control" value="<?php echo $nama_pembeli ?>" readonly></input>
	<input type="hidden" name="username" value="<?php echo $username; ?>">
	<input type="hidden" name="id_barang" value="<?php echo $id_barang; ?>">
		<input type="hidden" name="id_pembeli" value="<?php echo $id_pembeli; ?>">
	</label>
</div>
<div class="form group">
<label>Alamat Pembeli
	<input type="text" name="alamat_pembeli" class="form_control" value="<?php echo $alamat_pembeli; ?>"></input>
	</label>
</div>
<div class="form group">
<label>Nama Barang
	<input type="text" name="nama_barang" class="form_control" value="<?php echo $nama_barang; ?>" readonly></input>	
	</label>
</div>

<div class="form group">
<label>Jenis Barang
	<input type="text" name="jenis_barang" class="form_control" value="<?php echo $jenis_barang; ?>" readonly></input>
	</label>
</div>

<div class="form group">
<label>Harga Barang
	<input type="text" name="harga_barang" class="form_control" value="<?php echo $harga_barang; ?>" readonly></input>
	</label>
</div>

<div class="form group">
<label>Jumlah Barang
	<input type="text" name="jumlah_barang" class="form_control" value="<?php echo $jumlah_barang; ?>" readonly></input>
	</label>

</div>
<div class="form group">
<label>Total harga
	<input type="text" name="total_harga" class="form_control" value="<?php echo $total_harga; ?>" readonly></input>
	</label>

</div>



<button class="btn btn-primary" type="submit"><?php echo $button; ?></button>
<?php $this->load->view('templates/tail'); ?>
