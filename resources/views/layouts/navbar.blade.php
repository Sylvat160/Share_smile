<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ShareTheSmile Foundation</title>
    <!-- Styles  Links-->
    <link rel="stylesheet" href="{{ asset('css/materialize.min.css')}}">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('uikit/css/uikit.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/layout.home.css') }}">
</head>

<body>
    <nav class="h-150 white">
        <div class="nav-wrapper white">
            <a href="#!" class="brand-logo hide-on-med-and-down m25"><img src="{{asset('images/logo.png')}}" alt="logo" width="150"></a>
            <a href="#!" class="brand-logo hide-on-large-only"><img src="{{asset('images/logo.png')}}" alt="logo" width="100"></a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="fa-solid fa-bars black-text"></i></a>
            <ul class="right hide-on-med-and-down liste m25">
                <li><a href="sass.html" class="black-text">Accueil</a></li>
                <li><a href="badges.html" class="black-text">Blog</a></li>
                <li><a href="collapsible.html" class="black-text">A propos</a></li>

                <li class="uk-margin recherche">
                    <div>
                        <a class="uk-navbar-toggle" uk-search-icon href="#"></a>
                        <div class="uk-drop" uk-drop="mode: click; pos: left-center; offset: 0">
                            <form class="uk-search uk-search-navbar uk-width-1-1">
                                <input class="uk-search-input" type="search" placeholder="Search" autofocus>
                            </form>
                        </div>
                    </div>
                </li>
            </ul>

        </div>
    </nav>


    <ul class="sidenav" id="mobile-demo">
        <li><a href="sass.html">Accueil</a></li>
        <li><a href="badges.html">Blog</a></li>
        <li><a href="collapsible.html">A propos</a></li>
        <li class="uk-margin recherche">
            <div>
                <a class="uk-navbar-toggle" href="#">Search</a>
                <div class="uk-drop" uk-drop="mode: click; pos: left-center; offset: 0">
                    <form class="uk-search uk-search-navbar uk-width-1-1 uk-flex">
                        <input class="uk-search-input" type="search" placeholder="Search" autofocus>
                        <button class="uk-background-default"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                </div>
            </div>
        </li>
    </ul>

    <main>
        @yield('content')
    </main>
    <footer class="page-footer">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Footer Content</h5>
                    <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Links</h5>
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                © 2014 Copyright Text
                <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
        </div>
    </footer>

    <script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('js/materialize.min.js')}}"></script>
    <script src="{{asset('uikit/js/uikit.min.js')}}"></script>
    <script src="{{asset('uikit/js/uikit-icons.min.js')}}"></script>
    <script src="{{asset('js/index.js')}}"></script>
</body>