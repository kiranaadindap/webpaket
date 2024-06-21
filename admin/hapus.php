<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$id_pelanggan= $_GET['id_pelanggan'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"DELETE from pelanggan where id_pelanggan='$id_pelanggan'");
 
// mengalihkan halaman kembali ke index.php
header("location:index2.php");
 
?>