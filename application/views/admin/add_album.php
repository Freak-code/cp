<div class="container body-admin">
	<div class="page-header ">
		<h4>Add Album</h4>
	</div>
	<?php echo validation_errors() ?>
	<?php echo form_open_multipart('admin/album_act'); ?>
	<table class="table table-bordered table-hover table-striped">
		<tr>
			<th>Nama album</th>
			<td><input type="text" name="nama_album" class="form-control"></td>
		</tr>
		
		<tr>
			<th>Cover Album</th>
			<td>
				<input type="file" value="Posting" class="form-control" name="cover_album">
			</td>
		</tr>
		<tr>
			<th></th>
			<td>
				<input type="submit" value="Posting" class="btn btn-sm btn-success">
				<input type="submit" value="Batal" class="btn btn-sm btn-success" OnClick="history.back()"/>
			</td>
		</tr>
	</table>
	<?php echo form_close(); ?>
</div>