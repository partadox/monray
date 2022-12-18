<?= $this->extend('main') ?>

<?= $this->section('isi') ?>

 <!-- loader section -->
 <div class="container-fluid loader-wrap">
        <div class="row h-100">
            <div class="col-10 col-md-6 col-lg-5 col-xl-3 mx-auto text-center align-self-center">
                <div class="loader-cube-wrap loader-cube-animate mx-auto">
                    <img src="<?= base_url() ?>/public/assets/img/logo.png" alt="Logo">
                </div>
                <p class="mt-4"><strong>Harap tunggu...</strong></p>
            </div>
        </div>
    </div>
    <!-- loader section ends -->

     <!-- Begin page content -->
     <main class="container-fluid h-100">
         <!-- Header -->
         <header class="header position-fixed">
            <div class="row">
                <div class="col align-self-center text-center">
                    <div class="logo-small mt-3">
                        <img src="<?= base_url() ?>/public/assets/img/logo.png" alt="">
                        <h5>404 Not Found</h5>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header ends -->

        <div class="row h-100 ">
            <div class="col-12 col-md-6 col-lg-5 col-xl-3 mx-auto py-4 text-center align-self-center">
                <figure class="mw-100 text-center mb-3">
                    <img src="<?= base_url() ?>/public/assets/img/404.png" alt="" class="mw-100">
                </figure>
                <h1 class="mb-0 text-color-theme">Oops!...</h1>
                <h5 class="mb-3">Halaman tidak ditemukan.</h5>
            
                <a href="<?= base_url('login') ?>" target="_self" class="btn btn-default btn-lg">Kembali</a>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <ul class="nav nav-pills nav-justified">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('home/index') ?>">
                        <span>
                            <i class="nav-icon bi bi-shop-window"></i>
                            <span class="nav-text">Penjual</span>
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('home/cari') ?>">
                        <span>
                            <i class="nav-icon bi bi-search"></i>
                            <span class="nav-text">Cari</span>
                        </span>
                    </a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('home/about') ?>">
                        <span>
                            <i class="nav-icon bi bi-info-circle"></i>
                            <span class="nav-text">About</span>
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </footer>
    <!-- Footer ends-->

<?= $this->endSection('isi') ?>