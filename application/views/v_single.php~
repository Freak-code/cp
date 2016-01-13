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
			foreach($single as $s){
				?>
				<div class="col-md-12 box-artikel">					
					<div class="col-md-12">
						<h3><?php echo $s->judul ?></h3>
						<small><span class="glyphicon glyphicon-user"></span> <?php echo $s->username ?> <?php echo nbs(4) ?> <span class="glyphicon glyphicon-calendar"></span> <?php echo $s->tanggal ?></small>
						<br/>
						<br/>
						<a class="col-md-12">
							<img class="col-md-12" src="<?php echo base_url().'image/'.$s->foto ?>" alt="<?php echo $s->judul ?>">
						</a>
						<br/>
						<div style="margin-top:20px" class="col-md-12">
						<?php echo $s->isi_artikel ?>						
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>