<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EduLearn</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: #f8f9fa; display: flex; min-height: 100vh; margin: 0; }
        #sidebar { width: 260px; background: #1e293b; color: white; flex-shrink: 0; transition: 0.3s; }
        #sidebar.collapsed { width: 75px; }
        .nav-link { color: #cbd5e1; padding: 15px; display: block; text-decoration: none; }
        .nav-link:hover { background: #334155; color: white; }
        #main-content { flex-grow: 1; display: flex; flex-direction: column; }
    </style>
</head>
<body>

    <div id="sidebar">
        <div class="p-3 d-flex align-items-center">
            <h4 class="logo-text">🎓 EduLearn</h4>
            <button id="toggleBtn" class="btn btn-sm btn-outline-light ms-auto">☰</button>
        </div>
        <nav>
            <a class="nav-link" href="{{ route('dashboard') }}">📊 <span class="menu-text">Dashboard</span></a>
            <a class="nav-link" href="{{ route('articles.index') }}">📚 <span class="menu-text">Artikel</span></a>
            <a class="nav-link" href="{{ route('forum.index') }}">💬 <span class="menu-text">Forum</span></a>
            <a class="nav-link" href="{{ route('quiz.index') }}">📝 <span class="menu-text">Quiz</span></a>
            <a class="nav-link" href="{{ route('ai.index') }}">🤖 <span class="menu-text">AI Tutor</span></a>
        </nav>
    </div>

    <div id="main-content">
        <nav class="navbar bg-white shadow-sm px-4 justify-content-end">
            <div class="d-flex gap-2">
                @guest
                    <a href="{{ route('login') }}" class="btn btn-outline-dark btn-sm">Login</a>
                    <a href="{{ route('register') }}" class="btn btn-dark btn-sm">Register</a>
                @endguest
            </div>
        </nav>

        <div class="p-4 flex-grow-1">
            @yield('content')
        </div>

        <div class="p-4 bg-white border-top">
            @stack('input-box')
        </div>
    </div>

    <script>
        document.getElementById('toggleBtn').addEventListener('click', () => {
            document.getElementById('sidebar').classList.toggle('collapsed');
        });
    </script>
</body>
</html>