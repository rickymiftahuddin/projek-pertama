<?php
include "koneksi.php";

$id	= $_GET['id'];


$query = mysqli_query($koneksi,"delete from tbl_user where nik='$id'");

if ($query) {
echo "<script>alert('Data Berhasil Dihapus');
     location='dashboardadminuser.php'</script>\n";
} else {
echo "<script>alert('Data Gagal Dihapus');
	  location='dashboardadminuser.php'</script>\n";
}
?>