<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}


                        <form class="w-full p-6" wire:submit.prevent="submit">
                        @csrf
                  
                        <div class="flex flex-wrap mb-6">
                            <label for="location" class="block text-gray-700 text-sm font-bold mb-2">
                                {{ __('Select Location') }}:
                            </label>

                            <select id="location" wire:model='location' type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('location')  border-red-500 @enderror" location="location" value="{{ old('location') }}" required autocomplete="location" autofocus>
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

                            <input id="quantity" wire:model="quantity"  type="number" min="{{$product['min_order']}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('quantity') border-red-500 @enderror" name="quantity" value="{{ old('quantity') }}" required autocomplete="quantity" placeholder="{{$product['min_order']}}">

                            @error('quantity')
                                <p class="text-red-500 text-xs italic mt-4">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <div class="flex flex-wrap mb-6">
                            <label for="phone" class="block text-gray-700 text-sm font-bold mb-2">
                                {{ __('Phone No.') }}:
                            </label>

                            <input id="phone" wire:model="phone" type="phone" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('phone') border-red-500 @enderror" name="phone" required autocomplete="new-phone" placeholder="0799012907">

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
                  <input type="hidden" wire:model="product_id" name="id" value="{{$product['id']}}">
       

       Your Total {{$total}}
     
                        </div>
                    </form>
</div>

@if($submit) 
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
  <strong class="font-bold">Holy smokes!</strong>
  <span class="block sm:inline">Something seriously bad happened.</span>
  <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
    <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
  </span>
</div>

@endif