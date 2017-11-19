<?php $this->load->view('templates/head'); ?>
<form action="<?php echo $aksi; ?>" method="POST">
<center> Form Membeli Barang</center>
<center>
<div class="form group">
<label>Nama Pembeli :
	<input type="text" name="nama_pembeli" class="form_control" value="<?php echo $this->session->userdata("nama"); ?>" readonly></input>
	<input type="hidden" name="username" value="<?php echo $this->session->userdata("username"); ?>">
	<input type="hidden" name="id_barang" value="<?php echo $id_barang; ?>">
 	</label>
</div>
<div class="form group">
<label> Alamat Pembeli :  
	<input type="text" name="alamat_pembeli" class="form_control" value="<?php echo $this->session->userdata("alamat"); ?>" readonly></input>
	</label>
</div>
<div class="form group">
<label>Nama Barang :
	<input type="text" name="nama_barang" class="form_control" value="<?php echo $nama_barang ?>" readonly></input>
	</label>
</div>
<div class="form group">
<label> Jenis Barang :
	<input type="text" name="jenis_barang" class="form_control" value="<?php echo $jenis_barang; ?>" readonly></input>
	</label>
</div>
<div class="form group">
<label>Harga Barang :
	<input type="text" name="harga_barang" class="form_control" value="<?php echo $harga_barang; ?>" readonly></input>
</div>

<div class="form group">
<label>Jumlah Barang :  
	<input type="text" name="jumlah_barang" class="form_control"></input>
	</label>
</div>

<button class="btn btn-primary" type="submit"><?php echo $button; ?></button>
</center>
</form>

<?php $this->load->view('templates/tail'); ?>
