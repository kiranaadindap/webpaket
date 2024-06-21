<!DOCTYPE html>
<html>
<head>
	<title>WEB PAKET LEBARAN</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<?php
  session_start();

  if (!isset($_SESSION['Username'])) {
    header("Location: login2.php");
    exit();
  }

  $Username = $_SESSION['Username'];
?>
<nav class="navbar navbar-expand-lg" style ="background-color :#94A9B2;color:#FFF;"">
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
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="logout2.php">LOGOUT</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
 
	<center><h2>JENIS DATA PAKET LEBARAN</h2></center>
	<br/>
	<a href="tambah4.php" class= "btn btn-secondary">+ PESAN</a>
	<br/>
	<br/>
	<table border="4"class="table bordered">
		<tr>
		<th style= "background-color:#94A9B2; color:#fff;">NO</th>
		<th style= "background-color:#94A9B2; color:#fff;">ID PAKET</th>
		<th style= "background-color:#94A9B2; color:#fff;">JENIS PAKET</th>
		<th style= "background-color:#94A9B2; color:#fff;">HARGA PAKET</th>
		<th style= "background-color:#94A9B2; color:#fff;">OPSI</th>
		</tr>
			 
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from paket");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['id_paket']; ?></td>
				<td><?php echo $d['jenis_paket']; ?></td>
				<td><?php echo $d['harga_paket']; ?></td>
</tr>
<?php
		}
		?>
	</table>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>