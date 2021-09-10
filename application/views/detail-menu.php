<div id="detail-menu" class="container">
	<div class="row">
		<div id="gambar-tambahan" class="col col-lg-2">
			<?php
				for($i=0; $i<2; $i++){
					if($i==1){
						$source = base_url()."assets/image/rendang_2.jpg";
					}else{
						$source = base_url()."assets/image/rendang.jpg";
					}
					?>
					<div id="gambarTambahan<?=$i?>" class="row mb-3" onmouseover="showImageHover(<?=$i?>)">
						<img src="<?=$source?>">
					</div>
					<?php
				}
			?>
			
		</div>
		<div id="gambar-produk" class="col col-lg-6">
			<img class="w-100" src="<?=base_url('assets/image/rendang.jpg')?>">
		</div>
		<div id="content" class="col col-lg-4">
			<div class="row">
				<h3>Rendang Original</h3>
				<h4 class="my-3">Rp. 40.000,-</h4>
			</div>
			<div class="order my-4">
				<div class=" cursor-pointer">
					<i class="fa fa-minus btn btn-secondary" onclick="kurangOrder()"></i>
				</div>
				<div class="">
					<p id="jumlahOrder" class="px-4">1</p>
				</div>
				<div class=" cursor-pointer">
					<i class="fa fa-plus btn btn-secondary" onclick="tambahOrder()"></i>
				</div>
			</div>
			<div class="row">
				<div class="col col-lg-5 pe-0">
					<button class="btn btn-primary w-100">Beli Sekarang</button>
				</div>
				<div class="col col-lg-7">
					<button class="btn btn-success w-100">Tambah Ke Keranjang</button>
				</div>
			</div>
		</div>
	</div>
	<div id="deskripsi" class="row">
		<pre>Kripik Sanjai Balado Bulat merupakan olahan singkong yang dipotong menyerupai bulatan dan diberi saus khas minang 
			yang rasa dan tekstur nya renyah pedas manis, orang2 minang menyebutnya dengan "Sanjai Balado Merah"
Spesial untuk kamu dari Unikayo, "Kripik Sanjai Balado Bulat"
Tekstur Sanjai Balado yang renyah bikin nyantaimu makin seru 

cocok dimakan ketika :
- cemilan nonton film 
- cemilan kerja 
- cemilan belajar
- cemilan nongkrong bareng temen
dll 

Ketahahan : 
- Suhu ruang : 3 bulan</pre>
	</div>

	<div id="produk-lainnya">
		<h1>Produk Lainnya</h1>
		<div class="row">
			<?php
				for($i=0; $i < 5; $i++){
					?>
						<div class="item card shadow p-3 mb-5 bg-body rounded">
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