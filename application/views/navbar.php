<div class="container">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Rendang</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0" style="margin: 0 auto">
              <li class="nav-item <?php if($this->uri->segment(1)=='' OR $this->uri->segment(1)=='home'){echo ' active';}?>">
                <a class="nav-link" href="<?=site_url('home')?>" >Home</a>
              </li>
              <li class="nav-item <?php if($this->uri->segment(1)=='catalog'){echo ' active';}?>">
                <a class="nav-link" href="<?=site_url('catalog')?>">Catalog</a>
              </li>
              <li class="nav-item <?php if($this->uri->segment(1)=='products'){echo ' active';}?>">
                <a class="nav-link" href="<?=site_url('products')?>">Products</a>
              </li>
            </ul>
            <ul class="navbar-nav mt-2 mt-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa fa-search"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href=""><i class="fa fa-shopping-cart"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa fa-user"></i></a>
              </li>
            </ul>
      </div>
    </div>
  </nav>
</div>
