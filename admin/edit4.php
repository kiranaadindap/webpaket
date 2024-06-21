<!DOCTYPE html>
<html>
<head>
	
	<title>DATA DETAIL PESANAN</title>
</head>
<body>
 
	<Center><h2>EDIT DETAIL PESANAN</h2></center>
	<br/>
	<a href="index4.php">KEMBALI</a>
	<br/>
	<br/>
	<?php
	include 'koneksi.php';
	$id = $_GET['IDPelanggan'];
	$data = mysqli_query($koneksi,"select * from detail_pesanan WHERE IDPelanggan='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="edit_aksi4.php">
			<table>
				<tr>			
					<td>ID PELANGGAN</td>
					<td>
						<input type="hidden" name="IDPelanggan" value="<?php echo $d['IDPelanggan']; ?>">
						<input type="text" name="IDPelanggan" value="<?php echo $d['IDPelanggan']; ?>">
					</td>
				</tr>
				<tr>
					<td>NAMA</td>
					<td><input type="text" name="nama" value="<?php echo $d['nama']; ?>"></td>
				</tr>

				<tr>
					<td>NO HP</td>
					<td><input type="text" name="no_hp" value="<?php echo $d['no_hp']; ?>"></td>
				</tr>
                <tr>
					<td>ALAMAT</td>
					<td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>"></td>
				</tr>
				<tr>
					<td>JENIS PAKET/td>
					<td><input type="text" name="jenis_paket" value="<?php echo $d['jenis_paket']; ?>"></td>
				</tr>
				<tr>
					<td>JUMLAH PAKET</td>
					<td><input type="text" name="jumlah_paket" value="<?php echo $d['jumlah_paket']; ?>"></td>
				</tr>
                <tr>
					<td>TANGGAL PEMESANAN</td>
					<td><input type="text" name="tanggal_pemesanan" value="<?php echo $d['tanggal_pemesanan']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>