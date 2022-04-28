<?php

namespace App\Http\Livewire\Product;

use Livewire\Component;

class ProductCardLivewire extends Component
{
    public $product;

    public function mount($data)
    {
        $this->product = $data;
    }
    public function render()
    {
        return view('livewire.product.product-card-livewire');
    }
}
