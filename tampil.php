<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
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
    $cnn = mysqli_connect('localhost', 'root', '', 'db_kampus');
    if (!$cnn) {
        echo "Koneksi Gagal <br/>";
    }
    mysqli_select_db($cnn, "db_kampus");
    $sql = "SELECT nim, nama, alamat, telp FROM mahasiswa;";
    $tampil = mysqli_query($cnn, $sql);
    $num = mysqli_num_rows($tampil);
    if ($num > 0) {
        ?>
        <h1>DAFTAR SEMUA MAHASISWA</h1>
        <table>
            <tr>
                <th>Nim</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Telepon</th>
                <th colspan="2">Action</th>
            </tr>
            <?php
            while (list($nim, $nama, $alamat, $telp) = mysqli_fetch_array($tampil)) {
                ?>
                <tr>
                    <td><?php echo $nim; ?></td>
                    <td><?php echo $nama; ?></td>
                    <td><?php echo $alamat; ?></td>
                    <td><?php echo $telp; ?></td>
                    <td><a href='form_update_data.php?update=<?php echo $nim; ?>'>Update</a></td>
                    <td><a href='form_delete_data.php?delete=<?php echo $nim; ?>'>Delete</a></td>
                </tr>
                <?php
            }
            ?>
        </table>
        <?php
    } else {
        ?>
        <i>Belum ada data.</i>
        <?php
    }
    ?>
    <br /><br />
    <div align="center">
        [<a href="form_tambah_data.php">Tambah Data Baru</a>]
    </div>
</body>
</html>