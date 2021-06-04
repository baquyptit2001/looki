@extends('front-end.layout.master')
@section('title', 'Gia nhập thế giới mỹ phẩm Looki')
@section('main')
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
            @if (count($errors -> all()))
                <div class="alert alert-danger" role="alert">
                  @foreach ($errors -> all() as $error)
                    {{$error}}
                    @break
                  @endforeach
                </div>
            @endif
            @if (Session::get('register_success'))
              <div class="alert alert-success" role="alert">
                {{Session::get('register_success')}}
              </div>
            @endif
            @if (Session::get('login_not_success'))
              <div class="alert alert-danger" role="alert">
                {{Session::get('login_not_success')}}
              </div>
            @endif
            <div class="tab-content">
              <div id="lg1" class="tab-pane active">
                <div class="login-form-container">
                  <div class="login-register-form">
                    <form action="{{ url('/login') }}" method="post">
                      @csrf
                      <input type="hidden" name="link" value="{{ $pre }}">
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
                          <a href="{{ route('forgot') }}">Forgot Password?</a>
                        </div>
                        <button type="submit" class="btn btn-dark btn--md">
                          <span>Login</span>
                        </button>
                      </div>
                      <div class="flex items-center justify-end mt-4">
                        <a class="btn" href="{{ url('auth/facebook') }}"
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
                    <form action="{{ url('/register') }}" method="post">
                      @csrf
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
  
@endsection