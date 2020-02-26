<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Chat;
class Message extends Component
{
public $all;

public $message;

public $chat;
public $id;
	public function mount($all,$user){

$this->all=$all;
$this->id=$user->id;

	}

	public function sending($id) {

	$this->chat= Chat::create([
       'sender_id'=>1,
       'receiver_id'=>$id,
       'message'=>$this->message
       ])->toArray();
       	
$this->all[]=$this->chat;

	}


    public function render()
    {



        return view('livewire.message');
    }
}
