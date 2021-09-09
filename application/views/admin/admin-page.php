<div id="admin" class="container">
	<div class="row">
		<div id="insert" class="col col-lg-3">
			<form action="" method="POST" enctype="multipart/form-data">
				<div class="mb-3">
					 <label for="exampleFormControlInput1" class="form-label">Kategori</label>
					 <select class="form-select" aria-label="Default select example" name="kategori">
					  <?php
							foreach ($kategori as $item) {
								?>
									<option value="<?=$item['id_kategori']?>"><?=$item['nama_kategori']?></option>
								<?php
							}
						?>
					</select>
				</div>
				
				<div class="mb-3">
				  <label for="exampleFormControlInput1" class="form-label">Nama Menu</label>
				  <input type="text" class="form-control" placeholder="Rendang Kari" name="nama_menu">
				</div>
				<div class="mb-3">
				  <label for="exampleFormControlInput2" class="form-label">Harga</label>
				  <input type="number" min="5000" class="form-control" placeholder="10.000" name="harga">
				</div>
				<div class="mb-3">
				  <label for="exampleFormControlInput2" class="form-label">Promo</label>
				  <input type="number" min="5000" class="form-control" placeholder="10.000" name="promo">
				</div>
				<div class="mb-3">
				  <label for="exampleFormControlInput2" class="form-label">Deskripsi</label>
				  <textarea class="form-control"></textarea>
				</div>
				<div class="mb-3">
				  <label for="formFile" class="form-label">Gambar Utama</label>
				  <input class="form-control" type="file" id="formFile" name="gambar_utama">
				</div>
				<div class="mb-3">
				  <label for="formFileMultiple" class="form-label">Gambar Tambahan</label>
				  <input class="form-control" type="file" id="formFileMultiple" multiple name="gambar_tambahan">
				</div>
				<div class="mb-3">
				  <input type="button" class="form-control btn btn-primary" name="submit" value="Tambahkan">
				</div>
			</form>
		</div>
		<div id="content" class="col col-lg-9">
			<?php
				for($i=0; $i < 9; $i++){
					?>
						<div class="item">
							<img src="<?=base_url('assets/image/rendang.jpg')?>" class="gambar-produk">
							<p>Rp. 40.000,- </p>
							<h5>Rendang Original</h5>

							<div class="row tombol-kelola">
								<div class="col">
									<button class="btn btn-warning w-100">Edit</button>
								</div>
								<div class="col">
									<button class="btn btn-danger w-100">Hapus</button>
								</div>
							</div>
						</div>
					<?php
				}
			?>
			
			</div>
		</div>
	</div>
</div>