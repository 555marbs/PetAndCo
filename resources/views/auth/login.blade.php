@extends('layouts.app')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
@endsection

<div class="az-signin-wrapper">
    <div class="az-card-signin">
      <a class="az-logo">
        <img src="/img/logo.png" alt="Pet&Co.">
      </a>
      <div class="az-signin-header">
        <h2>Welcome back!</h2>
        <h4>Please sign in to continue</h4>

        <form action="{{ route('login') }}" method="POST">
          @csrf <!-- Generates CSRF token field -->

          <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control" name="email" id="email" placeholder="Enter your email">
          </div><!-- form-group -->
          <div class="form-group">
            <label>Password</label>
            <div class="input-group">
              <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password">
              <div class="input-group-append">
                <span class="input-group-text" id="togglePassword">
                  <i class="fa fa-eye" aria-hidden="true" onclick="togglePasswordVisibility()"></i>
                </span>
              </div>
            </div><!-- input-group -->
          </div><!-- form-group -->
          <button type="submit" class="btn btn-az-primary btn-block">Sign In</button>
        </form>
      </div><!-- az-signin-header -->
      <div class="az-signin-footer">
        <p><a href="{{ route('password.request') }}">Forgot password?</a></p>
        <p>Don't have an account? <a href="{{ route('register') }}">Create an Account</a></p>
      </div><!-- az-signin-footer -->
    </div><!-- az-card-signin -->
  </div><!-- az-signin-wrapper -->

  <script src="{{ asset('js/login.js')}}"></script>

<script>
function togglePasswordVisibility() {
  var passwordInput = document.getElementById("password");
  if (passwordInput.type === "password") {
    passwordInput.type = "text";
  } else {
    passwordInput.type = "password";
  }
}
</script>
