@extends('layouts.main')

@section('extra-css')
    <style>
        .log{
            background-image: url("{{ asset('dist/assets/img/photos/bg18.png') }}");
        }
        
    </style>
    
@endsection
@section('content')
<section class="wrapper image-wrapper bg-image bg-overlay bg-overlay-light-600 text-white" data-image-src="dist/assets/img/photos/bg18.png">
    <div class="container pt-17 pb-20 pt-md-19 pb-md-21 text-center">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h1 class="display-1 mb-3">{{ __('Sign In') }}</h1>
          <nav class="d-inline-block" aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">{{ __('Home') }}</a></li>
              <li class="breadcrumb-item active" aria-current="page">{{ __('Sign In') }}</li>
            </ol>
          </nav>
          <!-- /nav -->
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->
  <section class="wrapper bg-light">
    <div class="container pb-14 pb-md-16">
      <div class="row">
        <div class="col-lg-7 col-xl-6 col-xxl-5 mx-auto mt-n20">
          <div class="card">
            <div class="card-body p-11 text-center">
              <h2 class="mb-3 text-start">{{ __('Welcome Back') }}</h2>
              <p class="lead mb-6 text-start">{{ __('Fill your email and password to sign in.') }}</p>
              <form class="text-start mb-3" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-floating mb-4">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="{{ __('Email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  <label for="email">{{ __('Email') }}</label>
                </div>
                <div class="form-floating password-field mb-4">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="{{ __('Password') }}" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <span class="password-toggle"><i class="uil uil-eye"></i></span>
                    <label for="password">{{ __('Password') }}</label>
                </div>
                <div class="form-floating password-field mb-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember"> {{ __('Remember Me') }} </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary rounded-pill btn-login w-100 mb-2">{{ __('Sign In') }}</button>
                @if (Route::has('password.request'))
                    <p class="mb-1" style="text-align: center"><a href="{{ route('password.request') }}" class="hover">{{ __('Forgot Your Password?') }}</a></p>
                @endif
              </form>
              <!-- /form -->
              {{-- <p class="mb-1"><a href="#" class="hover">Forgot Password?</a></p> --}}
              <p class="mb-0">{{ __('Don\'t have an account?') }}<a href="/register" class="hover">{{ __('Sign Up') }}</a></p>
              <div class="divider-icon my-4">{{ __('or') }}</div>
              <nav class="nav social justify-content-center text-center">
                <a href="#" class="btn btn-circle btn-sm btn-google"><i class="uil uil-google"></i></a>
                <a href="#" class="btn btn-circle btn-sm btn-facebook-f"><i class="uil uil-facebook-f"></i></a>
                <a href="#" class="btn btn-circle btn-sm btn-twitter"><i class="uil uil-twitter"></i></a>
              </nav>
              <!--/.social -->
            </div>
            <!--/.card-body -->
          </div>
          <!--/.card -->
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->
</div>
@endsection
