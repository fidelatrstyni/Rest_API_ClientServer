<!DOCTYPE html>
<html>
  <head>
    <title>Registrasi</title>
    <link href="../css/bootstrap/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="../css/registrasi.css">
    <!-- <script src="vendor/bootstrap/js/bootstrap.min.js"></script> -->
    <!-- <script src="/js/3.2.1/jquery.min.js"></script> -->
  </head>
  <!--body style="<background-image: url(img/background.jpg);"-->
  <body background="../assets\img\bg.jpg">
    <div class="wrapper fadeInDown">
      <div id="formContent">
        <div id="formHeader">
          <!--img src="img/icon.png" width="39%" alt="User Icon" /-->
          <p href="#">Form Registrasi</p>
        </div>
        <br>
        <div class="alert alert-info" role="alert">
              <?php
                  if(isset($pesan)){
                          echo $pesan;
                  }else{
                          echo "Isi Data Dengan Benar !!!";
                 }
              ?>
          </div>
        <form action="<?php echo base_url('Login/aksi_registrasi'); ?>" method="post">
            <input type="hidden" id="level" name="level" value="user">
            <input type="hidden" id="status" name="status" value="off">
            <input type="text" id="nama" class="fadeIn second" name="nama" placeholder="Masukkan Nama" required>
            <input type="text" id="ktp" class="fadeIn second" name="ktp" placeholder="Masukkan KTP" required>
            <input type="text" id="tlp" class="fadeIn second" name="tlp" placeholder="Masukkan No Telephone" required>
            <input type="text" id="alamat" class="fadeIn second" name="alamat" placeholder="Masukkan Alamat" required>
            <input type="text" id="user" class="fadeIn second" name="username" placeholder="Masukkan Username" required>
            <input type="password" id="password" class="fadeIn third" name="password" placeholder="Masukkan Password" required><br>
            <button type="back" name="back" class="fadeIn fourth btn-danger"><a href="<?= base_url(); ?>login/index">Back</button></a>
            <button type="reset" name="reset" class="fadeIn fourth btn-warning">Reset</button>
            <button type="submit" name="login" class="fadeIn fourth ">Registrasi</button>
          </form>
          <div id="formFooter">
            <p class="underlineHover" href="#">Copyright @ Ikia Hotel</p>
          </div>
        </div>
      </div>
    </body>
</html>