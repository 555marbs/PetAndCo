@extends('layouts.app')

@extends('navbars.dashboard-navbar')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/adoption.css') }}">
@endsection

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($adoptions as $adoption)
                <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset($adoption->image) }}"
                            alt="{{ $adoption->title }}">
                        <div class="card-body">
                            <h2 class="card-title">{{ $adoption->title }}</h2>
                            <h5 class="card-text">{{ $adoption->contact }}</h5>
                            <p class="card-text">{{ $adoption->content }}</p>
                            <div class="dropdown-divider"></div>
                            <!-- Adopt button -->
                            <button class="btn btn-primary" onclick="window.location.href='{{ route('adoption.application.form', ['adoption' => $adoption->id]) }}'" style= "text-align:center">Apply for Adoption</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

<!-- Button at the bottom of the navigation bar -->
<div class="navbar-bottom-button d-flex justify-content-center">
    <a href="{{ route('adoption_create') }}" class="btn btn-primary" style="width: 900px;">Post a Pet For Adoption</a>
</div>
@endsection
