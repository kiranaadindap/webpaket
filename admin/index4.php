<!DOCTYPE html>
<html>
<head>
	<title>WEB PAKET LEBARAN</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<?php
  session_start();

  if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
  }

  $username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>WEB PAKET LEBARAN</title>
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
          <a class="nav-link" href="index2.php">PELANGGAN</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="index3.php">PESANAN</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="index4.php">DETAIL PESANAN</a>
        </li>
		<div>
<form class="d-flex" role="search">

<!-- Button -->
    <input class="form-control me-2" type="search" name="cari" placeholder="Cari..." aria-label="Search" value="<?php echo isset($_GET['cari']) ? $_GET['cari'] : ''; ?>">
    <button class="btn btn-outline-success" class="spinner-border spinner-border-sm" type="submit">Cari</button>

    <?php if(isset($_GET['cari'])): ?>
      <a href="index4.php" class="btn btn-danger ml-2">X</a>
    <?php endif; ?>
  </form>
</div>
    </div>
  </div>
      </ul>
    </div>
  </div>
</nav>
 
	<center><h2>DETAIL PESANAN</h2></center>
	<br/>
	<a href="tambah4.php" class= "btn btn-secondary">+ TAMBAH</a>
	<br/>
	<br/>
 
		<form method="get">
			<label>PILIH TANGGAL</label>
			<input type="date" name="tanggal_pemesanan">
			<input type="submit" value="FILTER">
		</form>
 
	<table border="4"class="table bordered">
		<tr>
		<th style= "background-color:#94A9B2; color:#fff;">NO</th>
        <th style= "background-color:#94A9B2; color:#fff;">ID PELANGGAN</th>
		<th style= "background-color:#94A9B2; color:#fff;">NAMA</th>
		<th style= "background-color:#94A9B2; color:#fff;">NO HP</th>
		<th style= "background-color:#94A9B2; color:#fff;">ALAMAT</th>
		<th style= "background-color:#94A9B2; color:#fff;">JENIS PAKET</th>
        <th style= "background-color:#94A9B2; color:#fff;">JUMLAH PAKET</th>
		<th style= "background-color:#94A9B2; color:#fff;">TANGGAL PEMESANAN</th>
        <th style= "background-color:#94A9B2; color:#fff;">OPSI</th>
		</tr>
		<?php
		include 'koneksi.php'; 
		?>
		<?php
			$no = 1;
 
			if(isset($_GET['tanggal_pemesanan'])){
				$tgl = $_GET['tanggal_pemesanan'];
				$sql = mysqli_query($koneksi,"select * from detail_pesanan where tanggal_pemesanan='$tgl'");
			}else{
				$sql = mysqli_query($koneksi,"select * from detail_pesanan ORDER BY nama ASC");
			}
			while($data = mysqli_fetch_array($sql)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $data['IDPelanggan']; ?></td>
				<td><?php echo $data['nama']; ?></td>
				<td><?php echo $data['no_hp']; ?></td>
                <td><?php echo $data['alamat']; ?></td>
				<td><?php echo $data['jenis_paket']; ?></td>
				<td><?php echo $data['jumlah_paket']; ?></td>
                <td><?php echo $data['tanggal_pemesanan']; ?></td>
                
				<td>
					<a href="edit4.php?IDPelanggan=<?php echo $d['IDPelanggan']; ?>">EDIT</a>
					<a href="hapus4.php?IDPelanggan=<?php echo $d['IDPelanggan']; ?>" onclick="return confirm('Yakin akan menghapus data ini?')">HAPUS</a>
				</td>
</tr>
<?php
		}
		?>
	</table>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>