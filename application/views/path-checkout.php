<div id="path-checkout">
	<div class="row">
		<div class="col">
			<p><em><a href="<?=site_url('checkout')?>" class="d-inline-block">Informasi Pembeli</a> > <a href="<?=site_url('checkout/pathForm')?>" class="d-inline-block <?=(isset($_SESSION['formData'])) ? "":"nav-link disabled"?>">Metode Pengiriman</a> > <a href="<?=site_url('checkout/pathPembayaran')?>" class="d-inline-block <?=(isset($_SESSION['formData']['metode-pengiriman'])) ? "":"nav-link disabled"?>">Metode Pembayaran</a></em></p>
		</div>
	</div>
</div>