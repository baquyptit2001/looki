<!DOCTYPE html>
<html lang="zxx">

<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="" />
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico" />

    <!--**********************************
        all css files
    *************************************-->

    <!--***************************************************
       fontawesome,bootstrap,plugins and main style css
     ***************************************************-->
    <!-- cdn links -->

    <link rel="stylesheet" href="<?php echo e(asset('assets/css/fontawesome.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/ionicons.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/simple-line-icons.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/plugins/jquery-ui.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/plugins/plugins.css')); ?>" />
    <!-- <link rel="stylesheet" href="assets/css/plugins/aos.css" /> -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.min.css')); ?>" />
    

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->

    <!--****************************
         Minified  css
    ****************************-->

    <!--***********************************************
       vendor min css,plugins min css,style min css
     ***********************************************-->
    <!-- <link rel="stylesheet" href="assets/css/vendor/vendor.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/plugins.min.css" />
    <link rel="stylesheet" href="assets/css/style.min.css" /> -->
</head>

<body>


<!-- offcanvas-overlay start -->
<div class="offcanvas-overlay"></div>
<!-- offcanvas-overlay end -->
<!-- offcanvas-mobile-menu start -->
<div id="offcanvas-mobile-menu" class="offcanvas theme1 offcanvas-mobile-menu">
  <div class="inner">
    <div class="border-bottom mb-4 pb-4 text-right">
      <button class="offcanvas-close">??</button>
    </div>
    <div class="offcanvas-head mb-4">
      <nav class="offcanvas-top-nav">
        <ul class="d-flex flex-wrap">
          <li class="my-2 mx-2">
            <a href="<?php echo e(Route('wishlist')); ?>">
              <i class="icon-bag"></i> Wishlist <span>(0)</span></a
            >
          </li>
          <li class="my-2 mx-2">
            <a href="<?php echo e(Route('wishlist')); ?>">
              <i class="ion-android-favorite-outline"></i> Wishlist
              <span>(3)</span></a
            >
          </li>
          <li class="my-2 mx-2">
            <a href="<?php echo e(Route('compare')); ?>"
              ><i class="ion-ios-loop-strong"></i> Compare <span>(2)</span>
            </a>
          </li>
          <li class="my-2 mx-2">
            <a class="search search-toggle" href="javascript:void(0)">
              <i class="icon-magnifier"></i> Search</a
            >
          </li>
        </ul>
      </nav>
    </div>
    <nav class="offcanvas-menu">
      <ul>
        <li>
          <a href="<?php echo e(Route('home')); ?>"><span class="menu-text">Home</span></a>
          
        </li>
        <li>
          <a href="#"><span class="menu-text">Shop</span></a>
          <ul class="offcanvas-submenu">
            <li>
              <a href="#"><span class="menu-text">Shop Grid</span></a>
              <ul class="offcanvas-submenu">
                <li>
                  <a href="shop-grid-3-column.html">Shop Grid 3 Column</a>
                </li>
                <li>
                  <a href="shop-grid-4-column.html">Shop Grid 4 Column</a>
                </li>
                <li>
                  <a href="shop-grid-left-sidebar.html"
                    >Shop Grid Left Sidebar</a
                  >
                </li>
                <li>
                  <a href="shop-grid-right-sidebar.html"
                    >Shop Grid Right Sidebar</a
                  >
                </li>
              </ul>
            </li>
            <li>
              <a href="<?php echo e(route('shop-list')); ?>"><span class="menu-text">Shop List</span></a>
              <ul class="offcanvas-submenu">
                <li><a href="<?php echo e(route('shop-list')); ?>">Shop List</a></li>
                <li>
                  <a href="shop-grid-list-left-sidebar.html"
                    >Shop List Left Sidebar</a
                  >
                </li>
                <li>
                  <a href="shop-grid-list-right-sidebar.html"
                    >Shop List Right Sidebar</a
                  >
                </li>
              </ul>
            </li>
            <li>
              <a href="#"><span class="menu-text">Shop Single</span></a>
              <ul class="offcanvas-submenu">
                <li><a href="single-product.html">Shop Single</a></li>
                <li>
                  <a href="single-product-configurable.html">Shop Variable</a>
                </li>
                <li>
                  <a href="single-product-affiliate.html">Shop Affiliate</a>
                </li>
                <li><a href="single-product-group.html">Shop Group</a></li>
              </ul>
            </li>
            <li>
              <a href="#"><span class="menu-text">other pages</span></a>
              <ul class="offcanvas-submenu">
                <li><a href="<?php echo e(Route('about')); ?>">About Page</a></li>
                <li><a href="<?php echo e(Route('cart')); ?>">Cart Page</a></li>
                <li><a href="<?php echo e(Route('checkout')); ?>">Checkout Page</a></li>
                <li><a href="<?php echo e(Route('compare')); ?>">Compare Page</a></li>
                <li><a href="<?php echo e(Route('login')); ?>">Login &amp; Register Page</a></li>
                <li><a href="<?php echo e(Route('account')); ?>">Account Page</a></li>
                <li><a href="<?php echo e(Route('wishlist')); ?>">Wishlist Page</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li>
          <a href="#"><span class="menu-text">Pages</span></a>
          <ul class="offcanvas-submenu">
            <li><a href="<?php echo e(Route('about')); ?>">About Page</a></li>
            <li><a href="<?php echo e(Route('cart')); ?>">Cart Page</a></li>
            <li><a href="<?php echo e(Route('checkout')); ?>">Checkout Page</a></li>
            <li><a href="<?php echo e(Route('compare')); ?>">Compare Page</a></li>
            <li><a href="<?php echo e(Route('login')); ?>">Login &amp; Register Page</a></li>
            <li><a href="<?php echo e(Route('account')); ?>">Account Page</a></li>
            <li><a href="<?php echo e(Route('wishlist')); ?>">Wishlist Page</a></li>
          </ul>
        </li>
        <li>
          <a href="<?php echo e(Route('blog-grid')); ?>"
            ><span class="menu-text">Blog</span></a
          >
          <ul class="offcanvas-submenu">
            <li>
              <a href="{ Route('blog-grid') }}"><span class="menu-text">Blog Grid</span></a>
            </li>
            <li>
              <a href="<?php echo e(Route('blog-list')); ?>"><span class="menu-text">Blog List</span></a>
            </li>
            <li>
              <a href="<?php echo e(Route('blog-single')); ?>"><span class="menu-text">Blog Single</span></a>
            </li>
          </ul>
        </li>
        <li><a href="<?php echo e(Route('contact')); ?>">Contact Us</a></li>
      </ul>
    </nav>
    <div class="offcanvas-social py-30">
      <ul>
        <li>
          <a href="#"><i class="icon-social-facebook"></i></a>
        </li>
        <li>
          <a href="#"><i class="icon-social-twitter"></i></a>
        </li>
        <li>
          <a href="#"><i class="icon-social-instagram"></i></a>
        </li>
        <li>
          <a href="#"><i class="icon-social-google"></i></a>
        </li>
        <li>
          <a href="#"><i class="icon-social-instagram"></i></a>
        </li>
      </ul>
    </div>
  </div>
