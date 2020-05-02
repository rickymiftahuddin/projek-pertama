<?php
session_start();
include 'koneksi.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>Login - NontonLah</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/floating-labels/">

    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link href="style-login.css" rel="stylesheet">
<link rel="stylesheet" href="fontawesome/css/all.min.css">
    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/4.4/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/4.4/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/4.4/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon.ico">
<meta name="msapplication-config" content="/docs/4.4/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="floating-labels.css" rel="stylesheet">
  </head>
  <body>
    <form method="post" class="form-signin">
  <div class="text-center mb-4">
    <img class="mb-4" src="/docs/4.4/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Login</h1>
  </div>

  <div class="form-label-group">
    <input type="text" name="inputNama" id="inputNama" class="form-control" placeholder="Nama Lengkap" required autofocus>
    <label for="inputNama">Nama Lengkap</label>
  </div>

  <div class="form-label-group">
    <input type="password" name="inputPassword" id="inputPassword" class="form-control" placeholder="Password" required>
    <label for="inputPassword">Password</label>
  </div>

  <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Sign in</button>
  <p class="mt-3"><a href="daftar.php">Belum Punya Akun?</a></p>
  <p class="mt-5 mb-3 text-muted text-center">&copy; NontonLah</p>
</form>
<?php

        if (isset($_POST["login"])) {
            $nama = $_POST['inputNama'];
            $password = $_POST['inputPassword'];

            $ambil = $koneksi->query("select * from tbl_user where nama = '$nama' and password = '$password'");
            $pecah = $ambil->fetch_assoc();
            $level = $pecah["level"];
            $ygcocok = $ambil->num_rows;

            if ($ygcocok == 1) {
              $_SESSION["tbl_user"] = $pecah;
              
                if ($level == 'admin') {
                  
                    echo "<script>alert('Login Sukses, Selamat Datang Admin');</script>";
                    echo "<script>location='dashboardadmin.php'</script>";
                }elseif ($level == 'user') {
                 
                    echo "<script>alert('Login Sukses, Selamat Datang');</script>";
                    echo "<script>location='dashboard.php'</script>";
                }else{
                    echo "<script>alert('Login Gagal');</script>";
                    echo "<script>location='login.php'</script>";
                }
            }else{
              echo "<script>alert('Login Gagal');</script>";
              echo "<script>location='login.php'</script>";
            }
          }
?>
</body>
</html>
