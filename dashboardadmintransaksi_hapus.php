<?php
include "koneksi.php";

$id	= $_GET['id'];


$query = mysqli_query($koneksi,"delete from checkout where id_checkout='$id'");

if ($query) {
echo "<script>alert('Data Berhasil Dihapus');
     location='dashboardadmintransaksi.php'</script>\n";
} else {
echo "<script>alert('Data Gagal Dihapus');
	 location='dashboardadmintransaksi.php'</script>\n";
}
?>