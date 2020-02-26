@extends('layouts.app')

@section('content')

<div class="container" id="app">
<h3 class=" text-center">Messaging</h3>

<chat-app :user="{{auth()->user()}}" :contact="{{$contact}}"></chat-app>




</div>
@endsection