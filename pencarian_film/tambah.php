<?php
include 'koneksi.php';

if(isset($_POST['submit'])){
	mysqli_query($conn, "INSERT INTO film VALUES(
	'',
	'$_POST[judul]',
	'$_POST[tahunl]',
	'$_POST[genre]',
	'$_POST[rating]',
	'$_POST[sinopsis]'
	)");
	
	header("location:index.php");
	}
	?>
	
	<h2>Tambah Film</h2>
	
	<form method="POST">
	
	Judul:
	<input type="text" name="judul">
	
	<br><br>
	
	Tahun:
	<input type="number" name="tahun">
	
	<br><br>
	
	Genre:
	<input type="text" name="genre">
	
	<br><br>
	
	Rating:
	<input type="text" name="rating">
	
	<br><br>
	
	Sinopsis:
	<textarea name="sinopsis"></textarea>
	
	<br><br>
	
	<button type="submit" name="submit">Simpan</button>
	</form>
	
	
	
	
	
	