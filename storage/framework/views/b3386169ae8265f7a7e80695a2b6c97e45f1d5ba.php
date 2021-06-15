

<?php $__env->startSection('title', $category->name); ?>

<?php $__env->startSection('main'); ?>
<nav class="breadcrumb-section theme1 bg-lighten2 pt-110 pb-110">
    <div class="container">
        <div class="row">
        <div class="col-12">
            <div class="section-title text-center">
            <h2 class="title pb-4 text-dark text-capitalize">
                <?php echo e($category->name); ?>

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
                                <span class="total-products text-capitalize">There are <?php echo e(count($product)); ?> products.</span>
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
            <?php if(count($product)): ?>
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="row grid-view theme1">
                        <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-sm-6 col-md-4 mb-30">
                                <div class="card product-card">
                                    <div class="card-body">
                                        <div class="product-thumbnail position-relative">
                                            <span class="badge badge-danger top-right">New</span>
                                            <a href="<?php echo e(route('product', ['id'=>$item->id])); ?>">
                                                <img class="first-img" src="<?php echo e(asset('uploads/product/'.$item->image)); ?>" alt="thumbnail">
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
                                                        <span data-toggle="tooltip" data-placement="bottom" title=""
                                                            class="icon-shuffle" data-original-title="Add to compare"></span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="action" href="#" data-toggle="modal" data-target="#quick-view<?php echo e($item->id); ?>">
                                                        <span data-toggle="tooltip" data-placement="bottom" title=""
                                                            class="icon-magnifier" data-original-title="Quick view"></span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <!-- product links end-->
                                        </div>
                                        <div class="product-desc py-0 px-0">
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
                                <!-- product-list End -->
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <!-- second tab-pane -->
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="row grid-view-list theme1">
                        <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-12 mb-30">
                                <div class="card product-card">
                                    <div class="card-body">
                                        <div class="media flex-column flex-md-row">
                                            <div class="product-thumbnail position-relative">
                                                <span class="badge badge-danger top-right">sale</span>
                                                <a href="<?php echo e(route('product', ['id'=>$item->id])); ?>">
                                                    <img class="first-img" src="<?php echo e(asset('uploads/product/'.$item->image)); ?>" alt="thumbnail" style="width:400px !important;">
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
                                                            <span data-toggle="tooltip" data-placement="bottom" title=""
                                                                class="icon-shuffle"
                                                                data-original-title="Add to compare"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="action" href="#" data-toggle="modal"
                                                            data-target="#quick-view<?php echo e($item->id); ?>">
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
                                                        <a href="<?php echo e(route('product', ['id'=>$item->id])); ?>"><?php echo e($item->name); ?></a>
                                                    </h3>
                                                    <div class="star-rating mb-10">
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star de-selected"></span>
                                                    </div>
                                                    <span class="product-price"><?php echo e($item->minPrice()); ?> $</span>
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
                                                <a class="btn btn-dark btn--xl action"
                                                href="#"
                                                data-toggle="modal"
                                                data-target="#quick-view<?php echo e($item->id); ?>">
                                                    Add to cart
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- product-list End -->
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            <?php else: ?>
                <p>Không có sản phẩm nào</p>
            <?php endif; ?>
            <!-- first tab-pane -->
        </div>
        <div class="row">
            <div class="col-12">
                <nav class="pagination-section mt-30">
                    <ul class="pagination justify-content-center">
                        <?php echo e($product->links("pagination::bootstrap-4")); ?>

                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front-end.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ADMIN\Desktop\bkap\looki\resources\views/front-end/page/category.blade.php ENDPATH**/ ?>