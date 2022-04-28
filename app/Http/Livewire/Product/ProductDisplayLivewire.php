<?php

namespace App\Http\Livewire\Product;

use App\Models\Product;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class ProductDisplayLivewire extends Component
{
    public $curr_page;
    public $products_display;

    public function mount()
    {
        $this->curr_page = 0;
        $this->getProductPaginate();
    }

    public function render()
    {
        return view('livewire.product.product-display-livewire');
    }

    public function getProductPaginate()
    {
        $this->curr_page += 1;
        $products = Product::paginate(4,['*'],'page', $this->curr_page);
        foreach ($products as $item) {
            $this->products_display[] = $item;
        }
    }


}
