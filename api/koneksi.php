<?php
// Gunakan getenv agar data sensitif tidak tertulis langsung di kode
$host = getenv('Dgateway01.ap-southeast-1.prod.alicloud.tidbcloud.com'); 
$user = getenv('47DN5h88YR2vG6n.root');
$pass = getenv('nNViwj5m2tSckbTK');
$db   = getenv('si_tani');
$port = getenv('4000');

// Koneksi ke database (Gunakan database online, bukan localhost)
$koneksi = mysqli_connect($host, $user, $pass, $db, $port);

if (!$koneksi) {
    // Pesan error umum agar tidak membocorkan detail teknis di internet
    error_log("Koneksi Database Gagal: " . mysqli_connect_error());
    die("Maaf, layanan sedang gangguan. Silakan coba lagi nanti.");
}
?>