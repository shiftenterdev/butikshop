<?php

namespace App\Http\Livewire\Front;

use App\Facades\Cart;
use Livewire\Component;

class MiniCart extends Component
{
    public $cart;

    protected $listeners = ['updateMiniCart'];

    public function mount()
    {
        $this->cart = Cart::get();
    }

    public function render()
    {
        return view('livewire.front.mini-cart');
    }

    public function updateMiniCart()
    {
        $this->cart = Cart::get();
    }
}
