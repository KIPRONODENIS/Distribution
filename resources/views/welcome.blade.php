@extends('layouts.app')
    @section('content')
<div class="flex flex-col" style="background-image: url('/images/backgrounds/wave.svg');background-repeat: no-repeat;background-size: cover;">

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
                            <h3>
                    Featured Suppliers</h3>
            <div class="col-md-9 flex flex-wrap">

            </div>
            <div class="col-md-3">
                <!-- Controls -->
                <div class="d-flex my-3 controls pull-right hidden-xs">
  
                </div>
            </div>
        </div>

        <div id="carousel-example" class="carousel slide hidden-xs" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
 <div class="item active">

 <div class="row  flex flex-wrap justify-around">

@foreach($products as $product)

@include('partials.item')

@endforeach


            </div>
        </div>
    </div>
    </div>
    </div>                        
    
</div>
@endsection
</body>
</html>
