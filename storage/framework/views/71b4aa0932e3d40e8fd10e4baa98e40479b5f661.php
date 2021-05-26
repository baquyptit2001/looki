<?php $__env->startSection('title', 'Compare'); ?>

<?php $__env->startSection('main'); ?>
    <!-- breadcrumb-section start -->
<nav class="breadcrumb-section theme1 bg-lighten2 pt-110 pb-110">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section-title text-center">
            <h2 class="title pb-4 text-dark text-capitalize">compare</h2>
          </div>
        </div>
        <div class="col-12">
          <ol
            class="breadcrumb bg-transparent m-0 p-0 align-items-center justify-content-center"
          >
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">compare</li>
          </ol>
        </div>
      </div>
    </div>
  </nav>
  <!-- breadcrumb-section end -->
  <!-- product tab start -->
  <section class="compare-section theme1 pt-80 pb-80">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h3 class="title mb-30 pb-25 text-capitalize">compare</h3>
          <div class="table-responsive">
            <?php if(count($compare->items)): ?>
              <table class="table">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">product info</th>
                    <?php $__currentLoopData = $compare->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <th scope="col" class="text-center">
                        <img src="<?php echo e(asset('uploads/product/'.$item['image'])); ?>" alt="img" />
                        <span class="sub-title d-block"
                          ><a href="<?php echo e(route('product', ['id'=>$item['id']])); ?>" ><?php echo e($item['name']); ?></a></span
                        >
                        <a href="#"
                        data-toggle="modal"
                        data-target="#quick-view<?php echo e($item['id']); ?>"
                        class="action btn btn-dark btn--lg">
                          add to cart</a
                        >
                      </th>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">Price</th>
                    <?php $__currentLoopData = $compare->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <td class="text-center">
                        <span class="whish-list-price"> $<?php echo e($item['price']); ?> </span>
                      </td>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tr>
                  <tr>
                    <th scope="row">Description</th>
                    <?php $__currentLoopData = $compare->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <td class="text-center">
                        <p><?php echo e($item['description']); ?></p>
                      </td>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tr>
                  <tr>
                    <th scope="row">Size</th>
                    <?php $__currentLoopData = $compare->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <td class="text-center">
                    <?php $__currentLoopData = $item['size']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sz): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo e($sz['size']); ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </td>  
                      
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tr>
                  <tr>
                    <th scope="row">Action</th>
                    <?php $__currentLoopData = $compare->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <td class="text-center"><a href="<?php echo e(route('removeCompare', ['id'=>$item['id']])); ?>">X</a></td>  
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tr>
                </tbody>
              </table>
            <?php else: ?>
                Không có sản phẩm nào để so sánh
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- product tab end -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front-end.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ADMIN\Desktop\bkap\looki\resources\views/front-end/page/compare.blade.php ENDPATH**/ ?>