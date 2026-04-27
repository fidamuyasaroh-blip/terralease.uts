<?php
session_start(); 
include '../koneksi.php';

$username = $_POST['username'];
$email    = $_POST['email'];
$password = $_POST['password'];
$role     = 'user';

// Validasi panjang password
if (strlen($password) < 8) {
    echo "<script>
            alert('Password harus minimal 8 karakter!');
            window.location.href='/api/register.php';
          </script>";
    exit();
}

// Cek username sudah dipakai belum
$cek = mysqli_query($koneksi, "SELECT * FROM users WHERE username='$username'");
if (mysqli_num_rows($cek) > 0) {
    echo "<script>
            alert('Username sudah digunakan, pilih username lain!');
            window.location.href='/api/register.php';
          </script>";
    exit();
}

$query = "INSERT INTO users (username, email, password, role) VALUES ('$username', '$email', '$password', '$role')";
$result = mysqli_query($koneksi, $query);

if ($result) {
    echo "<script>
            alert('Registrasi Berhasil! Silakan Login.');
            window.location.href='login.php';
          </script>";
} else {
    echo "Registrasi Gagal: " . mysqli_error($koneksi);
}
?>