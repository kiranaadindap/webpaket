?>
<?php
include ('koneksi.php');

if (isset($_GET['hapus'])) {
    $id_paket = $_GET['hapus'];

    $delete_query = "DELETE FROM paket WHERE id_paket = $id_paket";
    $koneksi->query($delete_query);
    header("Location: index.php");
}
?>