<div id="checkout" class="container">
	<div class="row">
		<div class="col col-lg-7 border-end py-5 pe-5">
			<div class="row">
				<h3>Blessing Kitchen</h3>
			</div>
			<?php $this->load->view('path-checkout')?>
			<!-- form -->
			<form action="<?=site_url('checkout/form')?>" method="POST" class="<?=($formData == "") ? "" : "d-none"?>">
				<h3>Alamat Pengiriman</h3>
				<div class="mb-3">
				  <label for="exampleFormControlInput1" class="form-label">Nama Pembeli : </label>
				  <input type="text" class="form-control" placeholder="Chris Manuel" name="nama_pembeli" value="<?=(isset($_SESSION['formData'])) ? $_SESSION['formData']['nama_pembeli'] : ""?>">
				</div>
				<div class="mb-3">
				  <label for="exampleFormControlInput1" class="form-label">Kota/Kabupaten : </label>
				  <input type="text" class="form-control" placeholder="DKI JAKARTA" name="kota_pembeli" value="<?=(isset($_SESSION['formData'])) ? $_SESSION['formData']['kota_pembeli'] : ""?>">
				</div>
				<div class="mb-3">
				  <label for="exampleFormControlInput1" class="form-label">Alamat : </label>
				  <textarea class="form-control" placeholder="JL. Mangga Gg. 2" name="alamat_pembeli"><?=(isset($_SESSION['formData'])) ? $_SESSION['formData']['alamat_pembeli'] : ""?></textarea>
				</div>
				<div class="row">
					<div class="col mb-3">
					  <label for="exampleFormControlInput1" class="form-label">Kode Pos : </label>
					  <input type="text" class="form-control" placeholder="12345" name="kode_pos" value="<?=(isset($_SESSION['formData'])) ? $_SESSION['formData']['kode_pos'] : ""?>">
					</div>
					<div class="col mb-3">
					  <label for="exampleFormControlInput1" class="form-label">Telepon : </label>
					  <input type="text" class="form-control" placeholder="0812345678" name="telepon" value="<?=(isset($_SESSION['formData'])) ? $_SESSION['formData']['telepon'] : ""?>">
					</div>
				</div>
				<div class="d-flex justify-content-end">
					<button class="btn btn-primary">Lanjutkan</button>
				</div>
				
			</form>
			
			<!-- metode pengiriman -->

			<?php 
				if($formData == "1"){
					$this->load->view('metode-pengiriman');
				}
			?>

			<!-- metode pembayaran -->
			<div id="pembayaran" class="<?=($formData == "2") ? "":"d-none"?>">
				<form action="<?=site_url('test')?>" method="POST">
					<div class="border rounded-3 px-4 pb-4">
						<input type="radio" name="transfer" checked><label>Transfer Bank</label>
						<img src="<?=base_url('assets/image/bca.png')?>">
						<p>NOTE : Mohon ditransfer dengan memperhatikan 3 digit angka terakhir ya :) agar mempermudah dalam pengecekan ^.^</p>
					</div>
					<div class="d-flex justify-content-end mt-3">
					  <a href="<?=site_url('checkout/pathForm')?>" class="me-3 mt-2">Kembali</a>
					  <button class="btn btn-primary">Lanjutkan</button>
					</div>
				</form>
			</div>

		</div>
		<div class="col col-lg-5 py-5">
				<?php
					$totalHarga = 0;
					$i=0;
					foreach($contentData as $row){
						?>
							<div id="idMenuPesan<?=$i?>" class="row mb-3 mx-1 menu-pesan"> 
								<div class="col item">
									<div class="row">
										<div class="col px-0 pb-3">
											<img class="w-100" src="<?=base_url('assets/image/rendang.jpg')?>">
										</div>
										<div class="col">
											<h5><?=$row['nama_menu']?></h5>
											<p>Rp. <span id="hargaMenu<?=$i?>"><?=$row['total_harga']?></span>,-</p>
										</div>
									</div>
								</div>

								<div class="col item mt-4">
									<div class="row text-right ">
										<div class="col order">
											<p>quanity : <?=$row['jumlah_order']?></p>
										</div>
									</div>
								</div>
							</div>
						<?php
						$i++;
						$totalHarga += $row['total_harga'];
					}
				?>

				<div id="formData" class="<?=($formData == "1" || $formData == "2") ? "border-top py-3":"d-none"?>">
					<div class="mx-1">
						<pre>Nama pembeli   : <?=$nama_pembeli?></pre>
						<pre>Kota/Kabupaten : <?=$kota_pembeli?></pre>
						<pre>Alamat         : <?=$alamat_pembeli?></pre>
						<pre>Kode pos       : <?=$kode_pos?></pre>
						<pre>Telepon        : <?=$telepon?></pre>
					</div>
					

					<div class="tarif border-top mt-3 mx-1 pt-3">
						<div class="d-flex justify-content-between">
							<div class="">
								<p class="fw-bold">Subtotal</p>
							</div>
							<div class="">
								<h5>Rp. <span id="subTotal"><?=$totalHarga?></span>,-</h5>
							</div>
						</div>
						<div>
							<p class="fw-light">Tarif pengiriman</p>
							
						</div>
						<div class="d-flex justify-content-between" id="ongkir">
							<p class="fw-bold">JNE - OKE (0.1kg)</p>
							<h5>Rp. <span>19.000</span>,-</h5>
						</div>
					</div>
				</div>




				



				<div class=" py-3 border-top mx-1 d-flex justify-content-between">
					<div class="">
						<h5>Total</h5>
					</div>
					<div class="">
						<?php
							if($formData != ""){
								$totalHarga += 19000;
							}
						?>
						<h5>Rp. <span id="totalHarga"><?=$totalHarga?></span>,-</h5>
					</div>
				</div>
		</div>
	</div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<script src="<?=base_url('assets/JS/script-checkout.js')?>"></script>
<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>


<!-- 
BCA
7115108611
Martha Melank 
-->