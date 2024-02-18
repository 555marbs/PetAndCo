@extends('layouts.app')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/login.css') }}" @endsection

<div class="az-signin-wrapper">
    <div class="az-card-signin">
      <h1 class="az-logo">Pet&Co.</h1>
      <div class="az-signin-header">
        <h2>Welcome back!</h2>
        <h4>Please sign in to continue</h4>

        <form action="{{ route('login') }}" method="POST">
          @csrf <!-- Generates CSRF token field -->

          <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control" name="email" placeholder="Enter your email">
          </div><!-- form-group -->
          <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="password" placeholder="Enter your password">
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

