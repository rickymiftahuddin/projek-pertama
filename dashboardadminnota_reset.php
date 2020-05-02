<?php
include "koneksi.php";

$query = mysqli_query($koneksi,"DELETE FROM pembelian");

if ($query > 0) {
echo "<script>alert('Daftar Nota berhasil direset');
		location='dashboardadmintransaksi.php?'</script>\n";
} else {
echo "<script>alert('Daftar Nota gagal direset');
		location='dashboardadmintransaksi.php?'</script>\n";
}
?>