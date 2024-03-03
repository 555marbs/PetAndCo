@extends('layouts.app')

@extends('navbars.dashboard-navbar')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
@endsection

@section('content')


    <div class="image-container">
        <img src="/img/cat2.jpg" alt="Changing Image" class="changing-image" id="changingImage">
        <p>Welcome to Pet&Co., where every animal holds a story and every story awaits a happy ending. Here, we believe in creating lasting bonds and enriching lives, both for our furry friends and their future families.</p>
    </div>

    <div class="button-container">
        <div class="button-grid">
            <a href="{{ route('dog') }}">
                <img src="/img/1.png" alt="Button 1">
            </a>

            <a href="{{ route('cat') }}">
                <img src="/img/2.png" alt="Button 2">
            </a>

            <a href="{{ route('bird') }}">
                <img src="/img/3.png" alt="Button 3">
            </a>

            <a href="{{ route('fish') }}">
                <img src="/img/4.png" alt="Button 4">
            </a>
        </div>
    </div>

<script src="{{ asset('js/dashboard.js') }}" @endsection
