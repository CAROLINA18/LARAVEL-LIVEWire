<?php

namespace App\Http\Livewire\Product;

use Livewire\Component;
use  App\Models\Product;

class Show extends Component
{

    public $product;
    function mount(Product $product)
    {
        $this->product = $product;
    }

    public function render()
    {
        return view('livewire.product.show');
    }
}
