@extends('layouts.app')
@section('content')
<div class="w-full">
<form class=" bg-white w-full mx-auto py-5 px-4 my-5 shadow" action="{{route('product.store')}}" method="post" enctype="multipart/form-data" style="width:50% !important">

	@if(session()->has('success'))
<div class="bg-green-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
  <strong class="font-bold text-gray-700">Congratulations!</strong>
  <span class="block text-gray-700 sm:inline">{{session('success')}}</span>
  <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
    <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
  </span>
</div>

	@endif
	<h1 class="text-xl text-center mb-3">Create New Product</h1>
	@csrf
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">

      <label class="block  font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
        Product Name
      </label>

    </div>
    <div class="md:w-2/3">
      <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" name="name" placeholder="">
    </div>

  </div>


  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block  font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-username">
        Min_Order
      </label>
    </div>
    <div class="md:w-2/3">
      <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-username" type="number" placeholder="" name="min_order">
    </div>
  </div>

    <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block  font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-username">
        Price
      </label>
    </div>
    <div class="md:w-2/3">
      <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-username" type="number" placeholder="" name="price">
    </div>
  </div>

      <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block  font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-username">
        Per
      </label>
    </div>
    <div class="md:w-2/3">
      <select class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-username" type="number" placeholder="" name="per">
      	
      	<option selected>Item</option>
      	<option>Box</option>
      	<option>Set</option>
      	<option>Piece</option>
      </select>
    </div>
  </div>


    <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block  font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-username">
        Stock
      </label>
    </div>
    <div class="md:w-2/3">
      <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-username" type="number" placeholder="" name="stock">
    </div>
  </div>
      <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block  font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-username">
     Upload   Image
      </label>
    </div>
    <div class="md:w-2/3">
      <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-username" type="file" placeholder="" name="image">
    </div>
  </div>

        <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block  font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-username">
     Description
      </label>
    </div>
    <div class="md:w-2/3">
      <textarea class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-username" type="file" placeholder="" name="description"></textarea>
    </div>
  </div>


  <div class="md:flex md:items-center">
    <div class="md:w-1/3"></div>
    <div class="md:w-2/3">
      <button class="shadow bg-green-500 hover:bg-green-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded w-1/2" type="submit">
       Create
      </button>
    </div>
  </div>
</form>
</div>
@endsection