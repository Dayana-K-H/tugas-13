<?php
// koneksi
$conn = mysqli_connect('localhost', 'root', '');
if (!$conn) {
    echo "Koneksi Gagal";
} else {
    mysqli_select_db($conn, "db_kampus");
}
// tambah data
if (isset($_POST["kirim"])) {
    $nim = $_POST["nim"];
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $telp = $_POST["telp"];

    $sql = "INSERT INTO mahasiswa (nim,nama,alamat,telp) VALUES ('$nim','$nama','$alamat','$telp')";
    mysqli_query($conn, $sql);
    $num = mysqli_affected_rows($conn);
    if ($num > 0) {
        echo '
            <script>
            alert ("Data berhasil ditambah");
            window.location.href = "tampil.php";
            </script>
            ';
    } else {
        echo '
            <script>
            alert ("Data gagal ditambah");
            window.location.href = "form_tambah_data.php";
            </script>
            ';
    }
}
?>