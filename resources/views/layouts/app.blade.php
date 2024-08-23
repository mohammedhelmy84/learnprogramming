<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
   <!--Jquery-->
   <script src="{{ URL::asset('jquery/jquery-3.6.1.min.js') }}"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <link rel= "stylesheet" href= "https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css" >
    <link rel= "stylesheet" href= "https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" >

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
   
    <!--CSS-->
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/welcome.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/create-post.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}" />
</head>
<body>
 
    <div id="app">
      
        <nav class="navbar fixed-top navbar-expand-sm" style="z-index:10; background-color: white;">
            <div class="container  text-left" >
               <div class="row mx-auto">
                <div class="col">
                <a style="text-wrap: nowrap;" href="{{ url('/') }}">
                    {{ config('Learn Programming', 'Learn Programming') }}
                    <i class="las la-home" style="color:orangered; font-size:25px;"></i>
                </a>
            </div>
            <div class="col">
                <a style="text-wrap: nowrap;" href="{{ url('/home') }}">
                    {{ config('Your Page', 'Your Page') }}
                    <i class="las la-address-card" style="color:hotpink; font-size:25px;"></i>
                </a>
            </div> <!-- Left Side Of Navbar -->
            </div>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav mx-autobg-dark" style="width:200px;">
                        <!-- Authentication Links -->
                     
                        @guest
                    
                        <div class="row ">
                            <div class="col-3">
                            @if (Route::has('login'))
                                <li class="nav-item me-5">
                                    <a class="nav-link" href="{{ route('login') }}"><i class="las la-key">{{ __('Login') }}</i></a>
                                </li>
                            @endif
                           </div>
                           <div class="col-3">
                            @if (Route::has('register'))
                                <li class="nav-item ms-5">
                                    <a class="nav-link" href="{{ route('register') }}"><i class="las la-file-alt">{{ __('Register') }}</i></a>
                                </li>
                            @endif
                        </div>
                        </div>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div style="z-index:10 !importatnt;" class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a  class="dropdown-item" href="{{ route('logout') }}"
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
        </nav>
      
        <main class="py-1">
         
            @yield('content')
        </main>
    </div>
    {{-- <div class="py1">
        @extends('layouts.nav-header')
    </div> --}}
 

    <script src="{{ URL::asset('bootstrap/js/bootstrap.bundle.js') }}"></script>

</body>
</html>
