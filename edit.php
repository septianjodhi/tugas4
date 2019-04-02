<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD Dengan PHP Dan MySQL - Menampilkan data dari database</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
		<h1>TUGAS 4 || REST</h1>
		<h2>C R U D | W E B S E R V I C E</h2>
	
	</div>
	
	<br/>
	
	<a href="index.php">Lihat Semua Data</a>

	<br/>
	<h3>Edit data</h3>

	<?php 
	include "koneksi.php";
	$nim = $_GET['nim'];
	$query_mysqli = mysqli_query($kon,"SELECT * FROM mahasiswa WHERE nim='$nim'")or die(mysqli_error());
	$nomor = 1;
	while($data = mysqli_fetch_array($query_mysqli)){
	?>
	<form action="update.php" method="post">		
		<table>
			<tr>
				<td>nim</td>
				<td>
					<input type="text" name="nim" value="<?php echo $data['nim'] ?>">
				</td>					
			</tr>	
			<tr>
				<td>nama</td>
				<td><input type="text" name="nama" value="<?php echo $data['nama'] ?>"></td>					
			</tr>	
			<tr>
				<td>prodi</td>
				<td><input type="text" name="prodi" value="<?php echo $data['prodi'] ?>"></td>					
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
	<?php } ?>
</body>
</html>