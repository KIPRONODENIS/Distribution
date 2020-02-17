@extends('layouts.app')

@section('content')

<div class="container">
<h3 class=" text-center">Messaging</h3>

@livewire('message',$all)




</div>
@endsection