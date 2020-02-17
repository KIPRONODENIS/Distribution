@extends('layouts.app')

@section('content')

<div class="flex flex-wrap">
	@foreach($products as $product)

@include('partials.item')

@endforeach
</div>

<div class="h-30 p-0 m-2 bg-gray-100" style="background-color: transparent;">{{$products->links()}}</div>
@endsection