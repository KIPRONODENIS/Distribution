<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use App\User;
class AdminController extends Controller
{
   public function index() {
   	return view('Admin.dashboard');


   }

   public function users() {
   	    // 	        if ($request->ajax()) {
        //     $data = User::all();
        //     return Datatables::of($data)
        //             ->addIndexColumn()
        //             ->addColumn('action', function($row){
   
        //                    $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
     
        //                     return $btn;
        //             })
        //             ->rawColumns(['action'])
        //             ->make(true);
        // }
   	return view('Admin.users.index');
   }

      public function products() {
   	return view('Admin.products.index');
   }

      public function orders() {
   	return view('Admin.orders.index');
   }


}
