<?php
include "koneksi.php";

$query = mysqli_query($koneksi,"UPDATE kursi SET status ='ada'");

if ($query > 0) {
echo "<script>alert('Kursi berhasil direset');
		location='dashboardadminkursi.php?'</script>\n";
} else {
echo "<script>alert('Kursi gagal direset');
		location='dashboardadminkursi.php'</script>\n";
}
?>