@extends('layouts.app')
@extends('navbars.dashboard-navbar')
@section('styles')
    <!-- Your stylesheets -->
    <style>
        .card-body {
            background-color:#B19470;
        }
    </style>
@endsection

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style= "text-align:center">
                    My Profile
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- Form for updating profile -->
                    <form method="POST" action="{{ route('profile.update') }}">
                        @csrf <!-- CSRF protection -->

                        <!-- Spoof the PUT method -->
                        @method('PUT')

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name', auth()->user()->name) }}" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email', auth()->user()->email) }}" required>
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input id="password" type="password" class="form-control" name="password" required autocomplete="new-password">
                        </div>

                        <div class="form-group">
                            <label for="password-confirm">Confirm Password</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>

                        <div class="form-group mb-0" style="text-align:center;">
                            <button type="submit" class="btn btn-primary" style="background-color:#a08a6e;">
                                Update Profile
                            </button>
                        </div>
                    </form>
                    <!-- End of form -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
