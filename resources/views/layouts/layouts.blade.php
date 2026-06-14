<!DOCTYPE html>
<html lang="id">
<head>

    <meta charset="UTF-8">
    <title>EduLearn</title>

    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="container-fluid">

    <div class="row">

        <!-- Sidebar -->

        <div class="col-md-2 sidebar">

            <h3>🎓 EduLearn</h3>

            <ul class="nav flex-column">

                <li>
                    <a href="{{ route('dashboard') }}">
                        Dashboard
                    </a>
                </li>

                <li>
                    <a href="{{ route('articles.index') }}">
                        Artikel
                    </a>
                </li>

                <li>
                    <a href="{{ route('forum.index') }}">
                        Forum
                    </a>
                </li>

                <li>
                    <a href="{{ route('quiz.index') }}">
                        Quiz
                    </a>
                </li>

                <li>
                    <a href="{{ route('ai.index') }}">
                        AI Tutor
                    </a>
                </li>

            </ul>

        </div>

        <!-- Content -->

        <div class="col-md-10">

            @yield('content')

        </div>

    </div>

</div>

</body>
</html>