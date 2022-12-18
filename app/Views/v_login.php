<?= $this->extend('main') ?>

<?= $this->section('isi') ?>

<!-- Begin page content -->
<main class="container-fluid h-100">
        <div class="row h-100 overflow-auto">
            <div class="col-12 text-center mb-auto px-0">
                <header class="header">
                    <div class="row">
                        <div class="col-auto"></div>
                        <div class="col">
                            <div class="logo-small">
                                <img src="assets/img/logo.png" alt="">
                                <h5>MonRay</h5>
                            </div>
                        </div>
                        <div class="col-auto"></div>
                    </div>
                </header>
            </div>
            <div class="col-10 col-md-6 col-lg-5 col-xl-3 mx-auto align-self-center text-center py-4">
                <h1 class="mb-4 text-color-theme">Login</h1>
                <?= form_open('home/validasi', ['class' => 'formlogin']) ?>
                <?= csrf_field() ?>
                    <div class="form-group form-floating mb-3 is-valid">
                        <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                        <label class="form-control-label" for="username">Username</label>
                    </div>

                    <div class="form-group form-floating is-valid mb-3">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" autocomplete="off">
                        <label class="form-control-label" for="password">Password</label>
                    </div>

                    <div class="form-group mt-3 mb-3 ml-3">
                        <div class="g-recaptcha" data-sitekey="<?= $site_key ?>"></div>
                    </div>


                    <input type="submit" value="Login" class="btn btn-lg btn-default w-100 mb-4 shadow">
                    </input>
                <?= form_close() ?>

            </div>
            <div class="col-12 text-center mt-auto">
                <div class="row justify-content-center footer-info">
                    <div class="col-auto">
                        <p class="text-muted">Copyright 2022. </p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    
    <script>
        $(document).ready(function() {
            $('form').attr('autocomplete', 'off');
            $('.formlogin').submit(function(e) {
                e.preventDefault();
                $.ajax({
                    type: "post",
                    url: $(this).attr('action'),
                    data: $(this).serialize(),
                    dataType: "json",
                    headers: {'X-Requested-With': 'XMLHttpRequest'},
                    beforeSend: function() {
                        $('.btnlogin').prop('disable', true);
                        $('.btnlogin').html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> <i>Loading...')

                    },
                    complete: function() {
                        $('.btnlogin').prop('disable', false);
                        $('.btnlogin').html('Login')
                    },
                    success: function(response) {

                        if (response.sukses) {
                            Swal.fire({
                                title: "Berhasil!",
                                text: "Anda berhasil login!",
                                icon: "success",
                                showConfirmButton: false,
                                timer: 1250
                            }).then(function() {
                                window.location = response.sukses.link;
                            });

                        }

                        if (response.eror) {
                            Swal.fire({
                                title: "Oooopss!",
                                text: response.eror.respon,
                                icon: "error",
                                showConfirmButton: false,
                                timer: 1250
                            }).then(function() {
                                window.location = response.eror.link;
                            });
                        }
                    }
                });
                return false;
            });
        });
    </script>

<?= $this->endSection('isi') ?>