<?php 
session_start();
include 'koneksi.php'; 
$idfilm = $_GET['id'];
$detail = $koneksi->query("SELECT * from tbl_film where kd_film = '$idfilm'");
$perfilm = $detail->fetch_assoc();
$_SESSION["film"] = $perfilm;

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style-detailfilm.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="jquery-3.4.1.js"></script>
    

    <title>NontonLah!</title>
  </head>
  <body>

<?php include 'menu.php'; ?>

    
      <iframe width="100%" height="500" src="https://www.youtube.com/embed/<?php echo $perfilm['link']; ?> " frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      <h1 align="center">Pilih Kursi</h1>
      <hr class="mt-5" width="70%" color="#D3 D3 D3">
      <div class="container">
          <div class="row">
              
            <div class="col-lg-4">
                <img src="poster/<?php echo $perfilm['poster']; ?>" witdh="150" height="300" style="display: block; margin: auto;">
                <p align="center"><b><?php echo $perfilm['judul']; ?></b></p>
                <p class="ml-5">Genre : <?php echo $perfilm['genre']; ?><br>
                Durasi : <?php echo $perfilm['durasi']; ?><br>
                Sutradara : <?php echo $perfilm['sutradara']; ?><br>
                Harga : Rp <?php echo $perfilm['harga']; ?></p>
            </div>
         <div class="col-md-2">
            <?php 
                 $ambil = $koneksi->query("SELECT * from kursi where studio = '3' and waktu = '19:00'");
                while ( $namakursi = $ambil->fetch_assoc()){ ?>
              <div class="row">
                <?php
                $status = $namakursi["status"];
                 if ($status == 'ada'):?>
                    <div class="col-md-4"><a href="book10.php?id=<?php echo $namakursi['id_kursi']; ?>" class="btn btn-secondary">
                        <?php echo $namakursi["nama"]; ?></a></div>
                <?php else: ?>
                     <div class="col-md-4"><a class="btn btn-danger" disabled="true">
                    <?php echo $namakursi["nama"]; ?></a></div>
                <?php endif ?>
              </div>
            <?php } ?>
        </div>
        <div class="col-md-3" align="left">
                <img src="kursi.png" width="350">
        </div>
        </div>

        <form method="post">
            <?php if (!empty($_SESSION["kursi"])):?>
    <div class="row-md-2">
        <hr>
        <table class="table table-bordered">
            <thead>
                <tr>
                    
                    <th>Nama</th>
                    <th>Judul</th>
                    <th>Kursi</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                    
                    
                    
                </tr>
            </thead>
            <tbody>
                <?php
                    $nomor = 0; 
                    $iduser = $_SESSION["tbl_user"]["nik"];

                    $ambil = $koneksi->query("SELECT * from booking where nik = '$iduser'");
            
                    while ($data = $ambil->fetch_assoc()) {
                ?>
                <tr>
                    
                    <td><?php echo $data["nama"]; ?></td>
                    <td><?php echo $data["judul"]; ?></td>
                    <td><?php echo $data["kursi"]; ?></td>
                    <td><?php echo $data["harga"]; ?></td>
                    <td><a href="batal10.php?id=<?php echo $data["id_booking"]; ?>" class="btn btn-danger">Hapus</a></td>
                       
                </tr> 
                <?php $nomor++; ?>
                <?php } ?>
            </tbody>
            <tfoot>
                <tr>
                    <?php
                    $harga = $_SESSION["film"]["harga"];
                    $dikali= $nomor;
                    $total = $harga*$dikali;
                    ?>
                    <th colspan="2">Total Harga</th>
                    <th><?php echo $dikali; ?></th>
                    <th>Rp. <?php echo $total; ?></th>
                </tr>
            </tfoot>
        </table>
        <button class="btn btn-success" name="checkout">Checkout</button>
    </div>
<?php endif ?>  
 </form>

<?php  
    if (isset($_POST["checkout"])) {
        $nik = $_SESSION["tbl_user"]["nik"];

        $ambil = $koneksi->query("SELECT * from booking where nik = '$nik'");
        $book = $ambil->fetch_assoc();

        $id_booking = $book["id_booking"];
        $nama = $_SESSION["tbl_user"]["nama"];
        
        $jumlahtiket = $dikali;
        $totalharga = $total;

        $koneksi->query("INSERT into checkout (id_booking,nama,nik,jumlah_tiket,total_harga) values 
            ('$id_booking','$nama','$nik','$jumlahtiket','$totalharga')");

        $koneksi->query("DELETE from booking where nik = '$nik'");

        $ambilin = $koneksi->query("SELECT * from checkout where id_booking = '$id_booking'");
        $id = $ambilin->fetch_assoc();
        $idcheckout = $id["id_checkout"];

        echo "<script>alert('Checkout Berhasil');</script>";
        echo "<script>location='checkout.php?id=$idcheckout';</script>";
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