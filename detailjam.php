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
    <script src="js/detail.js"></script>
    

    <title>NontonLah!</title>
  </head>
  <body>

<?php include 'menu.php'; ?>

    
      <iframe width="100%" height="500" src="https://www.youtube.com/embed/<?php echo $perfilm['link']; ?> " frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      
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

                <div class="col-8">
                    <h2  align="center">Sinopsis</h2>
                    <p  align="center"><?php echo $perfilm['sinopsis']; ?></P><br><br>
                    <h3  align="center">Jam Tayang</h3>
                    <h5>Hari ini (pre-order tidak tersedia)</h5><br>
                    <h5>Besok</h5>
                    <div class="row">
                        <a class="col-sm-1 btn btn-secondary m-1" href="detail<?php echo $perfilm['kd_film']; ?>-10.php?id=<?php echo $perfilm['kd_film']; ?>" role="button">10:00</a>
                        <a class="col-sm-1 btn btn-secondary m-1" href="detail<?php echo $perfilm['kd_film']; ?>-19.php?id=<?php echo $perfilm['kd_film']; ?>" role="button">19:00</a>
                    </div><br>
                    <h5>Lusa (pre-order belum tersedia)</h5>
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