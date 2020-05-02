<?php
session_start();
include 'koneksi.php';
$id = $_GET["id"];
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
        <h3 class="mb-5" align="center">Nota Tiket</h3>
      <div class="container">
        <div class="row">
            <div class="col">
            <style>
                table tr td:first-child { background: url("img/500_F_181531870_xb9gJ5TxnFJpIREQIbh6dNb3KbrujCHX.jpg");}
            </style>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Kode Tiket</th>
                            <th>Judul</th>
                            <th>Waktu</th>
                            <th>Studio</th>
                            <th>Jumlah Kursi</th>
                            <th>Total Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $ambil = $koneksi->query("SELECT * from pembelian where id_pembelian = '$id'");
                            while ($pecah = $ambil->fetch_assoc()) {
                        ?>
                        <tr><?php  
                            $nama = $_SESSION["tbl_user"]["nama"];
                            ?>
                            
                            <td><?php echo $nama; ?></td>
                            <td><?php echo $pecah["id_checkout"]; ?></td>
                            <td><?php echo $pecah["judul"]; ?></td>
                            <td><?php echo $pecah["waktu"]; ?></td>
                            <td><?php echo $pecah["studio"]; ?></td>
                            <td><?php echo $pecah["jumlah_kursi"]; ?></td>
                            <td><?php echo $pecah["total_harga"]; ?></td>
                            
                        </tr>
                        <?php } ?>
                    </tbody> 
                </table>
                <h3 align="center"><b>NontonLah</b></h3>
                <div class="alert alert-warning mt-5" role="alert">
                    <h4 class="alert-heading">Well done!</h4>
                    <p>Screenshot dan Simpan Nota Tiket ini untuk diperlihatkan kepada petugas studio!</p>
                    <hr>
                    <p class="mb-0">Demi menjaga kerahasiaan dan keaslian tiket, Nota Tiket ini hanya bisa diakses sekali dan memiliki watermark sehingga tidak bisa ditiru.</p>
                </div>

                <div class="alert alert-success" role="alert">
                    Terima kasih Telah menonton di Studio NontonLah
                </div>

                <a class="btn btn-success ml-2 mt-5 mb-5" href="index.php" role="button">Selesai</a>
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