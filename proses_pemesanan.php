<?php
include 'koneksi.php'; // sambungkan file koneksi

// Ambil data dari form
$nama = $_POST['nama'];
$email = $_POST['email'];
$telepon = $_POST['telepon'];
$tempat_duduk = $_POST['tempat_duduk'];
$jumlah_tiket = $_POST['jumlah_tiket'];
$metode_pembayaran = $_POST['metode_pembayaran'];

// Simpan ke database
$sql = "INSERT INTO pemesanan (nama, email, telepon, tempat_duduk, jumlah_tiket, metode_pembayaran)
        VALUES ('$nama', '$email', '$telepon', '$tempat_duduk', '$jumlah_tiket', '$metode_pembayaran')";

if ($conn->query($sql) === TRUE) {
    echo "<h2>Pemesanan berhasil!</h2><p>Terima kasih telah memesan tiket konser Juicy Luice.</p>";
} else {
    echo "Terjadi kesalahan: " . $conn->error;
}

$conn->close();
?>
