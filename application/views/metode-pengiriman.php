
<form action="<?=site_url('checkout/pembayaran')?>" method="POST">
<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        <img class="logo-pengiriman" src="<?=base_url('assets/image/jne.png')?>">
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <input onclick="metodePengiriman(1)" type="radio" name="pilihanPengiriman" value="1" checked><label><strong>OKE</strong> - Rp. <span>19.000</span>,-</label><br>
        <input onclick="metodePengiriman(2)" type="radio" name="pilihanPengiriman" value="2"><label><strong>Reguler</strong> - Rp. <span>22.000</span>,-</label><br>
        <input onclick="metodePengiriman(3)" type="radio" name="pilihanPengiriman" value="3"><label><strong>Yes</strong> - Rp. <span>37.000</span>,-</label><br>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        <img class="logo-pengiriman" src="<?=base_url('assets/image/jnt.png')?>">
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <input onclick="metodePengiriman(4)" type="radio" name="pilihanPengiriman" value="4"><label><strong>Reguler</strong> - Rp. <span>19.000</span>,-</label><br>
      </div>
    </div>
  </div>
</div>
<div class="d-flex justify-content-end mt-3">
  <a href="<?=site_url('checkout')?>" class="me-3 mt-2">Kembali</a>
  <button class="btn btn-primary">Lanjutkan</button>
</div>
</form>