</div>
<!-- offcanvas-mobile-menu end -->
<!-- OffCanvas Wishlist Start -->
<div id="offcanvas-wishlist" class="offcanvas offcanvas-wishlist theme1">
  <div class="inner">
    <div class="head d-flex flex-wrap justify-content-between">
      <span class="title">Wishlist</span>
      <button class="offcanvas-close">??</button>
    </div>
    <ul class="minicart-product-list">
      <li>
        <a href="single-product.html" class="image"
          ><img src="assets/img/mini-cart/4.png" alt="Cart product Image"
        /></a>
        <div class="content">
          <a href="single-product.html" class="title"
            >orginal Age Defying Cosmetics Makeup</a
          >
          <span class="quantity-price"
            >1 x <span class="amount">$100.00</span></span
          >
          <a href="#" class="remove">??</a>
        </div>
      </li>
      <li>
        <a href="single-product.html" class="image"
          ><img src="assets/img/mini-cart/5.png" alt="Cart product Image"
        /></a>
        <div class="content">
          <a href="single-product.html" class="title"
            >On Trend Makeup and Beauty Cosmetics</a
          >
          <span class="quantity-price"
            >1 x <span class="amount">$35.00</span></span
          >
          <a href="#" class="remove">??</a>
        </div>
      </li>
      <li>
        <a href="single-product.html" class="image"
          ><img src="assets/img/mini-cart/6.png" alt="Cart product Image"
        /></a>
        <div class="content">
          <a href="single-product.html" class="title"
            >orginal Age Defying Cosmetics Makeup</a
          >
          <span class="quantity-price"
            >1 x <span class="amount">$9.00</span></span
          >
          <a href="#" class="remove">??</a>
        </div>
      </li>
    </ul>
    <a
      href="<?php echo e(Route('wishlist')); ?>"
      class="btn btn-secondary btn--lg d-block d-sm-inline-block mt-30"
      >view wishlist</a
    >
  </div>
