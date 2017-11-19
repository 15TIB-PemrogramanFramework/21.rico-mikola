<?php $this->load->view('templates/head_admin1'); ?>
<form method="post" action="<?php echo $aksi; ?>" enctype="multipart/form-data">
<table border=0 align="center" cellpadding=5 cellspacing=0>
<tr>
<td colspan=3><center><font size=5>tambah barang</font></center></td>
</tr>
<tr>
<td>id_barang</td><td>:</td><td><input type="text" name="id_barang"></td>
</tr>
<tr>
<td>nama_barang</td><td>:</td><td><input type="text" name="nama_barang"></td>
</tr>
<tr>
<td>jenis_barang</td><td>:</td><td><input type="text" name="jenis_barang"></td>
</tr>
<tr>
<td>jumlah_barang</td><td>:</td><td><input type="text" name="jumlah_barang"></td>
</tr>
<tr>
<td>harga_barang</td><td>:</td><td><input type="text" name="harga_barang"></td>
</tr>
<tr>
<td>gambar_barang</td><td>:</td><td><input type="file" name="gambar_barang"></td>
</tr>
<tr>
<td colspan=2>&nbsp;</td>
<td><input type="submit" name="submit" value="DAFTAR"></td>
 <a href="<?php echo site_url('index.php/barang')?>" class="btn btn-default">Back</a>
</tr>
<tr>
</tr>
</table>
</form>
<?php $this->load->view('templates/tail'); ?>