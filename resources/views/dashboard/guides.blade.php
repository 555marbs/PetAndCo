@extends('layouts.app')

@extends('navbars.dashboard-navbar')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/guides.css')}}">
@endsection

@section('content')
<div class="container">
    <div class="row">
        @foreach($posts as $post)
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/' . $post->image) }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <div class="dropdown-divider"></div>
                        <p class="card-text">{{ $post->content }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection
