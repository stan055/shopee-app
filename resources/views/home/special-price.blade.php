<!-- Special Price -->
<section id="special-price">
    <div class="container mt-3 mb-4">
        <h4 class="font-rubik font-size-20">Special Price</h4>
        <div id="filters" class="button-group text-right font-baloo font-size-16">
            <button class="btn is-checked btn-light" data-filter="">All Brands</button>
            <button class="btn btn-light" data-filter=".Apple">Apple</button>
            <button class="btn btn-light" data-filter=".Samsung">Samsung</button>
            <button class="btn btn-light" data-filter=".Redmi">Redmi</button>
        </div>

        <div class="grid">
            @foreach ($products as $product)
                <div class="grid-item {{ $product->brand }} border">
                    <div class="item py-2" style="width: 200px;">
                        <div class="product font-rale">
                            <a href="product/{{ $product->id }}">
                                <img src="{{ $product->image_path }}" height="240" alt="product1">
                            </a>
                            <div class="text-center">
                                <h6>{{ $product->name }}</h6>
                                <div class="rating text-warning font-size12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>${{ $product->price }}</span>
                                </div>
                                <a href="/add-to-cart/{{ $product->id }}">
                                    <button class="btn btn-warning font-size-12">Add to Cart</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>

</section>
<!-- !Special Price -->