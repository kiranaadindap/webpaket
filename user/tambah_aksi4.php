<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$IDPelanggan = $_POST['IDPelanggan'];
$nama = $_POST['nama'];
$no_hp = $_POST['no_hp'];
$alamat = $_POST['alamat'];
$jenis_paket = $_POST['jenis_paket'];
$jumlah_paket = $_POST['jumlah_paket'];
$tanggal_pemesanan = $_POST['tanggal_pemesanan'];
// menginput data ke database
mysqli_query($koneksi,"insert into detail_pesanan values('$IDPelanggan','$nama','$no_hp', '$alamat', '$jenis_paket', '$jumlah_paket', '$tanggal_pemesanan')");
 
// mengalihkan halaman kembali ke index.php
header("location:index4.php");
 
?>