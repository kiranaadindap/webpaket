<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$pesanan_id= $_GET['pesanan_id'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"DELETE from pesanan where pesanan_id='$pesanan_id'");
 
// mengalihkan halaman kembali ke index.php
header("location:index3.php");
 
?>