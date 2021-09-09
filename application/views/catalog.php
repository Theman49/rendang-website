<div id="catalog" class="container">
	<div class="row">
		<div id="filter" class="col col-lg-3">
			<ul>
				<li><a href="#">Rendang Ori</a></li>
				<li><a href="#">Rendang Medium</a></li>
				<li><a href="#">Rendang Special</a></li>
			</ul>
		</div>
		<div id="content" class="col col-lg-9">
			<?php
				for($i=0; $i < 9; $i++){
					?>
						<div class="item">
							<img src="<?=base_url('assets/image/rendang.jpg')?>" class="gambar-produk">
							<p>Rp. 40.000,- </p>
							<a href="<?=site_url('catalog/detail/'.$i.'')?>"><h5 onclick="detail()">Rendang Original</h5></a>
						</div>
					<?php
				}
			?>
		</div>
	</div>
</div>