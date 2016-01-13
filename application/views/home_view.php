<div class="container body-home">
	<div class="col-md-3">			
		<div class="box-artikel">			
			<?php 
			foreach($artikel as $a){
				?>				
				<p><a href="<?php echo base_url() ?>home/single/<?php echo $a->id_artikel ?>" class="title-artikel-sidebar"><?php echo $a->judul ?></a></p>	
				<?php } ?>			
			</div>
			<div class="box-kategori">
				<ul>
					<li><p judul-sidebar><b>Kategori</b></p></li>
					<?php foreach($kategori as $k){ ?>
					<li><?php echo $k->kategori ?> <span class="badge pull-right"><?php echo $this->m_admin->tutorial_perkategori($k->id); ?></span></li>
					<?php } ?>

				</ul>
			</div>			
		</div>
		<div class="col-md-9">
			<?php 
			foreach($artikel as $a){
				?>
				<div class="col-md-12 box-artikel">
					<a class="col-md-3" href="<?php echo base_url() ?>home/single/<?php echo $a->id_artikel ?>">
						<img class="col-md-12" src="<?php echo base_url().'image/'.$a->foto ?>" alt="<?php echo $a->judul ?>">
					</a>
					<div class="col-md-9">
						<a href="<?php echo base_url() ?>home/single/<?php echo $a->id_artikel ?>" class="title-artikel"><?php echo $a->judul ?></a>
						<?php echo substr($a->isi_artikel,0,250)." .." ?>
						<br/><br />
						<a href="<?php echo base_url() ?>home/single/<?php echo $a->id_artikel ?>" class="btn btn-sm btn-success pull-right">Read more</a>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>