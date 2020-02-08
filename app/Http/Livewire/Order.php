<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Order extends Component
{

	public $product;

	public $location;
	public $quantity;
	public $phone;
	public $id;
	public $user='';
	public $product_id;

	  public function mount($product){
	  	$this->user=\Auth::id();
      $this->product=$product->toArray();
	  }
    public function render()
    {

        return view('livewire.order');
    }
}
