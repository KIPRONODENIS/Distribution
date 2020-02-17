<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Online Distribution System') }}</title>
        <link rel="stylesheet" type="text/css" href="/@fortawesome/fontawesome-free/css/all.min.css">

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
 <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
    <!-- slider -->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="{{asset('js/custom.js')}}"></script>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
</head>
<body class="bg-gray-100 h-screen antialiased leading-none" >
<div class="flex flex-col" style="background-image: url('/images/backgrounds/wave.svg');background-repeat: no-repeat;background-size: cover;">
    @if(Route::has('login'))
        <div class="absolute top-0 right-0 mt-4 mr-4 text-white">
            @auth
                <a href="{{ url('/home') }}" class="no-underline hover:underline text-sm font-normal text-white-800 uppercase">{{ __('Home') }}</a>
            @else
                <a href="{{ route('login') }}" class="no-underline hover:underline text-sm font-normal text-white-800 uppercase pr-6">{{ __('Login') }}</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="no-underline hover:underline text-sm font-normal text-white-800 uppercase">{{ __('Register') }}</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="max-h-screen  flex items-center justify-center " style="height:300px !important">
        <div class="flex flex-col justify-around h-full">
            <div>
                <h1 class="text-white text-center font-light tracking-wider text-5xl mb-6">
                    {{ config('app.name', 'Laravel') }}
                </h1>
                <p class="text-sm text-white text-center my-3">The no 1 Leading platform for suppliers and distributors</p>
                <ul class="list-reset text-center py-5">
<!--                     <li class="inline pr-8">
                       <a href="#"  class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 border border-gray-400 rounded shadow">
  Become Supplier
</a>
                    </li>


 -->                
@guest
     <li class="inline pr-8 w-full">
<a  href="{{route('register')}}" class="bg-teal-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 border border-gray-400 rounded shadow">
  Create an account
</a>
                    </li>

@else 
     <li class="inline pr-8 w-full">
<a  href="{{route('home')}}" class="bg-teal-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 border border-gray-400 rounded shadow">
  Dashboard
</a>
                    </li>


@endguest
                   
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="row">
            <div class="col-md-9">
                <h3>
                    Featured Suppliers</h3>
            </div>
            <div class="col-md-3">
                <!-- Controls -->
                <div class="d-flex my-3 controls pull-right hidden-xs">
                    <a class="float-left  btn btn-success" href="#carousel-example"
                        data-slide="prev"><i class="fas fa-chevron-left"></i></a><a class="right  btn btn-success" href="#carousel-example"
                            data-slide="next"><i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
        </div>

        <div id="carousel-example" class="carousel slide hidden-xs" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
 <div class="item active">

 <div class="row">

@foreach($products as $product)

@include('partials.item')

@endforeach


            </div>
        </div>
    </div>
    </div>
    </div>                        
    
</div>
</body>
</html>
