<div class="container body-admin">
	<div class="page-header ">
		<h4>Album</h4>
	</div>
	<?php
	$link = $this->uri->segment('3'); 
	if($link == "dihapus"){
		echo "<div class='alert alert-success'>Album berhasil di hapus !</div>";
	}else if($link == "oke"){
		echo "<div class='alert alert-success'>Album berhasil di tambah !</div>";
	}else if($link == "diupdate"){
		echo "<div class='alert alert-success'>Album berhasil di update !</div>";
	}
	?>
	<div class="panel panel-default">
		<div class="panel panel-heading">
			Data Album
			<a href="<?php echo base_url().'admin/add_album' ?>" class="btn btn-sm btn-success pull-right">Add Album</a>
		</div>
		<div class="panel panel-body">		
		</div>
		<table class="table-bordered table table-hover table-striped">
			<tr>
				<th width="1%">No</th>
				<th class="col-md-1">Nama_album</th>
				<th class="col-md-1">Tanggal</th>
				<th class="col-md-1">Author</th>
				<th class="col-md-7">Cover Album</th>
				<th class="col-md-1">Opsi</th>								
			</tr>
			<?php 
			$no=1;
			foreach($galery as $a){
			?>	
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $a->nama_album ?></td>
				<td>
					<?php 
					echo $a->tanggal 
					?>
				</td>
				<td><?php echo $a->username ?></td>
				<td><img class="col-md-3" src="<?php echo base_url().'image/galery/'.$a->cover_album ?>"></td>
				<td>
					<div class="btn-group">
					<a href="<?php echo base_url().'admin/edit_album/'.$a->id_album ?>" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-wrench"></span></a>
					<a href="<?php echo base_url().'admin/hapus_album/'.$a->id_album ?>" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-trash"></span></a>
					</div>
				</td>
			</tr>
			<?php 
			}
			?>
		</table>
	</div>
</div>