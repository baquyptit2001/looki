<?php $__env->startSection('title', 'WishList'); ?>

<?php $__env->startSection('main'); ?>
    <!-- breadcrumb-section start -->
<nav class="breadcrumb-section theme1 bg-lighten2 pt-110 pb-110">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section-title text-center">
            <h2 class="title pb-4 text-dark text-capitalize">Wishlist</h2>
          </div>
        </div>
        <div class="col-12">
          <ol
            class="breadcrumb bg-transparent m-0 p-0 align-items-center justify-content-center"
          >
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Wishlist</li>
          </ol>
        </div>
      </div>
    </div>
  </nav>
  <!-- breadcrumb-section end -->
  <!-- product tab start -->
  <section class="whish-list-section theme1 pt-80 pb-80">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h3 class="title mb-30 pb-25 text-capitalize">Wishlist</h3>
          <div class="table-responsive">
            <table class="table">
              <thead class="thead-light">
                <tr>
                  <th class="text-center" scope="col">Product Image</th>
                  <th class="text-center" scope="col">Product Name</th>
                  <th class="text-center" scope="col">Price</th>
                  <th class="text-center" scope="col">action</th>
                  <th class="text-center" scope="col">Checkout</th>
                </tr>
              </thead>
              <tbody>
                <?php $__currentLoopData = $wishlist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <th class="text-center" scope="row">
                      <img src="<?php echo e(asset('uploads/product/'.$item->product->image)); ?>" alt="img" />
                    </th>
                    <td class="text-center">
                      <span class="whish-title"
                        ><?php echo e($item->product->name); ?></span
                      >
                    </td>
                    <td class="text-center">
                      <span class="whish-list-price"> $<?php echo e($item->product->minPrice()); ?> </span>
                    </td>

                    <td class="text-center">
                      <a href="<?php echo e(route('removeWishlist', ['id'=>$item->id])); ?>">
                        <span class="trash"><i class="fas fa-trash-alt"></i> </span
                      ></a>
                    </td>
                    <td class="text-center">
                      <a class="btn btn-dark btn--xl action"
                      href="<?php echo e(route('product', ['id'=>$item->product->id])); ?>">add to cart</a>
                    </td>
                  </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- product tab end -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front-end.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ADMIN\Desktop\bkap\looki\resources\views/front-end/page/wishlist.blade.php ENDPATH**/ ?>