<div class="container body-admin">
	<div class="page-header ">
		<h4>Edit Artikel</h4>
	</div>
	<?php 
	echo validation_errors();
	echo form_open_multipart('admin/update_artikel');  
	foreach($artikel as $a){ 
	?>
	<table class="table table-bordered table-hover table-striped">
		<tr>
			<th>Judul</th>
			<td>
				<input type="hidden" name="id" class="form-control" value="<?php echo $a->id_artikel ?>">
				<input type="text" name="judul" class="form-control" value="<?php echo $a->judul ?>">
			</td>
		</tr>
		<tr>
			<th>Kategori</th>
			<td>
				<select name="kategori" class="form-control">
					<option value="">- Pilih Kategori -</option>
					<?php foreach($kategori as $k){ ?>
					<option <?php if($a->kategori==$k->id){echo "selected='selected'";} ?> value="<?php echo $k->id ?>"><?php echo $k->kategori ?></option>
					<?php } ?>
				</select>
			</td>
		</tr>
		<tr>
			<th>Isi</th>
			<td>
				<textarea class=" ckeditor" id="ckeditor" name="isi"><?php echo $a->isi_artikel ?></textarea>
			</td>

		</tr>
	
		<tr>
			<th>Foto</th>
			
			<td>
			
				<img class="col-md-3" src="<?php echo base_url().'image/'.$a->foto ?>" alt="<?php echo $a->judul ?>">
			
				<input type="file" value="Posting" class="form-control" name="foto"><br />
				
			</td>
		</tr>
		<tr>
			<th></th>
			<td>
				<input type="submit" value="Posting" class="btn btn-sm btn-success">
			</td>
		</tr>
	</table>
	<?php 
	}
	echo form_close(); 
	?>
</div><?php

?>