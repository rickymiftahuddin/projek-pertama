<?php
session_start();
include 'koneksi.php';

$id_kursi = $_GET['id'];

$id_film = $_SESSION["film"];


$ambilin = $koneksi->query("SELECT * from kursi where id_kursi = '$id_kursi'");
$kursi = $ambilin->fetch_assoc();

 	$namauser = $_SESSION["tbl_user"]["nama"];
    $nik = $_SESSION["tbl_user"]["nik"];
    $judul = $id_film["judul"];
    $kursiygdiboking = $kursi["nama"] ;
    $harga = $id_film["harga"];
    $idfilm = $id_film["kd_film"];
    $idkursi = $kursi["id_kursi"];


    $koneksi->query("INSERT into booking (nama,nik,judul,kursi,id_kursi,harga) values 
        ('$namauser','$nik','$judul','$kursiygdiboking','$idkursi','$harga')");

    $koneksi->query("UPDATE kursi set status = 'book' where id_kursi = '$id_kursi'");

echo "<script>alert('Kursi Telah Di Booking');</script>";
echo "<script>location='detail$idfilm-10.php?id=$idfilm';</script>";

$_SESSION["kursi"] = $kursi;
  ?>
<pre>
	<?php print_r($_SESSION); ?>
</pre>