<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <!-- font style -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200..1000;1,200..1000&display=swap"
        rel="stylesheet">
    <!-- style -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form">
        <h1>Form Tambah Data Mahasiswa</h1>
        <form action="tambah_data.php" method="post">
            <label for="nim"></label>Nim<br>
            <input type="textfield" name="nim" required placeholder="Nim" /><br>
            <label for="nama"></label>Nama<br>
            <input type="textfield" name="nama" required placeholder="Nama"><br>
            <label for="alamat"></label>Alamat<br>
            <input type="textfield" name="alamat" required placeholder="Alamat" /><br>
            <label for="email"></label>Telepon<br>
            <input type="textfield" name="telp" required placeholder="Telepon" /><br>
            <div class="btn">
            <button type="submit" name="kirim" value="Kirim">Kirim</button>
            </div>
        </form>
    </div>
</body>
</html>