<div id="cart" class="container mb-4" onwaiting="firstLoad()">
	<?php
		$totalItem = 0;
		for($i=0; $i<2; $i++){
			?>
				<div id="idMenuPesan<?=$i?>" class="row mb-3 mx-1 border-bottom menu-pesan"> 
					<div class="col item">
						<div class="row">
							<div class="col px-0 pb-3">
								<img class="w-100" src="<?=base_url('assets/image/rendang.jpg')?>">
							</div>
							<div class="col">
								<h5>Rendang Ori</h5>
								<p>Rp. <span id="hargaMenu<?=$i?>">40</span>.000,-</p>
							</div>
							<div class="col">
								<button class="btn btn-danger" onclick="cancelPesanan(<?=$i?>)"><i class="fa fa-times "></i></button>
							</div>
						</div>
					</div>

					<div class="col item mt-4">
						<div class="row text-right ">
							<div class="col col-lg-8 order">
								<div class=" cursor-pointer">
									<i class="fa fa-minus btn btn-secondary" onclick="kurangOrderOnCart(<?=$i?>)"></i>
								</div>
								<div class="">
									<p id="jumlahOrder<?=$i?>" class="px-4">1</p>
								</div>
								<div class=" cursor-pointer">
									<i class="fa fa-plus btn btn-secondary" onclick="tambahOrderOnCart(<?=$i?>)"></i>
								</div>
							</div>
							<div class="col col-lg-4">
								<h4>Rp. <span id="subTotal<?=$i?>" class="subTotal">40</span>.000,-</h4>
							</div>
						</div>
					</div>
				</div>
			<?php
			$totalItem++;
		}
	?>
	<div class="row mb-3">
		<div class="col text-right">
			<h1>Rp. <span id="hargaBayar">40</span>.000,-</h1>
		</div>
	</div>
	<div class="row">
		<div class="col col-lg-9"></div>
		<div class="col col-lg-3">
			<a href="<?=site_url('checkout')?>"><button class="btn btn-primary w-100">Checkout</button></a>
		</div>
	</div>
</div>