<?php 
 
include 'koneksi.php';
$id_pelanggan = $_POST['id_pelanggan'];
$nama_pelanggan = $_POST['nama_pelanggan'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
 
mysqli_query($koneksi,"UPDATE pelanggan SET nama_pelanggan='$nama_pelanggan', alamat='$alamat', no_hp='$no_hp', jenis_paket= '$jenis_paket' WHERE  id_pelanggan='$id_pelanggan'");
 
header("location:index2.php?pesan=update");
 
?>