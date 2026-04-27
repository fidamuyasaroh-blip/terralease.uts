<?php
// Menggunakan variabel lingkungan (Environment Variables) untuk Vercel
$host = getenv('DB_HOST') ?: "localhost";
$user = getenv('DB_USER') ?: "root";
$pass = getenv('DB_PASS') ?: "";
$db   = getenv('DB_NAME') ?: "si_tani";
$port = getenv('DB_PORT') ?: "3306"; // Tambahkan port jika perlu

// Koneksi dengan tambahan parameter port
$koneksi = mysqli_connect($host, $user, $pass, $db, $port);

if (!$koneksi) {
    // Di produksi (Vercel), sebaiknya tidak menampilkan detail error ke user umum
    error_log("Koneksi ke database gagal: " . mysqli_connect_error());
    die("Sistem sedang mengalami gangguan teknis. Silakan coba lagi nanti.");
}

// Set charset ke utf8 agar pembacaan data aman dari karakter aneh
mysqli_set_charset($koneksi, "utf8");
?>