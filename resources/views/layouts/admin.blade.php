<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }} Admin Panel</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>

    <nav class="navbar has-shadow">
        <div class="container">
            <div class="navbar-brand">
                <a class="navbar-item" href="{{url('/')}}">
                    <img src="{{asset('images/logo.png')}}">
                    <span class="site-title">{{config('app.name')}}</span>
                </a>


                <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false"
                    data-target="menu">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
            </div>

            <div id="menu" class="navbar-menu">
                <div class="navbar-start">
                    <a class="navbar-item" href="{{url('/')}}">
                        Home
                    </a>
                </div>
            </div>

            <div class="navbar-menu" id="navMenu">
                <div class="navbar-start"></div>

                <div class="navbar-end">
                    <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link" href="{{route('dashboard')}}">{{ Auth::user()->name }}</a>

                        <div class="navbar-dropdown">
                            <a class="navbar-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </nav>

    <div class="section">
        <div class="columns">
            <aside class="column is-2">
                <nav class="menu">
                    <p class="menu-label">
                        Test Requests
                    </p>
                    <ul class="menu-list">
                        <li><a class="is-active">All requests</a></li>
                        <li><a>New</a></li>
                        <li><a>Sent to Lab</a></li>
                    </ul>
                    <p class="menu-label">
                       Treatment
                    </p>
                    <ul class="menu-list">
                        <li><a>In hospital</a></li>
                        <li><a>In home quarentine</a></li>
                        <li><a>Recovered</a></li>
                    </ul>
                </nav>
            </aside>
            @yield('content')

        </div>
    </div>

    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    @yield('footer-script')
</body>

</html>