<!doctype html>
<html lang="en">
  <head>

  <style>
  .badge{
    margin-left:3px;
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
    <link rel="stylesheet" type="text/css" href="assets/css/reservasiuser.css">
    <title><?= $title ?></title>
  </head>
  <body>

  <nav class="navbar  fixed-top navbar-expand-lg navbar-light bg-light" >
  <a class="navbar-brand" href="#" style="margin-left:200px">HOTEL IKIA</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown" >
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url(); ?>home_user">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url(); ?>kamar_user">Kamar</a>
      </li>

      <!--li class="search" style="margin-left:350px">
                <form class="form-inline">
                  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                  <i class="fa fa-search"></i>
                </form>
        </li-->
        <li class="nav-item" style="margin-left: 700px">
          <a class="btn btn-primary my-2 my-sm-0" href="<?= base_url(); ?>login/">Login</a>
        </li>
    </ul>
  </div>
</nav>