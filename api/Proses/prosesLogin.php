<?php
session_start();

require_once __DIR__ . '../koneksi.php';

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

$query = mysqli_query($koneksi, "SELECT * FROM users WHERE username='$username' AND password='$password'");
$cek = mysqli_num_rows($query);

if ($cek > 0) {
    $data = mysqli_fetch_assoc($query);

    $_SESSION['username'] = $data['username'];
    $_SESSION['role']     = $data['role'];

    if ($data['role'] == "admin") {
        header("Location: ../admin_dashboard.php");
    } else {
        if (isset($_SESSION['redirect_after_login'])) {
            $tujuan = $_SESSION['redirect_after_login'];
            unset($_SESSION['redirect_after_login']);
            header("Location: ../" . $tujuan);
        } else {
            header("Location: ../dashboard_user.php"); 
        }
    }
    exit();

} else {
    echo "<script>
            alert('Username atau Password Salah!');
            window.location.href='../login.php';
          </script>";
}
?>