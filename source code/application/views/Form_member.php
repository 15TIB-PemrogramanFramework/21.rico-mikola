<?php $this->load->view('templates/head_admin'); ?>
<form action="<?php echo $aksi; ?>" method="POST">
<div class="form group">
	<label type="hidden" name=id barang" class="form_control"
	placeholder="inputkan nama" required value="<?php echo $; ?>"></label>
	
</div>
<div class="form group">
	<label type="text" name="nama barang" class="form_control"
	placeholder="inputkan alamat" required value="<?php echo $alamat; ?>"></label>
	
</div>
<div class="form group">
	<label type="text" name="jenis barang" class="form_control"
	placeholder="inputkan nomor" required value="<?php echo $nomor; ?>"></label>
	
</div>
<div class="form group">
	<label type="text" name="jumlah barang" class="form_control"
	placeholder="inputkan username" required value="<?php echo $username; ?>"></label>
	
</div>
<div class="form group">
	<label type="text" name="harga baran" class="form_control"
	placeholder="<?php echo ; ?>" required value="<?php echo $password; ?>"></label>
	
</div>
<button class="btn btn-primary" type="submit"><?php echo $button; ?></button>
<?php $this->load->view('templates/tail'); ?>
