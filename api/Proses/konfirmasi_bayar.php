<?php
session_start();
include '/../koneksi.php';

if (!isset($_SESSION['role']) || $_SESSION['role'] != 'admin') {
    header("Location: /api/login.php");
    exit();
}

$id = $_GET['id'] ?? 0;

if ($id) {
    mysqli_query($koneksi, "UPDATE peminjaman SET status='lunas' WHERE id='$id'");
}

header("Location: /api/riwayat_pemesanan.php");
exit();
?>