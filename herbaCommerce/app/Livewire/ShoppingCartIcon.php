<?php

namespace App\Livewire;

use App\Models\ShoppingCart;
use Auth;
use Livewire\Component;

class ShoppingCartIcon extends Component
{
    public $cartCount = 0;

    protected $listeners = [
        'cartUpdated' => 'updateCartCount',
    ];

    public function mount()
    {
        $this->updateCartCount();
    }

    public function updateCartCount()
    {
        //get the count from shopping cart table..
        $this->cartCount = ShoppingCart::where('user_id', Auth::id())->sum('quantity');
    }
    public function render()
    {
        return view('livewire.shopping-cart-icon');
    }
}
