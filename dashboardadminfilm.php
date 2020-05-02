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

            <h3><i class="fas fa-film mr-2"></i>Film</h3>

            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Kode Film</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Poster</th>
                    <th scope="col">Sampul</th>
                    <th scope="col">Genre</th>            
                    <th scope="col">Durasi</th>
                    <th scope="col">Sutradara</th>
                    <th scope="col">Sinopsis</th>
                    <th scope="col">Link</th>
                    <th scope="col">Harga</th>
                  </tr>
                  <?php $query = mysqli_query ($koneksi," select * from tbl_film order by kd_film"); ?>
                    
                    <?php while ($data = mysqli_fetch_array($query)):?>

                      <tr>
                        <td><?php echo $data['kd_film']?></td>
                        <td><?php echo $data['judul']?></td>
                        <td><?php echo $data['poster']?></td>
                        <td><?php echo $data['sampul']?></td>
                        <td><?php echo $data['genre']?></td>
                        <td><?php echo $data['durasi']?></td>
                        <td><?php echo $data['sutradara']?></td>
                        <td><?php echo $data['sinopsis']?></td>
                        <td><?php echo $data['link']?></td>
                        <td><?php echo $data['harga']?></td>
                        
                        <!-- <td>
                            <a href="dashboardadminfilm_edit.php?id=<?php echo $data['kd_film']; ?>" class="btn btn-info"><i class="fas fa-edit"></i></a>
                        </td> -->


                         
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