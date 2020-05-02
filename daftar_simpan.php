<?php
    $nik            = $_POST['inputNIK'];
    $nama           = $_POST['inputNama'];
    $password       = $_POST['inputPassword'];
    $tanggallahir   = $_POST['inputTanggallahir'];
    $kelamin        = $_POST['inputKelamin'];

    include "koneksi.php";
    mysql_query("insert into tbl_user(nik, nama, password, tanggallahir, kelamin) values(
        '$nik'
        '$nama'
        '$password'
        '$tanggallahir'
        '$kelamin')") or die ("Menyimpan data Gagal <meta http-equiv=refresh content=3;url=daftar.php>");
    echo "Menyimpan dara Berhasil <meta http-equiv=refresh content=3;url=daftar.php>";
?>