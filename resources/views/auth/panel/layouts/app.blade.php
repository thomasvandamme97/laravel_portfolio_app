<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="d-flex vw-100 vh-100">
    <nav class="vh-100 bg-dark p-2">
        <div class="text-center nav-item">
            <a class="nav-link" href="{{ route('home') }}">portfolio</a>
        </div>
        <hr class="bg-light">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('profile.index') }}">Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('education.index') }}">Education</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('employment.index') }}">Employment</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('skills.index') }}">Skills</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('softskills.index') }}">Softskills</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('projects.index') }}">Projects</a>
            </li>
        </ul>
    </nav>

    <main class="container-fluid p-4">
        @yield('content')
    </main>
</body>
</html>
