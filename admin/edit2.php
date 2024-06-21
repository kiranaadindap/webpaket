<!DOCTYPE html>
<html>
<head>
	
	<title>DATA JENIS PAKET</title>
</head>
<body>
 
	<Center><h2>EDIT DATA JENIS PAKET</h2></center>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<?php
	include 'koneksi.php';
	$id = $_GET['id_paket'];
	$data = mysqli_query($koneksi,"select * from paket WHERE id_paket='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="edit_aksi2.php">
			<table>
				<tr>			
					<td>id_paket</td>
					<td>
						<input type="hidden" name="id_paket" value="<?php echo $d['id_paket']; ?>">
						<input type="text" name="id_paket" value="<?php echo $d['id_paket']; ?>">
					</td>
				</tr>
				<tr>
					<td>jenis paket</td>
					<td><input type="text" name="jenis_paket" value="<?php echo $d['jenis_paket']; ?>"></td>
				</tr>

				<tr>
					<td>harga paket</td>
					<td><input type="text" name="harga_paket" value="<?php echo $d['harga_paket']; ?>"></td>
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