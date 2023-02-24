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
          <h1 class="display-1 mb-3">Sign In</h1>
          <nav class="d-inline-block" aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Sign In</li>
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
              <h2 class="mb-3 text-start">Welcome back</h2>
              <p class="lead mb-6 text-start">{{ __('Reset Password') }}</p>
              <form class="text-start mb-3" method="POST" action="{{ route('password.update') }}">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">
                
                <div class="form-floating mb-4">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  <label for="email">Email</label>
                </div>
                <div class="form-floating password-field mb-4">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <span class="password-toggle"><i class="uil uil-eye"></i></span>
                    <label for="password">Password</label>
                </div>
                <div class="form-floating password-field mb-4">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
                    <label for="password">{{ __('Confirm Password') }}</label>
                </div>
                
                
                <button type="submit" class="btn btn-primary rounded-pill btn-login w-100 mb-2">{{ __('Reset Password') }}</button>
                
              </form>
              <!-- /form -->
              {{-- <p class="mb-1"><a href="#" class="hover">Forgot Password?</a></p> --}}
              
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
