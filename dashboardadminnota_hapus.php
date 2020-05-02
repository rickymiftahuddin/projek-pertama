<?php
include "koneksi.php";

$id	= $_GET['id'];


$query = mysqli_query($koneksi,"delete from pembelian where id_pembelian='$id'");

if ($query) {
echo "<script>alert('Data Berhasil Dihapus');
     location='dashboardadminnota.php'</script>\n";
} else {
echo "<script>alert('Data Gagal Dihapus');
	 location='dashboardadminnota.php'</script>\n";
}
?>