<?php $this->load->view('templates/head_admin1') ?>
<table id="example" class="table table-striped table-bordered">
	
	<thead>
	<b>data member</b>
		<tr>
			<th>nama</th>
			<th>alamat</th>
			<th>nomor</th>
			<th>username</th>
			<th>password</th>
			<th>aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($member as $key => $value) {?>
			<tr>
		<td><?php echo $value->nama; ?></td>
		<td><?php echo $value->alamat; ?></td>
		<td><?php echo $value->nomor; ?></td>
		<td><?php echo $value->username; ?></td>
		<td><?php echo $value->password; ?></td>
		<td>
			<a href="<?php echo site_url('index.php/member/delete/'.$value->username); ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>

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
