<div class="row w-full mt-6">
<div class="w-full mx-auto">
	<h1 class="card w-full text-blue-500 h1 text-center shadow-sm">Track Your orders</h1>
	<table class="table-auto w-100 mx-auto mt-5">
		<thead class="text-md bg-dark text-white">
			<tr >
				<td  class="border px-4 py-2">OrderID</td>
				<td class="border px-4 py-2">Product</td>
				<td class="border px-4 py-2">Location</td>
				<td class="border px-4 py-2">Quantity</td>
				<td class="border px-4 py-2">Total</td>
				<td class="border px-4 py-2">Status</td>
				<td class="border px-4 py-2">Date</td>
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
				<td class="border px-4 py-2">{{$order->created_at}}</td>
			</tr>
@endforeach

		</tbody>
	</table>
</div>

</div>
