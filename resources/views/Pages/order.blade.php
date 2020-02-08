@extends('layouts.app')

@section('content')

<div class="flex flex-column mx-auto w-3/4 shadow ">
	<h4 class="text-md border text-teal-500 py-2 px-3">{{$product->name}}</h4>
	                    <form class="w-full p-6" method="POST" action="{{ route('order') }}">
                        @csrf

                        <div class="flex flex-wrap mb-6">
                            <label for="location" class="block text-gray-700 text-sm font-bold mb-2">
                                {{ __('Select Location') }}:
                            </label>

                            <select id="location" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('location')  border-red-500 @enderror" location="location" value="{{ old('location') }}" required autocomplete="location" autofocus>
                            	<option selected="true">None</option>
                            	<option>Maua</option>
                            	<option>Nchiru</option>
                            	<option>Meru</option>
                            	<option>Makutano</option>
                            </select>

                            @error('location')
                                <p class="text-red-500 text-xs italic mt-4">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <div class="flex flex-wrap mb-6">
                            <label for="quantity" class="block text-gray-700 text-sm font-bold mb-2">
                                {{ __('Quantity') }}:
                            </label>

                            <input id="quantity" type="number" min="{{100}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('quantity') border-red-500 @enderror" name="quantity" value="{{ old('quantity') }}" required autocomplete="quantity" placeholder="100">

                            @error('quantity')
                                <p class="text-red-500 text-xs italic mt-4">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <div class="flex flex-wrap mb-6">
                            <label for="password" class="block text-gray-700 text-sm font-bold mb-2">
                                {{ __('Phone No.') }}:
                            </label>

                            <input id="phone" type="phone" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('phone') border-red-500 @enderror" name="phone" required autocomplete="new-phone" placeholder="0799012907">

                            @error('phone')
                                <p class="text-red-500 text-xs italic mt-4">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>


                        <div class="flex flex-wrap">
                            <button type="submit" class="inline-block align-middle text-center select-none border font-bold whitespace-no-wrap py-2 px-4 rounded text-base leading-normal no-underline text-gray-100 bg-blue-500 hover:bg-blue-700">
                                {{ __('Order Now !!') }}
                            </button>
                  <input type="hidden" name="id" value="{{$product->id}}">
       
                        </div>
                    </form>

</div>
@endsection