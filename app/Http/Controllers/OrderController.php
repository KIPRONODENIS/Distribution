<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Order;
class OrderController extends Controller
{
    //show the product to be ordered

    public function show(Product $product){
     return view('Pages.order',compact('product'));
    }

        //show the product to be ordered

    public function store(Request $request){

    	dd($request->all());
     return view('Pages.order',compact('product'));
    }

    public function success(){
    	return view("order-success");
    }


    //ORDER CONTROLLER 
  //updste the status of order
    public function update(Order $order) {

    	return view('Order.update',compact('order'));

    }
}