</div>
<!-- OffCanvas Wishlist End -->

<!-- OffCanvas Cart Start -->
<div id="offcanvas-cart" class="offcanvas offcanvas-cart theme1">
  <div class="inner">
    <div class="head d-flex flex-wrap justify-content-between">
      <span class="title">Cart</span>
      <button class="offcanvas-close">??</button>
    </div>
    <ul class="minicart-product-list">
        <?php $__currentLoopData = $cart->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <a href="<?php echo e(route('product', $item['id'])); ?>" class="image"
                  ><img src="<?php echo e(asset('uploads/'.$item['image'])); ?>" alt="Cart product Image"
                /></a>
                <div class="content">
                  <a href="single-product.html" class="title"
                    >orginal Age Defying Cosmetics Makeup</a
                  >
                  <span class="quantity-price"
                    ><?php echo e($item['quantity']); ?> x <span class="amount"><?php echo e($item['price']); ?> $</span></span
                  >
                  <a href="<?php echo e(route('delete-cart', $item['id'])); ?>" class="remove">??</a>
                </div>
              </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
    <div class="sub-total d-flex flex-wrap justify-content-between">
      <strong>Subtotal :</strong>
      <span class="amount">$144.00</span>
    </div>
    <a
      href="<?php echo e(Route('cart')); ?>"
      class="btn btn-secondary btn--lg d-block d-sm-inline-block mr-sm-2"
      >view cart</a
    >
    <a
      href="<?php echo e(Route('checkout')); ?>"
      class="btn btn-dark btn--lg d-block d-sm-inline-block mt-4 mt-sm-0"
      >checkout</a
    >
    <p class="minicart-message">Free Shipping on All Orders Over $100!</p>
  </div>
</div>
<!-- OffCanvas Cart End -->

<!-- header start -->
<header>
  <!-- header top start -->
  <div class="header-top theme1 bg-dark py-15">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 col-sm-6 order-last order-sm-first">
          <div
            class="d-flex justify-content-center justify-content-sm-start align-items-center"
          >
            <div class="social-network2">
              <ul class="d-flex">
                <li>
                  <a href="https://www.facebook.com/" target="_blank"
                    ><span class="icon-social-facebook"></span
                  ></a>
                </li>
                <li>
                  <a href="https://twitter.com/" target="_blank"
                    ><span class="icon-social-twitter"></span
                  ></a>
                </li>
                <li>
                  <a href="https://www.youtube.com/" target="_blank"
                    ><span class="icon-social-youtube"></span
                  ></a>
                </li>
                <li class="mr-0">
                  <a href="https://www.instagram.com/" target="_blank"
                    ><span class="icon-social-instagram"></span
                  ></a>
                </li>
              </ul>
            </div>
            <div class="media static-media ml-4 d-flex align-items-center">
              <div class="media-body">
                <div class="phone">
                  <a href="tel:(+123)4567890" class="text-white"
                    ><i class="icon-call-out mr-1"></i> (+123)4567890</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6">
          <nav class="navbar-top pb-2 pb-sm-0 position-relative">
            <ul
              class="d-flex justify-content-center justify-content-md-end align-items-center"
            >
              <li>
                <a
                  href="#"
                  id="dropdown1"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                  ><?php echo e((Auth::user()) ? "Hello, ".Auth::user()->display_name :'Setting'); ?> <i class="ion ion-ios-arrow-down"></i
                ></a>
                <ul
                  class="topnav-submenu dropdown-menu"
                  aria-labelledby="dropdown1"
                >
                <li><a href="<?php echo e((Auth::user()) ? Route('account'): Route('login')); ?>">My account</a></li>
                <li><a href="<?php echo e(Route('checkout')); ?>">Checkout</a></li>
                <li><a href="<?php echo e((Auth::user()) ? Route('logOut') : Route('login')); ?>">Sign out</a></li>
                </ul>
              </li>
              <li>
                <a
                  href="#"
                  id="dropdown2"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                  >USD $ <i class="ion ion-ios-arrow-down"></i>
                </a>
                <ul
                  class="topnav-submenu dropdown-menu"
                  aria-labelledby="dropdown2"
                >
                  <li class="active"><a href="#">EUR ???</a></li>
                  <li><a href="#">USD $</a></li>
                </ul>
              </li>
              <li class="english">
                <a
                  href="#"
                  id="dropdown3"
                  class="pr-0"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <img src="assets/img/logo/us-flag.jpg" alt="us flag" />
                  English
                  <i class="ion ion-ios-arrow-down"></i>
                </a>
                <ul
                  class="topnav-submenu dropdown-menu"
                  aria-labelledby="dropdown3"
                >
                  <li class="active">
                    <a href="#"
                      ><img src="assets/img/logo/us-flag.jpg" alt="us flag" />
                      English</a
                    >
                  </li>
                  <li>
                    <a href="#"
                      ><img
                        src="assets/img/logo/france.jpg"
                        alt="france flag"
                      />
                      Fran??ais</a
                    >
                  </li>
                </ul>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <!-- header top end -->
  <!-- header-middle satrt -->
  <div id="sticky" class="header-middle theme1 py-15 py-lg-0">
    <div class="container position-relative">
      <div class="row align-items-center">
        <div class="col-6 col-lg-2 col-xl-2">
          <div class="logo">
            <a href="<?php echo e(Route('home')); ?>"
              ><img src="assets/img/logo/logo.png" alt="logo"
            /></a>
          </div>
        </div>
        <div class="col-xl-8 col-lg-7 d-none d-lg-block">
          <ul class="main-menu d-flex justify-content-center">
            <li class="active ml-0">
              <a href="<?php echo e(Route('home')); ?>" class="pl-0"
                >Home</a>
              
            </li>
            <li class="position-static">
              <a href="shop-grid-3-column.html"
                >Shop <i class="ion-ios-arrow-down"></i
              ></a>
              <ul class="mega-menu row">
                <li class="col-3">
                  <ul>
                    <li class="mega-menu-title"><a href="#">Shop Grid</a></li>
                    <li>
                      <a href="shop-grid-3-column.html">Shop Grid 3 Column</a>
                    </li>
                    <li>
                      <a href="shop-grid-4-column.html">Shop Grid 4 Column</a>
                    </li>
                    <li>
                      <a href="shop-grid-left-sidebar.html"
                        >Shop Grid Left Sidebar</a
                      >
                    </li>
                    <li>
                      <a href="shop-grid-right-sidebar.html"
                        >Shop Grid Right Sidebar</a
                      >
                    </li>
                  </ul>
                </li>
                <li class="col-3">
                  <ul>
                    <li class="mega-menu-title"><a href="<?php echo e(route('shop-list')); ?>">Shop List</a></li>
                    <li><a href="<?php echo e(route('shop-list')); ?>">Shop List</a></li>
                    <li>
                      <a href="shop-grid-list-left-sidebar.html"
                        >Shop List Left Sidebar</a
                      >
                    </li>
                    <li>
                      <a href="shop-grid-list-right-sidebar.html"
                        >Shop List Right Sidebar</a
                      >
                    </li>
                  </ul>
                </li>
                <li class="col-3">
                  <ul>
                    <li class="mega-menu-title"><a href="#">Shop Single</a></li>
                    <li><a href="single-product.html">Shop Single</a></li>
                    <li>
                      <a href="single-product-configurable.html"
                        >Shop Variable</a
                      >
                    </li>
                    <li>
                      <a href="single-product-affiliate.html">Shop Affiliate</a>
                    </li>
                    <li><a href="single-product-group.html">Shop Group</a></li>
                  </ul>
                </li>
                <li class="col-3">
                  <ul>
                    <li class="mega-menu-title"><a href="#">other pages</a></li>
                    <li><a href="<?php echo e(Route('about')); ?>">About Page</a></li>
                    <li><a href="<?php echo e(Route('cart')); ?>">Cart Page</a></li>
                    <li><a href="<?php echo e(Route('checkout')); ?>">Checkout Page</a></li>
                    <li><a href="<?php echo e(Route('compare')); ?>">Compare Page</a></li>
                  </ul>
                </li>
                <li class="col-6 mt-4">
                  <a href="single-product.html" class="zoom-in overflow-hidden"
                    ><img src="assets/img/mega-menu/1.jpg" alt="img"
                  /></a>
                </li>
                <li class="col-6 mt-4">
                  <a href="single-product.html" class="zoom-in overflow-hidden"
                    ><img src="assets/img/mega-menu/2.jpg" alt="img"
                  /></a>
                </li>
              </ul>
            </li>
            <li>
              <a href="#">Pages <i class="ion-ios-arrow-down"></i></a>
              <ul class="sub-menu">
                <li><a href="<?php echo e(Route('about')); ?>">About Page</a></li>
                <li><a href="<?php echo e(Route('cart')); ?>">Cart Page</a></li>
                <li><a href="<?php echo e(Route('checkout')); ?>">Checkout Page</a></li>
                <li><a href="<?php echo e(Route('compare')); ?>">Compare Page</a></li>
                <li><a href="<?php echo e(Route('login')); ?>">Login &amp; Register Page</a></li>
                <li><a href="<?php echo e(Route('account')); ?>">Account Page</a></li>
                <li><a href="<?php echo e(Route('wishlist')); ?>">Wishlist Page</a></li>
              </ul>
            </li>
            <li>
              <a href="<?php echo e(Route('blog-grid')); ?>"
                >Blog <i class="ion-ios-arrow-down"></i
              ></a>
              <ul class="sub-menu">
                <li>
                  <a href="<?php echo e(Route('blog-grid')); ?>">Blog Grid</a>
                </li>
                <li>
                  <a href="<?php echo e(Route('blog-list')); ?>">Blog List</a>
                </li>
                <li>
                  <a href="<?php echo e(Route('blog-single')); ?>">Blog Single</a>
                </li>
              </ul>
            </li>
            <li><a href="<?php echo e(Route('contact')); ?>">contact Us</a></li>
          </ul>
        </div>
        <div class="col-6 col-lg-3 col-xl-2">
          <!-- search-form end -->
          <div class="d-flex align-items-center justify-content-end">
            <!-- static-media end -->
            <div class="cart-block-links theme1 d-none d-sm-block">
              <ul class="d-flex">
                <li>
                  <a href="javascript:void(0)" class="search search-toggle">
                    <i class="icon-magnifier"></i>
                  </a>
                </li>
                <li>
                  <a href="<?php echo e(Route('compare')); ?>">
                    <span class="position-relative">
                      <i class="icon-shuffle"></i>
                      <span class="badge cbdg1">1</span>
                    </span>
                  </a>
                </li>
                <li>
                  <a class="offcanvas-toggle" href="#offcanvas-wishlist">
                    <span class="position-relative">
                      <i class="icon-heart"></i>
                      <span class="badge cbdg1">3</span>
                    </span>
                  </a>
                </li>
                <li class="mr-xl-0 cart-block position-relative">
                  <a class="offcanvas-toggle" href="#offcanvas-cart">
                    <span class="position-relative">
                      <i class="icon-bag"></i>
                      <span class="badge cbdg1">3</span>
                    </span>
                  </a>
                </li>
                <!-- cart block end -->
              </ul>
            </div>
            <div class="mobile-menu-toggle theme1 d-lg-none">
              <a href="#offcanvas-mobile-menu" class="offcanvas-toggle">
                <svg viewbox="0 0 700 550">
                  <path
                    d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200"
                    id="top"
                  ></path>
                  <path d="M300,320 L540,320" id="middle"></path>
                  <path
                    d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190"
                    id="bottom"
                    transform="translate(480, 320) scale(1, -1) translate(-480, -318)"
                  ></path>
                </svg>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- header-middle end -->
</header>
<!-- header end -->

<?php echo $__env->yieldContent('main'); ?>

<footer class="bg-light theme1 position-relative">
    <!-- footer bottom start -->
    <div class="footer-bottom pt-80 pb-30">
      <div class="container">
        <div class="row">
          <div class="col-12 col-sm-6 col-lg-4 mb-30">
            <div class="footer-widget mx-w-400">
              <div class="footer-logo mb-25">
                <a href="index.html">
                  <img src="assets/img/logo/logo.png" alt="footer logo" />
                </a>
              </div>
              <p class="text mb-30">
                We are a team of professional designers and developers that create
                high quality wordpress plugins, Html, React Template.
              </p>

              <div class="social-network">
                <ul class="d-flex">
                  <li>
                    <a href="https://www.facebook.com/" target="_blank"
                      ><span class="icon-social-facebook"></span
                    ></a>
                  </li>
                  <li>
                    <a href="https://twitter.com/" target="_blank"
                      ><span class="icon-social-twitter"></span
                    ></a>
                  </li>
                  <li>
                    <a href="https://www.youtube.com/" target="_blank"
                      ><span class="icon-social-youtube"></span
                    ></a>
                  </li>
                  <li class="mr-0">
                    <a href="https://www.instagram.com/" target="_blank"
                      ><span class="icon-social-instagram"></span
                    ></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-lg-2 mb-30">
            <div class="footer-widget">
              <div class="border-bottom cbb1 mb-25">
                <div class="section-title">
                  <h2 class="title">Information</h2>
                </div>
              </div>
              <!-- footer-menu start -->
              <ul class="footer-menu">
                <li><a href="<?php echo e(Route('about')); ?>">About us</a></li>
                <li><a href="#">payment</a></li>
                <li><a href="<?php echo e(Route('contact')); ?>">Contact us</a></li>
                <li><a href="#">Stores</a></li>
              </ul>
              <!-- footer-menu end -->
            </div>
          </div>
          <div class="col-12 col-sm-6 col-lg-2 mb-30">
            <div class="footer-widget">
              <div class="border-bottom cbb1 mb-25">
                <div class="section-title">
                  <h2 class="title">social Links</h2>
                </div>
              </div>
              <!-- footer-menu start -->
              <ul class="footer-menu">
                <li><a href="#">New products</a></li>
                <li><a href="#">Best sales</a></li>
                <li><a href="<?php echo e(Route('login')); ?>">Login</a></li>
                <li><a href="<?php echo e(Route('account')); ?>">My account</a></li>
              </ul>
              <!-- footer-menu end -->
            </div>
          </div>
          <div class="col-12 col-sm-6 col-lg-4 mb-30">
            <div class="footer-widget">
              <div class="border-bottom cbb1 mb-25">
                <div class="section-title">
                  <h2 class="title">Newsletter</h2>
                </div>
              </div>
              <p class="text mb-20">
                Subcribe to the TheFace mailing list to receive update on mnew
                arrivals, special offers and other discount information.
              </p>
              <div class="nletter-form mb-35">
                <form
                  class="form-inline position-relative"
                  action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef"
                  target="_blank"
                  method="post"
                >
                  <input
                    class="form-control"
                    type="text"
                    placeholder="Your email address"
                  />
                  <button
                    class="btn news-letter-btn text-capitalize"
                    type="submit"
                  >
                    Sign up
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- footer bottom end -->
    <!-- coppy-right start -->
    <div class="coppy-right bg-dark py-15">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-6 col-xl-4 order-last order-md-first">
            <div class="text-md-left text-center mt-3 mt-md-0">
              <p>
                Copyright &copy; <a href="https://hasthemes.com/">HasThemes</a>.
                All Rights Reserved
              </p>
            </div>
          </div>
          <div class="col-12 col-md-6 col-xl-8">
            <div class="text-md-right text-center">
              <img src="assets/img/payment/1.png" alt="img" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- coppy-right end -->
  </footer>
  <!-- footer end -->

  <!-- modals start -->
  <!-- first modal -->
  <div
    class="modal fade theme1 style1"
    id="quick-view"
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
                      src="assets/img/slider/thumb/1.jpg"
                      alt="product-thumb"
                    />
                  </div>
                </div>
                <!-- single-product end -->
                <div class="single-product">
                  <div class="product-thumb">
                    <img
                      src="assets/img/slider/thumb/2.jpg"
                      alt="product-thumb"
                    />
                  </div>
                </div>
                <!-- single-product end -->
                <div class="single-product">
                  <div class="product-thumb">
                    <img
                      src="assets/img/slider/thumb/3.jpg"
                      alt="product-thumb"
                    />
                  </div>
                </div>
                <!-- single-product end -->
                <div class="single-product">
                  <div class="product-thumb">
                    <img
                      src="assets/img/slider/thumb/4.jpg"
                      alt="product-thumb"
                    />
                  </div>
                </div>
                <!-- single-product end -->
              </div>

              <div class="product-sync-nav">
                <div class="single-product">
                  <div class="product-thumb">
                    <a href="javascript:void(0)">
                      <img
                        src="assets/img/slider/thumb/1.1.jpg"
                        alt="product-thumb"
                    /></a>
                  </div>
                </div>
                <!-- single-product end -->
                <div class="single-product">
                  <div class="product-thumb">
                    <a href="javascript:void(0)">
                      <img
                        src="assets/img/slider/thumb/2.1.jpg"
                        alt="product-thumb"
                    /></a>
                  </div>
                </div>
                <!-- single-product end -->
                <div class="single-product">
                  <div class="product-thumb">
                    <a href="javascript:void(0)"
                      ><img
                        src="assets/img/slider/thumb/3.1.jpg"
                        alt="product-thumb"
                    /></a>
                  </div>
                </div>
                <!-- single-product end -->
                <div class="single-product">
                  <div class="product-thumb">
                    <a href="javascript:void(0)"
                      ><img
                        src="assets/img/slider/thumb/4.1.jpg"
                        alt="product-thumb"
                    /></a>
                  </div>
                </div>
                <!-- single-product end -->
              </div>
            </div>
            <div class="col-lg-7">
              <div class="modal-product-info">
                <div class="product-head">
                  <h2 class="title">
                    New Balance Running Arishi trainers in triple
                  </h2>
                  <h4 class="sub-title">Reference: demo_5</h4>
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
                <div class="product-body">
                  <span class="product-price text-center">
                    <span class="new-price">$29.00</span>
                  </span>
                  <p>
                    Break old records and make new goals in the New Balance??
                    Arishi Sport v1.
                  </p>
                  <ul>
                    <li>Predecessor: None.</li>
                    <li>Support Type: Neutral.</li>
                    <li>Cushioning: High energizing cushioning.</li>
                  </ul>
                </div>
                <div class="d-flex mt-30">
                  <div class="product-size">
                    <h3 class="title">Dimension</h3>
                    <select>
                      <option value="0">40x60cm</option>
                      <option value="1">60x90cm</option>
                      <option value="2">80x120cm</option>
                    </select>
                  </div>
                </div>
                <div class="product-footer">
                  <div
                    class="product-count style d-flex flex-column flex-sm-row my-4"
                  >
                    <div class="count d-flex">
                      <input type="number" min="1" max="10" step="1" value="1" />
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
                        <span class="mr-2"><i class="ion-android-add"></i></span>
                        Add to cart
                      </button>
                    </div>
                  </div>
                  <div class="addto-whish-list">
                    <a href="#"><i class="icon-heart"></i> Add to wishlist</a>
                    <a href="#"><i class="icon-shuffle"></i> Add to compare</a>
                  </div>
                  <div class="pro-social-links mt-10">
                    <ul class="d-flex align-items-center">
                      <li class="share">Share</li>
                      <li>
                        <a href="#"><i class="ion-social-facebook"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="ion-social-twitter"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="ion-social-google"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="ion-social-pinterest"></i></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- second modal -->
  <div class="modal fade style2" id="compare" tabindex="-1" role="dialog">
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
          <h5 class="title">
            <i class="fa fa-check"></i> Product added to compare.
          </h5>
        </div>
      </div>
    </div>
  </div>
  <!-- second modal -->
  <div class="modal fade style3" id="add-to-cart" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header justify-content-center bg-dark">
          <h5 class="modal-title" id="add-to-cartCenterTitle">
            Product successfully added to your shopping cart
          </h5>
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
            <div class="col-lg-5 divide-right">
              <div class="row">
                <div class="col-md-6">
                  <img src="assets/img/modal/1.jpg" alt="img" />
                </div>
                <div class="col-md-6 mb-2 mb-md-0">
                  <h4 class="product-name">
                    New Balance Running Arishi trainers in triple
                  </h4>
                  <h5 class="price">$$29.00</h5>
                  <h6 class="color">
                    <strong>Dimension: </strong>: <span class="dmc">40x60cm</span>
                  </h6>
                  <h6 class="quantity"><strong>Quantity:</strong>&nbsp;1</h6>
                </div>
              </div>
            </div>
            <div class="col-lg-7">
              <div class="modal-cart-content">
                <p class="cart-products-count">There is 1 item in your cart.</p>
                <p><strong>Total products:</strong>&nbsp;$123.72</p>
                <p><strong>Total shipping:</strong>&nbsp;$7.00</p>
                <p><strong>Taxes</strong>&nbsp;$0.00</p>
                <p><strong>Total:</strong>&nbsp;$130.72 (tax excl.)</p>
                <div class="cart-content-btn">
                  <button
                    type="button"
                    class="btn btn-dark btn--md mt-4"
                    data-dismiss="modal"
                  >
                    Continue shopping
                  </button>
                  <button class="btn btn-dark btn--md mt-4">
                    Proceed to checkout
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- modals end -->

  <!-- search-box and overlay start -->
  <div class="overlay">
    <div class="scale"></div>
    <form class="search-box" action="#">
      <input type="text" name="search" placeholder="Search products..." />
      <button id="close" type="submit">
        <i class="ion-ios-search-strong"></i>
      </button>
    </form>
    <button class="close"><i class="ion-android-close"></i></button>
  </div>
  <!-- search-box and overlay end -->



      <!--***********************
          all js files
       ***********************-->

      <!--******************************************************
          jquery,modernizr ,poppe,bootstrap,plugins and main js
       ******************************************************-->

      <script src="<?php echo e(asset('assets/js/vendor/jquery-3.5.1.min.js')); ?>"></script>
      <script src="<?php echo e(asset('assets/js/vendor/modernizr-3.7.1.min.js')); ?>"></script>
      <script src="<?php echo e(asset('assets/js/popper.min.js')); ?>"></script>
      <script src="<?php echo e(asset('assets/js/plugins/jquery-ui.min.js')); ?>"></script>
      <script src="<?php echo e(asset('assets/js/bootstrap.min.js')); ?>"></script>
      <script src="<?php echo e(asset('assets/js/plugins/plugins.js')); ?>"></script>
      <script src="<?php echo e(asset('assets/js/plugins/ajax-contact.js')); ?>"></script>
      <!-- <script src="assets/js/plugins/aos.js"></script> -->
      <script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>
      

      <!-- Use the minified version files listed below for better performance and remove the files listed above -->

      <!--***************************
            Minified  js
       ***************************-->

      <!--***********************************
           vendor,plugins and main js
        ***********************************-->

      <!-- <script src="assets/js/vendor/vendor.min.js"></script>
      <script src="assets/js/plugins/plugins.min.js"></script>
      <script src="assets/js/main.js"></script> -->


  </body>

  </html>
<?php /**PATH C:\Users\ADMIN\Desktop\bkap\looki-1\resources\views/front-end/layout/master.blade.php ENDPATH**/ ?>