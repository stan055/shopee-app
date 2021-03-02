<!-- Top Sale -->
<section id="top-sale">
    <div class="container py-5">
        <h4 class="font-robik font-size-20">Top Sale</h4>
        <hr>

        <!-- Owl carousel -->
        <div class="owl-carousel owl-theme">
            @foreach ($products as $product)
                <div class="item py-2">
                    <div class="product font-rale">
                        <a href="product/{{ $product->id }}">
                            <img src="{{ $product->image_path }}" height="240" alt="product1" >
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
        <!-- !Owl carousel -->

    </div>
</section>
<!-- !Top Sale -->