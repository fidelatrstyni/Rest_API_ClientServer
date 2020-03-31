<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Sukses Booking
                    </div>
                    <div class="card-body">
                    
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="name" placeholder="Nama" disabled value="" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="id_kamar">Kamar</label>
                            <input type="text" class="form-control" id="id_kamar" placeholder="kamar" disabled value ="<!--?= $kamar['no_kamar']?>" required>
                        </div>
                            <div class="col-md-3 mb-3">
                            <label for="harga">Harga</label>
                            <input type="text" class="form-control" id="harga" placeholder="harga" disabled value="<!--?= $kamar['harga']?>" required>
                        <div class="invalid-tooltip">
                            Please provide a valid phone number.
                        </div>
                        </div>
                    </div>
                        <a href="<?= base_url(); ?>pengunjung" class="btn btn-primary">OK</a>
                    </div>
            </div>
        </div>
    </div>
</div>