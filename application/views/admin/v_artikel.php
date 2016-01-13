<div class="container body-admin">
	<div class="page-header ">
		<h4>Artikel</h4>
	</div>
	<?php
	$link = $this->uri->segment('3'); 
	if($link == "dihapus"){
		echo "<div class='alert alert-success'>Artikel berhasil di hapus !</div>";
	}else if($link == "oke"){
		echo "<div class='alert alert-success'>Artikel berhasil di tambah !</div>";
	}else if($link == "diupdate"){
		echo "<div class='alert alert-success'>Artikel berhasil di update !</div>";
	}
	?>
	<div class="panel panel-default">
		<div class="panel panel-heading">
			Data Artikel
			<a href="<?php echo base_url().'admin/tulis_artikel' ?>" class="btn btn-sm btn-success pull-right">Tulis Artikel Baru</a>
		</div>
		<div class="panel panel-body">		
		</div>
		<table class="table-bordered table table-hover table-striped">
			<tr>
				<th width="1%">No</th>
				<th class="col-md-1">Tanggal</th>
				<th class="col-md-1">Author</th>
				<th class="col-md-1">Kategori</th>
				<th class="col-md-7">Judul</th>								
				<th class="col-md-1">Opsi</th>								
			</tr>
			<?php 
			$no=1;
			foreach($artikel as $a){
			?>	
			<tr>
				<td><?php echo $no++ ?></td>
				<td>
					<?php 
					echo $a->tanggal 
					?>
				</td>
				<td><?php echo $a->username ?></td>
				<td><?php echo $a->kategori ?></td>
				<td><?php echo $a->judul ?></td>
				<td>
					<div class="btn-group">
					<a href="<?php echo base_url().'admin/edit_artikel/'.$a->id_artikel ?>" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-wrench"></span></a>
					<a href="<?php echo base_url().'admin/hapus_artikel/'.$a->id_artikel ?>" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-trash"></span></a>
					</div>
				</td>
			</tr>
			<?php 
			}
			?>
		</table>
	</div>
</div>