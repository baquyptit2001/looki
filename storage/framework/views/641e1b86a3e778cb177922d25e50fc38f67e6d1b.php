<?php $__env->startSection('title', 'Gia nhập thế giới mỹ phẩm Looki'); ?>
<?php $__env->startSection('main'); ?>
    <!-- breadcrumb-section start -->
<nav class="breadcrumb-section theme1 bg-lighten2 pt-110 pb-110">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section-title text-center">
            <h2 class="title pb-4 text-dark text-capitalize">login & register</h2>
          </div>
        </div>
        <div class="col-12">
          <ol
            class="breadcrumb bg-transparent m-0 p-0 align-items-center justify-content-center"
          >
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">
              Log in to your account
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
            <div class="login-register-tab-list nav">
              <a class="active" data-toggle="tab" href="#lg1">
                <h4>login</h4>
              </a>
              <a data-toggle="tab" href="#lg2">
                <h4>register</h4>
              </a>
            </div>
            <?php if(count($errors -> all())): ?>
                <div class="alert alert-danger" role="alert">
                  <?php $__currentLoopData = $errors -> all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo e($error); ?>

                    <?php break; ?>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endif; ?>
            <?php if(Session::get('register_success')): ?>
              <div class="alert alert-success" role="alert">
                <?php echo e(Session::get('register_success')); ?>

              </div>
            <?php endif; ?>
            <?php if(Session::get('login_not_success')): ?>
              <div class="alert alert-danger" role="alert">
                <?php echo e(Session::get('login_not_success')); ?>

              </div>
            <?php endif; ?>
            <div class="tab-content">
              <div id="lg1" class="tab-pane active">
                <div class="login-form-container">
                  <div class="login-register-form">
                    <form action="<?php echo e(url('/login')); ?>" method="post">
                      <?php echo csrf_field(); ?>
                      <input type="hidden" name="link" value="<?php echo e($pre); ?>">
                      <input
                        type="text"
                        name="user_name"
                        placeholder="Username"
                      />
                      <input
                        type="password"
                        name="password"
                        placeholder="Password"
                      />
                      <div class="button-box">
                        <div class="login-toggle-btn">
                          <input id="remember" type="checkbox" />
                          <label for="remember">Remember me</label>
                          <a href="<?php echo e(route('forgot')); ?>">Forgot Password?</a>
                        </div>
                        <button type="submit" class="btn btn-dark btn--md">
                          <span>Login</span>
                        </button>
                      </div>
                      <div class="flex items-center justify-end mt-4">
                        <a class="btn" href="<?php echo e(url('auth/facebook')); ?>"
                            style="background: #3B5499; color: #ffffff; padding: 10px; width: 100%; text-align: center; display: block; border-radius:3px;">
                            Login with Facebook
                        </a>
                    </div>
                    </form>
                  </div>
                </div>
              </div>
              <div id="lg2" class="tab-pane">
                <div class="login-form-container">
                  <div class="login-register-form">
                    <form action="<?php echo e(url('/register')); ?>" method="post">
                      <?php echo csrf_field(); ?>
                      <input
                        type="text"
                        name="user_name"
                        placeholder="Username"
                      />
                      <input
                        type="password"
                        name="password"
                        placeholder="Password"
                      />
                      <input name="email" placeholder="Email" type="email" />
                      <div class="button-box">
                        <button type="submit" class="btn btn-dark btn--md">
                          <span>Register</span>
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
<?php echo $__env->make('front-end.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ADMIN\Desktop\bkap\looki\resources\views/front-end/page/login.blade.php ENDPATH**/ ?>