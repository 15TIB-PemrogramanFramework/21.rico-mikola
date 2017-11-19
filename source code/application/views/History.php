<?php $this->load->view('templates/head'); ?>
 <div class="col-md-12 text-right">
    </div>  
<table id="example" class="table table-striped table-bordered">
	
	<thead>
	<b>Data Pembelian</b>
		<tr>
			<th>Nama pembeli</th>
			<th>Nama Barang</th>
			<th>Jenis Barang</th>
			<th>alamat pembeli</th>
			<th>Harga Barang</th>
			<th>Jumlah Barang</th>
			<th>Total Harga</th>

		</tr>
	</thead>
	<tbody>
		<?php foreach($beli as $key =>$value) {
			$member = $this->db->get_where('member', array('username' => $this->session->userdata('username')))->row();
			$barang = $this->db->get_where('barang', array('id_barang' => $value->id_barang))->row();
			
			?>
			<tr>
		<td><?php echo $member->nama; ?></td>
		<td><?php echo $barang->nama_barang; ?></td>
		<td><?php echo $barang->jenis_barang; ?></td>
		<td><?php echo $value->alamat_pembeli; ?></td>
		<td><?php echo $value->harga_barang; ?></td>
		<td><?php echo $value->jumlah_barang; ?></td>
		<td><?php echo $value->total_harga; ?></td>
			</tr>
			<?php } ?>
	</tbody>
</table>
<?php $this->load->view('templates/tail'); ?>