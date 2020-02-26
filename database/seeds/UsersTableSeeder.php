<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	factory(\App\User::class)->create(['name'=>'Distributor','email'=>'admin@gmail.com','password'=>bcrypt('12345678')]);

    	factory(\App\User::class,30)->create();
   
    }
}
