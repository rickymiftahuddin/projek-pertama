<?php
session_start();
include 'koneksi.php';
$idcheckout = $_GET["id"];
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



      <hr class="mt-5" width="50%" color="#D3 D3 D3">
        <h3 align="center">Pembayaran</h3>
      <div class="container mt-5 mb-5">
        <div class="row">

          <div class="col-3">
            <div class="card text-white bg-danger m-2 mb-3"  style="max-width: 16rem;">
                <div class="card-header">Melalui Rekening</div>
                <div class="card-body">
                    <h5 class="card-title">CIMB Niaga</h5>
                    <p class="card-text">1111111123456789</p>
                </div>
            </div>
          </div>
          
          <div class="col-3">
            <div class="card text-white bg-secondary m-2 mb-3" style="max-width: 16rem;">
                <div class="card-header">Melalui Rekening</div>
                <div class="card-body">
                    <h5 class="card-title">BNI</h5>
                    <p class="card-text">1222222223456789</p>
                </div>
            </div>
          </div>

          <div class="col-3">
            <div class="card text-white bg-warning m-2 mb-3" style="max-width: 16rem;">
                <div class="card-header">Melalui Rekening</div>
                <div class="card-body">
                    <h5 class="card-title">Mandiri</h5>
                    <p class="card-text">1233333333456789</p>
                </div>
            </div>
          </div>

          <div class="col-3">
            <div class="card text-white bg-primary m-2 mb-3" style="max-width: 16rem;">
                <div class="card-header">Melalui Rekening</div>
                <div class="card-body">
                    <h5 class="card-title">BCA</h5>
                    <p class="card-text">1234444444456789</p>
                </div>
            </div>
          </div>

        </div>
        
          <?php
          $iduser = $_SESSION["tbl_user"]["nik"];  
          $ambil = $koneksi->query("SELECT * from checkout where nik = '$iduser'");
          $data = $ambil->fetch_assoc();
          ?>
          <form method="post" enctype="multipart/form-data">
          <div class="alert alert-info fluid m-2" role="alert">
            Total Tagihan Anda Sebesar <b>Rp. <?php echo $data["total_harga"]; ?></b>
          </div>
          <hr class="m-2"></hr>
          
            <div>
              <label>Foto Bukti</label>
              <input type="file" name="foto" class="form-control" required="">
              <p class="text-danger">File Maksimal 2MB</p>
            </div>
        

          <div class="alert alert-danger fluid m-2" role="alert">
            Segera lakukan pembayaran tanpa menutup halaman web ini dan kirimkan bukti pembayaran sekarang!
          </div>

          <button class="btn btn-primary" name="kirim">Kirim</button>
          </form>

          <?php 
          
          $ambil = $koneksi->query("SELECT * from checkout where id_checkout = '$idcheckout'");
          $pecah = $ambil->fetch_assoc();

          if (isset($_POST["kirim"])) {
            $namabukti = $_FILES["foto"]["name"];
            $lokasibuktinya = $_FILES["foto"]["tmp_name"];
            $namayangfix = date("YmdHis").$namabukti;
            move_uploaded_file($lokasibuktinya, "bukti_pembayarannya/$namayangfix");


             $idd_checkout = $pecah["id_checkout"];
             $judul = $_SESSION["film"]["judul"];
             $waktu = $_SESSION["kursi"]["waktu"];
             $studio = $_SESSION["kursi"]["studio"];
             $jumlahkursi = $pecah["jumlah_tiket"];
             $totalharga = $pecah["total_harga"];
             $kdtiket = $pecah["id_checkout"];

             $koneksi->query("INSERT into pembelian 
              (id_checkout,judul,waktu,studio,jumlah_kursi,total_harga,kd_tiket,foto_bukti) values 
              ('$idd_checkout','$judul','$waktu','$studio','$jumlahkursi','$totalharga','$kdtiket','$namayangfix')
              ");

             $ambilin = $koneksi->query("SELECT * from pembelian where id_checkout = '$idd_checkout'");
             $idpem = $ambilin->fetch_assoc();
             $idpembelian = $idpem["id_pembelian"];

             echo "<script>alert('Terima Kasih Telah Melakukan Pembayaran');</script>";
             echo "<script>location='nota.php?id=$idpembelian';</script>";

           } 
          
          ?>




      </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>