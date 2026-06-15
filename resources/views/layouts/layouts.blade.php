<!DOCTYPE html>
<html lang="id">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>EduLearn</title>

    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body class="bg-light">

<div class="container-fluid">

    <div class="row">

        <!-- Sidebar -->
        <div class="col-md-2 bg-dark text-white vh-100 p-3">

            <h3 class="mb-4">🎓 EduLearn</h3>

            <hr class="bg-white">

            <ul class="nav flex-column">

                <li class="nav-item mb-2">
                    <a class="nav-link text-white" href="{{ route('dashboard') }}">
                        📊 Dashboard
                    </a>
                </li>

                <li class="nav-item mb-2">
                    <a class="nav-link text-white" href="{{ route('articles.index') }}">
                        📚 Artikel
                    </a>
                </li>

                <li class="nav-item mb-2">
                    <a class="nav-link text-white" href="{{ route('forum.index') }}">
                        💬 Forum
                    </a>
                </li>

                <li class="nav-item mb-2">
                    <a class="nav-link text-white" href="{{ route('quiz.index') }}">
                        📝 Quiz
                    </a>
                </li>

                <li class="nav-item mb-2">
                    <a class="nav-link text-white" href="{{ route('ai.index') }}">
                        🤖 AI Tutor
                    </a>
                </li>

            </ul>

        </div>

        <!-- Content -->
        <div class="col-md-10 p-4">

            @yield('content')

        </div>

    </div>

</div>

</body>
</html>