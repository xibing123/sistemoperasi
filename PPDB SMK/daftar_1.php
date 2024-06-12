<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPDB-SMKN 57 JAKARTA</title>
    <link rel="shortcut icon" href="img/logo.jpeg" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="layout/style.css">
</head>
<body>
    <?php include "page/header.html" ?>
    <br>
    <center>
    <article>
        <div class="form">
            <h3 class="daftar">Formulir Pendaftaran SMKN 57 JAKARTA</h3>
            <h4><b>Progammer : Muhamad Fatir</b></h4>
            <br>
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="username" placeholder="Nama Lengkap"/></td>
                </tr>

                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td><label><input type="radio" name="kelamin" value="kelamin"/>Laki-laki</label>
                    <label><input type="radio" name="kelamin" value="kelamin"/>Perempuan</label></td>
                </tr>

                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><textarea></textarea></td>
                </tr>

                <tr>
                    <td>Asal Sekolah</td>
                    <td>:</td>
                    <td><input type="text" name="asal" placeholder="Asal Sekolah"/></td>
                </tr>

                <tr>
                    <td>Jurusan</td>
                    <td>:</td>
                    <td>
                        <select>
                            <option>Usaha Perjalanan Wisata</option>
                            <option>Perhotelan</option>
                            <option>Tataboga</option>
                            <option>Seni Tari</option>
                            <option>Seni Karawitan</option>
                    
                        </select>
                    </td>
                </tr>
            </table>

            <br>
            <a href=""><button onclick="notifikasi()">Kirim</button></a>
            <a href=""><button onclick="">Batal</button></a>
            <br>
        </article>
        </center>
    </div>
    <br>
    <br>
    <?php include "page/footer.html" ?>

</body>
<script src="components/code.js"></script>
</html>