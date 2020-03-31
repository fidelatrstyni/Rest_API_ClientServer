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
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/css/reservasiuser.css">
    <title><?= $title ?></title>
  </head>
  <body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light" style="background-image: linear-gradient(#013440, #025059);">
        <a class="navbar-brand" href="#" style="margin-left:200px;color:whitesmoke"><i class="fa fa-building-o" aria-hidden="true" style="margin-right:5px"></i>Roomkita</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav" id="menu">
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>home_user" style="color:whitesmoke">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>kamar_user" style="color:whitesmoke">Kamar</a>
          </li>
        </ul>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav">
          <li class="search" style="margin-left:350px" >
                    <form class="form-inline">
                      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                      <i class="fa fa-search" style="color:whitesmoke"></i>
                    </form>
          </li>
            <li class="nav-item" style="margin-left: 100px">
              <a class="btn btn-primary my-2 my-sm-0" href="<?= base_url(); ?>login/" style="color:whitesmoke">Login</a>
            </li>
        </ul>

  <!--nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light" id="nav-white">
  <a class="navbar-brand" href="#" style="margin-left:200px"><i class="fa fa-building-o" aria-hidden="true" style="margin-right:5px"></i>Roomkita</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown" >
    <ul class="navbar-nav">
      <!--li class="nav-item">
        <a class="navbar-brand" href="#" style="margin-left:200px"><i class="fa fa-building-o" aria-hidden="true" style="margin-right:5px"></i>Roomkita</a>
      </li-->
      <!--li class="nav-item">
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
        <!--li class="nav-item" style="margin-left: 700px">
          <a class="btn btn-primary my-2 my-sm-0" href="<?= base_url(); ?>login/">Login</a>
        </li-->
  </div>
</nav>
<!--nav class="navbar sticky-top navbar-light bg-light">
  <a class="navbar-brand" href="#">Sticky top</a>
</nav>
<script>
        window.addEventListener("scroll", function(){
            let nav = document.getElementById('nav');

            if(window.pageYoffset > 0){
              nav.classList.add("white");
            }else{
              nav.classList.remove("white")
            }
        })
</script-->
