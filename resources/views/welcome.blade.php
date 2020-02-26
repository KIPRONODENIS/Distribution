@extends('layouts.app')
    @section('content')
<div class="flex flex-col" style="background-image: url('/images/backgrounds/wave.svg');background-repeat: no-repeat;background-size: cover;">

    <div class="max-h-screen  flex items-center justify-center " style="height:300px !important">
        <div class="flex flex-col justify-around h-full">
            <div>
                <h1 class="text-white text-center font-light tracking-wider text-5xl mb-6">
                    {{ config('app.name', 'Laravel') }}
                </h1>
                <p class="text-sm text-white  my-3">The no 1 Leading platform for suppliers and distributors</p>
                <ul class="list-reset  py-5 mb-5">
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
    <div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="carousel slide" id="carousel-967643">
                <ol class="carousel-indicators">
                    <li data-slide-to="0" data-target="#carousel-967643">
                    </li>
                    <li data-slide-to="1" data-target="#carousel-967643">
                    </li>
                    <li data-slide-to="2" data-target="#carousel-967643" class="active">
                    </li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item">
                        <img class="d-block w-100" alt="Carousel Bootstrap First" src="https://www.layoutit.com/img/sports-q-c-1600-500-1.jpg" />
                        <div class="carousel-caption">
                            <h4>
                                First Thumbnail label
                            </h4>
                            <p>
                                Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" alt="Carousel Bootstrap Second" src="https://www.layoutit.com/img/sports-q-c-1600-500-2.jpg" />
                        <div class="carousel-caption">
                            <h4>
                                Second Thumbnail label
                            </h4>
                            <p>
                                Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item active">
                        <img class="d-block w-100" alt="Carousel Bootstrap Third" src="https://www.layoutit.com/img/sports-q-c-1600-500-3.jpg" />
                        <div class="carousel-caption">
                            <h4>
                                Third Thumbnail label
                            </h4>
                            <p>
                                Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                            </p>
                        </div>
                    </div>
                </div> <a class="carousel-control-prev" href="#carousel-967643" data-slide="prev"><span class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a> <a class="carousel-control-next" href="#carousel-967643" data-slide="next"><span class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
            </div>
        </div>
    </div>
</div>
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

 <div class="row  flex flex-wrap justify-between">

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
