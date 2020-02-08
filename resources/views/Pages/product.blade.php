@extends('layouts.app')

@section('content')
<div class="row  w-3/4 mx-auto">
	<div class="w-2/5">
		<img class="shadow-sm" src="{{$product->image}}">
	</div>
	<div class="w-2/5">
		<h1 class="my-2 text-gray-800 text-sm">{{$product->name}}</h1>
		<p class="bolder my-2">Distributor: {{$product->user->name}}</p>
<h5 class="my-2 price-text-color text-blue-800">
${{$product->price}} per {{$product->per}}</h5>
<h5 class="my-2 price-text-color text-blue-900">
Min order:{{$product->min_order}} </h5>

<div class="my-2 bg-white py-3">
<i class="price-text-color fa fa-star"></i>
<i class="price-text-color fa fa-star"></i>
<i class="price-text-color fa fa-star"></i>
<i class="price-text-color fa fa-star"></i>                                            

<i class="fa fa-star"></i>
</div>

<div class="d-inline space-between ">
	<button class="bg-blue-500 hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
		<a href="/chat/{{$product->user->id}}"class=" my-3 bg-blue-500 hover:bg-blue-700 text-white font-bold   focus:outline-none focus:bg-blue-200 hover:bg-blue-200">
		chat  <i class="far fa-comment-dots">

		</i>
		</a>
</button>

<button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">

    <i class="fa fa-shopping-cart"></i><a href="/cart/{{$product->id}}" class="hidden-sm">Order</a>
</button>

		

</div>
	</div>

<h1 class="my-2 mt-5">Product Description</h1>
<p>{{$product->description}}</p>

</div>

@endsection