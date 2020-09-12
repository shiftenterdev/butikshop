<?php

namespace App\Http\Livewire\Front\Catalog;

use App\Facades\Cart;
use App\Facades\Customer;
use Livewire\Component;

class Product extends Component
{
    public $product,$qty=1;

    public function mount($product)
    {
        $this->product = $product;
    }

    public function render()
    {
        return view('livewire.front.catalog.product');
    }

    public function addToCart($sku)
    {
        Cart::addToCart($sku,$this->qty);
        $this->emit('updateMiniCart');
        session()->flash('success', 'Product added to cart 😀');
    }

    /**
     * @param $sku
     * @return \Illuminate\Http\RedirectResponse|null
     */
    public function addToWishlist($sku)
    {
        if(!Customer::check()){
            return redirect()->route('customer.login');
        }
        session()->flash('success', 'Product added to your wishlist 😀');
        return null;
    }
}
