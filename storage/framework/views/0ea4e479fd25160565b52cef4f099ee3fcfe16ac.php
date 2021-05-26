
<?php $__env->startSection('title', $pro->name); ?>
<?php $__env->startSection('main'); ?>
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
                <ol class="breadcrumb bg-transparent m-0 p-0 align-items-center justify-content-center">
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
<!-- product-single start -->
<section class="product-single theme1 pt-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div>
                    <div class="position-relative">
                        <span class="badge badge-danger top-right">New</span>
                    </div>
                    <div class="product-sync-init mb-20">
                        <div class="single-product">
                            <div class="product-thumb">
                                <img src="<?php echo e(asset('uploads/product/'.$pro->image)); ?>" alt="product-thumb"/>
                            </div>
                        </div>
                        <!-- single-product end -->
                        <?php $__currentLoopData = $img; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="single-product">
                            <div class="product-thumb">
                                <img src="<?php echo e(asset('uploads/product/'.$item->image)); ?>" alt="product-thumb" />
                            </div>
                        </div>
                        <!-- single-product end -->
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <div class="product-sync-nav single-product">
                    <div class="single-product">
                        <div class="product-thumb">
                            <a href="javascript:void(0)">
                                <img src="<?php echo e(asset('uploads/product/'.$pro->image)); ?>" alt="product-thumb" id="first-thumbb" onclick="myFunction()"/></a>
                        </div>
                    </div>
                    <!-- single-product end -->
                    <?php $__currentLoopData = $img; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="single-product">
                        <div class="product-thumb">
                            <a href="javascript:void(0)">
                                <img src="<?php echo e(asset('uploads/product/'.$item->image)); ?>" alt="product-thumb" /></a>
                        </div>
                    </div>
                    <!-- single-product end -->
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="single-product-info">
                    <div class="single-product-head">
                        <h2 class="title mb-20"><?php echo e($pro->name); ?></h2>
                        <div class="star-content mb-20">
                            <span class="star-on"><i class="ion-ios-star"></i> </span>
                            <span class="star-on"><i class="ion-ios-star"></i> </span>
                            <span class="star-on"><i class="ion-ios-star"></i> </span>
                            <span class="star-on"><i class="ion-ios-star"></i> </span>
                            <span class="star-on"><i class="ion-ios-star"></i> </span>
                            <a href="#" id="write-comment"><span class="ml-2"><i class="far fa-comment-dots"></i></span>
                                Read reviews <span>(<?php echo e(count($rate)); ?>)</span></a>
                            <a href="#" data-toggle="modal" data-target="#exampleModalCenter"><span class="edite"><i
                                        class="far fa-edit"></i></span> Write a
                                review</a>
                        </div>
                    </div>
                    <form action="<?php echo e(route('add-cart',['id' => $pro->id])); ?>" method="GET">
                    <?php echo csrf_field(); ?>
                        <div class="product-body mb-40" id="pro-detail">
                            <div class="d-flex align-items-center mb-30">
                                <span class="product-price mr-20">
                                    
                                </span>
                            </div>
                            <p>
                                Block out the haters with the fresh adidas® Originals Kaval
                                Windbreaker Face Cream.
                            </p>
                            <ul>
                                <li>Part of the Kaval Collection.</li>
                                <li>
                                    Regular fit is eased, but not sloppy, and perfect for any
                                    activity.
                                </li>
                                <li>
                                    Plain-woven Face Cream specifically constructed for freedom of
                                    movement.
                                </li>
                            </ul>
                            <div class="product-size">
                                <select name="product_size" class="price-option">
                                <?php $__currentLoopData = $pro->size; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sz): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($sz->id); ?>" price="<?php echo e(($sz->sale_price==0) ? $sz->price : $sz->sale_price); ?>"><?php echo e($sz->size); ?></option>  
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <div class="product-footer">
                            <div class="product-count style d-flex flex-column flex-sm-row mt-30 mb-30">
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
                                    <button type="submit" class="btn btn-dark btn--xl mt-5 mt-sm-0">
                                        <span class="mr-2"><i class="ion-android-add"></i></span>
                                        Add to cart
                                    </button>
                                </div>
                            </div>
                            <div class="addto-whish-list">
                                <?php if($pro->check()): ?>
                                <a href="<?php echo e(route('removeSwitchWishlist', ['id'=>$pro->id])); ?>"><i class="icon-heart heart-red"></i> Remove from wishlist</a>
                                <?php else: ?>
                                <a href="<?php echo e(route('addWishlist', ['id'=>$pro->id])); ?>"><i class="icon-heart"></i> Add to wishlist</a>
                                <?php endif; ?>
                                <a <?php if($compare->check($pro->id)): ?>
                                    href="#"
                                    data-toggle="modal"
                                    data-target="#compare"
                                    <?php else: ?>
                                    href="<?php echo e(route('addCompare', ['id'=>$pro->id])); ?>"
                                    <?php endif; ?>><i class="icon-shuffle"></i> Add to compare</a>
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
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- product-single end -->
<!-- product tab start -->
<div class="product-tab theme1 bg-white pt-60 pb-80">
    <div class="container">
        <div class="product-tab-nav">
            <div class="row align-items-center">
                <div class="col-12">
                    <nav class="product-tab-menu single-product">
                        <ul class="nav nav-pills justify-content-center" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                                    aria-controls="pills-home" aria-selected="true">Description</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"
                                    role="tab" aria-controls="pills-profile" aria-selected="false">Product Details</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-contact-tab" data-toggle="pill"
                                    href="#pills-contact" role="tab" aria-controls="pills-contact"
                                    aria-selected="false">Reviews</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- product-tab-nav end -->
        <div class="row">
            <div class="col-12">
                <div class="tab-content" id="pills-tabContent">
                    <!-- first tab-pane -->
                    <div class="tab-pane fade" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <div class="single-product-desc">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do
                                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                                enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                nisi ut aliquip ex ea commo consequat. Duis aute irure dolor in
                                reprehend in voluptate velit esse cillum dolore eu fugiat nulla
                                pariatur. Excepteur sint occaecat cupidatat non proident, sunt
                                in culpa qui officia deserunt
                            </p>
                        </div>
                    </div>
                    <!-- second tab-pane -->
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="single-product-desc">
                            <div class="product-anotherinfo-wrapper">
                                <ul>
                                    <li><span>Weight</span> 400 g</li>
                                    <li><span>Dimensions</span>10 x 10 x 15 cm</li>
                                    <li><span>Materials</span> 60% cotton, 40% polyester</li>
                                    <li>
                                        <span>Other Info</span> American heirloom jean shorts pug
                                        seitan letterpress
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- third tab-pane -->
                    <div class="tab-pane fade show active" id="pills-contact" role="tabpanel"
                        aria-labelledby="pills-contact-tab">
                        <div class="single-product-desc">
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="review-wrapper">
                                        <?php if(count($rate)!=0): ?>
                                            <?php $__currentLoopData = $rate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="single-review">
                                                    <div class="review-img">   
                                                        <img src="<?php echo e(asset(($item->user->avatar==null) ? 'uploads/avatar/default-avatar.jpg':'uploads/avatar/'.$item->user->avatar )); ?>" width="50px" style="border-radius: 50%" alt="" />
                                                    </div>
                                                    <div class="review-content w-100">
                                                        <div class="review-top-wrap">
                                                            <div class="review-left">
                                                                <div class="review-name">
                                                                    <h4><?php echo e($item->user->display_name); ?></h4>
                                                                </div>
                                                                <div class="rating-product">
                                                                    <?php for($i = 0; $i < $item->rate; $i++): ?>
                                                                        <i class="ion-android-star"></i>
                                                                    <?php endfor; ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="review-bottom w-100">
                                                            <p>
                                                                <?php echo e($item->comment); ?>

                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php else: ?>
                                            <p>Sản phẩm chưa có đánh giá</p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="ratting-form-wrapper">
                                        <?php if(auth()->check()): ?>
                                            <h3>Add a Review</h3>
                                            <div class="ratting-form">
                                                <form action="" method="POST">
                                                    <?php echo csrf_field(); ?>
                                                    <div class="star-box">
                                                        <span style="margin-top: 2px;">Your rating:</span>
                                                        <div class="rating-product">
                                                            <div class="stars">
                                                                 <input class="star star-5" id="star-5" type="radio" name="rate" value="5" /> <label class="star star-5" for="star-5"></label> <input class="star star-4" id="star-4" type="radio" name="rate" value="4" /> <label class="star star-4" for="star-4"></label> <input class="star star-3" id="star-3" type="radio" name="rate" value="3" /> <label class="star star-3" for="star-3"></label> <input class="star star-2" id="star-2" type="radio" name="rate" value="2" /> <label class="star star-2" for="star-2"></label> <input class="star star-1" id="star-1" type="radio" name="rate" value="1" /> <label class="star star-1" for="star-1"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="rating-form-style form-submit">
                                                                <textarea name="comment" placeholder="Message"></textarea>
                                                                <button type="submit" class="btn btn-dark btn--md">
                                                                    <span>Review</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        <?php else: ?>
                                            <h3><a href="<?php echo e(route('login')); ?>" style="color: #5a5ad0">Login</a> to add review</h3>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- product tab end -->
