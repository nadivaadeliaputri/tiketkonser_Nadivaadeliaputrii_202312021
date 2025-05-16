CREATE DATABASE konser_juicy_luice;

USE konser_juicy_luice;

CREATE TABLE pemesanan (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100),
    email VARCHAR(100),
    telepon VARCHAR(20),
    tempat_duduk VARCHAR(50),
    jumlah_tiket INT,
    metode_pembayaran VARCHAR(50),
    tanggal_pemesanan TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
