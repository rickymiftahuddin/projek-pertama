
<?php
include 'koneksi.php';
session_start();
$id_booking = $_GET["id"];



$ambil = $koneksi->query("SELECT * from booking where id_booking = '$id_booking'");
$idkursi = $ambil->fetch_assoc();
$idkursiygdiambil = $idkursi["id_kursi"];

$koneksi->query("UPDATE kursi set status = 'ada' where id_kursi= '$idkursiygdiambil'");

$koneksi->query("DELETE from booking where id_booking = '$id_booking'");
$idfilm = $_SESSION["film"]["kd_film"];

echo "<script>alert('gak jadi booking')</script>";
echo "<script>location='detail$idfilm-10.php?id=$idfilm';</script>";
?>
<pre>
	<?php print_r($idkursi); ?>
</pre>