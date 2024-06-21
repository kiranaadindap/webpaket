<?php 
 
include 'koneksi.php';
$id_paket = $_POST['id_paket'];
$jenis_paket = $_POST['jenis_paket'];
$harga_paket = $_POST['harga_paket'];

 
mysqli_query($koneksi,"UPDATE paket SET jenis_paket='$jenis_paket', harga_paket='$harga_paket' WHERE  id_paket='$id_paket'");
 
header("location:index.php?pesan=update");
 
?>