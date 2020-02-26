<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Chat;
use App\Events\NewMessage;
class ContactController extends Controller
{
    public function get() {
    	$contacts=User::where('id','!=',\Auth::id())->get();

    	return response()->json($contacts);
    }

    public function conversation($id) {
    	$messages=Chat::where('sender_id',$id)->orWhere('receiver_id',$id)->get();

    	return response()->json($messages);
    }


    public function send(Request $request) {

 $message=Chat::create([
'sender_id'=>\Auth::id(),
'receiver_id'=>$request->contact_id,
'message'=>$request->message
 ]);


 return response()->json($message);
    }
}
