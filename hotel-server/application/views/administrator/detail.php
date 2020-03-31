<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Detail Data User
                </div>
                    <div class="card-body">
                        <center><h5 class="card-title"><?= $pengunjung['nama']; ?></h5></center>
                        <p class="card=text">
                            <label for=""><b>Username :</b></label>
                            <?= $pengunjung['username']; ?>
                        </p>
                        <p class="card=text">
                            <label for=""><b>Password :</b></label>
                            <?= $pengunjung['password']; ?>
                        </p>
                        <p class="card=text">
                            <label for=""><b>Telephone :</b></label>
                            <?= $pengunjung['tlp']; ?>
                        </p>
                        <p class="card=text">
                            <label for=""><b>Level :</b></label>
                            <?= $pengunjung['level']; ?>
                        </p>
                        <p class="card=text">
                            <label for=""><b>Status :</b></label>
                            <?= $pengunjung['status']; ?>
                        </p>
                        <a href="<?= base_url(); ?>administrator" class="btn btn-primary">kembali</a>
                    </div>
            </div>
        </div>
    </div>
</div>