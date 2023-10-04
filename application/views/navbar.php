<div class="container mb-5">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fs-5">
    <div class="container-fluid align-items-end">
      <a class="navbar-brand fs-2" href="#">Blessing Kitchen</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse text-center justify-content-end" id="navbarTogglerDemo02">
        <ul class="navbar-nav mt-2 mt-lg-0">
          <li class="nav-item <?php if($this->uri->segment(1)=='' OR $this->uri->segment(1)=='home'){echo ' active';}?>">
            <a class="nav-link" href="<?=site_url('home')?>" ><i class="fa fa-home"></i> Home</a>
          </li>
          <li class="nav-item <?php if($this->uri->segment(1)=='catalog'){echo ' active';}?>">
            <a class="nav-link" href="<?=site_url('page/catalog')?>"><i class="fa fa-book"></i> Catalog</a>
          </li>
          <li class="nav-item <?php if($this->uri->segment(1)=='cart'){echo ' active';}?>">
            <a class="nav-link" href="<?=site_url('page/cart')?>"><i class="fa fa-shopping-cart"></i> Cart</a>
          </li>
          <li class="nav-item <?php if($this->uri->segment(1)=='transaction'){echo ' active';}?>">
            <a class="nav-link" href="<?=site_url('page/transaction')?>"><i class="fa fa-dollar"></i> Transaction</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</div>
