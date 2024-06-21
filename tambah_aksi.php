<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id_pelanggan = $_POST['id_pelanggan'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];

// menginput data ke database
mysqli_query($koneksi,"insert into pelanggan values('$id_pelanggan','$nama','alamat', 'no_hp')");
 
// mengalihkan halaman kembali ke index.php
header("location:index2.php");
 
?>