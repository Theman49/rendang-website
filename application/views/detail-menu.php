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
				<h3><?=$dataDetail['nama_menu']?></h3>
				<h4 class="my-3">Rp. <span id="dataDetailHarga"><?=$dataDetail['harga']?></span>,-</h4>
			</div>
			<form action="<?=site_url("addToCart")?>" method="POST">
				<div class="order my-4">

					<div class=" cursor-pointer">
						<i class="fa fa-minus btn btn-secondary" onclick="kurangOrder()" onchange="change()"></i>
					</div>
					<div class="">
						<p id="jumlahOrder" class="px-4">1</p>

						<input class="d-none" id="inputOrder" type="number" name="jumlahOrder" value="1">
						<input class="d-none" id="id_menu" type="text" name="idMenu" value="<?=$dataDetail['id_menu']?>">
						<input class="d-none" id="totalHarga" type="text" name="totalHarga" value="<?=$dataDetail['harga']?>">
						
					</div>
					<div class=" cursor-pointer">
						<i class="fa fa-plus btn btn-secondary" onclick="tambahOrder()" onchange="change()"></i>
					</div>
				</div>
				<div class="row">
					<div class="col col-lg-5 pe-0">
						<a href="#" class="btn btn-primary w-100">Beli Sekarang</a>
					</div>
					<div class="col col-lg-7">
						<button type="submit" class="btn btn-success w-100">Tambah Ke Keranjang</button>
					</div>
				</div>
			</form>
		</div>
	</div>
	<div id="deskripsi" class="row">
		<?=$dataDetail['deskripsi']?>
	</div>

	<div id="produk-lainnya">
		<h1>Menu Lainnya</h1>
		<div class="d-flex justify-content-between">
			<?php
				foreach($dataMenuLain as $row){
					?>
						<div class="item card shadow p-3 mb-5 bg-body rounded">
							<img src="<?=base_url('assets/image/rendang.jpg')?>" class="gambar-produk">
							<p>Rp. <?=$row['harga']?>,- </p>
							<a href="<?=site_url('catalog/detail/'.$row['id_menu'].'')?>"><h5 onclick="detail()"><?=$row['nama_menu']?></h5></a>
						</div>
					<?php
				}
			?>
		</div>
	</div>
</div>

<script>
	

	function change(){
		let dataDetailHarga = document.getElementById('dataDetailHarga');
		let harga = parseInt(dataDetailHarga.innerHTML);

		let inputOrder = document.getElementById("inputOrder");
		let jumlahOrder = document.getElementById("jumlahOrder");
		let totalHarga = document.getElementById('totalHarga');


		let valueJumlahOrder = parseInt(jumlahOrder.innerHTML);

		inputOrder.value = valueJumlahOrder;

		totalHarga.value = valueJumlahOrder * harga;
	}
</script>