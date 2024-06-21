<?php 
 
include 'koneksi.php';
$id_pelanggan = $_POST['id_pelanggan'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];

 
mysqli_query($koneksi,"UPDATE pelanggan SET nama='$nama', alamat='$alamat', no_hp='$no_hp' WHERE  id_pelanggan='$id_pelanggan'");
 
header("location:index2.php?pesan=update");
 
?>