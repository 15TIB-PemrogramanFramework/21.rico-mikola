<?php $this->load->view('templates/head') ?>  
<div class="container" >
	<center>
		<table>
			<tr>
				<td rowspan="3"><img style="width:200px; height:auto;"" src="<?php echo site_url("assets/uploads/"); ?><?php echo $barang->gambar_barang; ?>" alt=""></td>

				<td style="padding-left:40px;"><font style="font-size:25px;">Nama Barang : <?php echo $barang->nama_barang; ?></font></td>
				<tr>
					<td style="padding-left:40px;"><font style="font-size:25px;">Jenis Barang : <?php echo $barang->jenis_barang; ?></font></td>
				</tr>
				<tr>
					<td style="padding-left:40px;"><font style="font-size:25px;">Harga Barang : <?php echo $barang->harga_barang; ?></font></td>
				</tr>
			</tr>
		</table>
	</center>
	<center>
		
		<div class="outter-form-login">
		<div class="logo-login">
		<em class="glyphicon glyphicon-user"></em>
			</div>
			<form action="<?php echo base_url()."index.php/utshome/tambah"; ?>" class="inner-login" method="post">
				<h3 class="text-center title-login"> komentar </h3>
				<?php if($this->session->userdata("username")!=null){

				?>
				<div class="form-group" style="width:800px"> 
					<input type="text-area" class="form-control" name="komentar">
				</div>
				<div class="form-group" style="padding-left:665px;width:800px">
					<input type="hidden" name="username" value="<?php echo $this->session->userdata("username");?>">
					<input type="hidden" name="id_barang" value="<?php echo $barang->id_barang;?>">
					<input type="hidden" name="id_komentar" value="">
					<input type="submit" class="btn btn-primary" value="coment"/>
					<?php }?>
				</div>
			</form>
			</div>
	</center>
<center>
	<table>
		<?php foreach ($komentar as $key => $value) {?>
			<tr><h4>Silahkan komentar disini</h4>
				<td>username :<?php echo $value->username;?></td>
			</tr>
			<tr>
				<td>Komentar :<?php echo $value->komentar;?></td>
			</tr>
			<?php }?> 
	</table>
</center>
</div>

<?php $this->load->view('templates/tail'); ?>
