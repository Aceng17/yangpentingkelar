<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register EduLearn</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Inter', sans-serif;
        }
        .auth-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
            padding: 40px;
            width: 100%;
            max-width: 400px;
        }
    </style>
</head>
<body>
    <div class="auth-card">
        <h3 class="text-center mb-4 fw-bold">Daftar Akun Baru</h3>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="mb-3">
                <input type="text" name="name" class="form-control rounded-pill p-3" placeholder="Nama Lengkap" required>
            </div>
            <div class="mb-3">
                <input type="email" name="email" class="form-control rounded-pill p-3" placeholder="Email Address" required>
            </div>
            <div class="mb-3">
                <input type="password" name="password" class="form-control rounded-pill p-3" placeholder="Password" required>
            </div>
            <div class="mb-4">
                <input type="password" name="password_confirmation" class="form-control rounded-pill p-3" placeholder="Konfirmasi Password" required>
            </div>
            <button type="submit" class="btn btn-success w-100 rounded-pill p-3 fw-bold">Daftar Akun</button>
        </form>
        <p class="text-center mt-3 text-muted">Sudah punya akun? <a href="{{ route('login') }}">Login</a></p>
    </div>
</body>
</html>