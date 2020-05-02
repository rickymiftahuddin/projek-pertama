<?php
include "koneksi.php";

$nama   	= $_POST['nama'];
$pass       = $_POST['password'];
$id        = $_GET['id'];

$query = mysqli_query($koneksi,"UPDATE tbl_user SET nama ='$nama', password = '$pass' where nik = '$id'");

if ($query > 0) {
echo "<script>alert('Data Berhasil Disimpan');
		location='dashboardadminuser.php?'</script>\n";
} else {
echo "<script>alert('Data Gagal Disimpan');
		location='dashboardadminuser_edit.php'</script>\n";
}
?>