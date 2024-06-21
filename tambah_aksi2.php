<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id_paket = $_POST['id_paket'];
$jenis_paket = $_POST['jenis_paket'];
$harga_paket = $_POST['harga_paket'];

// menginput data ke database
mysqli_query($koneksi,"insert into paket values('$id_paket','$jenis_paket','harga_paket')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>
