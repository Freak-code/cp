<div class="container body-admin">
	<div class="page-header ">
		<h4>Tulis Artikel</h4>
	</div>
	<?php echo validation_errors() ?>
	<?php echo form_open_multipart('admin/artikel_act'); ?>
	<table class="table table-bordered table-hover table-striped">
		<tr>
			<th>Judul</th>
			<td><input type="text" name="judul" class="form-control"></td>
		</tr>
		<tr>
			<th>Kategori</th>
			<td>
				<select name="kategori" class="form-control">
					<option value="">- Pilih Kategori -</option>
					<?php foreach($kategori as $k){ ?>
					<option value="<?php echo $k->id ?>"><?php echo $k->kategori ?></option>
					<?php } ?>
				</select>
			</td>
		</tr>
		<tr>
			<th>Isi</th>
			<td>
				<textarea class=" ckeditor" id="ckeditor" name="isi"></textarea>
			</td>
		</tr>
		<tr>
			<th>Foto</th>
			<td>
				<input type="file" value="Posting" class="form-control" name="foto">
			</td>
		</tr>
		<tr>
			<th></th>
			<td>
				<input type="submit" value="Posting" class="btn btn-sm btn-success">
			</td>
		</tr>
	</table>
	<?php echo form_close(); ?>
</div>