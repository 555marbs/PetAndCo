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
                    <div class="card-details">
                        <p class="card-title">{{ $post->title }}</p>
                        <div class="dropdown-divider"></div>
                        <p class="card-text">{{ $post->content }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection
