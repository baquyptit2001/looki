<?php $__env->startSection('title', 'Checkout'); ?>

<?php $__env->startSection('main'); ?>
    <!-- breadcrumb-section start -->
<nav class="breadcrumb-section theme1 bg-lighten2 pt-110 pb-110">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section-title text-center">
            <h2 class="title pb-4 text-dark text-capitalize">check out</h2>
          </div>
        </div>
        <div class="col-12">
          <ol
            class="breadcrumb bg-transparent m-0 p-0 align-items-center justify-content-center"
          >
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">check out</li>
          </ol>
        </div>
      </div>
    </div>
  </nav>
  <!-- breadcrumb-section end -->

  <!-- checkout area start -->
  <div class="check-out-section pt-80 pb-80">
    <div class="container">
      <form action="<?php echo e(route('cartCheckout')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="row">
          <div class="col-lg-7">
            <div class="billing-info-wrap">
              <h3 class="title">Billing Details</h3>
              <?php if(count($errors -> all())): ?>
                  <div class="alert alert-danger" role="alert">
                    <?php $__currentLoopData = $errors -> all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <?php echo e($error); ?>

                      <?php break; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </div>
              <?php endif; ?>
                <div class="row">
                  <div class="col-12">
                    <div class="billing-info mb-20px">
                      <label>First Name</label>
                      <input type="text" name="cus_name" value="<?php echo e(auth()->user()->first_name.' '.auth()->user()->last_name); ?>"/>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="billing-info mb-20px">
                      <label>Address</label>
                      <input type="text" name="address" />
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="billing-info mb-20px">
                      <label>Phone</label>
                      <input type="text" name="phone" value="<?php echo e(auth()->user()->phone_number); ?>"/>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="billing-info mb-20px">
                      <label>Email Address</label>
                      <input type="text" name="email" value="<?php echo e(auth()->user()->email); ?>" />
                    </div>
                  </div>
                </div>
              <div class="additional-info-wrap">
                <h4 class="title">Additional information</h4>
                <div class="additional-info">
                  <label class="mb-2">Order notes</label>
                  <textarea
                    placeholder="Notes about your order, e.g. special notes for delivery. "
                    name="note"
                  ></textarea>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-5 mt-4 mt-lg-0">
              <div class="your-order-area">
                <h3 class="title">Your order</h3>
                <div class="your-order-wrap gray-bg-4">
                  <div class="your-order-product-info">
                    <div class="your-order-top">
                      <ul>
                        <li>Product</li>
                        <li>Total</li>
                      </ul>
                    </div>
                    <div class="your-order-middle">
                      <ul>
                        <?php
                            $total=0;
                        ?>
                        <?php $__currentLoopData = $cart->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <li>
                            <span class="order-middle-left"><?php echo e($item['name'].' '.$item['size']); ?></span>
                            <span class="order-price"><?php echo e('$ '.$item['price']*$item['quantity']); ?> </span>
                          </li>
                          <?php
                              $total += $item['quantity']*$item['price'];
                          ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <li>
                      </ul>
                    </div>
                    <div class="your-order-bottom">
                      <ul>
                        <li class="your-order-shipping">Shipping</li>
                        <li>Free shipping</li>
                      </ul>
                    </div>
                    <div class="your-order-total">
                      <ul>
                        <li class="order-total">Total</li>
                        <li>$<?php echo e($cart->total_price()); ?></li>
                        
                      </ul>
                    </div>
                  </div>
                  <div class="payment-method">
                    <div class="payment-accordion element-mrg">
                      <div class="panel-group" id="accordion">
                        <div class="panel payment-accordion">
                          <div class="panel-heading" id="method-one">
                            <h4 class="panel-title">
                              <a
                                data-toggle="collapse"
                                data-parent="#accordion"
                                href="#method1"
                              >
                                Direct bank transfer
                              </a>
                            </h4>
                          </div>
                          <div id="method1" class="panel-collapse collapse show">
                            <div class="panel-body">
                              <p>
                                Please send a check to Store Name, Store Street, Store
                                Town, Store State / County, Store Postcode.
                              </p>
                            </div>
                          </div>
                        </div>
                        <div class="panel payment-accordion">
                          <div class="panel-heading" id="method-two">
                            <h4 class="panel-title">
                              <a
                                class="collapsed"
                                data-toggle="collapse"
                                data-parent="#accordion"
                                href="#method2"
                              >
                                Check payments
                              </a>
                            </h4>
                          </div>
                          <div id="method2" class="panel-collapse collapse">
                            <div class="panel-body">
                              <p>
                                Please send a check to Store Name, Store Street, Store
                                Town, Store State / County, Store Postcode.
                              </p>
                            </div>
                          </div>
                        </div>
                        <div class="panel payment-accordion">
                          <div class="panel-heading" id="method-three">
                            <h4 class="panel-title">
                              <a
                                class="collapsed"
                                data-toggle="collapse"
                                data-parent="#accordion"
                                href="#method3"
                              >
                                Cash on delivery
                              </a>
                            </h4>
                          </div>
                          <div id="method3" class="panel-collapse collapse">
                            <div class="panel-body">
                              <p>
                                Please send a check to Store Name, Store Street, Store
                                Town, Store State / County, Store Postcode.
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="Place-order mt-25">
                  <button type="submit" class="btn btn--xl btn-block btn-primary" href="#"
                    >Place Order</button
                  >
                </div>
              </div>
          </div>
        </div>
      </form>
    </div>
  </div>
  <!-- checkout area end -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front-end.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ADMIN\Desktop\bkap\looki\resources\views/front-end/page/checkout.blade.php ENDPATH**/ ?>