<?php $this->load->view('templates/head_admin1') ?>
 <div class="col-md-12 text-right">
    </div>  
<table id="example" class="table table-striped table-bordered">
	
	<thead>
	<b>Data Pembeli</b>
		<tr>
			<th>id Pembeli</th>
			<th>Nama pembeli</th>
			<th>Nama Barang</th>
			<th>Jenis Barang</th>
			<th>alamat pembeli</th>
			<th>Harga Barang</th>
			<th>Jumlah Barang</th>
			<th>Total Harga</th>
			<th>aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($beli as $key =>$value) {
	$member = $this->db->get_where('member', array('username' => $value->username))->row();
	$barang = $this->db->get_where('barang', array('id_barang' => $value->id_barang))->row();
			?>

			<tr>
		<td><?php echo $value->id_pembeli; ?></td>
		<td><?php echo $member->nama; ?></td>
		<td><?php echo $barang->nama_barang; ?></td>
		<td><?php echo $barang->jenis_barang; ?></td>
		<td><?php echo $value->alamat_pembeli; ?></td>
		<td><?php echo $value->harga_barang; ?></td>
		<td><?php echo $value->jumlah_barang; ?></td>
		<td><?php echo $value->total_harga; ?></td>
		<td>
			<a href="<?php echo site_url('index.php/beli_control/delete/'.$value->id_pembeli); ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
			 <br>
            <a href="<?php echo site_url('index.php/beli_control/update/'.$value->id_pembeli.'/'.$member->nama.'/'.$barang->nama_barang.'/'.$barang->jenis_barang); ?>"
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
