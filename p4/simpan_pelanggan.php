<?php
include 'koneksi.php';

$nama       = $_POST['nama_pelanggan'];
$email      = $_POST['email'];
$password   = $_POST['password'];
$no_telp    = $_POST['no_telp'];
$alamat     = $_POST['alamat'];

$query = "INSERT INTO pelanggan (nama_pelanggan, email, password, no_telp, alamat) 
VALUES ('$nama', '$email', '$password', '$no_telp', '$alamat')";

$hasil = mysqli_query($conn, $query);

if($hasil){
    echo "Data pelanggan berhasil disimpan<br>";
    echo "<a href='tampil_pelanggan.php'>Lihat Data</a>";
}else{
    echo "Gagal menyimpan data";
}

?>
