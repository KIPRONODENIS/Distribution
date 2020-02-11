<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Chat;
class ChatController extends Controller
{
    public function show(User $user){
    	$send=Chat::where('sender_id','=',1)->where('receiver_id','=',2)->orderBy('created_at','asc')->get();
    	$received=Chat::where('sender_id','=',2)->where('receiver_id','=',1)->orderBy('created_at','asc')->get();

$all=collect([$send,$received]);
$all=$all->sortBy('id');



 return view('Pages.chat',compact('all'));
    }
}
