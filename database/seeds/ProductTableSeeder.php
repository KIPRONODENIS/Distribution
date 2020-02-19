<?php

use Illuminate\Database\Seeder;
use App\Product;
class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
       'name'=>'Laptop Bag Supply ',
       'min_order'=>100,
       'user_id'=>1,
       'price'=>250,
       'image'=>"http://placehold.it/350x260",
       'description'=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in  with the ",
     'per'=>'piece'
        ] );  
          Product::create([
       'name'=>'Leather Jacket Supply ',
       'min_order'=>100,
       'user_id'=>1,
       'price'=>300,
       'image'=>"http://placehold.it/350x260",
       'description'=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in  with the ",
     'per'=>'piece'
        ] );     
             Product::create([
       'name'=>'Fertilizers Supply ',
       'min_order'=>100,
       'user_id'=>1,
       'price'=>300,
       'image'=>"http://placehold.it/350x260",
       'description'=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in  with the ",
     'per'=>'piece'
        ] );    
            Product::create([
       'name'=>'Stationery Supply ',
       'min_order'=>100,
       'user_id'=>1,
       'price'=>300,
       'image'=>"http://placehold.it/350x260",
       'description'=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in  with the ",
     'per'=>'piece'
        ] );    
            Product::create([
       'name'=>'Shoes supply ',
       'min_order'=>100,
       'user_id'=>1,
       'price'=>300,
       'image'=>"http://placehold.it/350x260",
       'description'=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in  with the ",
     'per'=>'piece'
        ] );   
             Product::create([
       'name'=>'Rice grains supply ',
       'min_order'=>100,
       'user_id'=>1,
       'price'=>300,
       'image'=>"http://placehold.it/350x260",
       'description'=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in  with the ",
     'per'=>'piece'
        ] );   
             Product::create([
       'name'=>'Milled Flour supplies ',
       'min_order'=>100,
       'user_id'=>1,
       'price'=>300,
       'image'=>"http://placehold.it/350x260",
       'description'=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in  with the ",
     'per'=>'piece'
        ] );  
                Product::create([
       'name'=>'Laptop Batteries supplies ',
       'min_order'=>100,
       'user_id'=>1,
       'price'=>300,
       'image'=>"http://placehold.it/350x260",
       'description'=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in  with the ",
     'per'=>'piece'
        ] );   

               Product::create([
       'name'=>'Men Jeans xl supply black or white ',
       'min_order'=>100,
       'user_id'=>1,
       'price'=>300,
       'image'=>"http://placehold.it/350x260",
       'description'=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in  with the ",
     'per'=>'piece'
        ] );  
                Product::create([
       'name'=>'Techno cammon Air supply ',
       'min_order'=>100,
       'user_id'=>1,
       'price'=>3000,
       'image'=>"http://placehold.it/350x260",
       'description'=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in  with the ",
     'per'=>'piece'
        ] );
                  Product::create([
       'name'=>'Airtel Airtime supply ',
       'min_order'=>100,
       'user_id'=>1,
       'price'=>300,
       'image'=>"http://placehold.it/350x260",
       'description'=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in  with the ",
     'per'=>'piece'
        ] );
    }
}
