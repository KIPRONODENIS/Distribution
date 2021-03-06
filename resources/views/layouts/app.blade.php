<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/@fortawesome/fontawesome-free/css/all.min.css">
<!-- slider -->
<link href="/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<style type="text/css">
  
    
</style>
<!-- slider -->

 @livewireStyles
</head>
<body class="bg-gray-100 h-screen antialiased leading-none">
    <div id="app">
      
        <nav class="bg-blue-900 shadow py-6">
            <div class="container mx-auto px-6 md:px-0">
                <div class="flex items-center justify-center">
                    <div class="mr-6">
                        <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-100 no-underline">
                            {{ config('app.name', 'Laravel') }}
                        </a>
                    </div>
                    <div class="flex-1 text-right">
                        @guest
                            <a class="no-underline hover:underline text-gray-300 text-sm p-3" href="{{ route('login') }}">{{ __('Login') }}</a>
                            @if (Route::has('register'))
                                <a class="no-underline hover:underline text-gray-300 text-sm p-3" href="{{ route('register') }}">{{ __('Register') }}</a>

                                                           <a href="/products"
                               class="no-underline hover:underline text-gray-300 text-sm p-3"
                               >{{ __('Products') }}</a>
                            @endif
                        @else
                                                    <a href="/"
                               class="no-underline hover:underline text-gray-300 text-sm p-3"
                              >{{ __('Home') }}</a>
                           <a href="/products"
                               class="no-underline hover:underline text-gray-300 text-sm p-3"
                               >{{ __('Products') }}</a>
                                                    <a href="{{route('home')}}"
                               class="no-underline hover:underline text-gray-300 text-sm p-3"
                               >{{ __('Dashboard') }}</a>

                            <span class="text-gray-300 text-sm pr-4">{{ Auth::user()->name }}<i class="far fa-user"></i></span>
                            <a href="{{ route('logout') }}"
                               class="no-underline hover:underline text-gray-300 text-sm  btn btn-primary shadow"
                               onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                {{ csrf_field() }}
                            </form>
                        @endguest
                    </div>
                </div>
            </div>

        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    @livewireScripts
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
