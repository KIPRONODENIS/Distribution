@extends('layouts.app')
@section('content')

<div class="row  w-3/4 mx-auto">
	<div class="w-2/5 m-3 h-50">
		<img class="shadow-sm" src="{{asset('storage/'.$product->image)}}">
	</div>
	<div class="w-2/5">
		<h1 class="my-2 text-gray-800 text-5xl">{{$product->name}}</h1>
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
<h1 class="my-2 mt-5">Product Description</h1>
<p>{{$product->description}}</p>


	<a href="{{route('product.edit',$product->id)}}" class="btn btn-success w-1/2"><i class="fas fa-pen-square"></i>Edit</a>	

</div>
	</div>

</div>

@endsection