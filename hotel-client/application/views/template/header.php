<!doctype html>
<html lang="en">
  <head>

  <style>
  .badge{
    margin-left:3px;
  }
  #menu{
  margin: 0;
  padding: 0;
  margin-top: 0px;
  }
  #menu li{
    list-style: none;
    display: inline-block;
  }
  #menu li a{
    text-decoration: none;
    position: relative;
    color: #313131;
    font-size: 20px;
    font-weight: 50;
    font-family: sans-serif;
    display: block;
    overflow: hidden;
    transition: 0.3s all;
    padding: 0px 5px;
  }
  #menu li a:before{
    content: '';
    width: 30px;
    position: absolute;
    border-bottom: 2px solid whitesmoke;
    bottom: 0;
    right: 350px;
    transition: 0.3s all;
  }
  #menu li a:hover:before{
    right: 0;
  }
  </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css"></script>
    <script src = "https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src = "//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/css/footer.css">
    <title><?= $title ?></title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-image: linear-gradient(#013440, #025059);">
    <div class="container">
  <a class="navbar-brand" href="#" style="margin-left:100px;color:whitesmoke"><i class="fa fa-building-o" aria-hidden="true" style="margin-right:5px"></i>Roomkita</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" >
    <ul class="navbar-nav" id="menu">
    <li class="nav-item">
      <a class="nav-item nav-link" href="<?= base_url(); ?>Home" style="color:whitesmoke;margin-right:10px"> Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-item nav-link" href="<?= base_url(); ?>administrator" style="color:whitesmoke;margin-right:10px">Data User</a>
    </li>
    <li class="nav-item">
      <a class="nav-item nav-link" href="<?= base_url(); ?>pengunjung" style="color:whitesmoke;margin-right:10px">Data Pengunjung</a>
    </li>
    <li class="nav-item">
      <a class="nav-item nav-link" href="<?= base_url(); ?>kamar" style="color:whitesmoke;margin-right:10px">Data Kamar</a>
    </li>
    <li class="nav-item">
      <a class="nav-item nav-link" href="<?= base_url(); ?>reservasi" style="color:whitesmoke;margin-right:10px">Data Reservasi</a>
    </li>
    <li class="nav-item">
      <a class="nav-item nav-link" href="<?= base_url(); ?>login/logout" style="color:whitesmoke;margin-right:10px">Logout</a>
    </li>
    </div>
  </div>
  </div>
</nav>
  