@extends('layouts.app')

@section('content')
    <div class="container">
            <!-- Product -->
    <section id="product" class="py-3">
        <div class="container">
          <div class="row">
            <div class="col-sm-6">
              <img src="{{ asset($product->image_path) }}" alt="product" class="img-fluid">
              <div class="form-row pt-4 font-size-16 font-baloo">
                <div class="col">
                  <button type="submit" class="btn btn-danger form-control">Proceed to Buy</button>
                </div>
                <div class="col">
                  <a href="/add-to-cart/{{ $product->id }}">
                    <button type="submit" class="btn btn-warning form-control">Add to Card</button>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 py-5">
              <h5 class="font-baloo font-size-20">{{ $product->name }}</h5>
              <small>by {{ $product->brand }}</small>
              <div class="d-flex">
                <div class="rating text-warning font-size12">
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="far fa-star"></i></span>
                </div>
                <a href="#" class="px-2 font-rale font-size-14">20,534 ratings | 1000+ answered question</a>
              </div>
              <hr class="m-0">
  
              <!-- product price -->
              <table class="my-3">
                <tr class="font-rale font-size-14">
                  <td>M.R.P.</td>
                  <td><strike>${{ $product->price }}</strike></td>
                </tr>
                <tr class="font-rale font-size-14">
                  <td>Deal Price</td>
                  <td class="font-size-20 text-danger">$<span>{{ $product->price }}</span><small
                      class="text-dark font-size-12">&nbsp;Inclusive of all taxes</small></td>
                </tr>
                <tr class="font-rale font-size-14">
                  <td>You Save</td>
                  <td><span class="font-size-16 text-danger">$10.00</span></td>
                </tr>
              </table>
              <!-- !product price -->
  
              <!-- policy -->
              <div class="policy">
                <div class="d-flex">
                  <div class="return text-center mr-5">
                    <div class="font-size-20 my-2 color-second">
                      <span class="fas fa-retweet border p-3 rounded-circle"></span>
                    </div>
                    <a href="#" class="font-rale font-size-12">10 Days <br>Replaycement</a>
                  </div>
                  <div class="return text-center mr-5">
                    <div class="font-size-20 my-2 color-second">
                      <span class="fas fa-truck border p-3 rounded-circle"></span>
                    </div>
                    <a href="#" class="font-rale font-size-12">Daily Tuition <br>Delivered</a>
                  </div>
                  <div class="return text-center mr-5">
                    <div class="font-size-20 my-2 color-second">
                      <span class="fas fa-check-double border p-3 rounded-circle"></span>
                    </div>
                    <a href="#" class="font-rale font-size-12">1 Year <br>Warranty</a>
                  </div>
                </div>
              </div>
              <!-- !policy -->
              <hr>
  
              <!-- order-detail -->
              <div id="order-details" class="font-rale d-flex flex-column text-dark">
                <small>Delivery by : Mar 29 - Apr 1</small>
                <small>Sold by <a href="#">Daily Electronics</a> (4.5 out of 5 | 18,198 ratings)</small>
                <small><i class="fas fa-map-marker-alt color-primary"></i>&nbsp;&nbsp;Deliver to Customer - 424201</small>
              </div>
              <!-- !order-detail -->
  
              <div class="row">
                <div class="col-6">
                  <!-- color -->
                  <div class="color my-3">
                    <div class="d-flex justify-content-between">
                      <h6 class="font-baloo">Color:</h6>
                      <div class="p-2 color-yellow-bg rounded-circle"><button
                          class="btn color-yellow-bg font-size-14"></button></div>
                      <div class="p-2 color-primary-bg rounded-circle"><button
                          class="btn color-primary-bg font-size-14"></button></div>
                      <div class="p-2 color-second-bg rounded-circle"><button
                          class="btn color-second-bg font-size-14"></button></div>
                    </div>
                  </div>
                  <!-- !color -->
                </div>
                <div class="col-6">
                  <!-- qty -->
                  <div class="qty d-flex">
                    <h6 class="font-baloo">Qty</h6>
                    <div class="px-4 d-flex font-rale">
                      <button data-id="pro2" class="qty-up border bg-light"><i class="fas fa-angle-up"></i></button>
                      <input data-id="pro2" type="text" class="qty_input border px-2 w-50 bg-light" disabled value="1" placeholder="1">
                      <button data-id="pro2" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                    </div>
                  </div>
                  <!-- !qty -->
                </div>
              </div>
  
              <!-- size -->
              <div class="size my-3">
                <h6 class="font-baloo">Size:</h6>
                <div class="d-flex justify-content-between w-75">
                  <div class="font-rubik border p-2">
                    <div class="btn p-0 font-size-14">4GB RAM</div>
                  </div>
                  <div class="font-rubik border p-2">
                    <div class="btn p-0 font-size-14">6GB RAM</div>
                  </div>
                  <div class="font-rubik border p-2">
                    <div class="btn p-0 font-size-14">8GB RAM</div>
                  </div>
                </div>
              </div>
              <!-- !size -->
  
            </div>
            <div class="col-12">
              <h6 class="font-rubik">Product Description</h6>
              <hr>
              <p class="font-rale font-size-14">{{ $product->body }}</p>
              <p class="font-rale font-size-14">{{ $product->body }}</p>
            </div>
          </div>
        </div>
      </section>
      <!-- !product -->
    </div>

    @include('home.new-phone')
@endsection