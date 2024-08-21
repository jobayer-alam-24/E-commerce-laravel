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

<input id="email" type="email" placeholder="User Name" name="email" class="@error('email') is-invalid @enderror" />
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
<html lang="en" dir="ltr">
<head>
   <meta charset="utf-8">
   <title>Admin Login</title>
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   <style>
      @import url('https://fonts.googleapis.com/css?family=Raleway:400,700');

      body {
        background: #301d1e; 
        font-family: Raleway, sans-serif;
        color: #666;
      }
      .invalid-feedback{
        display: block;
      }

      .login {
        margin: 20px auto;
        padding: 40px 50px;
        max-width: 300px;
        border-radius: 5px;
        background: #05011d;
        box-shadow: 1px 1px 1px #a00f2f;
      }
      .login input {
        width: 100%;
        display: block;
        box-sizing: border-box;
        margin: 10px 0;
        padding: 14px 12px;
        font-size: 16px;
        border-radius: 2px; 
        font-family: Raleway, sans-serif;
      }

      .login input[type=text],
      .login input[type=password] {
        border: 1px solid #c0c0c0;
        transition: .2s;
      }

      .login input[type=text]:hover,
      .login input[type=password]:hover {
        border-color: #F44336;
        outline: none;
        transition: all .2s ease-in-out;
      } 

      .login input[type=submit] {
        border: none;
        background: #EF5350;
        color: white;
        font-weight: bold;  
        transition: 0.2s;
        margin: 20px 0px;
      }

      .login input[type=submit]:hover {
        background: #F44336;  
      }

      .login h2 {
        margin: 20px 0 0; 
        color: #EF5350;
        font-size: 28px;
      }

      .login p {
        margin-bottom: 40px;
      }

      .login h2,
      .login p,
      .login a {
        text-align: center;    
      }

      .login a {
        text-decoration: none;  
        font-size: .8em;
      }

      .login a:visited {
        color: inherit;
      }

      .login a:hover {
        text-decoration: underline;
      }
   </style>
</head>
<body>
   <form class="login" method="POST" action="{{ route('login') }}">
      @csrf
      <h2>Welcome Back!</h2>
      <p>Please log in</p>
      <input id="email" type="email" placeholder="User Name" name="email" class="@error('email') is-invalid @enderror" />
      @error('email')
      <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
      </span>
      @enderror
      <input type="password" id="password" placeholder="Password" name="password" class="@error('password') is-invalid @enderror" />
      @error('password')
      <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
      </span>
      @enderror
      <input type="submit" value="Log In" />
   </form>
</body>
</html>
