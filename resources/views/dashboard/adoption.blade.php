@extends('layouts.app')

@extends('navbars.dashboard-navbar')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/adoption.css') }}">
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-4">
                <a href="{{ route('adoption_create') }}" class="btn btn-primary" style="width: 100%;">Post a Pet For Adoption</a>
            </div>
            @foreach ($adoptions as $adoption)
                <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('image/'.$adoption->image) }}"
                            alt="{{ $adoption->title }}">
                        <div class="card-body">
                            <h2 class="card-title">{{ $adoption->title }}</h2>
                            <h5 class="card-text">{{ $adoption->contact }}</h5>
                            <p class="card-text">{{ $adoption->content }}</p>
                            <div class="dropdown-divider"></div>
                            <div class="button-container">
                                <button class="btn btn-primary-adopt center-btn" onclick="window.location.href='{{ route('adoption.application.form', ['adoption' => $adoption->id]) }}'">Apply for Adoption</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
