<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title> Login Form</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css'>
  <link rel="stylesheet" href="{{asset('public/backend/login')}}/style.css">

</head>
<body style="background-image:url({{URL('/')}}/public/backend/login/images/bg.png), linear-gradient(-45deg, #7dc832, #61a33a, #7dc832, #6ed576); background-size: 100% 100%; background-repeat: no-repeat;">
<!-- partial:index.partial.html -->
<section>
  
  <div class="box">
    
    <div class="square" style="--i:0;"></div>
    <div class="square" style="--i:1;"></div>
    <div class="square" style="--i:2;"></div>
    <div class="square" style="--i:3;"></div>
    <div class="square" style="--i:4;"></div>
    <div class="square" style="--i:5;"></div>
    
   <div class="container"> 
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="form"> 
        <h2>LOGIN to ICONHOMES</h2>
            <div class="inputBx">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            <span>Login</span>
            <i class="fas fa-user-circle"></i>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>
            <div class="inputBx password">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            <span>Password</span>
            <a href="#" class="password-control" onclick="return show_hide_password(this);"></a>
            <i class="fas fa-key"></i>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>
            <label class="remember"><input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>{{ __('Remember Me') }}</label>
            <div class="inputBx">
              {{-- <input type="submit" value="{{ __('Login') }}">  --}}

              <button type="submit" class="inputBx">
                {{ __('Login') }}
              </button>
            </div>
        
        @if (Route::has('password.request'))
        <p>{{ __('Forgot Your Password?') }}  <a href="{{ route('password.request') }}"> Click Here</a></p>
        @endif
        {{-- <p>Don't have an account <a href="#">Sign up</a></p> --}}
        </div>
    </form>
  </div>
    
  </div>
</section>
<!-- partial -->
  <script  src="{{asset('public/backend/login')}}/script.js"></script>

</body>
</html>
