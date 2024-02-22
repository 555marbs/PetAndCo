@extends('layouts.app')

@extends('navbars.dashboard-navbar')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/guides.css')}}">
@endsection

@section('content')
<div class="container">
    <div>
        @foreach($posts as $post)
            <div>
                <img src="{{ asset('storage/guides' . $post->image) }}">
                <h2>{{ $post->title }}</h2>
                <p>{{ $post->content }}</p>
            </div>
        @endforeach
    </div>
</div>
@endsection
