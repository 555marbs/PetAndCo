@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
    <div class="login-container">
        <div class="logo-container">
            <img src="{{ asset('img/logo.png') }}" alt="PetCo Logo">
        </div>
        <h2>Welcome back Furparent!</h2>
        <p>Please sign in to continue</p>
        <form action="{{ route('login') }}" method="POST" class="login-form">
            @csrf
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Sign In</button>
        </form>
        <div class="login-footer">
            <p>Don't have an account? <a href="{{ asset ('register')}}">Create an Account</a></p>
        </div>
    </div>
@endsection

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
