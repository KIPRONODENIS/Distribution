<?php

use Illuminate\Database\Seeder;
use App\Order;
class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
       Order::create([

      'user_id'=>1,
      'product_id'=>1,
      'location'=>"Kitembene",
      'total'=>3300,
      'quantity'=>100,
      'phone'=>'0799012907'
       ]);

        Order::create([

      'user_id'=>1,
      'product_id'=>1,
      'location'=>"maua",
      'total'=>3400,
      'quantity'=>100,
      'phone'=>'0799012907'
       ]);

         Order::create([

      'user_id'=>1,
      'product_id'=>1,
      'location'=>"meru",
      'total'=>3000,
      'quantity'=>100,
      'phone'=>'0799012907'
       ]);
    }
}
