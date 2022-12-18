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

    <!-- Sidebar main menu -->
    <!-- Sidebar main menu ends -->

    <!-- Begin page -->
    <main class="h-100">

        <!-- Header -->
        <header class="header position-fixed">
            <div class="row">
                <div class="col align-self-center text-center">
                    <div class="logo-small mt-3">
                        <h5>Monitoring Mindray</h5>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header ends -->

        <!-- main page content -->
        <div class="main-container container">
            <!-- welcome user -->
            <div class="row mb-4">
                <div class="col-auto">
                    <a href="javascript:void(0)" target="_self" class="btn btn-light btn-44 menu-btn">
                        <i class="bi bi-list"></i>
                    </a>
                </div>
                <div class="col-auto">
                    <div class="avatar avatar-50 shadow rounded-10">
                        <img src="<?= base_url() ?>/public/assets/img/logo.png" alt="">
                    </div>
                </div>
                <div class="col align-self-center ps-0">
                    <h4 class="text-color-theme">MonRay ITS</h4>
                    <!-- <p class="text-muted">Good Morning</p> -->
                </div>
            </div>

            <!-- Banner Info -->
            <div class="row mb-4 hideonprogress">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col align-self-center ps-0" style="margin-left: 15px;">
                                    <p class="small mb-2"><strong>Selamat Datang</strong></p>
                                    <p class="small">Aplikasi Pemantau Data Layar Mindray.</p>
                                </div>
                                <div class="col-auto">
                                    <button class="btn btn-44 btn-default shadow-sm">
                                        <i class="bi bi-emoji-smile-fill"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="row mx-0">
                            <div class="col-12">
                                <div class="progress bg-none h-2 hideonprogressbar" data-target="hideonprogress">
                                    <div class="progress-bar bg-theme" role="progressbar" aria-valuenow="25"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Data in Dashboard -->
            <div class="viewdata"></div>
            
            

        </div>
        <!-- main page content ends -->


    </main>
    <!-- Page ends-->

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <ul class="nav nav-pills nav-justified">
                <li class="nav-item">
                    <a class="nav-link active" href="<?= base_url('') ?>">
                        <span>
                            <i class="nav-icon bi bi-speedometer"></i>
                            <span class="nav-text">Dashbord</span>
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </footer>
    <!-- Footer ends-->
<script>

    function monray() {
        $.ajax({
            url: "<?= site_url('home/getdata') ?>",
            dataType: "json",
            success: function(response) {
                $('.viewdata').html(response.data);
            }
        });
    }

    $(document).ready(function() {
        setInterval(function () { monray()}, 5000); // panggil setiap 5 detik
        monray();
    });

</script>

<?= $this->endSection('isi') ?>