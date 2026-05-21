<?php
include 'koneksi.php';

$cari = "";

if(isset($_GET['cari'])){
    $cari = $_GET['cari'];
}

$genre = "";

if(isset($_GET['genre'])){
    $genre = $_GET['genre'];
}

$query = "SELECT * FROM film WHERE judul LIKE '%$cari%'";

if($genre != ""){
    $query .= " AND genre='$genre'";
}

$data = mysqli_query($conn,$query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Pencarian Film</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<h1>PROGRAM PENCARIAN FILM</h1>

<form method="GET">

    <input type="text" name="cari" placeholder="Cari film...">

    <select name="genre">
        <option value="">Semua Genre</option>
        <option value="Action">Action</option>
        <option value="Romance">Romance</option>
        <option value="Horor">Horor</option>
        <option value="Drama">Drama</option>
        <option value="Comedy">Comedy</option>
        <option value="Fantasi">Fantasi</option>
        <option value="Animation">Animation</option>
    </select>

    <button type="submit">Cari</button>

</form>

<br>

<a href="tambah.php">Tambah Film</a>

<table border="1" cellpadding="10">

<tr>
    <th>No</th>
    <th>Judul</th>
    <th>Tahun</th>
    <th>Genre</th>
    <th>Rating</th>
    <th>Sinopsis</th>
    <th>Aksi</th>
</tr>

<?php
$no = 1;

while($film = mysqli_fetch_array($data)){
?>

<tr>

<td><?= $no++; ?></td>
<td><?= $film['judul']; ?></td>
<td><?= $film['tahun_rilis']; ?></td>
<td><?= $film['genre']; ?></td>
<td><?= $film['rating']; ?></td>
<td><?= $film['sinopsis']; ?></td>

<td>
    <a href="edit.php?id=<?= $film['id']; ?>">Edit</a>
    |
    <a href="hapus.php?id=<?= $film['id']; ?>">Hapus</a>
</td>

</tr>

<?php } ?>

</table>

</body>
</html>