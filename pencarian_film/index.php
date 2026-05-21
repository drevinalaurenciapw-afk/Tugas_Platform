<form method="GET">
    <input type="text" name="keyword" placeholder="Cari film...">
    <button type="submit">Cari</button>
</form>

<?php
include 'koneksi.php';

$keyword = "";

if(isset($_GET['keyword'])){
    $keyword = $_GET['keyword'];
}

$query = mysqli_query($conn,
"SELECT * FROM film 
WHERE judul LIKE '%$keyword%'");
?>
