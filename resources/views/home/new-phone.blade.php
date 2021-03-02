<section id="new-phones">
    <div class="container mt-3 mb-4">
        <h4 class="font-rubis font-size-20">New Phones</h4>
        <hr>
        <div class="owl-carousel owl-theme">
            @foreach ($products as $product)
                <div class="item py-2 bg-light">
                    <div class="product font-rale">
                        <a href="/product/{{ $product->id }}">
                            <img src="{{ asset($product->image_path) }}" height="240" alt="product1">
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
            @endforeach
        </div>
    </div>
</section>