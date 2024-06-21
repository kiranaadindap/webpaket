<?php 
 
include 'koneksi.php';
$pesanan_id = $_POST['pesanan_id'];
$pelanggan_id = $_POST['pelanggan_id'];
$paket_id = $_POST['paket_id'];
$jumlah_paket = $_POST['jumlah_paket'];
$tanggal_pemesanan = $_POST['tanggal_pemesanan'];
$total_bayar = $_POST['total_bayar'];
 
mysqli_query($koneksi,"UPDATE pesanan SET pesanan_id='$pesanan_id', pelanggan_id='$pelanggan_id', paket_id='$paket_id', jumlah_paket='$jumlah_paket', tanggal_pemesanan='$tanggal_pemesanan', total_bayar='$total_bayar' WHERE  pesanan_id='$pesanan_id'");
 
header("location:index3.php?pesan=update");
 
?>