<!-- new arrival section start -->
<section class="theme1 bg-white pb-80">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center">
                    <h2 class="title pb-3 mb-3">You might also like</h2>
                    <p class="text mt-10">Add Related products to weekly line up</p>
                </div>
            </div>
            <div class="col-12">
                <div class="product-slider-init theme1 slick-nav">
                    <?php $__currentLoopData = $like; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($item->id != $pro->id): ?>
                            <div class="slider-item">
                                <div class="card product-card">
                                    <div class="card-body p-0">
                                        <div class="media flex-column">
                                            <div class="product-thumbnail position-relative">
                                                <span class="badge badge-danger top-right">New</span>
                                                <a href="<?php echo e(route('product', ['id'=>$item->id])); ?>">
                                                    <img class="first-img" src="<?php echo e(asset('uploads/product/'.$item->image)); ?>" alt="thumbnail" />
                                                </a>
                                                <!-- product links -->
                                                <ul class="actions d-flex justify-content-center">
                                                    <li>
                                                        <?php if($item->check()): ?>
                                                        <a class="action" href="<?php echo e(route('removeSwitchWishlist', ['id'=>$item->id])); ?>">
                                                        <span
                                                            data-toggle="tooltip"
                                                            data-placement="bottom"
                                                            title="remove from wishlist"
                                                            class="icon-heart heart-red"
                                                        >
                                                        </span>
                                                                            </a>
                                                        <?php else: ?>
                                                        <a class="action" href="<?php echo e(route('addWishlist', ['id'=>$item->id])); ?>">
                                                        <span
                                                            data-toggle="tooltip"
                                                            data-placement="bottom"
                                                            title="add to wishlist"
                                                            class="icon-heart"
                                                        >
                                                        </span>
                                                                            </a>
                                                        <?php endif; ?>
                                                    </li>
                                                    <li>
                                                        <a class="action" <?php if($compare->check($item->id)): ?>
                                                                                href="#"
                                                                                data-toggle="modal"
                                                                                data-target="#compare"
                                                                            <?php else: ?>
                                                                                href="<?php echo e(route('addCompare', ['id'=>$item->id])); ?>"
                                                                            <?php endif; ?>>
                                                            <span data-toggle="tooltip" data-placement="bottom"
                                                                title="Add to compare" class="icon-shuffle"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="action" href="#" data-toggle="modal"
                                                            data-target="#quick-view<?php echo e($item->id); ?>">
                                                            <span data-toggle="tooltip" data-placement="bottom"
                                                                title="Quick view" class="icon-magnifier"></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <!-- product links end-->
                                            </div>
                                            <div class="media-body">
                                                <div class="product-desc">
                                                    <h3 class="title">
                                                        <a href="<?php echo e(route('product', ['id'=>$item->id])); ?>"><?php echo e($item->name); ?></a>
                                                    </h3>
                                                    <div class="star-rating">
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star de-selected"></span>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <span class="product-price"><?php echo e($item->minPrice()); ?> $</span>
                                                        <a class="pro-btn action"
                                                        href="#"
                                                        data-toggle="modal"
                                                        data-target="#quick-view<?php echo e($item->id); ?>">
                                                            <i class="icon-basket"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <!-- slider-item end -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- new arrival section end -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front-end.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ADMIN\Desktop\bkap\looki\resources\views/front-end/page/product-detail.blade.php ENDPATH**/ ?>