<div class="container body-admin">
	<div class="page-header ">
		<h4>Pengaturan Website</h4>
	</div>
	<?php
	$link = $this->uri->segment('3'); 
	if($link == "sukses"){
		echo "<div class='alert alert-success'>Pengaturan berhasil di update !</div>";
	}else if($link == "gagal"){
		echo "<div class='alert alert-danger'>Pengaturan gagal di update !</div>";
	}
	?>	
		<?php 
		echo form_open_multipart('admin/update_pengaturan');  
		foreach($pengaturan as $p){
			?>	
			<table class="table-bordered table table-hover table-striped">

				<tr>				
					<th class="col-md-3">Nama web</th>
					<td><input class="form-control" type="text" name="judul" value="<?php echo $p->judul_web ?>"></td>
				</tr>	
				<tr>				
					<th>Deskripsi web</th>
					<td><input class="form-control" type="text" name="deskripsi" value="<?php echo $p->desk_web ?>"></td>
				</tr>
				<tr>				
					<th>Logo web</th>
					<td><input class="form-control" type="file" name="logo"></td>
				</tr>
				<tr>				
					<th></th>
					<td><input class="btn btn-sm btn-success" type="submit" value="Simpan"></td>
				</tr>					
			</table>
			<?php 
		}
		echo form_close();
		?>	
</div>