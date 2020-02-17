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
$this->all=$all;

	}

	public function sending() {

	$this->chat= Chat::create([
       'sender_id'=>2,
       'receiver_id'=>1,
       'message'=>$this->message
       ])->toArray();
       	
$this->all[]=$this->chat;

	}


    public function render()
    {



        return view('livewire.message');
    }
}
