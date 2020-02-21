<div  class="row">
		<table class="table-auto w-100 mx-auto mt-5">
			<h4>Recieved Orders</h4>
		<thead class="text-md bg-dark text-white">
			<tr >
				<td  class="border px-4 py-2">#</td>
				<td class="border px-4 py-2">Product Name</td>
				<td class="border px-4 py-2">Location</td>
				<td class="border px-4 py-2">min Order</td>
				<td class="border px-4 py-2">Price</td>
				<td class="border px-4 py-2">Status</td>
				<td class="border px-4 py-2">Action</td>
			</tr>
		</thead>
		<tbody>

			@foreach($orders as $order)
			<tr >
				<td class="border px-4 py-2">{{$order->id}}</td>
				<td class="border px-4 py-2">{{$order->product->first()->name}}</td>
				<td class="border px-4 py-2">{{$order->location}}</td>
				<td class="border px-4 py-2">{{$order->quantity}}</td>
				<td class="border px-4 py-2">{{$order->total}}</td>
				<td class="border px-4 py-2">{{$order->status}}</td>
				<td  class="flex justify-around">
					
				
					<a href="{{route('order.update',$order->id)}}" class="bg-red-500 hover:bg-blue-700 text-white font-bold py-2 px-4 m-2 rounded">Update</a>
				</td>
			</tr>
@endforeach

		</tbody>
	</table>

<div class="mt-4">
<h4 class="mt-4"> PRODUCTS </h4>
			<table class="table-auto w-100 mx-auto mt-5">
			
			<a href="{{route('product.create')}}" class="float-right bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 m-2 rounded"><i class="fas fa-plus"></i>Add New Product</a>
		<thead class="text-md bg-dark text-white">
			<tr >
				<td  class="border px-4 py-2">#</td>
				<td class="border px-4 py-2">Product Name</td>
			
				<td class="border px-4 py-2">min Order</td>
				<td class="border px-4 py-2">Price</td>
				<td class="border px-4 py-2">Stock</td>
				<td class="border px-4 py-2">Action</td>
			</tr>
		</thead>
		<tbody>
@foreach($products as $product)
			<tr >
				<td class="border px-4 py-2">{{$product->id}}</td>
				<td class="border px-4 py-2">{{$product->name}}</td>
				
				<td class="border px-4 py-2">{{$product->min_order}}</td>
				<td class="border px-4 py-2">{{$product->price}}</td>
				<td class="border px-4 py-2">{{$product->stock}}</td>
				<td  class="flex justify-around">
					
				
					<a href="{{route('product.show',$product->id)}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 m-2 rounded"><i class="fas fa-eye"></i></a>
					<a href="{{route('product.edit',$product->id)}}" class="bg-green-500 hover:bg-blue-700 text-white font-bold py-2 px-4 m-2 rounded"><i class="fas fa-pen-square"></i></a>
					<a href="#" class="bg-red-500 hover:bg-blue-700 text-white font-bold py-2 px-4 m-2 rounded"><i class="fas fa-trash-alt"></i></a>
				</td>
			</tr>
@endforeach

		</tbody>
	</table>
	</div>
</div>

