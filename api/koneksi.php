<?php
// koneksi.php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "si_tani"; 

$koneksi = mysqli_connect($host, $user, $pass, $db);

// Cek koneksi
if (!$koneksi) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
?>