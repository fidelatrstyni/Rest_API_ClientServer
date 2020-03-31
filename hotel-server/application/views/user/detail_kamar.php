<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Detail Kamar Pengunjung
                </div>
                    <div class="card-body">
                        <center><h5 class="card-title"><?= $kamar['nama']; ?></h5></center>
                        <p class="card=text">
                            <label for=""><b>KTP :</b></label>
                            <?= $kamar['ktp']; ?>
                        </p>
                        <p class="card=text">
                            <label for=""><b>Alamat :</b></label>
                            <?= $kamar['alamat']; ?>
                        </p>
                        <p class="card=text">
                            <label for=""><b>Telephone :</b></label>
                            <?= $kamar['tlp']; ?>
                        </p>
                        <p class="card=text">
                            <label for=""><b>No Kamar :</b></label>
                            <?= $kamar['no_kamar']; ?>
                        </p>
                        <p class="card=text">
                            <label for=""><b>Tanggal Masuk :</b></label>
                            <?= $kamar['tgl_masuk']; ?>
                        </p>
                        <p class="card=text">
                            <label for=""><b>Tanggal Keluar :</b></label>
                            <?= $kamar['tgl_keluar']; ?><?= $kamar['tgl_keluar']; ?>
                        </p>
                        <a href="<?= base_url(); ?>home_user/home_user_login" class="btn btn-primary">kembali</a>
                        <a href="<?= base_url(); ?>home_user/home_user_login" class="btn btn-primary">kembali</a>
                    </div>
            </div>
        </div>
    </div>
</div>