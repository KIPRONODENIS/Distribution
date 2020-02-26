<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class WelcomeController extends Controller
{
    public function index() {
    	$products=Product::latest()->get()->take(6);

    	return view('welcome',compact('products'));
    }
}
