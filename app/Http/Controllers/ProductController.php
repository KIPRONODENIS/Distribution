<?php

namespace App\Http\Controllers;

use App\Product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::simplePaginate(8);

        return  view('Pages.products',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
$path = $request->file('image')->store('avatars',['disk'=>'public']);
   
      $product=new Product([
'name'=>$request->name,
'min_order'=>$request->min_order,
'per'=>$request->per,
'image'=>$path,
'description'=>$request->description,
'price'=>$request->price,
'stock'=>$request->stock

      ]);


$user=\Auth::user();

$saved=$user->products()->save($product);

session()->flash('success','You successfully Added a Product');

return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
      
        return view('Pages.product',compact('product'));
    } 
       /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function view(Product $product)
    {
      
        return view('Products.view',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
       return view('Products.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
    $data=$request->except('_method','_token');
    //update;
   $updated= $product->update($data);
    
    if($request->hasFile('image')) {
        $product->update(['image'=>$request->file('image')->store('avatars',['disk'=>'public'])]);
    }
   if($updated) {
    session()->flash('success',"Successfully Updated");
   }

  return  redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
       $product->delete();

       session()->flash('success','Successfully deleted a product');

        return redirect()->back();
    }
}
