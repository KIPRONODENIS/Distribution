<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
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
}
