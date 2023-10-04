<?php
	// if(isset($_POST['updateCart'])){
	// 	$controller->updateCart();
	// }

?>


<div id="cart" class="container mb-5" onwaiting="firstLoad()">
		<?php
			$i = 0;
			$totalHarga = 0;
			foreach($contentData as $row){

				?>
					<div id="idMenuPesan<?=$i?>" class="row mb-3 mx-1 border-bottom pb-3 menu-pesan d-table w-100"> 
						<div class="col item d-table-cell align-middle  w-50">
							<div class="row">
								<div class="gambar col px-0 pb-3">
									<?php $gambar = 'assets/image/'.$row['gambar'].".jpg" ?>
									<img class="w-100" src="<?=base_url($gambar)?>">
								</div>
								<div class="col">
									<h5><?=$row['nama_menu']?></h5>
									<p>Rp. <span id="hargaMenu<?=$i?>"><?=substr($row['harga'], 0)?></span>,-</p>
								</div>
								<div class="col pt-4">
									<?php $hapus = "cart/hapusDariCart/".$row['id_menu']?>
									<a href="<?=site_url($hapus)?>"><p class="btn btn-danger" onclick="hapusDariCart(<?=$i?>)"><i class="fa fa-times "></i></p></a>
								</div>
							</div>
						</div>

						<div class="col item d-table-cell align-middle">
							<div class="row text-right ">
								<div class="col col-lg-8 order p-0 pe-1">
									<form action="<?=site_url('cart/updateCart')?>" method="POST">
										<div class="d-none">
											<input class="" id="inputOrder<?=$i?>" type="number" name="jumlahOrder" value="<?=$row['jumlah_order']?>">
											<input class="" id="id_menu<?=$i?>" type="number" name="idMenu" value="<?=$row['id_menu']?>">
											<input class="" id="totalHarga<?=$i?>" type="number" name="totalHarga" value="<?=$row['total_harga']?>">
										</div>
										

										<div class=" cursor-pointer">
											<button class="btn btn-secondary <?=($row['jumlah_order'] == 1) ? " disabled" : ""?>" type="submit" name="updateCart" onclick="kurangOrderOnCart(<?=$i?>)"><i class="fa fa-minus"></i></button>
										</div>
										<div class="">
											<p id="jumlahOrder<?=$i?>" class="px-4"><?=$row['jumlah_order']?></p>


											
										</div>
										<div class=" cursor-pointer">
											<button class="btn btn-secondary" type="submit" name="updateCart" onclick="tambahOrderOnCart(<?=$i?>)"><i class="fa fa-plus" ></i></button>
										</div>
									</form>
								</div>
								<div class="col col-lg-4 p-0">
									<h4>Rp. <span id="subTotal<?=$i?>" class="subTotal"><?=substr($row['total_harga'],0)?></span>,-</h4>
								</div>
							</div>
						</div>
					</div>
				<?php
				$i++;
				$totalHarga += intval($row['total_harga']);
			}
		?>
		<!-- <input class="" id="jumlahMenuDipesan" type="number" name="jumlahMenuDipesan" value="<?=$i?>"> -->
		<div class="row mb-3">
			<div class="col text-right">
				<h1>Rp. <span id="hargaBayar"><?=$totalHarga?></span>,-</h1>
			</div>
		</div>
		<div class="row">
			<div class="col col-lg-9"></div>
			<div class="col col-lg-3">
				<a href="<?=site_url('checkout')?>"><button class="btn btn-primary w-100" <?=($totalHarga == 0) ? "disabled" : ""?>>Checkout</button></a>
			</div>
		</div>
</div>

<script>
	

	function change2(id){
		const getDataDetailHarga = "hargaMenu" + id;
		let dataDetailHarga = document.getElementById(getDataDetailHarga);
		let harga = parseInt(dataDetailHarga.innerHTML);

		const getInputOrder = "inputOrder" + id;
		const getJumlahOrder = "jumlahOrder" + id;
		const getTotalHarga = "totalHarga" + id;
		let inputOrder = document.getElementById(getInputOrder);
		let jumlahOrder = document.getElementById(getJumlahOrder);
		let totalHarga = document.getElementById(getTotalHarga);


		let valueJumlahOrder = parseInt(jumlahOrder.innerHTML);

		inputOrder.value = valueJumlahOrder;

		totalHarga.value = valueJumlahOrder * harga;
	}
</script>