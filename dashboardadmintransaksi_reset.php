<?php
include "koneksi.php";

$query = mysqli_query($koneksi,"DELETE FROM checkout");

if ($query > 0) {
echo "<script>alert('Daftar Transaksi berhasil direset');
		location='dashboardadmintransaksi.php?'</script>\n";
} else {
echo "<script>alert('Daftar Transaksi gagal direset');
		location='dashboardadmintransaksi.php?'</script>\n";
}
?>