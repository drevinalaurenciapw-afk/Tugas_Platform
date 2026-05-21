<!DOCTYPE html>
<html>
<head>
    <title>Buku Tamu</title>
    <style>
        body {
            font-family: Arial;
        }

        .container {
            width: 400px;
            margin: 100px auto; 
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 10px;
        }

        h2 {
            text-align: center;
        }

        input, textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
        }

        input[type="submit"] {
            margin-top: 10px;
            background-color: #ff80bf;
            color: white;
            border: none;
            cursor: pointer;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Form Buku Tamu</h2>

    <form method="POST" action="simpan.php">
        Nama:<br>
        <input type="text" name="nama" required><br><br>

        Email:<br>
        <input type="email" name="email" required><br><br>

        Isi Pesan:<br>
        <textarea name="isi" required></textarea><br><br>

        <input type="submit" value="Kirim">
    </form>

    <a href="lihat.php">Lihat Data Buku Tamu</a>
</div>

</body>
</html>