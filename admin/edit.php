<!DOCTYPE html>
<html>
<head>
	
	<title>DATA PELANGGAN</title>
</head>
<body>
 
	<Center><h2>EDIT DATA PELANGGAN </h2></center>
	<br/>
	<a href="index2.php">KEMBALI</a>
	<br/>
	<br/>
	<?php
	include 'koneksi.php';
	$id = $_GET['id_pelanggan'];
	$data = mysqli_query($koneksi,"select * from pelanggan WHERE id_pelanggan='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="edit_aksi.php">
			<table>
				<tr>			
					<td>id_pelanggan</td>
					<td>
						<input type="hidden" name="id_pelanggan" value="<?php echo $d['id_pelanggan']; ?>">
						<input type="text" name="id_pelanggan" value="<?php echo $d['id_pelanggan']; ?>">
					</td>
				</tr>
				<tr>
					<td>nama_pelanggan</td>
					<td><input type="text" name="nama" value="<?php echo $d['nama']; ?>"></td>
				</tr>

				<tr>
					<td>alamat</td>
					<td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>"></td>
				</tr>
                <tr>
					<td>no_hp</td>
					<td><input type="text" name="no_hp" value="<?php echo $d['no_hp']; ?>"></td>
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