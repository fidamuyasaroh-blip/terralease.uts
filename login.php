

<!DOCTYPE html>
<html lang="id">
<head>
    <title>Login - TERRALEASE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; }
        .card { width: 350px; border: none; border-radius: 12px; }
    </style>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <form action="Proses/prosesLogin.php" method="POST" class="card p-4 shadow">
            <h2 class="text-success text-center fw-bold mb-4">Login</h2>
            
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" name="username" class="form-control" placeholder="Masukkan username" required>
            </div>
            
            <div class="mb-4">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" placeholder="***" required>
            </div>

            <button type="submit" class="btn btn-success w-100 fw-bold">Masuk</button>
            
            <p class="text-center mt-3 small">
                Belum punya akun? 
                <a href="register.php" class="text-success fw-bold text-decoration-none">Daftar di sini</a>
            </p>
        </form>
    </div>
</body>
</html>