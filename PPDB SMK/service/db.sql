CREATE DATABASE IF NOT EXISTS pendaftaran;

USE pendaftaran;

CREATE TABLE pendaftaran_siswa (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    gender ENUM('Laki-Laki', 'Perempuan') NOT NULL,
    alamat TEXT NOT NULL,
    asal_sekolah VARCHAR(100) NOT NULL,
    jurusan ENUM('Usaha Perjalanan Wisata', 'Perhotelan', 'Tataboga', 'Seni Tari', 'Seni Karawitan') NOT NULL
);
