@extends('layouts.mainAuth')

@section('content')
<div class="col-lg-5">
  <div class="card">
      <div class="card-body p-4">
          <div class="p-2">
              <h5 class="mb-5 text-center">Sign in to continue to Apaxy.</h5>
              <form class="form-horizontal" method="POST" action="{{ route('administration.login') }}">

                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group mb-4">
                            <label for="email">Email</label>
                            <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <label for="userpassword">Password</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                
                        <div class="row">
                            <div class="col-md-6">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} class="custom-control-input" >
                                    <label class="custom-control-label" for="remember">Remember me</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-right mt-3 mt-md-0">
                                    {{-- <a href="auth-recoverpw.html" class="text-muted"><i class="mdi mdi-lock"></i> Forgot your password?</a> --}}
                                </div>
                            </div>
                        </div>
                        <div class="mt-4">
                            <button class="btn btn-success btn-block waves-effect waves-light" type="submit">Log In</button>
                        </div>
                        <div class="mt-4 text-center">
                            {{-- <a href="auth-register.html" class="text-muted"><i class="mdi mdi-account-circle mr-1"></i> Create an account</a> --}}
                        </div>
                    </div>
                </div>
              </form>
          </div>
      </div>
  </div>
</div>
@endsection
