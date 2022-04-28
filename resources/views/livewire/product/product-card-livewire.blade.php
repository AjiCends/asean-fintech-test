<div class="game-card my-3 position-relative">
    <img class="img-fluid" src="{{ asset('storage/images/game-card/image-57.png') }}"
        alt="game-image">
    <div class="descriptions p-3 position-absolute">
        <p class="text-white">
            {{ $product->description }}
        </p>
    </div>
    <div class="title p-3 w-100 position-absolute">
        <h4 class="fw-bold text-white">{{ $product->title }}</h4>
    </div>
</div>
