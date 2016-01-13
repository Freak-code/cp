<div class="container body-admin">	
<div class="page-header ">
		<h4>Category</h4>
	</div>
<?php
$pesan = $this->uri->segment(3); 
if($pesan == "ditambah"){
	echo "<div class='alert alert-success'>Kategori berhasil di tambah</div>";
}else if($pesan == "diupdate"){
	echo "<div class='alert alert-success'>Kategori berhasil di update</div>";
}else if($pesan == "dihapus"){
	echo "<div class='alert alert-success'>Kategori berhasil di hapus</div>";
}
?>
	<div class="col-md-4">
		<div class="panel panel-default">
			<div class="panel-heading">
				Tambah kategori					
			</div>
			<div class="panel-body">
				<?php echo form_open('admin/tambah_kategori') ?>
				<div>
					<label class="col-md-12">Nama kategori</label>
					<div class="col-md-12">
						<input type="text" name="kategori" class="form-control" placeholder="Nama kategori ..">
						<br/>
						<input type="submit" name="submit" value="Simpan" class="btn btn-sm btn-primary pull-right">
					</div>										
				</div>
				</form>
			</div>			
		</div>
	</div>

	<div class="col-md-8">
		<div class="panel panel-default">
			<div class="panel-heading">
				Kategori							
			</div>
			<div class="panel-body">
				<table class="table table-bordered table-hovered table-striped">
					<tr>
						<td width="1%">No</td>
						<td class="col-md-10">Kategori</td>
						<td class="col-md-2">Opsi</td>
					</tr>
					<?php
					$no = 1;
					foreach($kategori as $k){
					?>
					<tr>
						<td><?php echo $no++ ?></td>	
						<td><?php echo $k->kategori ?></td>	
						<td>
							<div class="btn-group">
								<a class="btn btn-sm btn-default" href="<?php echo base_url().'admin/edit_kategori/'.$k->id ?>"><span class="glyphicon glyphicon-wrench"></span></a>
								<a class="btn btn-sm btn-default" href="<?php echo base_url().'admin/hapus_kategori/'.$k->id ?>"><span class="glyphicon glyphicon-trash"></span></a>						
							</div>
						</td>	
					</tr>
					<?php
					}
					?>
				</table>
			</div>			
		</div>
	</div>
</div>