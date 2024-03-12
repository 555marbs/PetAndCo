@extends('layouts.app')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection


<div class="az-signin-wrapper">
    <div class="az-card-signin">
        <a class="az-logo">
            <img src="/img/logo.png" alt="Pet&Co.">
        </a>
        <div class="az-signin-header">
            <h2>Welcome Fur Parent</h2>
            <p>Register to Adopt a Pet</p>

            <form action="{{ route('register') }}" method="POST">
                @csrf <!-- Generates CSRF token field -->
                <div class="form-group">

                    <input type="text" class="form-control" name="name" id="name"
                        placeholder="Name" maxlength="30" required>
                </div><!-- form-group -->
                <div class="form-group">
                    <input type="email" class="form-control" name="email" id="email"
                        placeholder="Email" maxlength="40" required>
                </div><!-- form-group -->
                <div class="form-group">
                    <div class="input-group">
                        <input type="password" class="form-control" name="password" id="password"
                            placeholder="Create a Password" maxlength="30" required>
                        <div class="input-group-append">
                        </div>
                    </div><!-- input-group -->
                </div><!-- form-group -->
                <div class="form-group">
                    <div class="input-group">
                        <input type="password" class="form-control" name="password_confirmation"
                            id="password_confirmation" placeholder="Confirm Password" maxlength="30" required>
                    </div>
                </div><!-- form-group -->
                <button type="submit" class="btn btn-az-primary btn-block">Register</button>
            </form>
        </div><!-- az-signin-header -->
        <div class="az-signin-footer">
            <p>Already have an account? <a href="{{ route('login') }}">Sign in here</a></p>
        </div><!-- az-signin-footer -->
    </div><!-- az-card-signin -->
</div><!-- az-signin-wrapper -->

<script src="{{ asset('js/register.js') }}"></script>

<script>
    function togglePasswordVisibility() {
        var passwordInput = document.getElementById("password");
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
        } else {
            passwordInput.type = "password";
        }
    }

    function toggleConfirmPasswordVisibility() {
        var confirmPasswordInput = document.getElementById("password_confirmation");
        if (confirmPasswordInput.type === "password") {
            confirmPasswordInput.type = "text";
        } else {
            confirmPasswordInput.type = "password";
        }
    }
</script>
