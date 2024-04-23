<?php
$conn = mysqli_connect('localhost', 'root', '', 'db_kampus');
    if (!$conn) {
        echo "Koneksi Gagal <br/>";
    } else {
        echo "Koneksi Berhasil <br/>";
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $telp = $_POST['telp'];
 
        // Query untuk melakukan update data
        $sql = "UPDATE mahasiswa SET nama = '$nama', alamat = '$alamat', telp = '$telp' WHERE nim = '$nim'";
        
        if ($conn->query($sql) === TRUE) {
         echo '
         <script>
             alert ("Berhasil mengupdate data");
             window.location.href = "tampil.php"; 
         </script>
         ';
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
?>