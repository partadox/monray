<!-- Card Device Info -->
<div class="row mb-4">

    <div class="col-12 col-md-4 col-lg-6">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-auto">
                        <div class="avatar avatar-40 alert-primary text-second rounded-circle">
                            <i class="bi bi-display"></i>
                        </div>
                    </div>
                    <div class="col align-self-center ps-0">
                        <div class="row mb-2">
                            <div class="col">
                                <p class="small text-muted mb-0">Device</p>
                                <p><b><?= $monray['device'] ?></b></p>
                            </div>
                            <div class="col-auto text-end">
                                <p class="small text-muted mb-2">Waktu</p>
                                <p class="small"><strong><?= $tgl ?>  </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Heading -->
<div class="row mb-3">
    <div class="col">
        <h6 class="title">Dashboard</h6>
    </div>
</div>

<div class="row mb-4">

    <div class="col-6 col-md-4 col-lg-3">
        <div class="card mb-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-auto align-self-center ps-0" style="margin-left:20px;">
                        <p class="large mb-1 text-muted"><strong>ECG</strong></p>
                        <p class="large"><strong><?= $monray['ecg'] ?></strong></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-6 col-md-4 col-lg-3">
        <div class="card mb-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-auto align-self-center ps-0" style="margin-left:20px;">
                        <p class="large mb-1 text-muted"><strong>Spo2</strong></p>
                        <p class="large"><strong><?= $monray['spo2_1'] ?></strong>, source:<?= $monray['spo2_2'] ?> <strong></strong></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-6 col-md-4 col-lg-3">
        <div class="card mb-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-auto align-self-center ps-0" style="margin-left:20px;">
                        <p class="large mb-1 text-muted"><strong>Resp</strong></p>
                        <p class="large"><strong><?= $monray['resp'] ?></strong></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-6 col-md-4 col-lg-3">
        <div class="card mb-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-auto align-self-center ps-0" style="margin-left:20px;">
                        <p class="large mb-1 text-muted"><strong>NIBP</strong></p>
                        <p class="large"><strong><?= $monray['nibp_1'] ?></strong>/ <code>-</code>  <strong>  (<?= $monray['nibp_3'] ?>)</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-6 col-md-4 col-lg-3">
        <div class="card mb-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-auto align-self-center ps-0" style="margin-left:20px;">
                        <p class="large mb-1 text-muted"><strong>Temp</strong></p>
                        <p class="large"><strong><code>-</code></strong></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-6 col-md-4 col-lg-3">
        <div class="card mb-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-auto align-self-center ps-0" style="margin-left:20px;">
                        <p class="large mb-1 text-muted"><strong>ID Data</strong></p>
                        <p class="large"><strong><?= $monray['id'] ?></strong></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-6 col-md-4 col-lg-3">
        <div class="card mb-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-auto align-self-center ps-0" style="margin-left:20px;">
                        <p class="large mb-1 text-muted"><strong>Timestamp</strong></p>
                        <p class="large"><strong><?= $monray['date'] ?>, <?= $monray['time'] ?></strong></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

