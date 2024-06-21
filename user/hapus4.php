<?php
include ('koneksi.php');

if (isset($_GET['IDPelanggan'])) {
    $IDPelanggan = $_GET['IDPelanggan'];

    $delete_query = "DELETE FROM detail_pesanan WHERE IDPelanggan= $IDPelanggan";
    $koneksi->query($delete_query);
    header("Location: index4.php");
}
?>