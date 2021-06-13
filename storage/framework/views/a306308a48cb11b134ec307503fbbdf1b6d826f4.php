<?php $__env->startSection('title', 'Cart'); ?>

<?php $__env->startSection('main'); ?>
    <!-- breadcrumb-section start -->
<nav class="breadcrumb-section theme1 bg-lighten2 pt-110 pb-110">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section-title text-center">
            <h2 class="title pb-4 text-dark text-capitalize">cart</h2>
          </div>
        </div>
        <div class="col-12">
          <ol
            class="breadcrumb bg-transparent m-0 p-0 align-items-center justify-content-center"
          >
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">cart</li>
          </ol>
        </div>
      </div>
    </div>
  </nav>
  <!-- breadcrumb-section end -->
  <!-- product tab start -->
  <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('carts')->html();
} elseif ($_instance->childHasBeenRendered('xDvbvZU')) {
    $componentId = $_instance->getRenderedChildComponentId('xDvbvZU');
    $componentTag = $_instance->getRenderedChildComponentTagName('xDvbvZU');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('xDvbvZU');
} else {
    $response = \Livewire\Livewire::mount('carts');
    $html = $response->html();
    $_instance->logRenderedChild('xDvbvZU', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front-end.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ADMIN\Desktop\bkap\looki\resources\views/front-end/page/cart.blade.php ENDPATH**/ ?>