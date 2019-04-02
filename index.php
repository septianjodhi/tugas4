<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD Dengan PHP Dan MySQL - Menampilkan data dari database</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<CENTER>
	<div class="judul">		
		<h1>TUGAS 4 || REST</h1>
		<h2>C R U D | W E B S E R V I C E</h2>
		<h3></h3>
	</div>
	<br/>

	<?php 
	if(isset($_GET['pesan'])){
		$pesan = $_GET['pesan'];
		if($pesan == "input"){
			echo "Data berhasil di input.";
		}else if($pesan == "update"){
			echo "Data berhasil di update.";
		}else if($pesan == "hapus"){
			echo "Data berhasil di hapus.";
		}
	}
	?>
	<br/>
	<a class="tombol" href="tambahjson.php">+ Tambah Data Baru</a>

	<h3>Data user</h3>
	<table border="1" class="table">
		<tr>
			<th>No</th>
			<th>Nim</th>
			<th>Nama</th>
			<th>Prodi</th>
			<th>Opsi</th>		
		</tr>
		<?php 
		include "koneksi.php";
		$query_mysql = mysqli_query($kon,"SELECT * FROM mahasiswa")or die(mysqli_error());
		$nomor = 1;
		while($data = mysqli_fetch_array($query_mysql)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $data['nim']; ?></td>
			<td><?php echo $data['nama']; ?></td>
			<td><?php echo $data['prodi']; ?></td>
			<td>
				<a href="edit.php?nim=<?php echo $data['nim']; ?>">Edit</a> |
				<a href="hapus.php?nim=<?php echo $data['nim']; ?>">Hapus</a>					
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>