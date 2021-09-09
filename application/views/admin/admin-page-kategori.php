<div id="admin-kategori" class="container">
	<div class="row">
		<div class="col"></div>
		<div id="insert" class="col">
			<form action="" method="POST" enctype="multipart/form-data">
				<div class="mb-3">
					 <label for="exampleFormControlInput1" class="form-label">Kategori</label>
					 <input type="text" class="form-control" placeholder="kategori" name="kategori">
				</div>
				<div class="mb-3">
				  <input type="button" class="form-control btn btn-primary" name="submit" value="Tambahkan Kategori">
				</div>
			</form>
		</div>
		<div id="content" class="col">
				 <h4>Kategori</h4>
				 <ul>
				 	<?php
						foreach ($kategori as $item) {
							?>
								<li><?=$item['nama_kategori']?></li>
							<?php
						}
					?>
				 </ul>
				  
		</div>
		<div class="col"></div>
	</div>
</div>