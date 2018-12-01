<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->


    <!-- Fonts -->
    <!-- <link rel="dns-prefetch" href="https://fonts.gstatic.com"> -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css"> -->

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/waves.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/datatables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/morris.css') }}" rel="stylesheet">
    <link href="{{ asset('fonts/fa/css/font-awesome.min.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">  
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="logo d-flex justify-content-center">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }} 
                </a>
            </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse  d-flex justify-content-center" id="navbarSupportedContent " style="padding: 10px;">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <button class="bars waves-effect">
                            <i class="fa fa-bars"></i>
                        </button>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
        </nav>

        <aside class="main-sidebar">
            <section class="sidebar">
                <ul class="navbar-nav">
                    @guest
                    <li class="nav-item">
                        <a href="<?php echo url('/login') ?>" class="side-link waves-effect">
                            <i class="fa fa-sign-in"></i>
                            <span>Login</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo url('/register') ?>" class="side-link waves-effect">
                            <i class="fa fa-user-plus"></i>
                            <span>Register</span>
                        </a>
                    </li>
                    
                    @else
                    <li class="nav-item">
                        <a href="<?php echo url('/home') ?>" class="side-link waves-effect">
                            <i class="fa fa-home"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo url('/') ?>/gudang" class="side-link waves-effect">
                            <i class="fa fa-book"></i>
                            <span>Master Gudang</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo url('/') ?>/barang" class="side-link waves-effect">
                            <i class="fa fa-user"></i>
                            <span>Master Barang</span>
                        </a>
                    </li>

                    @endguest
                </ul>
            </section>
        </aside>

        <main class="py-4">
            <div class="admin">
                @yield('content')
            </div>
        </main>
    </div>
    <script type="text/javascript" src="{{  asset('js/jquery.min.js') }}"></script>
     <script src="{{ asset('js/app.js') }}" defer></script>
    <script type="text/javascript" src="{{  asset('js/waves.min.js') }}"></script>
    <script type="text/javascript" src="{{  asset('js/raphael.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('lib/datatables.min.js') }}" defer></script>
    <script type="text/javascript" src="{{  asset('js/custom.js') }}"></script>
    
    <script type="text/javascript">
        
    </script>

    <footer>
        Made by &hearts; by Ahmad Saugi XI-RPL
    </footer>
</body>
</html>
        