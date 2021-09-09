<div id="navbar-admin" class="container">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Admin Rendangku</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse j-flex-end" id="navbarTogglerDemo02">
        <ul class="navbar-nav  mt-2 mt-lg-0">
              <li class="nav-item <?php if($this->uri->segment(1)=='admin' && $this->uri->segment(2)==''){echo ' active';}?>">
                <a class="nav-link" href="<?=site_url('admin')?>" >Tambah Menu</a>
              </li>
              <li class="nav-item <?php if($this->uri->segment(2)=='kategori'){echo ' active';}?>">
                <a class="nav-link" href="<?=site_url('admin/kategori')?>">Tambah Kategori</a>
              </li>
            </ul>
      </div>
    </div>
  </nav>
</div>
