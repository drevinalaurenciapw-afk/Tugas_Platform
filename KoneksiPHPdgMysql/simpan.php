<?php
include "koneksi.php";

$nama  = $_POST['nama'];
$email = $_POST['email'];
$isi   = $_POST['isi'];

$query = "INSERT INTO buku_tamu (nama, email, isi)
          VALUES ('$nama', '$email', '$isi')";

if (mysqli_query($conn, $query)) {
    echo "Data berhasil disimpan!<br>";
    echo "<a href='form.php'>Kembali</a>";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>