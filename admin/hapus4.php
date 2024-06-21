<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$IDPelanggan= $_GET['IDPelanggan'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"DELETE from detail_pesanan where IDPelanggan='$IDPelanggan'");
 
// mengalihkan halaman kembali ke index.php
header("location:index4.php");
 
?>