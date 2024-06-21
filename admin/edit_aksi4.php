<?php 
 
include 'koneksi.php';
$IDPelanggan = $_POST['IDPelanggan'];
$nama = $_POST['nama'];
$no_hp = $_POST['no_hp'];
$alamat = $_POST['alamat'];
$jenis_paket = $_POST['jenis_paket'];
$jumlah_paket = $_POST['jumlah_paket'];
$tanggal_pemesanan = $_POST['tanggal_pemesanan'];
 
mysqli_query($koneksi,"UPDATE detail_pesanan SET nama='$nama', no_hp='$no_hp', alamat='$alamat', jenis_paket='$jenis_paket', jumlah_paket='$jumlah_paket', tanggal_pemesanan='$tanggal_pemesanan' WHERE  IDPelanggan='$IDPelanggan'");
 
header("location:index4.php?pesan=update");
 
?>