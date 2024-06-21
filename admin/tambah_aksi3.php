<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form

$pesanan_id = $_POST['pesanan_id'];
$pelanggan_id = $_POST['pelanggan_id'];
$paket_id = $_POST['paket_id'];
$jumlah_paket = $_POST['jumlah_paket'];
$tanggal_pemesanan= $_POST['tanggal_pemesanan'];
$total_bayar = $_POST['total_bayar'];

 
// menginput data ke database
mysqli_query($koneksi,"INSERT into pesanan values('$pesanan_id','$pelanggan_id','$paket_id','$jumlah_paket', '$tanggal_pemesanan', '$total_bayar')");
 
// mengalihkan halaman kembali ke index.php                       
header("location:index3.php");
 
?>