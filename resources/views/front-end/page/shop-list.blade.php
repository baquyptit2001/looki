@extends('front-end.layout.master')

@section('title', 'ShopList')

@section('main')
    <!-- breadcrumb-section start -->
    <nav class="breadcrumb-section theme1 bg-lighten2 pt-110 pb-110">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h2 class="title pb-4 text-dark text-capitalize">
                            Beauty & Cosmetics
                        </h2>
                    </div>
                </div>
                <div class="col-12">
                    <ol
                        class="breadcrumb bg-transparent m-0 p-0 align-items-center justify-content-center"
                    >
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Beauty & Cosmetics
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </nav>
    <!-- breadcrumb-section end -->
    <!-- product tab start -->
    <div class="product-tab bg-white pt-80 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 mb-30">
                    <div class="grid-nav-wraper bg-lighten2 mb-30">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-6 mb-3 mb-md-0">
                                <nav class="shop-grid-nav">
                                    <ul
                                        class="nav nav-pills align-items-center"
                                        id="pills-tab"
                                        role="tablist"
                                    >
                                        <li class="nav-item" >
                                            <a
                                                class="nav-link"
                                                id="pills-home-tab"
                                                data-toggle="pill"
                                                href="#pills-home"
                                                role="tab"
                                                aria-controls="pills-home"
                                                aria-selected="true"
                                            >
                                                <i class="fa fa-th"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item mr-0">
                                            <a
                                                class="nav-link active"
                                                id="pills-profile-tab"
                                                data-toggle="pill"
                                                href="#pills-profile"
                                                role="tab"
                                                aria-controls="pills-profile"
                                                aria-selected="false"
                                            ><i class="fa fa-list"></i
                                                ></a>
                                        </li>
                                        <li>
                    <span class="total-products text-capitalize"
                    >there are {{$total}} product</span
                    >
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="col-12 col-md-6 position-relative">
                                <div class="shop-grid-button d-flex align-items-center">
                                    <span class="sort-by">Sort by:</span>
                                    <select
                                        class="form-select custom-select"
                                        aria-label="Default select example"
                                    >
                                        <option selected>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- product-tab-nav end -->
                    <div class="tab-content" id="pills-tabContent">
                        <!-- first tab-pane -->
                        <div
                            class="tab-pane fade"
                            id="pills-home"
                            role="tabpanel"
                            aria-labelledby="pills-home-tab"
                        >
                            <div class="row grid-view theme1">
                                @foreach($product as $item)
                                    <div class="col-sm-6 col-lg-4 mb-30">
                                        <div class="card product-card">
                                            <div class="card-body">
                                                <div class="product-thumbnail position-relative">
                                                    <span class="badge badge-danger top-right">New</span>
                                                    <a href="single-product.html">
                                                        <img
                                                            class="first-img"
                                                            src="{{asset('uploads/product/'.$item->image)}}"
                                                            alt="thumbnail"
                                                        />
                                                    </a>
                                                    <!-- product links -->
                                                    <ul class="actions d-flex justify-content-center">
                                                        <li>
                                                            <a class="action" href="wishlist.html">
                            <span
                                data-toggle="tooltip"
                                data-placement="bottom"
                                title="add to wishlist"
                                class="icon-heart"
                            >
                            </span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                class="action"
                                                                href="#"
                                                                data-toggle="modal"
                                                                data-target="#compare"
                                                            >
                            <span
                                data-toggle="tooltip"
                                data-placement="bottom"
                                title="Add to compare"
                                class="icon-shuffle"
                            ></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                class="action"
                                                                href="#"
                                                                data-toggle="modal"
                                                                data-target="#quick-view"
                                                            >
                            <span
                                data-toggle="tooltip"
                                data-placement="bottom"
                                title="Quick view"
                                class="icon-magnifier"
                            ></span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <!-- product links end-->
                                                </div>
                                                <div class="product-desc py-0 px-0">
                                                    <h3 class="title" title="{{$item->name}}" style="text-overflow:ellipsis; overflow: hidden; white-space: nowrap;">
                                                        <a href="{{ route('product', ['id'=>$item->id]) }}"
                                                        >{{$item->name}}</a
                                                        >
                                                    </h3>
                                                    <div class="star-rating">
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star de-selected"></span>
                                                    </div>
                                                    <div
                                                        class="d-flex align-items-center justify-content-between"
                                                    >
                                                        @if($item->sale_price==0)
                                                            <span class="product-price">{{$item->price}}$</span>
                                                        @else
                                                            <span class="product-price">
                                                                <span><del>{{$item->price}}$</del></span>
                                                                <span class="onsale">{{$item->sale_price}}$</span>
                                                            </span>
                                                        @endif

                                                        <div class="d-flex justify-content-end w-50">
                                                            <button
                                                                class="pro-btn"
                                                                data-toggle="modal"
                                                                data-target="#add-to-cart"
                                                            >
                                                                <i class="icon-basket"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product-list End -->
                                    </div>
                                @endforeach
                            </div>
                            <div class="row">
                                <div class="col-12 d-flex justify-content-around">
                                    <nav class="pagination-section mt-30">
                                        {{$product->links("pagination::bootstrap-4")}}
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <!-- second tab-pane -->
                        <div
                            class="tab-pane fade show active"
                            id="pills-profile"
                            role="tabpanel"
                            aria-labelledby="pills-profile-tab"
                        >
                            <div class="row grid-view-list theme1">
                                @foreach($product as $item)
                                    <div class="col-12 mb-30">
                                        <div class="card product-card">
                                            <div class="card-body">
                                                <div class="media flex-column flex-md-row">
                                                    <div class="product-thumbnail position-relative">
                        <span class="badge badge-danger top-right"
                        >featured</span
                        >
                                                        <a href="single-product.html">
                                                            <img
                                                                class="first-img"
                                                                src="{{asset('uploads/product/'.$item->image)}}"
                                                                alt="thumbnail"
                                                                style="width: 400px !important;"
                                                            />
                                                        </a>
                                                        <!-- product links -->
                                                        <ul class="actions d-flex justify-content-center">
                                                            <li>
                                                                <a class="action" href="wishlist.html">
                              <span
                                  data-toggle="tooltip"
                                  data-placement="bottom"
                                  title="add to wishlist"
                                  class="icon-heart"
                              >
                              </span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a
                                                                    class="action"
                                                                    href="#"
                                                                    data-toggle="modal"
                                                                    data-target="#compare"
                                                                >
                              <span
                                  data-toggle="tooltip"
                                  data-placement="bottom"
                                  title="Add to compare"
                                  class="icon-shuffle"
                              ></span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a
                                                                    class="action"
                                                                    href="#"
                                                                    data-toggle="modal"
                                                                    data-target="#quick-view"
                                                                >
                              <span
                                  data-toggle="tooltip"
                                  data-placement="bottom"
                                  title="Quick view"
                                  class="icon-magnifier"
                              ></span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <!-- product links end-->
                                                    </div>
                                                    <div class="media-body pl-md-4">
                                                        <div class="product-desc py-0 px-0">
                                                            <h3 class="title">
                                                                <a href="{{ route('product', ['id'=>$item->id]) }}"
                                                                >{{$item->name}}</a
                                                                >
                                                            </h3>
                                                            <div class="star-rating mb-10">
                                                                <span class="ion-ios-star"></span>
                                                                <span class="ion-ios-star"></span>
                                                                <span class="ion-ios-star"></span>
                                                                <span class="ion-ios-star"></span>
                                                                <span class="ion-ios-star de-selected"></span>
                                                            </div>
                                                            @if($item->sale_price==0)
                                                                <span class="product-price">{{$item->price}}$</span>
                                                            @else
                                                                <span class="product-price">
                                                                <span><del>{{$item->price}}$</del></span>
                                                                <span class="onsale">{{$item->sale_price}}$</span>
                                                            </span>
                                                            @endif
                                                        </div>
                                                        <ul class="product-list-des">
                                                            <li>
                                                                Block out the haters with the fresh adidas®
                                                                Originals Kaval Windbreaker Face Cream.
                                                            </li>
                                                            <li>Part of the Kaval Collection.</li>
                                                            <li>
                                                                Regular fit is eased, but not sloppy, and perfect
                                                                for any activity.
                                                            </li>
                                                            <li>
                                                                Plain-woven Face Cream specifically constructed for
                                                                freedom of movement.
                                                            </li>
                                                        </ul>
                                                        <div class="availability-list mb-20">
                                                            <p>Availability: <span>1200 In Stock</span></p>
                                                        </div>
                                                        <button
                                                            class="btn btn-dark btn--xl"
                                                            data-toggle="modal"
                                                            data-target="#add-to-cart"
                                                        >
                                                            Add to cart
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product-list End -->
                                    </div>
                                @endforeach
                            </div>
                            <div class="row">
                                <div class="col-12 d-flex justify-content-around">
                                    <nav class="pagination-section mt-30">
                                        {{$product->links("pagination::bootstrap-4")}}
                                    </nav>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="col-lg-3 mb-30 order-lg-first">
                    <aside class="left-sidebar theme1">
                        <!-- search-filter start -->
                        <div class="search-filter">
                            <div class="sidbar-widget pt-0">
                                <h4 class="title">Beauty & Cosmetics</h4>
                            </div>
                        </div>

                        <ul id="offcanvas-menu2" class="blog-ctry-menu">
                            @foreach ($cat as $item)
                                <li>
                                    <a href="javascript:void(0)">{{ $item->name }}</a>
                                    <ul class="category-sub-menu">
                                        @foreach ($item->child as $child)
                                            <li><a href="{{ route('category', ['id'=>$child->id]) }}">{{ $child->name }}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                            @endforeach
                        </ul>

                        <div class="search-filter">
                            <form action="#">
                                <div class="sidbar-widget mt-10">
                                    <h4 class="title">Filter By</h4>
                                    <h4 class="sub-title pt-10">Categories</h4>
                                    <div class="widget-check-box">
                                        <input type="checkbox" id="20820" />
                                        <label for="20820">Digital Cameras <span>(13)</span></label>
                                    </div>
                                    <div class="widget-check-box">
                                        <input type="checkbox" id="20821" />
                                        <label for="20821">Camcorders <span>(13)</span></label>
                                    </div>
                                    <div class="widget-check-box">
                                        <input type="checkbox" id="20822" />
                                        <label for="20822">Camera Drones<span>(13)</span></label>
                                    </div>
                                </div>
                                <!-- sidbar-widget -->
                                <div class="sidbar-widget mt-10">
                                    <h4 class="sub-title">Price</h4>
                                    <div class="price-filter mt-10">
                                        <div class="price-slider-amount">
                                            <input
                                                type="text"
                                                id="amount"
                                                name="price"
                                                readonly
                                                placeholder="Add Your Price"
                                            />
                                        </div>
                                        <div id="slider-range"></div>
                                    </div>
                                </div>
                                <div class="sidbar-widget mt-10">
                                    <h4 class="sub-title">Size</h4>
                                    <div class="widget-check-box">
                                        <input type="checkbox" id="test9" />
                                        <label for="test9">s <span>(2)</span></label>
                                    </div>
                                    <div class="widget-check-box">
                                        <input type="checkbox" id="test10" />
                                        <label for="test10">m <span>(2)</span></label>
                                    </div>
                                    <div class="widget-check-box">
                                        <input type="checkbox" id="test11" />
                                        <label for="test11">l <span>(2)</span></label>
                                    </div>
                                    <div class="widget-check-box">
                                        <input type="checkbox" id="test12" />
                                        <label for="test12">xl <span>(2)</span></label>
                                    </div>
                                </div>
                                <!-- sidbar-widget -->
                                <div class="sidbar-widget mt-10">
                                    <h4 class="sub-title">color</h4>
                                    <div class="widget-check-box color-grey">
                                        <input type="checkbox" id="20826" />
                                        <label for="20826">grey <span>(4)</span></label>
                                    </div>
                                    <div class="widget-check-box color-white">
                                        <input type="checkbox" id="20827" />
                                        <label for="20827">white <span>(3)</span></label>
                                    </div>
                                    <div class="widget-check-box color-black">
                                        <input type="checkbox" id="20828" />
                                        <label for="20828">black <span>(6)</span></label>
                                    </div>
                                    <div class="widget-check-box color-camel">
                                        <input type="checkbox" id="20829" />
                                        <label for="20829">camel <span>(2)</span></label>
                                    </div>
                                </div>
                                <!-- sidbar-widget -->
                                <div class="sidbar-widget mt-10">
                                    <h4 class="sub-title">Brand</h4>
                                    <div class="widget-check-box">
                                        <input type="checkbox" id="20824" />
                                        <label for="20824">Graphic Corner<span>(5)</span></label>
                                    </div>
                                    <div class="widget-check-box">
                                        <input type="checkbox" id="20825" />
                                        <label for="20825">Studio Design<span>(8)</span></label>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- search-filter end -->
                        <div class="product-widget mb-60 mt-30">
                            <h3 class="title">Product Tags</h3>
                            <ul class="product-tag d-flex flex-wrap">
                                <li><a href="#">shopping</a></li>
                                <li><a href="#">New products</a></li>
                                <li><a href="#">Accessories</a></li>
                                <li><a href="#">sale</a></li>
                            </ul>
                        </div>
                        <!--second banner start-->
                        <div class="banner hover-animation position-relative overflow-hidden">
                            <a href="shop-grid-4-column.html" class="d-block">
                                <img src="assets/img/banner/2.jpg" alt="img" />
                            </a>
                        </div>
                        <!--second banner end-->
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- product tab end -->
@endsection
