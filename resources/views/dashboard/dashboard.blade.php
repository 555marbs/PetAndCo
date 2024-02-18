@extends('layouts.app')

@extends('navbars.dashboard-navbar')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
@endsection

@section('content')


    <div class="image-container">
        <h1>Pet&Co.</h1><br>
        <img src="/img/cat2.jpg" alt="Changing Image" class="changing-image" id="changingImage">
        <p>Welcome to Pet and Co, where we celebrate the joy and companionship that pets bring to our lives!  Our website is dedicated to providing a one-stop destination for all things related to your beloved furry friends. Explore a wide range of articles, guides, and resources on pet care, health, training, and nutrition. Whether you are a first-time pet owner or an experienced enthusiast, we have valuable insights to enhance your pet parenting journey.</p>
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
