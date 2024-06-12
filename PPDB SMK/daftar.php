<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include "service/db.php"; 

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $conn->real_escape_string($_POST['nama']);
    $gender = $conn->real_escape_string($_POST['gender']);
    $alamat = $conn->real_escape_string($_POST['alamat']);
    $asal_sekolah = $conn->real_escape_string($_POST['asal']);
    $jurusan = $conn->real_escape_string($_POST['jurusan']);
    $data_file = $conn->real_escape_string($_POST['data_file']);
    $rata_rata = $conn->real_escape_string($_POST['rata_rata']);

    $sql = "INSERT INTO pendaftaran_siswa (nama, gender, alamat, asal_sekolah, jurusan, data_file, rata_rata) 
            VALUES ('$nama', '$gender', '$alamat', '$asal_sekolah', '$jurusan', '$data_file', '$rata_rata')";

    if ($conn->query($sql) === TRUE) {
        $message = "Data berhasil disimpan";
    } else {
        $message = "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Menutup koneksi
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPDB-SMKN 57 JAKARTA</title>
    <link rel="shortcut icon" href="img/logo.jpeg" type="image/x-icon">
    <link rel="stylesheet" href="layout/daftar.css">
</head>
<body>
    <?php include "page/header.html"; ?>
    <center>
    <article>
        <div class="form">
            <h3 class="daftar">Formulir Pendaftaran SMKN 57 JAKARTA</h3>
            <form action="" method="POST">
                <table class="table">
                    <tr>
                        <td class="tag">Nama</td>
                        <td>:</td>
                        <td><input type="text" name="nama" placeholder="Nama Lengkap" required class="input"/></td>
                    </tr>
                    <tr>
                        <td class="tag">Jenis Kelamin</td>
                        <td>:</td>
                        <td>
                            <label><input type="radio" name="gender" value="Laki-Laki" required class="input"/>Laki-laki</label>
                            <label><input type="radio" name="gender" value="Perempuan" required class="input"/>Perempuan</label>
                        </td>
                    </tr>
                    <tr>
                        <td class="tag">Alamat</td>
                        <td>:</td>
                        <td><textarea name="alamat" required class="input"></textarea></td>
                    </tr>
                    <tr>
                        <td class="tag">Asal Sekolah</td>
                        <td>:</td>
                        <td><input type="text" name="asal" placeholder="Asal Sekolah" required class="input"/></td>
                    </tr>
                    <tr>
                        <td class="tag">Jurusan</td>
                        <td>:</td>
                        <td>
                            <select name="jurusan" required class="input">
                                <option value="Usaha Perjalanan Wisata">Usaha Perjalanan Wisata</option>
                                <option value="Perhotelan">Perhotelan</option>
                                <option value="Tataboga">Tataboga</option>
                                <option value="Seni Tari">Seni Tari</option>
                                <option value="Seni Karawitan">Seni Karawitan</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
             <td><label for="" class="tag">Upload Berkas</label> </td>
                <td>:</td>
              <td> <input type="file" name="data_file" class="input"></td>
            </tr>
            <tr>
            <td><label for="" class="tag">input rata-rata</label></td>
            <td>:</td>
           <td> <input type="text" name="rata_rata" required></td>
            </tr>
                </table>
                <br>
                <input type="submit" value="Daftar">
                <i style="font-size: 12px; color: green;"><?= $message ?></i>
            </form>
            <br>
        </div>
    </article>
    </center>
    <br>
    <br>
    <br>
    <br>
    <br>
    <?php include "page/footer.html"; ?>
</body>
<script src="components/code.js"></script>
</html>
