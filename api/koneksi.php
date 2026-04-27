<?php
// Gunakan getenv agar data sensitif tidak tertulis langsung di kode
$host = getenv('DB_HOST'); 
$user = getenv('DB_USER');
$pass = getenv('DB_PASS');
$db   = getenv('DB_NAME');
$port = getenv('DB_PORT') ?: "3306";

// Koneksi ke database (Gunakan database online, bukan localhost)
$koneksi = mysqli_connect($host, $user, $pass, $db, $port);

if (!$koneksi) {
    // Pesan error umum agar tidak membocorkan detail teknis di internet
    error_log("Koneksi Database Gagal: " . mysqli_connect_error());
    die("Maaf, layanan sedang gangguan. Silakan coba lagi nanti.");
}
?>