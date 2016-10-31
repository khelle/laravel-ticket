<!DOCTYPE html>
<html lang="en">
<head>
    <title>Laravel Ticketing</title>
    <!-- meta -->
    <meta charset="UTF-8">
    <meta name="title" content="Laravel Ticketing">
    <meta name="author" content="Kamil Jamróz">
    <meta name="keywords" content="laravel,ticketing">
    <meta name="description" content="Laravel Ticketing Service">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- style sheets -->
    <link rel="stylesheet" type="text/css" href="{{ elixir('css/index.css') }}">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Lato">
</head>
<body>
<header id="welcome">
    <nav id="navbar-main" class="navbar navbar-default navbar-fixed">
        <div class="container">
            <div id="welcome-header" class="navbar-header">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Laravel
                </a>
                <button id="navbar-toggler" type="button" class="navbar-toggle hidden-lg-up" data-toggle="collapse" data-target="#welcome-menu">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </button>
            </div>
            <div id="welcome-menu" class="navbar-menu navbar-toggleable-md collapse">
                <ul class="nav navbar-nav">

                    @if (Auth::guest())
                        <li class="nav-item">
                            <a class="nav-link primary-link" href="{{ url('/login') }}">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                Login
                            </a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link primary-link" href="{{ url('/') }}">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link primary-link" href="{{ url('/logout') }}">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                Logout
                            </a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</header>

@yield('content')

<!-- JavaScripts -->
<script type="text/javascript" charset="utf-8" src="{{ elixir('js/index.js') }}"></script>
</body>
</html>
