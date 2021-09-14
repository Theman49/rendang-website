<div id="checkout" class="container">
	<div class="row">
		<div class="col border-end py-5 pe-5">
			
			<div class="row">
				<h3>Blessing Kitchen</h3>
			</div>
			<?php $this->load->view('path-checkout')?>
			<form action="" method="POST">
				<h3>Alamat Pengiriman</h3>
				<div class="mb-3">
				  <label for="exampleFormControlInput1" class="form-label">Nama Pembeli : </label>
				  <input type="text" class="form-control" placeholder="Chris Manuel" name="nama_pembeli">
				</div>
				<div class="mb-3">
				  <label for="exampleFormControlInput1" class="form-label">Kota/Kabupaten : </label>
				  <input type="text" class="form-control" placeholder="DKI JAKARTA" name="kota_pembeli">
				</div>
				<div class="mb-3">
				  <label for="exampleFormControlInput1" class="form-label">Alamat : </label>
				  <textarea class="form-control" placeholder="JL. Mangga Gg. 2" name="alamat_pembeli"></textarea>
				</div>
				<div class="row">
					<div class="col mb-3">
					  <label for="exampleFormControlInput1" class="form-label">Kode Pos : </label>
					  <input type="text" class="form-control" placeholder="12345" name="kode_pos">
					</div>
					<div class="col mb-3">
					  <label for="exampleFormControlInput1" class="form-label">Telepon : </label>
					  <input type="text" class="form-control" placeholder="0812345678" name="telepon">
					</div>
				</div>
				<div class="d-flex justify-content-end">
					<button class="btn btn-primary">Lanjutkan</button>
				</div>
				
			</form>
			
		</div>
		<div class="col py-5">
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
				<div class=" py-3 border-top mx-1 d-flex justify-content-between">
					<div class="">
						<h5>Total</h5>
					</div>
					<div class="">
						<h5>Rp. <span><?=$totalHarga?></span>,-</h5>
					</div>
				</div>
		</div>
	</div>
</div>




<!-- 
BCA
7115108611
Martha Melank 
-->