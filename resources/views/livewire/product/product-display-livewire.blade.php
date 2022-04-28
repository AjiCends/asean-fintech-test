<div class="container-fluid px-5 frame-5 mt-5">
    <div class="d-flex flex-wrap justify-content-evenly">
        @foreach ($products_display as $key => $item)
            @livewire('product.product-card-livewire',['data' => $item], key($key))
        @endforeach
    </div>
    <div class="d-flex my-5">
        <button wire:click='getProductPaginate' class="btn cs-btn-lg mx-auto">VIEW MORE</button> 
    </div>
</div>