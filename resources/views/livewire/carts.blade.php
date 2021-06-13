<div>
    {{-- <form action="{{route('cart-update')}}" method="post">
        @csrf --}}
    <section class="whish-list-section theme1 pt-80 pb-80">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h3 class="title mb-30 pb-25 text-capitalize">Your cart items</h3>
            <div class="table-responsive">
              <table class="table">
                <thead class="thead-light">
                  <tr>
                    <th class="text-center" scope="col">Product Image</th>
                    <th class="text-center" scope="col">Product Name</th>
                    <th class="text-center" scope="col">Size</th>
                    <th class="text-center" scope="col">Qty</th>
                    <th class="text-center" scope="col">Price</th>
                    <th class="text-center" scope="col">action</th>
                    <th class="text-center" scope="col">Checkout</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($cart->items as $key => $item)
                      <tr>
                        <th class="text-center" scope="row">
                          <img src="{{asset('uploads/product/'.$item['image'])}}" alt="img" />
                        </th>
                        <td class="text-center">
                          <span class="whish-title"
                            >{{$item['name']}}</span
                          >
                        </td>
                        <td class="text-center">
                          <p>{{ $item['size'] }}</p>
                        </td>
                        <td class="text-center">
                          <div class="product-count style">
                            <div class="count d-flex justify-content-center">
                              <input
                                type="number"
                                min="1"
                                step="1"
                                {{-- value="{{$item['quantity']}}" --}}
                                wire:model="cart.{{ $key }}.quantity"
                                wire:change="update()"
                                name="quantity[{{$item['id']}}]"
                              />
                              <div class="button-group">
                                <button class="count-btn increment">
                                  <i wire:click="increase({{ $item['id'] }})" class="fas fa-chevron-up"></i>
                                </button>
                                <button class="count-btn decrement">
                                  <i wire:click="decrease({{ $item['id'] }})"class="fas fa-chevron-down"></i>
                                </button>
                              </div>
                            </div>
                          </div>
                        </td>
                        <td class="text-center">
                          <span class="whish-list-price"> {{$item['price']*$item['quantity']}} $ </span>
                        </td>
  
                        <td class="text-center">
                          <a wire:click="delete({{ $item['id'] }})"  style="cursor: pointer;">
                            <span class="trash"><i class="fas fa-trash-alt"></i> </span
                          ></a>
                        </td>
                        <td class="text-center">
                          <a href="#" class="btn btn-dark btn--lg">add to cart</a>
                        </td>
                      </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- product tab end -->
    <div class="check-out-section pb-80">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <div class="billing-info-wrap">
              <h3 class="title">calculate shipping</h3>
              <form class="personal-information" action="https://htmldemo.hasthemes.com/looki/looki/assets/php/contact.php">
                <div class="row">
                  <div class="col-lg-6 col-md-6">
                    <div class="billing-select mb-20px">
                      <select id="inputState" class="form-select mb-3">
                        <option>Select country</option>
                        <option>Azerbaijan</option>
                        <option>Bahamas</option>
                        <option>Bahrain</option>
                        <option>Bangladesh</option>
                        <option>Barbados</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="billing-select mb-20px">
                      <select id="inputState2" class="form-select mb-3">
                        <option>Select State</option>
                        <option>Azerbaijan</option>
                        <option>Bahamas</option>
                        <option>Bahrain</option>
                        <option>Bangladesh</option>
                        <option>Barbados</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="billing-info mb-20px">
                      <input placeholder="Postcode / ZIP" type="text" />
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="billing-select mb-20px">
                      <a href="#" class="btn btn-primary check-out-btn">estimate</a>
                    </div>
                  </div>
                  <div class="col-12">
                    <h3 class="coupon-title">Discount coupon Code</h3>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="billing-info mb-20px">
                      <input placeholder="coupon Code" type="text" />
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <a href="#" class="btn btn-primary check-out-btn">apply code</a>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="col-lg-5 mt-4 mt-lg-0">
            <div class="your-order-area">
              <div class="your-order-wrap gray-bg-4">
                <div class="your-order-product-info">
                  <div class="your-order-top">
                    <ul>
                      <li>Product</li>
                      <li>Total</li>
                    </ul>
                  </div>
  
                  <div class="your-order-bottom">
                    <ul>
                      <li class="your-order-shipping">Shipping</li>
                      <li>Free shipping</li>
                    </ul>
                  </div>
                  <div class="your-order-total mb-0">
                    <ul>
                      <li class="order-total">Total</li>
                      <li>${{ $cart->total_price() }}</li>
                    </ul>
                  </div>
                </div>
              </div>
  
  
                    <div class="Place-order mt-25">
                        <button type="submit" class="btn btn--lg btn-primary mr-3" >update cart</button>
                        <a class="btn btn--lg btn-primary my-2 my-sm-0" href="{{ route('checkout') }}"
                        >checkout</a
                        >
                    </div>
  
            </div>
          </div>
        </div>
      </div>
    </div>
    {{-- </form> --}}
</div>
