<?php
$servername = "localhost"; 
$username = "root";
$password = ""; 
$dbname = "pendaftaran";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Query untuk memilih siswa dengan nilai rata-rata minimal 75
$sql = "SELECT id, nama, jurusan, rata_rata FROM pendaftaran_siswa WHERE rata_rata >= 75";
$result = $conn->query($sql);

// Tambahkan langkah debugging untuk memeriksa hasil query
if (!$result) {
    die("Query error: " . $conn->error);
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelulusan</title>
    <link rel="stylesheet" href="layout/kelulusan.css">
</head>
<body>
    <?php include "page/header.html"?>
    <h1><center>HASIL SELEKSI AKADEMIK<br> PENERIMAAN PESERTA DIDIK BARU (PPDB)<br> TAHUN PELAJARAN 2024/2025</h1>
<center>
    <?php 
    if ($result->num_rows > 0) {
        echo "<table style='border:1px solid black;'><tr><th>No</th><th>Nama</th><th>Jurusan</th><th>rata-rata</th></tr>";
        $no = 1;
        // Menampilkan data tiap baris
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$no."</td><td>".$row["nama"]."</td><td>".$row["jurusan"]."</td><td>".$row["rata_rata"]."</td></tr>";
            $no++;
        }
        echo "</table>";
    } else {
        echo "Tidak ada data";
    }
    ?>
    </center>
</body>
</html>