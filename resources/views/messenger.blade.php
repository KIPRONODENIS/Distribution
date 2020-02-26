@extends('layouts.app')

@section('content')
<div class="card">
	<div class="card-body" id="app">
		<chat-app :user="{{auth()->user()}}" :contact="{{$contact}}"></chat-app>
	</div>
</div>

@endsection