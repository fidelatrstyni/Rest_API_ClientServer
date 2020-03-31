<br><br>
<div class="shadow-lg p-5 bg-white rounded">
    <h2 style="text-align:center">Kamar Tipe-A</h2>
    <h5 style="text-align:center">King Bed, Fasilitas AC, Furniture</h5>
    <br><br>
    <div class="card-group" style="margin-left:100px">
        <div class="row row-cols-1 row-cols-md-3">

        <!--div class="col mb-4"-->
        <?php foreach($kamarA as $ka):?>
          <div class="card h-100">
          <div class="card-body" style="text-align:center; background-color:#F5F5F5">
          <?= $ka['no_kamar'];?>
          </div>
          <img src="../assets/img/room3.jpg" class="card-img-top" alt="...">
              <div class="card-footer" style="background-color:#F5F5F5">
              <small class="text-muted" style="margin-left:20px">
              <a href="<?= base_url();?>booking/index/<?= $ka['id_kamar'];?>"
                  class="btn btn-warning btn-sm">Booking</a>
              <button type="button" class="btn btn-success btn-sm" style="margin-left:10px"><?= $ka['harga'];?></button>
              </small>
              </div>
              
          </div>
          <?php endforeach; ?>
         
        </div>
     </div>
</div>

<div class="shadow-lg p-5 bg-white rounded">
    <h2 style="text-align:center">Kamale Bed, Fasilitasr Tipe-B</h2>
    <h5 style="text-align:center">Doub AC, Furniture</h5>
    <br><br>
    <div class="card-group" style="margin-left:100px">
        <div class="row row-cols-1 row-cols-md-3">

        <!--div class="col mb-4"-->
        <?php foreach($kamarB as $kb):?>
          <div class="card h-100">
          <div class="card-body" style="text-align:center; background-color:#F5F5F5">
          <?= $kb['no_kamar'];?>
          </div>
          <img src="../assets/img/room3.jpg" class="card-img-top" alt="...">
              <div class="card-footer" style="background-color:#F5F5F5">
              <small class="text-muted" style="margin-left:20px">
              <a href="<?= base_url();?>booking/index/<?= $kb['id_kamar'];?>"
                  class="btn btn-warning btn-sm">Booking</a>
                      <button type="button" class="btn btn-success btn-sm" style="margin-left:10px"><?= $kb['harga'];?></button>
              </small>
              </div>
              
          </div>
          <?php endforeach; ?>
         
        </div>
     </div>
</div>

<div class="shadow-lg p-5 bg-white rounded">
    <h2 style="text-align:center">Kamar Tipe-C</h2>
    <h5 style="text-align:center">Single Bed, Fasilitas AC, Furniture</h5>
    <br><br>
    <div class="card-group" style="margin-left:100px">
        <div class="row row-cols-1 row-cols-md-3">

        <!--div class="col mb-4"-->
        <?php foreach($kamarC as $kc):?>
          <div class="card h-100">
          <div class="card-body" style="text-align:center; background-color:#F5F5F5">
          <?= $kc['no_kamar'];?>
          </div>
          <img src="../assets/img/room3.jpg" class="card-img-top" alt="...">
              <div class="card-footer" style="background-color:#F5F5F5">
              <small class="text-muted" style="margin-left:20px">
              <a href="<?= base_url();?>booking/index/<?= $kc['id_kamar'];?>"
                  class="btn btn-warning btn-sm">Booking</a>
                      <button type="button" class="btn btn-success btn-sm" style="margin-left:10px"><?= $kc['harga'];?></button>
              </small>
              </div>
              
          </div>
          <?php endforeach; ?>
         
        </div>
     </div>
</div>


<div class="shadow-lg p-5 bg-white rounded">
    <h2 style="text-align:center">Kamar Tipe-D</h2>
    <h5 style="text-align:center">Queen Bed, Fasilitas AC, Furniture</h5>
    <br><br>
    <div class="card-group" style="margin-left:100px">
        <div class="row row-cols-1 row-cols-md-3">

        <!--div class="col mb-4"-->
        <?php foreach($kamarD as $kd):?>
          <div class="card h-100">
          <div class="card-body" style="text-align:center; background-color:#F5F5F5">
          <?= $kd['no_kamar'];?>
          </div>
          <img src="../assets/img/room3.jpg" class="card-img-top" alt="...">
              <div class="card-footer" style="background-color:#F5F5F5">
              <small class="text-muted" style="margin-left:20px">
              <a href="<?= base_url();?>booking/index/<?= $kd['id_kamar'];?>"
                  class="btn btn-warning btn-sm">Booking</a>
                      <button type="button" class="btn btn-success btn-sm" style="margin-left:10px"><?= $kd['harga'];?></button>
              </small>
              </div>
              
          </div>
          <?php endforeach; ?>
         
        </div>
     </div>
</div>

