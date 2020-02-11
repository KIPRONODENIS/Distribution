<?php

use Illuminate\Database\Seeder;
use App\Chat;
class ChatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Chat::create([
       'sender_id'=>1,
       'receiver_id'=>2,
       'message'=>"Hello"
       ]);

          Chat::create([
       'sender_id'=>2,
       'receiver_id'=>1,
       'message'=>"Hello too"
       ]);
    }
}
