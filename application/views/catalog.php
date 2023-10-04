<div id="catalog" class="container mb-5">
	<div class="row">
		<!-- <div id="filter" class="col col-lg-3">
			<ul>
				<li><a href="#">Rendang Ori</a></li>
				<li><a href="#">Rendang Medium</a></li>
				<li><a href="#">Rendang Special</a></li>
			</ul>
		</div> -->
		<div id="content" class="col col-lg-12">
			<?php
				foreach($contentData as $row){
					?>
						<div class="item card">
							<?php
								$gambar = "assets/image/".$row['gambar'].".jpg";
							?>
							<img src="<?=base_url($gambar)?>" class="card-img-top">
							<div class="card-body">
								<p>Rp. <?=substr($row['harga'], 0, 2)?>.000,- </p>
								<a href="<?=site_url('catalog/detail/'.$row['id_menu'].'')?>"><?=$row['nama_menu']?></a>
							</div>
							
						</div>
					<?php
				}
			?>
		</div>
	</div>
</div>