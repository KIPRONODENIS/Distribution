@extends('layouts.app')

@section('content')

<div class="flex flex-column mx-auto w-3/4 shadow ">
	<h4 class="text-md border text-teal-500 py-2 px-3">{{$product->name}}</h4>
@livewire('order',$product)

</div>
@endsection