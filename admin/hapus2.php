<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$id_paket= $_GET['id_paket'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"DELETE from paket where id_paket='$id_paket'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>