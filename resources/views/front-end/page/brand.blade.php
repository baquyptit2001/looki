@extends('front-end.layout.master')

@section('title', $brand->name)

@section('main')
<nav class="breadcrumb-section theme1 bg-lighten2 pt-110 pb-110">
    <div class="container">
        <div class="row">
        <div class="col-12">
            <div class="section-title text-center">
            <h2 class="title pb-4 text-dark text-capitalize">
                {{ $brand->name }}
            </h2>
            </div>
        </div>
        <div class="col-12">
            <ol class="breadcrumb bg-transparent m-0 p-0 align-items-center justify-content-center">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">
                Beauty &amp; Cosmetics
            </li>
            </ol>
        </div>
        </div>
    </div>
</nav>
<div class="product-tab bg-white pt-80 pb-80">
    <div class="container">
        <div class="grid-nav-wraper bg-lighten2 mb-30">
            <div class="row align-items-center">
                <div class="col-12 col-md-6 mb-3 mb-md-0">
                    <nav class="shop-grid-nav">
                        <ul class="nav nav-pills align-items-center" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home"
                                    role="tab" aria-controls="pills-home" aria-selected="true">
                                    <i class="fa fa-th"></i>
                                </a>
                            </li>
                            <li class="nav-item mr-0">
                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"
                                    role="tab" aria-controls="pills-profile" aria-selected="false"><i
                                        class="fa fa-list"></i></a>
                            </li>
                            <li>
                                <span class="total-products text-capitalize">There are {{ count($product) }} products.</span>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-12 col-md-6 position-relative">
                    <div class="shop-grid-button d-flex align-items-center">
                        <span class="sort-by">Sort by:</span>
                        <button class="d-flex justify-content-between" type="button" id="dropdownMenuButton"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Relevance <span class="ion-android-arrow-dropdown"></span>
                        </button>
                        <div class="dropdown-menu shop-grid-menu" aria-labelledby="dropdownMenuButton" style="">
                            <a class="dropdown-item" href="#">Relevance</a>
                            <a class="dropdown-item" href="#"> Name, A to Z</a>
                            <a class="dropdown-item" href="#"> Name, Z to A</a>
                            <a class="dropdown-item" href="#"> Price, low to high</a>
                            <a class="dropdown-item" href="#"> Price, high to low</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- product-tab-nav end -->
        <div class="tab-content" id="pills-tabContent">
            @if (count($product))
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="row grid-view theme1">
                        @foreach ($product as $item)
                            <div class="col-sm-6 col-md-4 mb-30">
                                <div class="card product-card">
                                    <div class="card-body">
                                        <div class="product-thumbnail position-relative">
                                            <span class="badge badge-danger top-right">New</span>
                                            <a href="{{ route('product', ['id'=>$item->id]) }}">
                                                <img class="first-img" src="{{ asset('uploads/product/'.$item->image) }}" alt="thumbnail">
                                            </a>
                                            <!-- product links -->
                                            <ul class="actions d-flex justify-content-center">
                                                <li>
                                                    @if ($item->check())
                                                    <a class="action" href="{{ route('removeSwitchWishlist', ['id'=>$item->id]) }}">
                                                    <span
                                                        data-toggle="tooltip"
                                                        data-placement="bottom"
                                                        title="remove from wishlist"
                                                        class="icon-heart heart-red"
                                                    >
                                                    </span>
                                                                        </a>
                                                    @else
                                                    <a class="action" href="{{ route('addWishlist', ['id'=>$item->id]) }}">
                                                    <span
                                                        data-toggle="tooltip"
                                                        data-placement="bottom"
                                                        title="add to wishlist"
                                                        class="icon-heart"
                                                    >
                                                    </span>
                                                                        </a>
                                                    @endif
                                                </li>
                                                <li>
                                                    <a class="action" @if ($compare->check($item->id))
                                                        href="#"
                                                        data-toggle="modal"
                                                        data-target="#compare"
                                                      @else
                                                        href="{{ route('addCompare', ['id'=>$item->id]) }}"
                                                      @endif>
                                                        <span data-toggle="tooltip" data-placement="bottom" title=""
                                                            class="icon-shuffle" data-original-title="Add to compare"></span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="action" href="#" data-toggle="modal" data-target="#quick-view{{ $item->id }}">
                                                        <span data-toggle="tooltip" data-placement="bottom" title=""
                                                            class="icon-magnifier" data-original-title="Quick view"></span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <!-- product links end-->
                                        </div>
                                        <div class="product-desc py-0 px-0">
                                            <h3 class="title">
                                                <a href="{{ route('product', ['id'=>$item->id]) }}">{{ $item->name }}</a>
                                            </h3>
                                            <div class="star-rating">
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star de-selected"></span>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                @if($item->sale_price==0)
                                                    <span class="product-price">{{$item->price}}$</span>
                                                @else
                                                    <span class="product-price">
                                                        <span><del>{{$item->price}}$</del></span>
                                                        <span class="onsale">{{$item->sale_price}}$</span>
                                                    </span>
                                                @endif
                                                <a class="pro-btn" href="{{route('add-cart', $item->id)}}">
                                                    <i class="icon-basket"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- product-list End -->
                            </div>
                        @endforeach
                    </div>
                </div>
                <!-- second tab-pane -->
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="row grid-view-list theme1">
                        @foreach ($product as $item)
                            <div class="col-12 mb-30">
                                <div class="card product-card">
                                    <div class="card-body">
                                        <div class="media flex-column flex-md-row">
                                            <div class="product-thumbnail position-relative">
                                                <span class="badge badge-danger top-right">sale</span>
                                                <a href="{{ route('product', ['id'=>$item->id]) }}">
                                                    <img class="first-img" src="{{ asset('uploads/product/'.$item->image) }}" alt="thumbnail" style="width:400px !important;">
                                                </a>
                                                <!-- product links -->
                                                <ul class="actions d-flex justify-content-center">
                                                    <li>
                                                        @if ($item->check())
                                                        <a class="action" href="{{ route('removeSwitchWishlist', ['id'=>$item->id]) }}">
                                                        <span
                                                            data-toggle="tooltip"
                                                            data-placement="bottom"
                                                            title="remove from wishlist"
                                                            class="icon-heart heart-red"
                                                        >
                                                        </span>
                                                                            </a>
                                                        @else
                                                        <a class="action" href="{{ route('addWishlist', ['id'=>$item->id]) }}">
                                                        <span
                                                            data-toggle="tooltip"
                                                            data-placement="bottom"
                                                            title="add to wishlist"
                                                            class="icon-heart"
                                                        >
                                                        </span>
                                                                            </a>
                                                        @endif
                                                    </li>
                                                    <li>
                                                        <a class="action" @if ($compare->check($item->id))
                                                            href="#"
                                                            data-toggle="modal"
                                                            data-target="#compare"
                                                          @else
                                                            href="{{ route('addCompare', ['id'=>$item->id]) }}"
                                                          @endif>
                                                            <span data-toggle="tooltip" data-placement="bottom" title=""
                                                                class="icon-shuffle"
                                                                data-original-title="Add to compare"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="action" href="#" data-toggle="modal"
                                                            data-target="#quick-view{{ $item->id }}">
                                                            <span data-toggle="tooltip" data-placement="bottom" title=""
                                                                class="icon-magnifier" data-original-title="Quick view"></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <!-- product links end-->
                                            </div>
                                            <div class="media-body pl-md-4">
                                                <div class="product-desc py-0 px-0">
                                                    <h3 class="title">
                                                        <a href="{{ route('product', ['id'=>$item->id]) }}">{{ $item->name }}</a>
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
                                                        Block out the haters with the fresh adidas® Originals
                                                        Kaval Windbreaker Face Cream.
                                                    </li>
                                                    <li>Part of the Kaval Collection.</li>
                                                    <li>
                                                        Regular fit is eased, but not sloppy, and perfect for
                                                        any activity.
                                                    </li>
                                                    <li>
                                                        Plain-woven Face Cream specifically constructed for
                                                        freedom of movement.
                                                    </li>
                                                </ul>
                                                <div class="availability-list mb-20">
                                                    <p>Availability: <span>1200 In Stock</span></p>
                                                </div>
                                                <a class="btn btn-dark btn--xl" href="{{route('add-cart', $item->id)}}">
                                                    Add to cart
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- product-list End -->
                            </div>
                        @endforeach
                    </div>
                </div>
            @else
                <p>Không có sản phẩm nào</p>
            @endif
            <!-- first tab-pane -->
        </div>
        <div class="row">
            <div class="col-12">
                <nav class="pagination-section mt-30">
                    <ul class="pagination justify-content-center">
                        <li class="page-item">
                            <a class="page-link" href="#"><i class="ion-chevron-left"></i></a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#"><i class="ion-chevron-right"></i></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection