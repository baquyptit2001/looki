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
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('assets/img/favicon.ico')); ?>" />

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
    <link rel="stylesheet" href="<?php echo e(asset('assets/star/star-rating.min.css')); ?>">
    <style>
      .star-box input.star {
          display: none
      }

      .star-box label.star {
          float: right;
          /* padding: 10px; */
          font-size: 15px;
          color: #4A148C;
          transition: all .2s
      }

      .star-box input.star:checked~label.star:before {
          content: '\f005';
          color: #FD4;
          transition: all .25s
      }

      .star-box input.star-5:checked~label.star:before {
          color: #FE7;
          /* text-shadow: 0 0 20px #952 */
      }

      .star-box input.star-1:checked~label.star:before {
          color: #F62
      }

      .star-box label.star:hover {
          transform: rotate(-15deg) scale(1.3)
      }

      .star-box label.star:before {
          content: '\f005';
          font-family: FontAwesome;
          font-weight: 900;
      }

      .heart-red{
        color: red;
      }
    </style>
    

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
    <?php echo \Livewire\Livewire::styles(); ?>

</head>

<body>
<!-- Messenger Chat Plugin Code -->
<div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v10.0'
    });
  };

  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>

<!-- Your Chat Plugin code -->
<div class="fb-customerchat"
  attribution="biz_inbox"
  page_id="103535875262851">
</div>

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
            <?php $__currentLoopData = $masterCat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li>
                <a href="#"><span class="menu-text"><?php echo e($item->name); ?></span></a>
                <ul class="offcanvas-submenu">
                  <?php $__currentLoopData = $item->child; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li>
                      <a href="<?php echo e(route('category', ['id'=>$child->id])); ?>"><?php echo e($child->name); ?></a>
                    </li>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
              </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
        </li>
        <li>
          <a href="#"><span class="menu-text">Pages</span></a>
          <ul class="offcanvas-submenu">
            <li><a href="<?php echo e(Route('shop-list')); ?>">Product List</a></li>
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
          <a href="https://www.facebook.com/bquyptit2001/"><i class="icon-social-facebook"></i></a>
        </li>
        <li>
          <a href="https://www.facebook.com/bquyptit2001/"><i class="icon-social-twitter"></i></a>
        </li>
        <li>
          <a href="https://www.facebook.com/bquyptit2001/"><i class="icon-social-instagram"></i></a>
        </li>
        <li>
          <a href="https://www.facebook.com/bquyptit2001/"><i class="icon-social-google"></i></a>
        </li>
        <li>
          <a href="https://www.facebook.com/bquyptit2001/"><i class="icon-social-instagram"></i></a>
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
<?php if(Auth::user()): ?>
    <ul class="minicart-product-list">
      <?php $__currentLoopData = $wishlist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li>
          <a href="<?php echo e(route('product', ['id'=>$item->product_id])); ?>" class="image"
            ><img src="<?php echo e(asset('uploads/product/'.$item->product->image)); ?>" alt="Cart product Image"
          /></a>
          <div class="content">
            <a href="<?php echo e(route('product', ['id'=>$item->product_id])); ?>" class="title"
              ><?php echo e($item->product->name); ?></a
            >
            <a href="<?php echo e(route('removeWishlist', ['id'=>$item->id])); ?>" class="remove">??</a>
          </div>
        </li>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
    <a
      href="<?php echo e(Route('wishlist')); ?>"
      class="btn btn-secondary btn--lg d-block d-sm-inline-block mt-30"
      >view wishlist</a
    >
    <?php else: ?>
    <p><a href="<?php echo e(route('login')); ?>" style="color: #5a5ad0">Login </a>to view Wish List</p>
    <?php endif; ?>
  </div>
</div>
<!-- OffCanvas Wishlist End -->

<!-- OffCanvas Cart Start -->

