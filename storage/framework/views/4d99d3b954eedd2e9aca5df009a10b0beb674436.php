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
            <div class="tab-content">
              <div id="lg1" class="tab-pane active">
                <div class="login-form-container">
                  <div class="login-register-form">
                    <form action="https://htmldemo.hasthemes.com/looki/looki/assets/php/contact.php" method="post">
                      <input
                        type="text"
                        name="user-name"
                        placeholder="Username"
                      />
                      <input
                        type="password"
                        name="user-password"
                        placeholder="Password"
                      />
                      <div class="button-box">
                        <div class="login-toggle-btn">
                          <input id="remember" type="checkbox" />
                          <label for="remember">Remember me</label>
                          <a href="#">Forgot Password?</a>
                        </div>
                        <button type="submit" class="btn btn-dark btn--md">
                          <span>Login</span>
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <div id="lg2" class="tab-pane">
                <div class="login-form-container">
                  <div class="login-register-form">
                    <form action="https://htmldemo.hasthemes.com/looki/looki/assets/php/contact.php" method="post">
                      <input
                        type="text"
                        name="user-name"
                        placeholder="Username"
                      />
                      <input
                        type="password"
                        name="user-password"
                        placeholder="Password"
                      />
                      <input name="user-email" placeholder="Email" type="email" />
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
<?php echo $__env->make('front-end.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/macbookpro/Desktop/DEVELOPMENT/env/tot-nghiep/resources/views/front-end/page/login.blade.php ENDPATH**/ ?>