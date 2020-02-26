<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

         if(\Auth::user()->hasRole('admin')) {
        return redirect('/admin');
         
        }
        $orders=\Auth::user()->orders;
        $products=[];
        if(\Auth::user()->hasRole('distributor')) {
          $products=\Auth::user()->products;
         
        }

      
        return view('home',compact('orders','products'));
    }
}