<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('cart-info')->html();
} elseif ($_instance->childHasBeenRendered('5jmNZTw')) {
    $componentId = $_instance->getRenderedChildComponentId('5jmNZTw');
    $componentTag = $_instance->getRenderedChildComponentTagName('5jmNZTw');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('5jmNZTw');
} else {
    $response = \Livewire\Livewire::mount('cart-info');
    $html = $response->html();
    $_instance->logRenderedChild('5jmNZTw', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
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
                  <a href="https://www.facebook.com/bquyptit2001/" target="_blank"
                    ><span class="icon-social-facebook"></span
                  ></a>
                </li>
                <li>
                  <a href="https://www.facebook.com/bquyptit2001/" target="_blank"
                    ><span class="icon-social-twitter"></span
                  ></a>
                </li>
                <li>
                  <a href="https://www.facebook.com/bquyptit2001/" target="_blank"
                    ><span class="icon-social-youtube"></span
                  ></a>
                </li>
                <li class="mr-0">
                  <a href="https://www.facebook.com/bquyptit2001/" target="_blank"
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
                  ><?php echo e((Auth::user()) ? "Hello, ".Auth::user()->display_name :'Account'); ?> <i class="ion ion-ios-arrow-down"></i
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
                  <img src="<?php echo e(asset('assets/img/logo/us-flag.jpg')); ?>" alt="us flag" />
                  English
                  <i class="ion ion-ios-arrow-down"></i>
                </a>
                <ul
                  class="topnav-submenu dropdown-menu"
                  aria-labelledby="dropdown3"
                >
                  <li class="active">
                    <a href="#"
                      ><img src="<?php echo e(asset('assets/img/logo/us-flag.jpg')); ?>" alt="us flag" />
                      English</a
                    >
                  </li>
                  <li>
                    <a href="#"
                      ><img
                        src="<?php echo e(asset('assets/img/logo/france.jpg')); ?>"
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
              ><img src="<?php echo e(asset('assets/img/logo/logo.png')); ?>" alt="logo"
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
                <?php $__currentLoopData = $masterCat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <li class="col-3">
                    <ul>
                      <li class="mega-menu-title"><a href="#"><?php echo e($item->name); ?></a></li>
                      <?php $__currentLoopData = $item->child; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                          <a href="<?php echo e(route('category', ['id'=>$child->id])); ?>"><?php echo e($child->name); ?></a>
                        </li>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                  </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <li class="col-6 mt-4">
                  <a href="single-product.html" class="zoom-in overflow-hidden"
                    ><img src="<?php echo e(asset('assets/img/mega-menu/1.jpg')); ?>" alt="img"
                  /></a>
                </li>
                <li class="col-6 mt-4">
                  <a href="single-product.html" class="zoom-in overflow-hidden"
                    ><img src="<?php echo e(asset('assets/img/mega-menu/2.jpg')); ?>" alt="img"
                  /></a>
                </li>
              </ul>
            </li>
            <li>
              <a href="#">Pages <i class="ion-ios-arrow-down"></i></a>
              <ul class="sub-menu">
                <li><a href="<?php echo e(Route('shop-list')); ?>">Product List</a></li>
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
                      <span class="badge cbdg1"><?php echo e(count($compare->items)); ?></span>
                    </span>
                  </a>
                </li>
                <li>
                  <a class="offcanvas-toggle" href="#offcanvas-wishlist">
                    <span class="position-relative">
                      <i class="icon-heart"></i>
                      <span class="badge cbdg1"><?php echo e((Auth::user()) ? count($wishlist) : '0'); ?></span>
                    </span>
                  </a>
                </li>
                <li class="mr-xl-0 cart-block position-relative">
                  
                  <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('cart-quantity')->html();
} elseif ($_instance->childHasBeenRendered('Tm4x19s')) {
    $componentId = $_instance->getRenderedChildComponentId('Tm4x19s');
    $componentTag = $_instance->getRenderedChildComponentTagName('Tm4x19s');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('Tm4x19s');
} else {
    $response = \Livewire\Livewire::mount('cart-quantity');
    $html = $response->html();
    $_instance->logRenderedChild('Tm4x19s', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
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
                  <img src="<?php echo e(asset('assets/img/logo/logo.png')); ?>" alt="footer logo" />
                </a>
              </div>
              <p class="text mb-30">
                We are a team of professional designers and developers that create
                high quality wordpress plugins, Html, React Template.
              </p>

              <div class="social-network">
                <ul class="d-flex">
                  <li>
                    <a href="https://www.facebook.com/bquyptit2001/" target="_blank"
                      ><span class="icon-social-facebook"></span
                    ></a>
                  </li>
                  <li>
                    <a href="https://www.facebook.com/bquyptit2001/" target="_blank"
                      ><span class="icon-social-twitter"></span
                    ></a>
                  </li>
                  <li>
                    <a href="https://www.facebook.com/bquyptit2001/" target="_blank"
                      ><span class="icon-social-youtube"></span
                    ></a>
                  </li>
                  <li class="mr-0">
                    <a href="https://www.facebook.com/bquyptit2001/" target="_blank"
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
              <img src="<?php echo e(asset('assets/img/payment/1.png')); ?>" alt="img" />
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
  <?php $__currentLoopData = $modalProduct; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div
      class="modal fade theme1 style1 quick-modal"
      id="quick-view<?php echo e($item->id); ?>"
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
                        src="<?php echo e(asset('uploads/product/'.$item->image)); ?>"
                        alt="product-thumb"
                      />
                    </div>
                  </div>
                  <!-- single-product end -->
                  <?php $__currentLoopData = $item->img; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detailImg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="single-product">
                      <div class="product-thumb">
                        <img
                          src="<?php echo e(asset('uploads/product/'.$detailImg->image)); ?>"
                          alt="product-thumb"
                        />
                      </div>
                    </div>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  <!-- single-product end -->
                </div>

                <div class="product-sync-nav">
                  <div class="single-product">
                    <div class="product-thumb">
                      <a href="javascript:void(0)">
                        <img
                          src="<?php echo e(asset('uploads/product/'.$item->image)); ?>"
                          alt="product-thumb"
                      /></a>
                    </div>
                  </div>
                  <?php $__currentLoopData = $item->img; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detailImg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="single-product">
                      <div class="product-thumb">
                        <a href="javascript:void(0)">
                          <img
                            src="<?php echo e(asset('uploads/product/'.$detailImg->image)); ?>"
                            alt="product-thumb"
                        /></a>
                      </div>
                    </div>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  <!-- single-product end -->
                </div>
              </div>
              <div class="col-lg-7">
                <div class="modal-product-info">
                  <div class="product-head">
                    <h2 class="title">
                      <?php echo e($item->name); ?>

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
                  <form action="<?php echo e(route('add-cart',['id' => $item->id])); ?>" method="GET">
                  <?php echo csrf_field(); ?>
                  <div class="product-body">
                    <span class="product-price text-center">
                      <span class="new-price quick-view-price"></span>
                    </span>
                    <p>
                      <?php echo e($item->description); ?>

                    </p>
                    <div class="d-flex mt-30">
                      <div class="product-size">
                        <h3 class="title">Size</h3>
                        <select name="product_size" class="price-option">
                          <?php $__currentLoopData = $item->size; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sz): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($sz->id); ?>" price="<?php echo e(($sz->sale_price==0) ? $sz->price : $sz->sale_price); ?>"><?php echo e($sz->size); ?></option>  
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                          <input type="number" name="quantity" min="1" max="100" step="1" value="1" />
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
                          <button class="btn btn-dark btn--xl mt-5 mt-sm-0 cart-cart" data-product-id=<?php echo e($item->id); ?> >
                            <a href="<?php echo e(route('add-cart', ['id'=>$item->id])); ?>" class="mr-2"><i class="ion-android-add"></i></span>
                            Add to cart
                          </a>
                        </div>
                      </div>
                    <div class="addto-whish-list">
                      <?php if($item->check()): ?>
                                <a href="<?php echo e(route('removeSwitchWishlist', ['id'=>$item->id])); ?>"><i class="icon-heart heart-red"></i> Remove from wishlist</a>
                                <?php else: ?>
                                <a href="<?php echo e(route('addWishlist', ['id'=>$item->id])); ?>"><i class="icon-heart"></i> Add to wishlist</a>
                                <?php endif; ?>
                                <a <?php if($compare->check($item->id)): ?>
                                    href="#"
                                    data-toggle="modal"
                                    data-target="#compare"
                                  <?php else: ?>
                                    href="<?php echo e(route('addCompare', ['id'=>$item->id])); ?>"
                                  <?php endif; ?>><i class="icon-shuffle"></i> Add to compare</a>
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
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
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
            <i class="fas fa-times"></i> Product have already in compare list.
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
                  <img src="<?php echo e(asset('assets/img/modal/1.jpg')); ?>" alt="img" />
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
  
  <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('search')->html();
} elseif ($_instance->childHasBeenRendered('HoQOv1M')) {
    $componentId = $_instance->getRenderedChildComponentId('HoQOv1M');
    $componentTag = $_instance->getRenderedChildComponentTagName('HoQOv1M');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('HoQOv1M');
} else {
    $response = \Livewire\Livewire::mount('search');
    $html = $response->html();
    $_instance->logRenderedChild('HoQOv1M', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
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
      <script src="<?php echo e(asset('assets/star/star-rating.min.js')); ?>"></script>
      <script src="https://kit.fontawesome.com/9fd97b7f3f.js" crossorigin="anonymous"></script>
      

      <!-- Use the minified version files listed below for better performance and remove the files listed above -->
        <script type="text/javascript">
        $(document).ready(function(){
          $('.quick-modal').on('shown.bs.modal', function(){
            var price = $(this).find('.price-option').find('option:selected').attr('price');
            var parent = $(this);
            $(this).find('.quick-view-price').text('$ '+price);
            $(this).find('.price-option').change(function(){
              price = $(this).find('option:selected').attr('price');
              console.log(price);
              parent.find('.quick-view-price').text('$ '+price);
            })
          });
          var price = $('#pro-detail').find('option:selected').attr('price');
          var parent = $('#pro-detail');
          $('#pro-detail').find('.product-price').text(price+' $');
          $('#pro-detail').find('.price-option').change(function(){
            price = $(this).find('option:selected').attr('price');
            parent.find('.product-price').text(price+' $');
          });
        });
      </script>
      <?php echo \Livewire\Livewire::scripts(); ?>

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
<?php /**PATH C:\Users\ADMIN\Desktop\bkap\looki\resources\views/front-end/layout/master.blade.php ENDPATH**/ ?>