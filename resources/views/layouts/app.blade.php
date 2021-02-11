<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                
            </div>
        </nav>

        <main class="py-4">
            
            <!-- Navbar -->

                <nav id="navbar1" class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
                    <div class="container">
                    
                    <span class="navbar-brand">Make Resume</span>

                    <button class="navbar-toggler toggler-example" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"><span class="dark-blue-text">
                    <i class="fa fa-bars fa-1x"></i></span>
                    </button>
                    
                <div class="collapse navbar-collapse" id="navbarSupportedContent1">
                    <ul class="nav navbar-nav ml-auto">
                    
                        <li class="nav-item"><a class="nav-link" id="active1" href="{{url('/resume')}}">View Resume</a></li>
                        <li class="nav-item"><a class="nav-link" id="active1" href="{{url('/basic/create')}}">Personal Information</a></li>
                        <li class="nav-item"><a class="nav-link" id="active2" href="{{url('/work/create')}}">WorK</a></li>
                        <li class="nav-item"><a class="nav-link" id="active2" href="{{url('/volunteer/create')}}">Volunteer</a></li>
                        <li class="nav-item"><a class="nav-link" id="active2" href="{{url('/education/create')}}">Education</a></li>
                        <li class="nav-item"><a class="nav-link" id="active2" href="{{url('/skill/create')}}">Skill</a></li>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
                    </ul>
                    </div>

                    </div>
                </nav>

                 @yield('content')


        </main>
    </div>
</body>
</html>
