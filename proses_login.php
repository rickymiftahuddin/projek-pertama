<?php 
include 'koneksi.php';
 
$inputNama = $_POST['nama'];
$inputPassword = $_POST['password'];
 
$query = mysql_query("select * from admin where nama='$inputNama' and password='$inputPassword'");
$cek = mysql_num_rows($query);

if($cek>0){
    $data = mysqli_fetch_assoc($query);
    echo '<script>
                alert("Telah Berhasil");
                location.href = "cover.php";
            </script>';
}
?>