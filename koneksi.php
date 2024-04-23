<?php
//Koneksi Ke MySQL 
$conn = mysqli_connect('localhost', 'root', '');
if (!$conn) {
    echo "Koneksi Gagal";
} else {
    echo "Koneksi Berhasil";
}
?>