?>
<?php
include ('koneksi.php');

if (isset($_GET['hapus'])) {
    $id_pelanggan = $_GET['hapus'];

    $delete_query = "DELETE FROM pelanggan WHERE id_pelanggan = $id_pelanggan";
    $koneksi->query($delete_query);
    header("Location: index2.php");
}
?>