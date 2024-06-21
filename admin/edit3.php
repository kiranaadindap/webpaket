<!DOCTYPE html>
<html>
<head>
	
	<title>DATA PESANAN</title>
</head>
<body>
 
	<Center><h2>EDIT DATA PESANAN</h2></center>
	<br/>
	<a href="index3.php">KEMBALI</a>
	<br/>
	<br/>
	<?php
	include 'koneksi.php';
	$id = $_GET['pesanan_id'];
	$data = mysqli_query($koneksi,"select * from pesanan WHERE pesanan_id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="edit_aksi3.php">
			<table>
				<tr>			
					<td>pesanan_id</td>
					<td>
						<input type="hidden" name="pesanan_id" value="<?php echo $d['pesanan_id']; ?>">
						<input type="text" name="pesanan_id" value="<?php echo $d['pesanan_id']; ?>">
					</td>
				</tr>
				<tr>
					<td>pelanggan_id</td>
					<td><input type="text" name="pelanggan_id" value="<?php echo $d['pelanggan_id']; ?>"></td>
				</tr>

				<tr>
					<td>paket_id</td>
					<td><input type="text" name="paket_id" value="<?php echo $d['paket_id']; ?>"></td>
				</tr>
                <tr>
					<td>jumlah_paket</td>
					<td><input type="text" name="jumlah_paket" value="<?php echo $d['jumlah_paket']; ?>"></td>
				</tr>
				<tr>
					<td>tanggal_pemesanan</td>
					<td><input type="text" name="tanggal_pemesanan" value="<?php echo $d['tanggal_pemesanan']; ?>"></td>
				</tr>
				<tr>
					<td>total_bayar</td>
					<td><input type="text" name="total_bayar" value="<?php echo $d['total_bayar']; ?>"></td>
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