<?php
include "koneksi.php";

$query = mysqli_query($conn, "SELECT * FROM buku_tamu");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Buku Tamu</title>
</head>
<body>

<h2>Data Buku Tamu</h2>

<table border="1" cellpadding="10">
<tr>
    <th>No</th>
    <th>Nama</th>
    <th>Email</th>
    <th>Isi</th>
</tr>

<?php
$no = 1;
while ($data = mysqli_fetch_assoc($query)) {
?>
<tr>
    <td><?php echo $no++; ?></td>
    <td><?php echo $data['nama']; ?></td>
    <td><?php echo $data['email']; ?></td>
    <td><?php echo $data['isi']; ?></td>
</tr>
<?php } ?>

</table>

<br>
<a href="form.php">Kembali ke Form</a>

</body>
</html>