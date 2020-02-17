<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Message extends Component
{
public $all;
	public function mount($all){
$this->all=$all->toArray();

	}


    public function render()
    {



        return view('livewire.message');
    }
}
