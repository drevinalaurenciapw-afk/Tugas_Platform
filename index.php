<?php
include 'koneksi.php';

$data = false;

if(isset($_GET['cari']) || isset($_GET['genre'])){

    $cari = $_GET['cari'] ?? "";
    $genre = $_GET['genre'] ?? "";

    $query = "SELECT * FROM film WHERE 1=1";

    if($cari != ""){
        $query .= " AND judul LIKE '%$cari%'";
    }

    if($genre != ""){
        $query .= " AND genre='$genre'";
    }

    $data = mysqli_query($conn,$query);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Program Pencarian Film</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<h1>PROGRAM PENCARIAN FILM</h1>

<form method="GET">

    <input type="text"
           name="cari"
           placeholder="Cari film..."
           value="<?= $_GET['cari'] ?? '' ?>">

    <select name="genre">

        <option value="">Pilih Genre</option>

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

<?php if($data){ ?>

<table border="1" cellpadding="10">

<tr>
    <th>No</th>
    <th>Poster</th>
    <th>Judul</th>
    <th>Tahun</th>
    <th>Genre</th>
    <th>Rating</th>
    <th>Sinopsis</th>
</tr>

<?php
$no = 1;

while($film = mysqli_fetch_array($data)){
?>

<tr>

<td><?= $no++; ?></td>

<td>
    <img src="gambar/<?= $film['gambar']; ?>"
         width="100"
         height="140">
</td>

<td><?= $film['judul']; ?></td>
<td><?= $film['tahun_rilis']; ?></td>
<td><?= $film['genre']; ?></td>
<td><?= $film['rating']; ?></td>
<td><?= $film['sinopsis']; ?></td>

</tr>

<?php } ?>

</table>

<?php } ?>

</body>
</html>