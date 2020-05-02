<?php include 'koneksi.php';
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style-dashboardadmin.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">

    <title>NontonLah - Admin</title>
  </head>
  <body>
      <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
        <a class="navbar-brand text-white" href="#">NontonLah</b></a>
          <form class="form-inline my-2 my-lg-0 ml-auto">
            </form>

            <div class="icon ml-4">
              <a href="cover.php" class="fas fa-sign-out-alt mr-3 text-white" data-toggle="tooltip" title="Sign Out"></a> 
            </div>
        </div>
      </nav>

      <div class="row no-gutters mt-5 ">
        <div class="col-md-2 bg-secondary mt-2 pr-3 pt-4">
          <ul class="nav flex-column ml-3 mb-5">
            <li class="nav-item">
              <a class="nav-link active text-white" href="dashboardadmin.php"><i class="fas fa-tachometer-alt mr-2 "></i>Dashboard</a><hr class="bg-secondary">
            </li>
            <li class="nav-item">
              <a class="nav-link active text-white" href="dashboardadminfilm.php"><i class="fas fa-film mr-2"></i>Film</a><hr class="bg-secondary">
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="dashboardadminuser.php"><i class="fas fa-address-book mr-2"></i>User</a><hr class="bg-secondary">
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="dashboardadminkursi.php"><i class="fas fa-couch mr-2"></i>Kursi</a><hr class="bg-secondary">
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="dashboardadmintransaksi.php"><i class="fas fa-money-bill-wave-alt mr-2"></i>Transaksi</a><hr class="bg-secondary">
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="dashboardadminnota.php"><i class="fas fa-cash-register mr-2"></i>Nota</a><hr class="bg-secondary">
            </li>
          </ul>
        </div>
        <div class="col-md-10 p-5 pt-2">
            <div class="row">
            <h3><i class="fas fa-cash-register mr-2"></i>Nota</h3>
            <div class="col" align="right"><a href="dashboardadminnota_reset.php" class="btn btn-danger"><h3><i class="fas fa-trash-restore"></i></h3></a></div>
            </div>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID Nota</th>
                    <th scope="col">ID Checkout</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Waktu</th>
                    <th scope="col">Studio</th>
                    <th scope="col">Jumlah Kursi</th>
                    <th scope="col">Total Harga</th>
                    <th scope="col">Kode Tiket</th>
                    <th scope="col">Foto Bukti</th>
                  </tr>
                  <?php $query = mysqli_query ($koneksi," select * from pembelian order by id_pembelian"); ?>
                    
                    <?php while ($data = mysqli_fetch_array($query)):?>

                      <tr>
                        <td><?php echo $data['id_pembelian']?></td>
                        <td><?php echo $data['id_checkout']?></td>
                        <td><?php echo $data['judul']?></td>
                        <td><?php echo $data['waktu']?></td>
                        <td><?php echo $data['studio']?></td>
                        <td><?php echo $data['jumlah_kursi']?></td>
                        <td><?php echo $data['total_harga']?></td>
                        <td><?php echo $data['kd_tiket']?></td>
                        <td><?php echo $data['foto_bukti']?></td>

                        
                        <td>
                            <a href="dashboardadminnota_hapus.php?id=<?php echo $data['id_pembelian']; ?>" onClick = "return confirm('Apakah anda ingin mengapus data ini?')" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                        </td>


                         
                    <?php endwhile; ?>
                      </tr>

                </thead>
              </table>

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