<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Order as UserOrder;
class Order extends Component
{

	public $product;

	public $location;
	public $quantity;
	public $phone;
	public $id;
	public $user='';
	public $product_id;
	public $total;
	public $submit=false;

	  public function mount($product){
	  	$this->user=\Auth::id();
      $this->product=$product->toArray();
	  }

	  public function total() {

	  	if($this->quantity>$this->product['min_order']) {
	  		$this->total=$this->quantity*$this->product['price'];
	  		$this->submit=true;
	  	  }
	  	}

 public function submit()
    {
        $this->validate([
            'location' => 'required',
            'quantity' => 'required',
            'phone' => 'required',
        ]);

$this->total();

$order=UserOrder::create([
'user_id'=>\Auth::id(),
'product_id'=>$this->product['id'],
'location'=>$this->location,
'total'=>$this->total,
'quantity'=>$this->quantity,
'phone'=>$this->phone

]);




$this->redirect('/order-success');

        // Execution doesn't reach here if validation fails.

        // Contact::create([
        //     'name' => $this->name,
        //     'email' => $this->email,
        // ]);
    }


    public function render()
    {

        return view('livewire.order');
    }
}
