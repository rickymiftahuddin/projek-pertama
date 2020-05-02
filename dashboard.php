<?php
session_start();
include 'koneksi.php';
unset($_SESSION["book"]);
unset($_SESSION["film"]);
unset($_SESSION["kursi"]);
  ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style-dashboard.css">
    

    <title>NontonLah!</title>
  </head>
  <body>

  <?php include 'menu.php'; ?>


      <!-- <div class="jumbotron">
        <div class="container">
          <h1 class="display-4">NONTON FILM TERBARU DAN TERMURAH DI<br><span class="font-weight-bold">NONTONLAH!</span></h1>
        <p class="lead">Tersedia Banyak Film Terbaru dan Menarik untuk kamu tonton. Dan juga studio sudah tersebar luas di seluruh Indonesia</p>
        <hr class="my-4">
        <p>Mau Beli Tiket ?</p>
        <a class="btn btn-primary btn-lg" href="login.php" role="button">Klik di sini</a>
        </div>
      </div> -->

      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <?php $ambil = $koneksi->query("SELECT * from tbl_film");  ?>
        <?php $perfilm = $ambil->fetch_assoc()?>
         <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
         </ol>
         <div class="carousel-inner">
            <div class="carousel-item active">
               <img src="sampul/1.jpg" class="d-block w-100" width="460" height="500" alt="slide1">
               <div class="carousel-caption d-none d-md-block">
               <h3 class="display-4 font-weight-bold"><a href="detailfilm.php" style="color:white"><?php echo $perfilm['judul']; ?></a></h3>
               <p>Ayo Nonton Sekaraaannggg!!!!</p>
               </div>
            </div>
            <div class="carousel-item">
               <img src="sampul/2.jpg" class="d-block w-100" width="460" height="500" alt="slide2">
               <div class="carousel-caption d-none d-md-block">
               <h3 class="display-4 font-weight-bold"><a href="detailfilm.php" style="color:white"><?php echo $perfilm['judul']; ?></a></h3>
               <p>Harga Film TERMURAHHH!!!</p>
               </div>
            </div>
            <div class="carousel-item">
               <img src="sampul/3.jpg" width="460" height="500" class="d-block w-100" alt="slide3">
               <div class="carousel-caption d-none d-md-block">
               <h3 class="display-4 font-weight-bold"><a href="detailfilm.php" style="color:white"><?php echo $perfilm['judul']; ?></a></h3>
               <p>Jangan sampai kehabisan tiket!!!</p>
               </div>
            </div>
         </div>
         <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
         </a>
         <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
         </a>
      </div>

      <hr class="mt-5" width="50%" color="#D3 D3 D3">

      <div class="container mt-5 mb-5">
        <div class="row">
          

          <div class="col-lg-4">
          <?php $ambil = $koneksi->query("SELECT * from tbl_film where studio = '1'");  ?>
          <?php $perfilm = $ambil->fetch_assoc()?>
            <img src="poster/<?php echo $perfilm['poster']; ?>" witdh="150" height="300" style="display: block; margin: auto;">
            <p align="center"><b><?php echo $perfilm['judul']; ?></b></p>
            <p class="ml-5">Genre : <?php echo $perfilm['genre']; ?><br>
            Durasi : <?php echo $perfilm['durasi']; ?><br>
            Sutradara : <?php echo $perfilm['sutradara']; ?><br>
            Harga : Rp <?php echo $perfilm['harga']; ?></p>
            <a class="btn btn-dark btn-outline-info btn-block btn-md" href="detailjam.php?id=<?php echo $perfilm['kd_film']; ?>" role="button">Info Lebih Lanjut</a>
          </div>

          <div class="col-lg-4">
          <?php $ambil = $koneksi->query("SELECT * from tbl_film where studio = '2'");  ?>
          <?php $perfilm = $ambil->fetch_assoc()?>
            <img src="poster/<?php echo $perfilm['poster']; ?>" witdh="150" height="300" style="display: block; margin: auto;">
            <p align="center"><b><?php echo $perfilm['judul']; ?></b></p>
            <p class="ml-5">Genre : <?php echo $perfilm['genre']; ?><br>
            Durasi : <?php echo $perfilm['durasi']; ?><br>
            Sutradara : <?php echo $perfilm['sutradara']; ?><br>
            Harga : Rp <?php echo $perfilm['harga']; ?></p>
            <a class="btn btn-dark btn-outline-info btn-block btn-md" href="detailjam.php?id=<?php echo $perfilm['kd_film']; ?>" role="button">Info Lebih Lanjut</a>
          </div>

          <div class="col-lg-4">
          <?php $ambil = $koneksi->query("SELECT * from tbl_film where studio = '3'");  ?>
          <?php $perfilm = $ambil->fetch_assoc()?>
            <img src="poster/<?php echo $perfilm['poster']; ?>" witdh="150" height="300" style="display: block; margin: auto;">
            <p align="center"><b><?php echo $perfilm['judul']; ?></b></p>
            <p class="ml-5">Genre : <?php echo $perfilm['genre']; ?><br>
            Durasi : <?php echo $perfilm['durasi']; ?><br>
            Sutradara : <?php echo $perfilm['sutradara']; ?><br>
            Harga : Rp <?php echo $perfilm['harga']; ?></p>
            <a class="btn btn-dark btn-outline-info btn-block btn-md" href="detailjam.php?id=<?php echo $perfilm['kd_film']; ?>" role="button">Info Lebih Lanjut</a>
          </div>
          
        </div>
      </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>