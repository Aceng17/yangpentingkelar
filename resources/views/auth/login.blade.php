<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login EduLearn</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
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
            box-shadow: 0 15px 35px rgba(0,0,0,0.2);
            padding: 40px;
            width: 100%;
            max-width: 400px;
        }
    </style>
</head>
<body>
    <div class="auth-card">
        <h3 class="text-center mb-4 fw-bold">Selamat Datang!</h3>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-3">
                <input type="email" name="email" class="form-control rounded-pill p-3" placeholder="Email Address" required>
            </div>
            <div class="mb-4">
                <input type="password" name="password" class="form-control rounded-pill p-3" placeholder="Password" required>
            </div>
            <button type="submit" class="btn btn-primary w-100 rounded-pill p-3 fw-bold">Masuk Sekarang</button>
        </form>
        <p class="text-center mt-3 text-muted">Belum punya akun? <a href="{{ route('register') }}">Daftar</a></p>
    </div>
</body>
</html>