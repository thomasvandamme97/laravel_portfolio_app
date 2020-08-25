<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $profile->first_name }} {{ $profile->last_name }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <nav id="nav" class="navbar navbar-expand-md d-flex justify-content-between fixed-top">
        <div class="navbar navbar-expand-md">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link text-uppercase" href="#profile">profiel</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-uppercase" href="#resume">overzicht</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-uppercase" href="#portfolio">portfolio</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        @auth
        <span class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('profile.index') }}">
                    Profile
                </a>
                <a class="dropdown-item" href="{{ route('education.index') }}">
                    Education
                </a>
                <a class="dropdown-item" href="{{ route('employment.index') }}">
                    Employment
                </a>
                <a class="dropdown-item" href="{{ route('skills.index') }}">
                    Skills
                </a>
                <a class="dropdown-item" href="{{ route('softskills.index') }}">
                    Softskills
                </a>
                <a class="dropdown-item" href="{{ route('projects.index') }}">
                    Projects
                </a>
                <hr>
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </span>
        @endauth
    </nav>

    @yield('masthead')
    @yield('intro')
    <hr>
    @yield('resume')
    <hr>
    @yield('portfolio')

    <footer>

    </footer>
</body>
</html>
