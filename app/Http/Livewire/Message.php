<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Chat;
class Message extends Component
{
public $all;

public $message;

public $chat;
	public function mount($all){
$this->all=$all->toArray();

	}

	public function sending() {

	$this->chat= Chat::create([
       'sender_id'=>1,
       'receiver_id'=>2,
       'message'=>$this->message
       ])->toArray();
       	
$send=Chat::where('sender_id','=',1)->where('receiver_id','=',2)->orderBy('created_at','asc')->get();

$received=Chat::where('sender_id','=',2)->where('receiver_id','=',1)->orderBy('created_at','asc')->get();

$all=collect([$send,$received]);

$all=$all->sortBy('id');

dd($all);

	}


    public function render()
    {



        return view('livewire.message');
    }
}
