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
    <title>DATA JENIS PAKET</title>
</head>
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
<body>
    
<li><a href="index.php" class= "btn btn-secondary">kembali</a></li>
    <?php
include 'koneksi.php';

if (isset($_POST['id_paket']) && isset($_POST['jenis_paket']) && isset($_POST['harga_paket'])) {
    $id_paket = $_POST['id_paket'];
    $jenis_paket = $_POST['jenis_paket'];
	$harga_paket = $_POST['harga_paket'];

    $query = "INSERT INTO paket (id_paket,jenis_paket,harga_paket) VALUES ('$id_paket', '$jenis_paket', '$harga_paket')";

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
                <h2>DATA JENIS PAKET</h2>
                <form action="tambah2.php" method="post">
                    <label for="id_paket">Id paket:</label>
                    <input type="text" id="id_paket" name="id_paket"><br>
                    <label for="jenis_paket">jenis_paket:</label>
                    <input type="text" id="jenis_paket" name="jenis_paket"><br>
					<label for="harga_paket">harga paket</label>
                    <input type="text" id="harga_paket" name="harga_paket"><br>
                    <input type="submit" value="Tambah">
                </form>
            </div>
        </div>
    </div>
</body>
</html>