
<?php $__env->startSection('main'); ?>
    <!-- breadcrumb-section start -->
<nav class="breadcrumb-section theme1 bg-lighten2 pt-110 pb-110">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section-title text-center">
            <h2 class="title pb-4 text-dark text-capitalize">Forgot Password</h2>
          </div>
        </div>
        <div class="col-12">
          <ol
            class="breadcrumb bg-transparent m-0 p-0 align-items-center justify-content-center"
          >
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">
              Forgot password
            </li>
          </ol>
        </div>
      </div>
    </div>
  </nav>
  <!-- breadcrumb-section end -->
  
  <!-- login area start -->
  <div class="login-register-area pt-80 pb-80">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 col-md-12 ml-auto mr-auto">
          <div class="login-register-wrapper">
            <?php if (! empty(trim($__env->yieldContent('status')))): ?>
              <div class="alert alert-success" role="alert">
                <?php echo e(Session::get('status')); ?>

              </div>
            <?php endif; ?>
            <?php if($errors->any()): ?>
              <div class="alert alert-danger" role="alert">
                <?php echo e($errors->first()); ?>

              </div>
            <?php endif; ?>
            <div class="tab-content">
              <div id="lg1" class="tab-pane active">
                <div class="login-form-container">
                  <div class="login-register-form">
                    <form action="<?php echo e(url('/reset')); ?>" method="post">
                      <?php echo csrf_field(); ?>
                      <input type="hidden" name="token" value="<?php echo e($token); ?>">
                      <input
                        type="text"
                        name="email"
                        placeholder="Email"
                        value="<?php echo e(request()->get('email')); ?>"
                      />
                      <input
                        type="password"
                        name="password"
                        placeholder="Password"
                      />
                      <input
                        type="password"
                        name="password_confirmation"
                        placeholder="Password Confirmation"
                      />
                      <div class="button-box">
                        <button type="submit" class="btn btn-dark btn--md">
                          <span>Reset Password</span>
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- login area end -->
  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front-end.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ADMIN\Desktop\bkap\looki\resources\views/front-end/page/reset-pass.blade.php ENDPATH**/ ?>