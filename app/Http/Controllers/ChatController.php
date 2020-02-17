<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Chat;
class ChatController extends Controller
{
    public function show(User $user){
   $nonsorted=[];
   $all=[];
    	$send=Chat::where('sender_id','=',1)->where('receiver_id','=',2)->orderBy('created_at','asc')->get();

    	$received=Chat::where('sender_id','=',2)->where('receiver_id','=',1)->orderBy('created_at','asc')->get();

foreach ($send as $item) {

	$nonsorted[]=$item;
	# code...
}

foreach ($received as $item1) {

	$nonsorted[]=$item1;
	# code...
}


//loop through and put them in one array


 //sort them

$nonsorted=collect($nonsorted)->sortBy('created_at');
foreach($nonsorted as $item){
	$all[]=$item->toArray();
}


 return view('Pages.chat',compact('all'));
    }


}
