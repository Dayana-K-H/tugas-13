<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
    <!-- font style -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200..1000;1,200..1000&display=swap"
        rel="stylesheet">
    <!-- style -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    // Koneksi ke database
    $conn = mysqli_connect('localhost', 'root', '');

    if (!$conn) {
        echo "Koneksi Gagal";
    } else {
        mysqli_select_db($conn, "db_kampus");
    }
    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['update'])) {
        $nim = $_GET['update'];
        // Query untuk mendapatkan data berdasarkan nim
        $sql = "SELECT * FROM mahasiswa WHERE nim = '$nim'";
        $result = $conn->query($sql);

        if ($result) {
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc(); ?>
                <h1>Edit Data Mahasiswa</h1>
                <div class="form">
                    <form method='post' action='update_data.php'>
                        <input type='hidden' name='id_barang' value='<?php echo $nim ?>'>
                        <label for="nim"></label>Nim<br>
                        <input type='text' name='nim' value='<?php echo $row["nim"] ?>' readonly><br>
                        <label for="nama"></label>Nama<br>
                        <input type='text' name='nama' value='<?php echo $row["nama"] ?>'><br>
                        <label for="alamat"></label>Alamat<br>
                        <input type='text' name='alamat' value='<?php echo $row["alamat"] ?>'><br>
                        <label for="telp"></label>Telepon<br>
                        <input type='text' name='telp' value='<?php echo $row["telp"] ?>'><br>
                        <div class="btn">
                            <button type='submit' value='Update'>Update</button>
                        </div>
                    </form>
                </div>
                <?php
            } else {
                echo "Data barang tidak ditemukan.";
            }
        } else {
            echo "Error dalam menjalankan query: " . $conn->error;
        }
        $result->free(); // Bebaskan hasil setelah digunakan
    } else {
        echo "Parameter nim tidak tersedia dalam permintaan GET.";
    }
    ?>
</body>
</html>