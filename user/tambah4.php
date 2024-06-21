<!DOCTYPE html>
<html lang="en">
<head>
    
<style>
        /* Styling untuk form */
        .form-container {
            width: 300px;
            margin: 0 auto;
            padding: 70px;
            border: 1px solid #ccc;
            border-radius: 5px;
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
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        .form-container input[type="submit"]:hover {
            background-color: #45a049;
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
    <title>DATA DETAIL PESANAN</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg" style ="background-color :#94A9B2;color:#FFF;">
  <div class="container-fluid">
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">PAKET</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index4.php">DETAIL PESANAN</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<body>
    
<li><a href="index.php" class= "btn btn-secondary">kembali</a></li>
    <?php
include 'koneksi.php';

if (isset($_POST['IDPelanggan']) && isset($_POST['nama']) && isset($_POST['no_hp']) && isset($_POST['alamat']) && isset($_POST['jenis_paket']) && isset($_POST['jumlah_paket']) && isset($_POST['tanggal_pemesanan'])) {
    $IDPelanggan = $_POST['IDPelanggan'];
$nama = $_POST['nama'];
$no_hp = $_POST['no_hp'];
$alamat = $_POST['alamat'];
$jenis_paket = $_POST['jenis_paket'];
$jumlah_paket = $_POST['jumlah_paket'];
$tanggal_pemesanan = $_POST['tanggal_pemesanan'];

    $query = "INSERT INTO detail_pesanan (IDPelanggan,nama,no_hp,alamat,jenis_paket,jumlah_paket,tanggal_pemesanan) VALUES ('$IDPelanggan', '$nama', '$no_hp', '$alamat', '$jenis_paket', '$jumlah_paket', '$tanggal_pemesanan')";

    if (mysqli_query($koneksi, $query)) {
        echo "data berhasil ditambahkan.";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
}

mysqli_close($koneksi);
?>
<div class="right">
            <div class="form-container">
                <h2>MASUKAN DETAIL PESANAN</h2>
                <form action="tambah_aksi4.php" method="post">
                    <label for="IDPelanggan">ID PELANGGAN:</label>
                    <input type="text" id="IDPelanggan" name="IDPelanggan"><br>
                    <label for="nama">NAMA:</label>
                    <input type="text" id="nama" name="nama"><br>
					<label for="no_hp">NO HP</label>
                    <input type="text" id="no_hp" name="no_hp"><br>
                    <label for="alamat">ALAMAT:</label>
                    <input type="text" id="alamat" name="alamat"><br>
                    <label for="jenis_paket">JENIS PAKET:</label>
                    <td><select name="jenis_paket">
				

  				<option value="">-----</option>
 			<?php
  				include 'koneksi.php';
  				$query = mysqli_query($koneksi, "SELECT * FROM paket") or die (mysqli_error($koneksi));
  
  				while($data = mysqli_fetch_array($query)){
    			echo "<option value=$data[jenis_paket]>$data[jenis_paket]</option>";
  				}                          
  				?>
 </select></td>
					<label for="jumlah_paket">JUMLAH PAKET</label>
                    <input type="text" id="jumlah_paket" name="jumlah_paket"><br>
                    <label for="tanggal_pemesanan">TANGGAL PEMESANAN</label>
                    <input type="date" id="tanggal_pemesanan" name="tanggal_pemesanan"><br>
                    <input type="submit" value="Tambah">
                </form>
            </div>
        </div>
    </div>
</body>
</html>