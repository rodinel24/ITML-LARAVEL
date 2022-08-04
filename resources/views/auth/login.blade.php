{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">


                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sign in</title>

    {{-- ICON --}}
    <link rel="icon" href="{{asset('assets/dist/img/itech-icon.png')}}" type="image/icon type">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/fontawesome.min.css')}}">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{asset('/assets/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('/assets/dist/css/adminlte.min.css')}}">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
        <img src="{{asset('assets/dist/img/itech-logo.png')}}" alt="AdminLTE Logo" class="brand-image">
    </div>
    <div class="card-body">

      <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="input-group mb-3">
          <input id="email" type="email" placeholder="Email"class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>


          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
          @error('email')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
         @enderror
        </div>
        <div class="input-group mb-3">
          <input id="password" type="password"placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">


          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
          @error('password')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
         @enderror
        </div>
        {{-- remember me and login --}}
        <div class="row">
            <div class="col-5 ml-4">
                <div class="icheck-primary">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                </div>
            </div>

          <!-- /.col -->
            <div class="col-4">
                <div class="col-8  ">
                    <button type="submit" class="btn btn-primary ">
                    {{ __('Login') }}
                    </button>
                </div>
            </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center mt-2 mb-3">
        <a href={{ route('login.facebook') }} class="btn btn-block btn-info">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href={{ route('login.google') }} class="btn btn-block btn-success">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div>

      <!-- /.social-auth-links -->

      <p class="mb-1">
        @if (Route::has('password.request'))

        <a id="link" href="{{ route('password.request') }}">I forgot my password</a>

        @endif
      </p>
      <p class="mb-0">
        <a id="link" href="{{route('register')}}" class="text-center">Register an account</a>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<script src="{{asset('/assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('/assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('/assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('/assets/dist/js/adminlte.min.js')}}"></script>
</body>
</html>
<style>
    .btn-primary {
        color: #fff;
        background-color: #d30000;
        border-color: #d30000;
        box-shadow: none;
    }

    .btn-primary:hover {
        color: #fff;
        background-color: #890000;
        border-color: #890000;
        box-shadow: none;
    }

    .card-primary.card-outline {
        border-top: 3px solid #d30000;
    }

    #link {
        color: #d30000;
    }

    .login-page, .register-page {
        background-color: #9b0909;
    }
</style>




