<!DOCTYPE html>
<html lang="en">
<head>
    
<style>
        /* Styling untuk form */
        .form-container {
            width: 500px;
            margin: 0 auto;
            padding: 60px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #f9f9f9;
        }

        .form-container label {
            display: block;
            margin-bottom: 5px;
        }

        .form-container input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .form-container input[type="submit"] {
            background-color: #A0522D;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        .form-container input[type="submit"]:hover {
            background-color: #A0522D;
        }

        /* Styling untuk tata letak */
        .container {
            display: flex;
            justify-content: space-between;
        }

        .container .left {
            width: 70%; /* Lebar tabel */
        }

        .container .right {
            width: 30%; /* Lebar formulir */
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA PESANAN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
<nav class="navbar navbar-expand-lg" style ="background-color :#94A9B2;color:#FFF;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">PAKET</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index2.php">PELANGGAN</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index3.php">PESANAN</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</head>
<body>
<li><a href="index3.php" class= "btn btn-secondary">kembali</a></li>
    <?php
include 'koneksi.php';

if (isset($_POST['pesanan_id']) && isset($_POST['pelanggan_id']) && isset($_POST['paket_id']) && isset($_POST['jumlah_paket'])  && isset($_POST['tanggal_pemesanan'])  && isset($_POST['total_bayar'])) {
    $pesanan_id = $_POST['pesanan_id'];
    $pelanggan_id = $_POST['pelanggan_id'];
    $paket_id = $_POST['paket_id'];
	$jumlah_paket = $_POST['jumlah_paket'];
	$tanggal_pemesanan = $_POST['tanggal_pemesanan'];
    $total_bayar = $_POST['total_bayar'];

    $query = "INSERT INTO pesanan (pesanan_id,pelanggan_id,paket_id,jumlah_paket,tanggal_pemesanan,total_bayar) VALUES ('$pesanan_id', '$pelanggan_id', '$paket_id', '$jumlah_paket',  '$tanggal_pemesanan', '$total_bayar')";

    if (mysqli_query($koneksi, $query)) {
        echo "Data Berhasil Ditambahkan";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
}


mysqli_close($koneksi);
?>
<div class="right">
            <div class="form-container">
                <h2>DATA PESANAN</h2>
                <form action="tambah_aksi3.php" method="post">
                    <label for="pesanan_id">PESANAN ID:</label>
                    <input type="text" id="pesanan_id" name="pesanan_id"><br>
                    <label for="pelanggan_id">PELANGGAN ID:</label>
                    <input type="text" id="pelanggan_id" name="pelanggan_id"><br>
                    <label for="paket_id">PAKET ID:</label>
                    <input type="text" id="paket_id" name="paket_id"><br>
                    <label for="jumlah_paket">JUMLAH PAKET:</label>
                    <input type="text" id="jumlah_paket" name="jumlah_paket"><br>
                    <label for="tanggal_pemesanan">TANGGAL PEMESANAN:</label>
                    <input type="date" id="tanggal_pemesanan" name="tanggal_pemesanan"><br>
                    <label for="total_bayar">TOTAL BAYAR:</label>
                    <input type="text" id="total_bayar" name="total_bayar"><br>
                    <input type="submit" value="Tambah">
                </form>
            </div>
        </div>
    </div>
</body>
</html>