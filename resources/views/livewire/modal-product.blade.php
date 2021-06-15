<div>
    @foreach ($modalProduct as $key => $item)
    <div
      class="modal fade theme1 style1 quick-modal"
      id="quick-view{{ $item['id'] }}"
      tabindex="-1"
      role="dialog"
      >
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-8 mx-auto col-lg-5 mb-5 mb-lg-0">
                <div class="product-sync-init mb-20">
                  <div class="single-product">
                    <div class="product-thumb">
                      <img
                        src="{{ asset('uploads/product/'.$item['image']) }}"
                        alt="product-thumb"
                      />
                    </div>
                  </div>
                  <!-- single-product end -->
                  @foreach ($item['img'] as $detailImg)
                    <div class="single-product">
                      <div class="product-thumb">
                        <img
                          src="{{ asset('uploads/product/'.$detailImg['image']) }}"
                          alt="product-thumb"
                        />
                      </div>
                    </div>
                  @endforeach
                  <!-- single-product end -->
                </div>

                <div class="product-sync-nav">
                  <div class="single-product">
                    <div class="product-thumb">
                      <a href="javascript:void(0)">
                        <img
                          src="{{ asset('uploads/product/'.$item['image']) }}"
                          alt="product-thumb"
                      /></a>
                    </div>
                  </div>
                  @foreach ($item['img'] as $detailImg)
                    <div class="single-product">
                      <div class="product-thumb">
                        <a href="javascript:void(0)">
                          <img
                            src="{{ asset('uploads/product/'.$detailImg['image']) }}"
                            alt="product-thumb"
                        /></a>
                      </div>
                    </div>
                  @endforeach
                  <!-- single-product end -->
                </div>
              </div>
              <div class="col-lg-7">
                <div class="modal-product-info">
                  <div class="product-head">
                    <h2 class="title">
                      {{ $item['name'] }}
                    </h2>
                    <div class="star-content mb-20">
                      <span class="star-on"><i class="fas fa-star"></i> </span>
                      <span class="star-on"><i class="fas fa-star"></i> </span>
                      <span class="star-on"><i class="fas fa-star"></i> </span>
                      <span class="star-on"><i class="fas fa-star"></i> </span>
                      <span class="star-on de-selected"
                        ><i class="fas fa-star"></i>
                      </span>
                    </div>
                  </div>
                <form action="" wire:submit.prevent="submit()">
                  <div class="product-body">
                    <span class="product-price text-center">
                      <span class="new-price quick-view-price"></span>
                    </span>
                    <p>
                      {{ $item['description'] }}
                    </p>
                    <div class="d-flex mt-30">
                      <div class="product-size">
                        <h3 class="title">Size</h3>
                        <select name="product_size" class="price-option">
                          @foreach ($item['size'] as $sz)
                            <option value="{{ $sz['id'] }}" price="{{ ($sz['sale_price']==0) ? $sz['price'] : $sz['sale_price'] }}" wire:model="modalProduct.{{ $index }}.size_id">{{ $sz['size'] }}</option>  
                          @endforeach
                        </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-footer">
                      <div
                        class="product-count style d-flex flex-column flex-sm-row my-4"
                        >
                        <div class="count d-flex">
                          <input type="number" name="quantity[{{ $key }}]" min="1" max="100" step="1" wire:model="modalProduct.{{ $index }}.quantity"  />
                          <div class="button-group">
                            <button class="count-btn increment">
                              <i class="fas fa-chevron-up"></i>
                            </button>
                            <button class="count-btn decrement">
                              <i class="fas fa-chevron-down"></i>
                            </button>
                          </div>
                        </div>
                        <div>
                          <button class="btn btn-dark btn--xl mt-5 mt-sm-0">
                            <a  class="mr-2"><i class="ion-android-add"></i></span>
                            Add to cart
                          </a>
                        </div>
                      </div>
                    <div class="addto-whish-list">
                      @if ($item->check())
                                <a wire:click="remove({{ $item['id'], $key }})"><i class="icon-heart heart-red"></i> Remove from wishlist</a>
                                @else
                                <a href="{{ route('addWishlist', ['id'=>$item->id]) }}"><i class="icon-heart"></i> Add to wishlist</a>
                                @endif
                                <a @if ($compare->check($item->id))
                                    href="#"
                                    data-toggle="modal"
                                    data-target="#compare"
                                  @else
                                    href="{{ route('addCompare', ['id'=>$item->id]) }}"
                                  @endif><i class="icon-shuffle"></i> Add to compare</a>
                    </div>
                    <div class="pro-social-links mt-10">
                      <ul class="d-flex align-items-center">
                        <li class="share">Share</li>
                        <li>
                          <a href="https://www.facebook.com/bquyptit2001/"><i class="ion-social-facebook"></i></a>
                        </li>
                        <li>
                          <a href="https://www.facebook.com/bquyptit2001/"><i class="ion-social-twitter"></i></a>
                        </li>
                        <li>
                          <a href="https://www.facebook.com/bquyptit2001/"><i class="ion-social-google"></i></a>
                        </li>
                        <li>
                          <a href="https://www.facebook.com/bquyptit2001/"><i class="ion-social-pinterest"></i></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  @endforeach
</div>
